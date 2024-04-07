<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center"><a href="" target="_blank"><img src="https://github.com/ashraftryfie/simple-tasks-crud-laravel-livewire/assets/108266434/8b33a894-0f68-4af6-96a1-2f51e0ae7721" width="100" alt="Livewire Logo"/></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Simple Tasks CRUD Example using Livewire V3
![Application Screenshot](https://github.com/ashraftryfie/simple-tasks-crud-laravel-livewire/assets/108266434/d5a98fc6-a8ab-4efb-a29c-71ade63d53df)

### To install the application

- Clone the repo :
    ```bash
    git clone https://github.com/ashraftryfie/simple-tasks-crud-laravel-livewire
    ```
- Copy `.env-example` as `.env` file
- Create database and modify `.env` file with your db name and db account details.
- Install vendor packages :
    ```bash
    composer install
    npm install
    npm run dev
    ```
- Database Migrate :
    ```bash
    php artisan migrate
    ```
- Generate the app key:
    ```bash
    php artisan key:generate
    ```
- Database Seed:
    ```bash
    php artisan db:seed
    ```
- Run the project:
    ```bash
    php artisan serve
    ```
