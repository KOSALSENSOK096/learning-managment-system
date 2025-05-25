# 🤝 Contributing to University LMS

## 👋 Welcome

First off, thank you for considering contributing to University LMS! It's people like you that make University LMS such a great tool.

## 🎯 Ways to Contribute

### 🐛 Reporting Bugs
1. Check if the bug has already been reported in the [Issues](https://github.com/KOSALSENSOK096/learning-managment-system/issues)
2. If not, create a new issue using the bug report template
3. Include as much relevant information as possible

### 💡 Suggesting Enhancements
1. First, read the [documentation](https://github.com/KOSALSENSOK096/learning-managment-system/wiki)
2. Check if the enhancement has already been suggested
3. Create a new issue using the feature request template

### 🔧 Pull Requests

1. Fork the repo
2. Clone your fork
3. Create a new branch (`git checkout -b feature/AmazingFeature`)
4. Make your changes
5. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
6. Push to the branch (`git push origin feature/AmazingFeature`)
7. Open a Pull Request

## 💻 Development Setup

1. Install dependencies:
```bash
composer install
npm install
```

2. Set up your environment:
```bash
cp .env.example .env
php artisan key:generate
```

3. Run migrations:
```bash
php artisan migrate
```

4. Start the development server:
```bash
php artisan serve
```

## 📝 Coding Guidelines

### PHP
- Follow PSR-12 coding standard
- Use type hints where possible
- Write descriptive variable and function names
- Comment complex logic
- Write tests for new features

### JavaScript
- Use ES6+ features
- Follow Vue.js style guide
- Use async/await over promises
- Write unit tests for components

### CSS
- Use BEM naming convention
- Write responsive styles
- Minimize nesting
- Use variables for colors and spacing

## 🧪 Testing

- Run PHP tests: `php artisan test`
- Run JavaScript tests: `npm run test`
- Ensure all tests pass before submitting PR
- Add new tests for new features

## 📚 Documentation

- Update README.md with new features
- Document new endpoints in API documentation
- Add JSDoc comments for JavaScript functions
- Update wiki pages if necessary

## 🎨 Design Guidelines

### Colors
```scss
$primary: #4a90e2;
$secondary: #50e3c2;
$accent: #b8e986;
$error: #ff5252;
$warning: #ffc107;
$info: #2196f3;
$success: #4caf50;
```

### Typography
- Use system font stack
- Headings: 'Inter', sans-serif
- Body: 'Roboto', sans-serif

### Components
- Follow Material Design principles
- Use consistent spacing (8px grid)
- Ensure accessibility (WCAG 2.1)
- Support dark mode

## 🌟 Recognition

Contributors will be:
- Listed in CONTRIBUTORS.md
- Mentioned in release notes
- Given credit in documentation

## ❓ Questions?

Feel free to:
- Join our [Discord](https://discord.gg/your-server)
- Check our [FAQ](https://github.com/KOSALSENSOK096/learning-managment-system/wiki/FAQ)
- Ask in [Discussions](https://github.com/KOSALSENSOK096/learning-managment-system/discussions)

Thank you for your contributions! 🙏 