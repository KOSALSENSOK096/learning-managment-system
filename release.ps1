# PowerShell Release Script
param (
    [Parameter(Mandatory=$true)]
    [string]$version,
    [Parameter(Mandatory=$true)]
    [string]$message
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

# Function to update version file
function Update-VersionFile {
    param (
        [string]$newVersion
    )
    $newVersion | Out-File -FilePath "VERSION" -NoNewline -Encoding utf8
    Write-Host "Updated VERSION file to $newVersion"
}

# Function to update changelog
function Update-Changelog {
    param (
        [string]$version,
        [string]$message
    )
    $date = Get-Date -Format "yyyy-MM-dd"
    $entry = @"

## [$version] - $date

### Changes
$message

"@
    $content = Get-Content "CHANGELOG.md" -Raw
    $content = $content.Insert($content.IndexOf("`n"), $entry)
    $content | Out-File -FilePath "CHANGELOG.md" -NoNewline -Encoding utf8
    Write-Host "Updated CHANGELOG.md with new version $version"
}

# Main release process
try {
    # Validate version format
    if ($version -notmatch '^\d+\.\d+\.\d+$') {
        throw "Invalid version format. Please use semantic versioning (e.g., 1.0.0)"
    }

    # Update version file
    Update-VersionFile -newVersion $version

    # Update changelog
    Update-Changelog -version $version -message $message

    # Git commands
    git add VERSION CHANGELOG.md
    git commit -m "Release version $version"
    git tag -a "v$version" -m "$message"
    
    Write-Host "Successfully prepared release $version"
    Write-Host "Next steps:"
    Write-Host "1. Review the changes"
    Write-Host "2. Push the changes: git push origin main --tags"
} catch {
    Write-Error "Error during release process: $_"
    exit 1
}

Write-ColorOutput $colors.Blue "✅ Release v$version complete!" 