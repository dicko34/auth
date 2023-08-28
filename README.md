# Wineak.p

> Wineak.p is classifieds website help you to  buying and selling various items, such as cars,homes,lands. and many widgets  

This project runs with Laravel version 10.00x.

## Getting started

Assuming you've already installed on your machine: PHP (>= 8.1), [Laravel](https://laravel.com), [Composer](https://getcomposer.org) .

``` bash
# install dependencies
composer install
npm install

# create .env file and generate the application key
cp .env.example .env
php artisan key:generate

#database 
php artisan migrate:fresh --seed

# build CSS and JS assets
npm run dev
# or, if you prefer minified files
npm run prod
```

Then launch the server:

``` bash
php artisan serve
```

Wineak.p project is now up and running! Access it at http://localhost:8000.

