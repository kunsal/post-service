<h1 align="center">Olakunle's Post Service</h1>


## About Service

This is a service that enable users to subscribe to websites and get notified via email whenever something is posted on the website. Built with laravel (PHP) and MySQL, so ensure you have composer, PHP and mysql on your machine to run this.

## Installation
- Clone this repository.
- cd into it and run   `composer install`
- Copy and rename .env.example file to .env  
- Ensure you fill in your mysql database credential in the .env file
- Change QUEUE_CONNECTION to database in .env file 
- Run `php artisan migrate`
- Run `php artisan db:seed` to seed the websites data
- Run `php artisan queue:work` to ensure that all jobs are implemented
- Run `php artisan serve` to run the application

## Postman Collection
[Click Here to get it](https://www.getpostman.com/collections/994fc8768694045b39d3)
