# How to use the app

## Pre-requisite 
You must have composer installed in your machine

## Steps
- Clone the application
- `cd` into the app folder 
- Run `composer install`
- Rename `.env.example` to `.env`
- Add values to the following variales
    - `DB_CONNECTION=`
    - `DB_HOST=`
    - `DB_PORT=`
    - `DB_DATABASE=`
    - `DB_USERNAME=`
    - `DB_PASSWORD=`
- Run `php artisan migrate`
- Start the server : `php artisan serve` 
