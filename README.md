# Implement Page caching using Laravel 5.3 and Redis for beginner

This's my simple demo of **Page Caching using Laravel 5.3 and Redis**
it's included [Debuggar](https://github.com/barryvdh/laravel-debugbar) package to check the time usage.

# Usage
1. I assume you have installed Laravel 5.3 and Homestead as well.
2. Login to your Homestead Box, using vagrant ssh
3. on your directory, run Composer Install to install Laravel and all required vendor on this project.
4. on your .env file, set CACHE_DRIVER=redis, and set your database
5. Run *php artisan migrate*, to install all migration examples on this project.
6. Run *php artisan db:seed --class=PostSeeder*, to run database factory and faker.
7. Test the app on browser by using your-local-web/posts 
