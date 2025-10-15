# Course Management Software System

> BSc Computing — Group Project

A web application for managing courses, instructors, students, and enrollments. It provides role-based access to create, view, and maintain course-related data and streamline academic workflows.

## Table of Contents

- [Features](#features)
- [Tech Stack](#tech-stack)
- [Project Structure](#project-structure)
- [Getting Started](#getting-started)
- [Environment & Configuration](#environment--configuration)
- [Database Migrations & Seeding](#database-migrations--seeding)
- [Building Frontend Assets](#building-frontend-assets)
- [Running Tests](#running-tests)
- [Contributing](#contributing)
- [License](#license)

## Features

- Role-based authentication (e.g., Admin, Instructor, Student)
- CRUD for Courses, Instructors, Students, Enrollments
- Timetable / scheduling primitives
- Basic reports and exports
- Search & filters on key lists
- Server-side validation and flash messages

> The exact feature set can evolve; adjust this list to match the current UI.

## Tech Stack

- **Backend:** PHP (Laravel)
- **Templating:** Blade
- **Styles:** LESS
- **DB:** MySQL / MariaDB (or PostgreSQL)
- **Build:** Composer, NPM

> Check `composer.json` and `package.json` for exact versions used in this repo.

## Project Structure

```
CourseManagement/        # Laravel application (app/, resources/, routes/, etc.)
Report/                  # Project documentation / report artifacts
README.md
```

## Getting Started

### Prerequisites

- PHP ≥ 7.4 (or version required by `composer.json`)
- Composer ≥ 2.0
- Node.js ≥ 16 & npm ≥ 8
- MySQL/MariaDB (or a supported database)
- OpenSSL extension enabled

### 1) Clone

```bash
git clone https://github.com/soman-maharjan/CourseManagement.git
cd CourseManagement
```

### 2) Install PHP dependencies

```bash
composer install
```

### 3) Copy & set environment

```bash
cp .env.example .env
# Update DB credentials and app URL/keys in .env
php artisan key:generate
```

### 4) Create database

Create an empty database and update `.env`:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=course_management
DB_USERNAME=root
DB_PASSWORD=secret
```

## Database Migrations & Seeding

```bash
php artisan migrate
php artisan db:seed   # if seeders are available
```

## Building Frontend Assets

If the project uses Laravel Mix or an older Elixir/Gulp pipeline:

```bash
npm install
# If using Mix:
npm run dev      # build once
npm run watch    # rebuild on changes
# If using legacy Gulp/Elixir:
# npm run gulp or gulp (depending on package.json scripts)
```

## Run the App

```bash
php artisan serve
# http://127.0.0.1:8000
```

## Running Tests

```bash
php artisan test
# or: ./vendor/bin/phpunit
```

## Contributing

1. Fork the repo
2. Create a feature branch: `git checkout -b feature/your-feature`
3. Commit changes: `git commit -m "Add your feature"`
4. Push branch: `git push origin feature/your-feature`
5. Open a Pull Request

Please run linters/formatters and include tests where applicable.

## License

This project is for academic purposes. If you want an explicit license, add one (e.g., MIT). By default, all rights reserved unless a license file is present.
