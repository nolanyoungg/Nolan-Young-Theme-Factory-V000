#!/usr/bin/env bash
set -Eeuo pipefail

fail() {
  printf 'ERROR: %s\n' "$*" >&2
  exit 1
}

append_file() {
  local output="$1"
  local label="$2"
  local file="$3"
  [ -f "$file" ] || fail "Required prompt component missing: $file"
  {
    printf '\n\n## %s\n\n' "$label"
    sed -n '1,$p' "$file"
  } >> "$output"
}

parse_file_blocks() {
  local raw_file="$1"
  local require_blocks="$2"

  perl -MFile::Path=make_path -0e '
    my ($raw, $required) = @ARGV;
    open my $fh, "<:raw", $raw or die "Cannot read $raw: $!\n";
    local $/;
    my $text = <$fh>;
    my $count = 0;
    while ($text =~ /^---FILE: ([^\r\n]+)---\r?\n(.*?)^---END FILE---[ \t]*\r?$/gms) {
      my ($path, $body) = ($1, $2);
      die "Rejected absolute path: $path\n" if $path =~ m{^/};
      die "Rejected unsafe path: $path\n" if $path =~ m{(^|/)\.\.(/|$)};
      my @parts = split m{/}, $path;
      pop @parts;
      my $dir = join "/", @parts;
      make_path($dir) if length $dir;
      open my $out, ">:raw", $path or die "Cannot write $path: $!\n";
      print {$out} $body;
      close $out;
      $count++;
    }
    die "No file blocks found in required file-writing stage\n" if $required eq "required" && $count == 0;
    print "Applied $count file block(s)\n";
  ' "$raw_file" "$require_blocks"
}

script_dir="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
root_dir="$(cd "$script_dir/.." && pwd)"
cd "$root_dir"

stage="${1:-}"
theme_slug="${2:-}"
prompt_file="${3:-}"
ollama_model="${4:-}"

[ -n "$stage" ] && [ -n "$theme_slug" ] && [ -n "$prompt_file" ] && [ -n "$ollama_model" ] || fail "Usage: bash scripts/run-ollama-stage.sh <stage> <theme-slug> <prompt-file> <ollama-model>"
[[ "$theme_slug" =~ ^nolan-showcase-theme-[0-9][0-9]$ ]] || fail "Invalid theme slug: $theme_slug"
[ -f "$prompt_file" ] || fail "Prompt file not found: $prompt_file"
command -v ollama >/dev/null 2>&1 || fail "ollama command not found."
ollama list >/dev/null || fail "Ollama is not responding. Start Ollama and rerun."

run_dir="reports/runs/$theme_slug"
mkdir -p "$run_dir"
assembled="$run_dir/ollama-$stage-prompt.md"
raw="$run_dir/ollama-$stage-raw.md"
: > "$assembled"

case "$stage" in
  planner)
    append_file "$assembled" "AGENTS.md" "AGENTS.md"
    append_file "$assembled" "Orchestrator" "agents/00-orchestrator.md"
    append_file "$assembled" "Planner" "agents/01-planner.md"
    append_file "$assembled" "Global Instructions" "instructions/00-global-instructions.md"
    append_file "$assembled" "Planning Instructions" "instructions/01-planning-instructions.md"
    append_file "$assembled" "Theme Versioning" "contracts/theme-versioning.md"
    append_file "$assembled" "Required Theme Structure" "contracts/required-theme-structure.md"
    {
      printf '\n\n## Task\n\nCreate the planning report for `%s`. Do not output file blocks.\n' "$theme_slug"
      printf '\n\n## User Prompt Verbatim\n\n'
      sed -n '1,$p' "$prompt_file"
    } >> "$assembled"
    ;;
  builder)
    append_file "$assembled" "AGENTS.md" "AGENTS.md"
    append_file "$assembled" "Orchestrator" "agents/00-orchestrator.md"
    append_file "$assembled" "Theme Architect" "agents/02-theme-architect.md"
    append_file "$assembled" "WordPress Builder" "agents/03-wordpress-builder.md"
    append_file "$assembled" "Design Director" "agents/04-design-director.md"
    append_file "$assembled" "Content Writer" "agents/05-content-writer.md"
    append_file "$assembled" "Global Instructions" "instructions/00-global-instructions.md"
    append_file "$assembled" "Theme Scaffolding Instructions" "instructions/02-theme-scaffolding-instructions.md"
    append_file "$assembled" "WordPress Build Instructions" "instructions/03-wordpress-build-instructions.md"
    append_file "$assembled" "Design Style Instructions" "instructions/04-design-style-instructions.md"
    append_file "$assembled" "Content Instructions" "instructions/05-content-instructions.md"
    append_file "$assembled" "Required Theme Structure" "contracts/required-theme-structure.md"
    append_file "$assembled" "File Block Format" "contracts/file-block-format.md"
    [ -f "$run_dir/plan.md" ] && append_file "$assembled" "Plan" "$run_dir/plan.md"
    {
      printf '\n\n## Task\n\nCreate complete file blocks for `wp-content/themes/%s/`.\n' "$theme_slug"
      printf '\n\n## User Prompt Verbatim\n\n'
      sed -n '1,$p' "$prompt_file"
    } >> "$assembled"
    ;;
  preview)
    append_file "$assembled" "AGENTS.md" "AGENTS.md"
    append_file "$assembled" "Orchestrator" "agents/00-orchestrator.md"
    append_file "$assembled" "Static Preview Builder" "agents/06-static-preview-builder.md"
    append_file "$assembled" "Global Instructions" "instructions/00-global-instructions.md"
    append_file "$assembled" "Static Preview Instructions" "instructions/06-static-preview-instructions.md"
    append_file "$assembled" "Required Preview Structure" "contracts/required-preview-structure.md"
    append_file "$assembled" "File Block Format" "contracts/file-block-format.md"
    [ -f "$run_dir/plan.md" ] && append_file "$assembled" "Plan" "$run_dir/plan.md"
    {
      printf '\n\n## Generated Theme File Summary\n\n'
      find "wp-content/themes/$theme_slug" -maxdepth 4 -type f 2>/dev/null | sort | sed -n '1,220p'
      printf '\n\n## Task\n\nCreate preview file blocks for `docs/themes/%s/` and update `docs/index.html`.\n' "$theme_slug"
      printf '\n\n## User Prompt Verbatim\n\n'
      sed -n '1,$p' "$prompt_file"
    } >> "$assembled"
    ;;
  review-fix)
    append_file "$assembled" "AGENTS.md" "AGENTS.md"
    append_file "$assembled" "Orchestrator" "agents/00-orchestrator.md"
    append_file "$assembled" "Security Reviewer" "agents/07-security-reviewer.md"
    append_file "$assembled" "Quality Reviewer" "agents/08-quality-reviewer.md"
    append_file "$assembled" "Fixer" "agents/09-fixer.md"
    append_file "$assembled" "Release Manager" "agents/10-release-manager.md"
    append_file "$assembled" "Global Instructions" "instructions/00-global-instructions.md"
    append_file "$assembled" "Security Instructions" "instructions/07-security-instructions.md"
    append_file "$assembled" "Review Instructions" "instructions/08-review-instructions.md"
    append_file "$assembled" "Fix Instructions" "instructions/09-fix-instructions.md"
    append_file "$assembled" "Release Instructions" "instructions/10-release-instructions.md"
    append_file "$assembled" "Security Rules" "contracts/security-rules.md"
    append_file "$assembled" "Quality Rules" "contracts/quality-rules.md"
    append_file "$assembled" "Release Artifact Rules" "contracts/release-artifact-rules.md"
    [ -f "$run_dir/validation-latest.txt" ] && append_file "$assembled" "Validation Output" "$run_dir/validation-latest.txt"
    [ -f "$run_dir/plan.md" ] && append_file "$assembled" "Plan" "$run_dir/plan.md"
    {
      printf '\n\n## Task\n\nReview and fix `%s`. Output `reports/runs/%s/local-review.md` content as Markdown, plus optional file blocks for fixes.\n' "$theme_slug" "$theme_slug"
      printf '\n\n## User Prompt Verbatim\n\n'
      sed -n '1,$p' "$prompt_file"
    } >> "$assembled"
    ;;
  *)
    fail "Unsupported Ollama stage: $stage"
    ;;
esac

printf 'Running Ollama stage %s with model %s...\n' "$stage" "$ollama_model"
ollama run "$ollama_model" < "$assembled" | tee "$raw"

case "$stage" in
  planner)
    cp "$raw" "$run_dir/plan.md"
    ;;
  builder|preview)
    parse_file_blocks "$raw" "required"
    ;;
  review-fix)
    cp "$raw" "$run_dir/local-review.md"
    parse_file_blocks "$raw" "optional"
    ;;
esac
