================================
WEEK 1 — PHP FOUNDATION (DAY 1–7)
================================

Day 1: PHP Basics
- PHP syntax, echo, variable
- Data types
PROBLEM:
- 2টা সংখ্যা নিয়ে sum, diff, mul, div দেখাও
- Even / odd checker

Day 2: Condition & Loop
- if, else, elseif
- for, while, foreach
PROBLEM:
- 1–100 প্রিন্ট করো (even আলাদা)
- Factorial বের করো
- Multiplication table

Day 3: Function
- Function define
- Parameter, return
PROBLEM:
- Calculator function
- Prime number checker function

Day 4: PHP Array (IMPORTANT)
- Indexed array
- Associative array
- Multidimensional array
PROBLEM:
- Student result sheet (name, marks, grade)
- Max / min number from array

Day 5: Superglobals
- $_GET
- $_POST
- $_REQUEST
PROBLEM:
- HTML form → PHP দিয়ে input দেখাও
- Simple login logic (no DB)

Day 6: Session & Cookie
- session_start
- session set/get
- cookie set
PROBLEM:
- Session-based login
- Logout system

Day 7: Mini Project
PROJECT:
- Simple PHP Login System
  - Login form
  - Session check
  - Logout

================================
WEEK 2 — PHP OOP + DB (DAY 8–14)
================================

Day 8: PHP OOP Basics
- class, object
- constructor
PROBLEM:
- User class → name, email show

Day 9: OOP Advanced
- Inheritance
- Access modifier
PROBLEM:
- Admin extends User
- Method override

Day 10: Interface & Abstract
- Interface vs abstract class
PROBLEM:
- Payment interface → bkash, nagad mock

Day 11: MySQL + PHP (PDO)
- PDO connect
- Prepare statement
PROBLEM:
- Insert user data
- Fetch user list

Day 12: CRUD (IMPORTANT)
- Create
- Read
- Update
- Delete
PROBLEM:
- Student CRUD (PHP + MySQL)

Day 13: Security
- password_hash
- password_verify
- SQL injection concept
PROBLEM:
- Secure login system

Day 14: PHP Final Project
PROJECT:
- PHP CRUD with Login
- Role: Admin / User

================================
WEEK 3 — LARAVEL CORE (DAY 15–21)
================================

Day 15: Laravel Setup
- Composer
- Folder structure
- .env file
PROBLEM:
- Laravel install & run

Day 16: Routing
- GET / POST
- Route parameter
- Named route
PROBLEM:
- URL → controller → view flow

Day 17: Controller & Blade
- Controller logic
- Blade layout
PROBLEM:
- Dynamic page render

Day 18: Database & Migration
- Migration create
- Rollback
PROBLEM:
- users table migrate

Day 19: Model & Eloquent
- Model
- CRUD
PROBLEM:
- Insert & show data with Eloquent

Day 20: Form & Validation
- Request validation
- Error message show
PROBLEM:
- Registration form with validation

Day 21: Laravel Mini Project
PROJECT:
- User Registration + Login

================================
WEEK 4 — JOB LEVEL LARAVEL (DAY 22–30)
================================

Day 22: Authentication
- Auth flow
- Custom login logic
PROBLEM:
- Secure login system

Day 23: Middleware
- Auth middleware
- Custom middleware
PROBLEM:
- Login protect route

Day 24: Role-Based Access (CRITICAL)
- Admin / User role
PROBLEM:
- Admin-only dashboard

Day 25: CRUD (Laravel Style)
- Resource controller
- Pagination
PROBLEM:
- Product CRUD system

Day 26: File Upload
- Image upload
- Storage
PROBLEM:
- Profile photo upload

Day 27: Session & Flash
- Flash message
- Success / error alert
PROBLEM:
- CRUD success message

Day 28: Search & Filter
- Query scope
PROBLEM:
- Search user/product

Day 29: Final Project
PROJECT:
- School / Management System
  - Login
  - Role based dashboard
  - CRUD
  - Approval logic

Day 30: Job Prep
- GitHub push
- README write
- Interview Q practice

================================
FINAL RESULT
================================
- 2 PHP projects
- 2 Laravel projects
- Job / Intern ready junior



## Setup 
================================
STEP 0: REQUIRED APP
================================
1. Play Store থেকে "Termux" আনইনস্টল থাকলে uninstall করো
2. GitHub / F-Droid থেকে নতুন Termux install করো
   (Old Play Store version কাজ করে না)

================================
STEP 1: TERMUX BASIC UPDATE
================================
termux-change-repo
# Main repo enable করো

pkg update && pkg upgrade -y

================================
STEP 2: INSTALL PHP
================================
pkg install php -y

# Check PHP
php -v

================================
STEP 3: RUN PHP FILE
================================
mkdir php-practice
cd php-practice

nano index.php

# index.php file এ লেখো:
<?php
echo "Hello PHP from Mobile!";
?>

# Run
php index.php

================================
STEP 4: PHP BUILT-IN SERVER
================================
php -S localhost:8000

# Browser এ খুল:
http://localhost:8000

================================
STEP 5: INSTALL MYSQL (MariaDB)
================================
pkg install mariadb -y

# Start database
mysqld_safe &

# Secure setup
mysql_secure_installation

# Login
mysql -u root

================================
STEP 6: INSTALL COMPOSER (FOR LARAVEL)
================================
pkg install curl -y

curl -sS https://getcomposer.org/installer | php
mv composer.phar /data/data/com.termux/files/usr/bin/composer

# Check
composer --version

================================
STEP 7: INSTALL LARAVEL
================================
composer global require laravel/installer

export PATH="$HOME/.composer/vendor/bin:$PATH"

# New project
laravel new myapp
cd myapp

php artisan serve