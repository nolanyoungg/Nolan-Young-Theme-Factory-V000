Set-StrictMode -Version Latest
$ErrorActionPreference = "Stop"

function Fail($Message) {
  Write-Error $Message
  exit 1
}

$ScriptDir = Split-Path -Parent $MyInvocation.MyCommand.Path
$RootDir = Resolve-Path (Join-Path $ScriptDir "..")
Set-Location $RootDir

$Bash = Get-Command bash -ErrorAction SilentlyContinue
if (-not $Bash) {
  Fail "bash is required to run the primary workflow from PowerShell. Install Git Bash, WSL, or use Bash directly."
}

Write-Host "Nolan Young Theme Factory"
Write-Host "Delegating to scripts/run-hybrid-theme-workflow.sh"

& bash "scripts/run-hybrid-theme-workflow.sh"
if ($LASTEXITCODE -ne 0) {
  exit $LASTEXITCODE
}
