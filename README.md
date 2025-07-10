# Translation Management Service	 🚀

API-driven service


## Features

✔️ Store translations for multiple locales (e.g., en , fr , es ) with the ability to add new
languages in the future.
✔️ Tag translations for context (e.g., mobile , desktop , web ).
✔️ Expose endpoints to create, update, view, and search translations by tags, keys, or
content.
✔️ Provide a JSON export endpoint to supply translations for frontend applications like
Vue.js.
✔️ Json endpoint should always return updated translations whenever requested.


## Tech Stack

- **Backend:** PHP 8.2, Laravel 10  
- **Database:** MySQL 8  
- **Auth:** Laravel Sanctum  




## Getting Started

### Installation


git clone git@github.com:haroonurasheed/translation-mgmt-srv.git
cd [repo]

# Install Composer dependencies
composer install

### Environment Setup


cp .env.example .env
php artisan key:generate

Edit `.env` and set your database credentials:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_db
DB_USERNAME=your_user
DB_PASSWORD=your_pass


### Database Migrations & Seeding

1. Run migrations

   php artisan migrate


2. Seed initial data

   # Run all seeders
   php artisan db:seed


