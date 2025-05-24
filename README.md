# University Learning Management System

A comprehensive Learning Management System (LMS) built with Laravel for managing university academic activities, course materials, and student-teacher interactions.

## 🚀 Features

- User Authentication & Authorization (Students, Teachers, Administrators)
- Course Management
- Assignment Submission & Grading
- Learning Material Distribution
- Student Progress Tracking
- Real-time Notifications
- Discussion Forums
- Calendar & Schedule Management

## 🛠 Tech Stack

- **Framework:** Laravel
- **Database:** MySQL
- **Frontend:** Blade Templates, Bootstrap, JavaScript
- **Authentication:** Laravel Sanctum
- **Real-time Features:** Laravel WebSockets

## 📋 Prerequisites

- PHP >= 8.1
- Composer
- Node.js & NPM
- MySQL
- XAMPP/WAMP/MAMP

## 🔧 Installation

1. Clone the repository
```bash
git clone https://github.com/KOSALSENSOK096/learning-managment-system.git
```

2. Navigate to project directory
```bash
cd learning-managment-system
```

3. Install PHP dependencies
```bash
composer install
```

4. Install NPM dependencies
```bash
npm install
```

5. Create and configure .env file
```bash
cp .env.example .env
```

6. Generate application key
```bash
php artisan key:generate
```

7. Run database migrations
```bash
php artisan migrate
```

8. Start the development server
```bash
php artisan serve
```

## 🔍 Project Structure

```
learning-managment-system/
├── app/
│   ├── Http/Controllers/    # Controllers
│   ├── Models/             # Database Models
│   └── Policies/          # Authorization Policies
├── database/
│   ├── migrations/        # Database Migrations
│   └── seeders/          # Database Seeders
├── resources/
│   ├── views/            # Blade Templates
│   ├── js/              # JavaScript Files
│   └── css/             # CSS Files
├── routes/
│   ├── web.php          # Web Routes
│   └── api.php          # API Routes
└── tests/               # Application Tests
```

## 🤝 Contributing

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## 📝 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 👥 Authors

- **KOSAL SENSOK** - *Initial work*

## 📬 Contact

KOSAL SENSOK - [@your_twitter](https://twitter.com/your_twitter) - your.email@example.com

Project Link: [https://github.com/KOSALSENSOK096/learning-managment-system](https://github.com/KOSALSENSOK096/learning-managment-system)
