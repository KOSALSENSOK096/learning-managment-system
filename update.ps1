# PowerShell Update Script

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
Write-ColorOutput $colors.Blue "🚀 Updating GitHub Repository..."

# Get current version
$currentVersion = Get-Content "VERSION"
Write-ColorOutput $colors.Yellow "📌 Current version: $currentVersion"

# Add all changes
Write-ColorOutput $colors.Green "📦 Adding changes..."
git add .

# Get status and modified files
$status = git status --porcelain
if ($status) {
    $modifiedFiles = $status | ForEach-Object { $_.Substring(3) }
    
    # Create commit message
    $commitMessage = @"
✨ Enhanced UI/UX (v$currentVersion):

Modified files:
$($modifiedFiles -join "`n")

Changes include:
- UI/UX improvements
- Code optimizations
- Documentation updates
- Style enhancements
"@

    # Commit changes
    Write-ColorOutput $colors.Green "💬 Committing changes..."
    git commit -m $commitMessage

    # Push to GitHub
    Write-ColorOutput $colors.Green "📤 Pushing to GitHub..."
    git push origin main

    Write-ColorOutput $colors.Blue "✅ Update complete!"
} else {
    Write-ColorOutput $colors.Yellow "📝 No changes to commit"
} 