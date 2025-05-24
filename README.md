# University Learning Management System 🎓

[![Version](https://img.shields.io/badge/version-2.0.0-blue.svg)](VERSION)
[![License](https://img.shields.io/badge/license-MIT-green.svg)](LICENSE)
[![Laravel](https://img.shields.io/badge/Laravel-10.x-red.svg)](https://laravel.com)
[![Vue.js](https://img.shields.io/badge/Vue.js-3.x-brightgreen.svg)](https://vuejs.org)
[![Node.js](https://img.shields.io/badge/Node.js-18.x-green.svg)](https://nodejs.org)

A modern and feature-rich Learning Management System built with Laravel and Vue.js, featuring beautiful UI elements and seamless user experience.

## ✨ Features

- 🎨 Modern and responsive UI design
- 🔐 Secure authentication system
- 📚 Course management
- 👥 Student enrollment
- 💳 QR code payment integration
- 📱 Mobile-friendly interface
- 🌙 Dark mode support
- 🚀 Performance optimized
- 📊 Analytics dashboard

## 🛠️ Tech Stack

- **Backend:** Laravel 10.x
- **Frontend:** Vue.js 3.x
- **Database:** MySQL
- **CSS Framework:** Tailwind CSS
- **Icons:** Font Awesome
- **Payment:** ACLEDA Bank KHQR

## 📦 Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/KOSALSENSOK096/university-learning-management.git
   cd university-learning-management
   ```

2. Install dependencies:
   ```bash
   composer install
   npm install
   ```

3. Set up environment:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. Configure database in `.env`

5. Run migrations:
   ```bash
   php artisan migrate
   ```

6. Build assets:
   ```bash
   npm run build
   ```

## 🔄 Updating

We provide a convenient PowerShell script for updating:

```bash
./update.ps1
```

This will:
- Pull latest changes
- Update dependencies
- Run migrations
- Clear caches
- Rebuild assets

## 🚀 Releasing New Versions

For maintainers, use the release script:

```bash
./release.ps1 -version "2.0.0" -message "Your release notes here"
```

## 👨‍💻 Developer

**Kosal Sensok**
- GitHub: [@KOSALSENSOK096](https://github.com/KOSALSENSOK096)
- YouTube: [@SokCodeing](https://www.youtube.com/@SokCodeing)
- Telegram: [@kosalsensok06](https://t.me/kosalsensok06)
- Email: kosalsensok065@gmail.com

## 🤝 Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add some amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

## 📄 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## ☕ Support

If you find this project helpful, consider:

- ⭐ Starring the repository
- 🎥 Subscribing to [@SokCodeing](https://www.youtube.com/@SokCodeing)
- ☕ [Buying me a coffee](https://www.buymeacoffee.com/kosalsensok)

## 📝 Changelog

See [CHANGELOG.md](CHANGELOG.md) for all changes and releases.
