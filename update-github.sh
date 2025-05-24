#!/bin/bash

# Colors for output
GREEN='\033[0;32m'
BLUE='\033[0;34m'
NC='\033[0m' # No Color

echo -e "${BLUE}🚀 Updating GitHub Repository...${NC}"

# Add all changes
echo -e "${GREEN}📦 Adding changes...${NC}"
git add .

# Commit with a descriptive message
echo -e "${GREEN}💬 Committing changes...${NC}"
git commit -m "✨ Enhanced UI/UX:
- Added beautiful 404 error page with animations
- Improved QR code generator with multiple styles
- Updated documentation and badges
- Added cool icons and effects
- Enhanced overall styling"

# Push to GitHub
echo -e "${GREEN}📤 Pushing to GitHub...${NC}"
git push origin main

echo -e "${BLUE}✅ Update complete!${NC}" 