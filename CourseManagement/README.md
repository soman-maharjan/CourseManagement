# CourseManagement
Installation Guide
1. Download Composer (https://getcomposer.org/)
2. Download npm & node.js (https://nodejs.org/en/)
2. Run following commands in command Prompt
```
composer global require "laravel/installer=~1.1"
git clone https://github.com/soman-maharjan/CourseManagement.git
cd CourseManagement/CourseManagement
composer install
npm install
php artisan key:generate
```
Create database name "course-management" using MySql from xampp (localhost/phpmyadmin)

```
php artisan migrate --seed
php artisan storage:link
php artisan serve 
```
