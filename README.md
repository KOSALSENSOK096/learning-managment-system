# 🎓 University Learning Management System

<div align="center">

[![Version](https://img.shields.io/badge/version-1.0.0-blue.svg)](VERSION)
[![License](https://img.shields.io/badge/license-MIT-green.svg)](LICENSE)
[![Laravel](https://img.shields.io/badge/Laravel-10.x-FF2D20?style=flat&logo=laravel&logoColor=white)](https://laravel.com)
[![Vue.js](https://img.shields.io/badge/Vue.js-3.x-4FC08D?style=flat&logo=vue.js&logoColor=white)](https://vuejs.org)
[![Node.js](https://img.shields.io/badge/Node.js-20.x-339933?style=flat&logo=node.js&logoColor=white)](https://nodejs.org)
[![MySQL](https://img.shields.io/badge/MySQL-8.x-4479A1?style=flat&logo=mysql&logoColor=white)](https://mysql.com)
[![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-3.x-38B2AC?style=flat&logo=tailwind-css&logoColor=white)](https://tailwindcss.com)

<img src="https://raw.githubusercontent.com/KOSALSENSOK096/university-learning-management/main/public/assets/images/logo.png" alt="LMS Logo" width="200"/>

### 🚀 Modern Education Platform

[View Demo](https://your-demo-link.com) • [Report Bug](https://github.com/KOSALSENSOK096/university-learning-management/issues) • [Request Feature](https://github.com/KOSALSENSOK096/university-learning-management/issues)

</div>

## 📋 Prerequisites

Before you begin, ensure you have the following installed:
- [PHP 8.1+](https://www.php.net/downloads.php)
- [Composer](https://getcomposer.org/download/)
- [Node.js 20.x LTS](https://nodejs.org/)
- [MySQL 8.0+](https://dev.mysql.com/downloads/mysql/)
- [Git](https://git-scm.com/downloads)

## 🚀 Quick Start

1. **Clone the repository**
```bash
git clone https://github.com/KOSALSENSOK096/university-learning-management.git
cd university-learning-management
```

2. **Install PHP dependencies**
```bash
composer install
```

3. **Set up environment**
```bash
cp .env.example .env
php artisan key:generate
```

4. **Configure database**
Edit `.env` file and set your database credentials:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

5. **Run migrations and seeders**
```bash
php artisan migrate --seed
```

6. **Install Node.js dependencies**
```bash
npm install
```

7. **Start development servers**
In one terminal:
```bash
php artisan serve
```
In another terminal:
```bash
npm run dev
```

Visit [http://localhost:8000](http://localhost:8000) to see your application!

## 🔄 Updating

To update your installation to the latest version:

```bash
git pull origin main
composer install
npm install
php artisan migrate
npm run build
```

## ✨ Features

<div align="center">
<table>
<tr>
<td align="center" width="33%">
<img src="https://img.icons8.com/fluency/96/000000/graduation-cap.png" width="96" height="96"/>
<br />
<b>Modern Education</b>
<br />
Next-gen learning platform
</td>
<td align="center" width="33%">
<img src="https://img.icons8.com/fluency/96/000000/cloud-sync.png" width="96" height="96"/>
<br />
<b>Real-time Sync</b>
<br />
Instant updates & collaboration
</td>
<td align="center" width="33%">
<img src="https://img.icons8.com/fluency/96/000000/security-shield-green.png" width="96" height="96"/>
<br />
<b>Secure Platform</b>
<br />
Enterprise-grade security
</td>
</tr>
</table>
</div>

### 🎯 Key Features

<div align="center">
<table>
<tr>
<td align="center" width="25%">
<img src="https://img.icons8.com/fluency/64/000000/student-center.png" width="64" height="64"/>
<br />
<b>Student Portal</b>
<br />
Course access & assignments
</td>
<td align="center" width="25%">
<img src="https://img.icons8.com/fluency/64/000000/teacher.png" width="64" height="64"/>
<br />
<b>Teacher Dashboard</b>
<br />
Course management
</td>
<td align="center" width="25%">
<img src="https://img.icons8.com/fluency/64/000000/exam.png" width="64" height="64"/>
<br />
<b>Assessment Tools</b>
<br />
Quizzes & grading
</td>
<td align="center" width="25%">
<img src="https://img.icons8.com/fluency/64/000000/dashboard-layout.png" width="64" height="64"/>
<br />
<b>Analytics</b>
<br />
Progress tracking
</td>
</tr>
</table>
</div>

## 🛠️ Tech Stack

- **Backend:** Laravel 10.x with PHP 8.1+
- **Frontend:** Vue.js 3.x with Composition API
- **Database:** MySQL 8.0+
- **CSS:** Tailwind CSS with custom animations
- **Icons:** Font Awesome Pro
- **Payment:** ACLEDA Bank KHQR integration
- **Cache:** Redis for performance
- **Testing:** PHPUnit & Jest
- **CI/CD:** GitHub Actions

## 📦 Quick Start

```bash
# Clone repository
git clone https://github.com/KOSALSENSOK096/university-learning-management.git

# Install dependencies
composer install && npm install

# Setup environment
cp .env.example .env && php artisan key:generate

# Run migrations
php artisan migrate --seed

# Start development servers
php artisan serve & npm run dev
```

## 🔄 Updates & Releases

### Updating

```bash
# Pull and update everything
./update.ps1
```

### Creating New Release

```bash
# For maintainers
./release.ps1 -version "0.1.0" -message "Your release notes"
```

## 👨‍💻 Developer

<div align="center">
<img src="https://github.com/KOSALSENSOK096.png" width="150px" style="border-radius: 50%; border: 3px solid #4CAF50;" alt="KOSAL SENSOK"/>
<h3>KOSAL SENSOK</h3>
<p>🌟 Full Stack Developer | 🎓 Educational Technology Enthusiast</p>

[![Portfolio](https://img.shields.io/badge/Portfolio-255E63?style=for-the-badge&logo=About.me&logoColor=white)](https://github.com/KOSALSENSOK096)
[![YouTube](https://img.shields.io/badge/YouTube-@SokCodeing-FF0000?style=for-the-badge&logo=youtube&logoColor=white)](https://www.youtube.com/@SokCodeing)
[![Telegram](https://img.shields.io/badge/Telegram-@kosalsensok06-2CA5E0?style=for-the-badge&logo=telegram&logoColor=white)](https://t.me/kosalsensok06)
[![Email](https://img.shields.io/badge/Email-kosalsensok065@gmail.com-D14836?style=for-the-badge&logo=gmail&logoColor=white)](mailto:kosalsensok065@gmail.com)

### 💝 Support My Work

<a href="https://www.buymeacoffee.com/kosalsensok">
<img src="https://img.buymeacoffee.com/button-api/?text=Buy me a coffee&emoji=☕&slug=kosalsensok&button_colour=FFDD00&font_colour=000000&font_family=Cookie&outline_colour=000000&coffee_colour=ffffff" />
</a>

</div>

## 💳 Support via KHQR

<div align="center">
<div style="background: white; padding: 20px; border-radius: 10px; display: inline-block; margin: 20px 0;">
<img src="https://raw.githubusercontent.com/KOSALSENSOK096/university-learning-management/main/public/assets/images/acleda-bank-logo.png" 
     alt="ACLEDA Bank" 
     width="200"/>
<h3>Scan • Pay • Done</h3>
<img src="https://raw.githubusercontent.com/KOSALSENSOK096/university-learning-management/main/public/assets/images/khqr-code.png" 
     alt="KHQR Payment" 
     width="200"
     style="border: 2px solid #1e3a8a; border-radius: 10px; padding: 10px;"/>
<p><strong>KOSAL SENSOK</strong></p>
<p>ACLEDA Bank KHQR</p>
<p>📞 023 994 444 | 015 999 233</p>
</div>
</div>

## 📊 Project Status

<div align="center">

| Metric | Progress |
|--------|----------|
| 🧪 Code Coverage | ![Progress](https://progress-bar.dev/85/?width=500&color=4CAF50) |
| 📚 Documentation | ![Progress](https://progress-bar.dev/90/?width=500&color=2196F3) |
| ✨ Features | ![Progress](https://progress-bar.dev/75/?width=500&color=FFC107) |
| 🔍 Testing | ![Progress](https://progress-bar.dev/80/?width=500&color=9C27B0) |

</div>

## 📝 Documentation

- [Installation Guide](docs/installation.md)
- [User Guide](docs/user-guide.md)
- [API Documentation](docs/api.md)
- [Contributing Guidelines](CONTRIBUTING.md)
- [Changelog](CHANGELOG.md)

## 🤝 Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

## 📄 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

---

<div align="center">

### 🌟 Star History

[![Star History Chart](https://api.star-history.com/svg?repos=KOSALSENSOK096/university-learning-management&type=Date)](https://star-history.com/#KOSALSENSOK096/university-learning-management&Date)

### 💖 Support & Connect

<a href="https://www.buymeacoffee.com/kosalsensok">
<img src="https://img.buymeacoffee.com/button-api/?text=Support My Work&emoji=💝&slug=kosalsensok&button_colour=FF5F5F&font_colour=ffffff&font_family=Lato&outline_colour=000000&coffee_colour=FFDD00" />
</a>

<br />
<br />

[![YouTube Channel](https://img.shields.io/badge/YouTube-@SokCodeing-FF0000?style=for-the-badge&logo=youtube&logoColor=white)](https://www.youtube.com/@SokCodeing)
[![Telegram](https://img.shields.io/badge/Telegram-@kosalsensok06-2CA5E0?style=for-the-badge&logo=telegram&logoColor=white)](https://t.me/kosalsensok06)
[![Email](https://img.shields.io/badge/Email-kosalsensok065@gmail.com-D14836?style=for-the-badge&logo=gmail&logoColor=white)](mailto:kosalsensok065@gmail.com)

<br />

<h3>Made with ❤️ by <a href="https://github.com/KOSALSENSOK096">KOSAL SENSOK</a></h3>

⭐️ Star this project to show your support!

</div>
