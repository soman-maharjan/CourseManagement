# CourseManagement
Installation Guide
1. Download Composer (https://getcomposer.org/)
2. Run following commands in command Prompt
```
composer global require "laravel/installer=~1.1"
git clone 
cd CourseManagement
composer install
npm install

```
"cp" for linux and "rename" for windows

```
cp .env.example .env
php artisan key:generate
```
Create database name "course-management" using MySql from xampp (localhost/phpmyadmin)

```
php artisan migrate --seed
```
