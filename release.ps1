# PowerShell Release Script
param (
    [Parameter(Mandatory=$true)]
    [string]$version,
    [string]$message = "Release version $version"
)

# Colors for output
$colors = @{
    Green = [System.ConsoleColor]::Green
    Blue = [System.ConsoleColor]::Cyan
    Yellow = [System.ConsoleColor]::Yellow
}

function Write-ColorOutput($color, $message) {
    Write-Host $message -ForegroundColor $color
}

# Display header
Write-ColorOutput $colors.Blue "🚀 Creating Release v$version..."

# Update version file
Write-ColorOutput $colors.Green "📝 Updating VERSION file..."
$version | Out-File -FilePath "VERSION" -NoNewline

# Update changelog
Write-ColorOutput $colors.Green "📋 Updating CHANGELOG.md..."
$date = Get-Date -Format "yyyy-MM-dd"
$changelogEntry = @"

## [$version] - $date

### ✨ What's New
$message

"@
$changelog = Get-Content "CHANGELOG.md" -Raw
$changelog = $changelog.Insert($changelog.IndexOf("## "), $changelogEntry)
$changelog | Out-File "CHANGELOG.md" -NoNewline

# Git operations
Write-ColorOutput $colors.Green "📦 Adding changes to Git..."
git add VERSION CHANGELOG.md

Write-ColorOutput $colors.Green "💬 Committing changes..."
git commit -m "🔖 Release version $version"

Write-ColorOutput $colors.Green "🏷️ Creating Git tag..."
git tag -a "v$version" -m "Version $version"

Write-ColorOutput $colors.Green "📤 Pushing to GitHub..."
git push origin main --tags

Write-ColorOutput $colors.Blue "✅ Release v$version complete!" 