#!/usr/bin/env bash
set -Eeuo pipefail

failures=0

fail() {
  printf 'FAIL: %s\n' "$*" >&2
  failures=$((failures + 1))
}

script_dir="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
root_dir="$(cd "$script_dir/.." && pwd)"
cd "$root_dir"

theme_slug="${1:-}"
[ -n "$theme_slug" ] || { printf 'Usage: bash scripts/validate-security.sh <theme-slug>\n' >&2; exit 2; }

targets=()
[ -d "wp-content/themes/$theme_slug" ] && targets+=("wp-content/themes/$theme_slug")
[ -d "docs/themes/$theme_slug" ] && targets+=("docs/themes/$theme_slug")

[ "${#targets[@]}" -gt 0 ] || fail "No theme or preview directory found for $theme_slug"

scan_pattern() {
  local label="$1"
  local pattern="$2"
  if grep -R -I -n -E "$pattern" "${targets[@]}" \
    --include='*.php' --include='*.html' --include='*.css' --include='*.js' --include='*.md' --include='*.json' --include='*.env' >/tmp/security-scan.$$ 2>/dev/null; then
    printf '%s\n' "$label" >&2
    cat /tmp/security-scan.$$ >&2
    fail "$label"
  fi
  rm -f /tmp/security-scan.$$
}

scan_pattern "OpenAI API key reference found" 'OPENAI_API_KEY'
scan_pattern "Secret-like sk key found" 'sk-[A-Za-z0-9_-]{20,}'
scan_pattern "Private key material found" 'BEGIN (RSA |OPENSSH |EC |DSA |PRIVATE )?PRIVATE KEY|ssh-rsa '
scan_pattern "Unsafe PHP execution function found" 'eval[[:space:]]*\(|shell_exec[[:space:]]*\(|passthru[[:space:]]*\(|system[[:space:]]*\('
scan_pattern "Suspicious base64_decode usage found" 'base64_decode[[:space:]]*\('
scan_pattern "Remote runtime dependency found" 'src=["'\'']https?://|href=["'\'']https?://|//cdn\.|cdnjs|jsdelivr|unpkg|googleapis|gstatic|fonts\.google'
scan_pattern "Credential-like raw string found" 'password[[:space:]_-]*[:=][[:space:]]*["'\''][^"'\'']{4,}|token[[:space:]_-]*[:=][[:space:]]*["'\''][^"'\'']{8,}|secret[[:space:]_-]*[:=][[:space:]]*["'\''][^"'\'']{8,}'

if find "${targets[@]}" -type f -name '.env' -size +0c 2>/dev/null | grep -q .; then
  find "${targets[@]}" -type f -name '.env' -size +0c >&2
  fail "Filled .env file found"
fi

if [ "$failures" -gt 0 ]; then
  printf 'Security validation failed with %s issue(s).\n' "$failures" >&2
  exit 1
fi

printf 'Security validation passed for %s.\n' "$theme_slug"
