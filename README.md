# Laravel Project with Modern UI Stack

<p align="center">
<a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a>
</p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## 🚀 About This Project

This is a Laravel project template with modern UI components and styling frameworks. It includes:
- Laravel 12.x
- Tailwind CSS 3.x
- Bootstrap 5.x
- Flowbite UI Components
- Font Awesome Icons

## 🛠️ Prerequisites

Before you begin, ensure you have met the following requirements:
- PHP >= 8.2
- Composer
- Node.js and npm
- MySQL/MariaDB
- Git

## 📦 Installation

1. Clone the repository:
```bash
git clone https://github.com/yourusername/app_laravel_start.git
```

2. Navigate to the project directory:
```bash
cd app_laravel_start
```

3. Install PHP dependencies:
```bash
composer install
```

4. Install Node.js dependencies:
```bash
npm install
```

5. Copy the environment file:
```bash
cp .env.example .env
```

6. Generate application key:
```bash
php artisan key:generate
```

7. Configure your database in the `.env` file:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

8. Run database migrations:
```bash
php artisan migrate
```

9. Compile assets:
```bash
npm run build
```

10. Start the development server:
```bash
php artisan serve
```

## 🎨 Frontend Setup

This project uses multiple frontend frameworks:

### Tailwind CSS
- Configuration file: `tailwind.config.js`
- Styles in: `resources/css/app.css`
- Build command: `npm run build`

### Bootstrap
- Included via npm
- Custom styles in: `resources/css/bootstrap.css`

### Flowbite
- Components available in: `resources/js/components`
- Initialize components in: `resources/js/app.js`

### Icons
- Font Awesome icons included
- Use in Blade templates: `<i class="fas fa-icon-name"></i>`

## 📚 Learning Resources

- [Laravel Documentation](https://laravel.com/docs)
- [Tailwind CSS Documentation](https://tailwindcss.com/docs)
- [Bootstrap Documentation](https://getbootstrap.com/docs/5.3/)
- [Flowbite Documentation](https://flowbite.com/docs/)
- [Font Awesome Icons](https://fontawesome.com/icons)

## 🤝 Contributing

Contributions are welcome! Please read our [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct) before contributing.

## 🛡️ Security

If you discover any security vulnerabilities, please send an email to [your-email@example.com](mailto:your-email@example.com).

## 📄 License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
