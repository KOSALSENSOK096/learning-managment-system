# Script to update the University Learning Management System

# Function to display colorful output
function Write-ColorOutput {
    param (
        [ConsoleColor]$ForegroundColor = [ConsoleColor]::White,
        [string]$Message
    )
    Write-Host $Message -ForegroundColor $ForegroundColor
}

# Function to check for composer
function Test-Composer {
    try {
        composer --version | Out-Null
        return $true
    } catch {
        return $false
    }
}

# Function to check for npm
function Test-Npm {
    try {
        npm --version | Out-Null
        return $true
    } catch {
        return $false
    }
}

# Main update process
try {
    Write-ColorOutput Green "🔄 Starting update process..."

    # Pull latest changes
    Write-ColorOutput Cyan "📥 Pulling latest changes from repository..."
    git pull origin main

    # Get current version
    $currentVersion = Get-Content "VERSION" -Raw
    Write-ColorOutput Yellow "📌 Current version: $currentVersion"

    # Check for composer
    if (Test-Composer) {
        Write-ColorOutput Cyan "🔧 Updating Composer dependencies..."
        composer install --no-interaction
        composer update --no-interaction
    } else {
        Write-ColorOutput Red "❌ Composer not found. Please install Composer first."
        exit 1
    }

    # Check for npm
    if (Test-Npm) {
        Write-ColorOutput Cyan "📦 Updating NPM packages..."
        npm install
        npm update
    } else {
        Write-ColorOutput Red "❌ NPM not found. Please install Node.js and NPM first."
        exit 1
    }

    # Clear caches
    Write-ColorOutput Cyan "🧹 Clearing application caches..."
    php artisan cache:clear
    php artisan config:clear
    php artisan view:clear
    php artisan route:clear

    # Run migrations
    Write-ColorOutput Cyan "🔄 Running database migrations..."
    php artisan migrate --force

    # Update assets
    Write-ColorOutput Cyan "🎨 Building assets..."
    npm run build

    # Get new version
    $newVersion = Get-Content "VERSION" -Raw
    Write-ColorOutput Green "✅ Update complete!"
    Write-ColorOutput Yellow "📌 Updated from version $currentVersion to $newVersion"

    Write-ColorOutput Magenta @"
    
🎉 System successfully updated! 

Next steps:
1. Check the CHANGELOG.md for new features and changes
2. Test the system functionality
3. Report any issues on GitHub

For support:
- GitHub: https://github.com/KOSALSENSOK096
- Telegram: @kosalsensok06
- Email: kosalsensok065@gmail.com

Thank you for using our University Learning Management System!
"@

} catch {
    Write-ColorOutput Red "❌ Error during update process: $_"
    exit 1
} 