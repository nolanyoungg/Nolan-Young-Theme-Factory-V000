Set-StrictMode -Version Latest
$ErrorActionPreference = "Stop"

function Fail($Message) {
  Write-Error $Message
  exit 1
}

$ScriptDir = Split-Path -Parent $MyInvocation.MyCommand.Path
$RootDir = Resolve-Path (Join-Path $ScriptDir "..")
Set-Location $RootDir

$ThemeSlug = $args[0]
if ([string]::IsNullOrWhiteSpace($ThemeSlug)) {
  Fail "Usage: pwsh scripts/package-theme.ps1 <theme-slug>"
}

if ($ThemeSlug -notmatch '^nolan-showcase-theme-[0-9][0-9]$') {
  Fail "Invalid theme slug: $ThemeSlug"
}

$ThemeDir = Join-Path "wp-content/themes" $ThemeSlug
$ZipDir = "dist/zipped-themes"
$ZipPath = Join-Path $ZipDir "$ThemeSlug.zip"

if (-not (Test-Path $ThemeDir -PathType Container)) {
  Fail "Theme directory is missing: $ThemeDir"
}

New-Item -ItemType Directory -Force -Path $ZipDir | Out-Null
if (Test-Path $ZipPath) {
  Remove-Item $ZipPath -Force
}

Add-Type -AssemblyName System.IO.Compression.FileSystem
$FullThemeDir = (Resolve-Path $ThemeDir).Path
$FullZipPath = Join-Path (Resolve-Path $ZipDir).Path "$ThemeSlug.zip"
$Zip = [System.IO.Compression.ZipFile]::Open($FullZipPath, [System.IO.Compression.ZipArchiveMode]::Create)

try {
  Get-ChildItem -Path $FullThemeDir -Recurse -File | ForEach-Object {
    $FullName = $_.FullName
    $RelativeInsideTheme = $FullName.Substring($FullThemeDir.Length).TrimStart([IO.Path]::DirectorySeparatorChar, [IO.Path]::AltDirectorySeparatorChar)
    $EntryName = ($ThemeSlug + "/" + $RelativeInsideTheme).Replace("\", "/")

    if ($EntryName -match '/node_modules/' -or $EntryName -match '/\.git/' -or $EntryName -match '\.DS_Store$' -or $EntryName -match '\.map$' -or $EntryName -match '/reports/' -or $EntryName -match '/tmp/') {
      return
    }

    [System.IO.Compression.ZipFileExtensions]::CreateEntryFromFile($Zip, $FullName, $EntryName) | Out-Null
  }
}
finally {
  $Zip.Dispose()
}

if (-not (Test-Path $ZipPath)) {
  Fail "ZIP was not created: $ZipPath"
}

$Size = (Get-Item $ZipPath).Length
Write-Host "Created $ZipPath ($Size bytes)"
