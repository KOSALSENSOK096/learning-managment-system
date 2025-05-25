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

## Code of Conduct

This project and everyone participating in it is governed by our [Code of Conduct](CODE_OF_CONDUCT.md). By participating, you are expected to uphold this code.

## How Can I Contribute?

### Reporting Bugs

Before creating bug reports, please check the issue list as you might find out that you don't need to create one. When you are creating a bug report, please include as many details as possible:

* Use a clear and descriptive title
* Describe the exact steps which reproduce the problem
* Provide specific examples to demonstrate the steps
* Describe the behavior you observed after following the steps
* Explain which behavior you expected to see instead and why
* Include screenshots if possible

### Suggesting Enhancements

Enhancement suggestions are tracked as GitHub issues. Create an issue and provide the following information:

* Use a clear and descriptive title
* Provide a step-by-step description of the suggested enhancement
* Provide specific examples to demonstrate the steps
* Describe the current behavior and explain which behavior you expected to see instead
* Explain why this enhancement would be useful

### Pull Requests

* Fill in the required template
* Do not include issue numbers in the PR title
* Follow the coding style used throughout the project
* Include appropriate test coverage
* Document new code based on the Documentation Styleguide

## Development Process

1. Fork the repo
2. Create a new branch (`git checkout -b feature/amazing-feature`)
3. Make your changes
4. Run the tests
5. Commit your changes (`git commit -m 'Add some amazing feature'`)
6. Push to the branch (`git push origin feature/amazing-feature`)
7. Open a Pull Request

## Styleguides

### Git Commit Messages

* Use the present tense ("Add feature" not "Added feature")
* Use the imperative mood ("Move cursor to..." not "Moves cursor to...")
* Limit the first line to 72 characters or less
* Reference issues and pull requests liberally after the first line

### PHP Styleguide

* Follow PSR-12 coding standards
* Use type hints where possible
* Document complex code sections
* Write meaningful variable and function names

### JavaScript Styleguide

* Use ES6+ features where appropriate
* Follow Vue.js style guide
* Use meaningful variable and function names
* Document complex code sections

### Documentation Styleguide

* Use Markdown
* Reference functions and classes with backticks
* Include code examples where appropriate
* Keep documentation up to date with code changes

## Additional Notes

### Issue and Pull Request Labels

* `bug` - Something isn't working
* `enhancement` - New feature or request
* `documentation` - Improvements or additions to documentation
* `good first issue` - Good for newcomers
* `help wanted` - Extra attention is needed

Thank you for contributing! 