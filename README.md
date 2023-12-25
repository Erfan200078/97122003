This project runs with Laravel version
Assuming you've already installed on your machine: PHP (>= 7.0.0), Laravel, Composer and Node.js.
command:
# install dependencies
composer install
npm install

# create .env file and generate the application key
cp .env.example .env
php artisan key:generate

# build CSS and JS assets
npm run dev
# or, if you prefer minified files
npm run prod

Then launch the server:

php artisan serve

The Laravel sample project is now up and running! Access it at http://localhost:8000.
https://github.com/prismicio/php-laravel-sample/blob/master/README.md#licence
