### Installation

-   git clone
    [This repo](https://github.com/mikkycody/api-requirements.git)
-   Run `composer install` to install packages .
-   Create a database.
-   Copy .env.example file, create a .env file if not created and add database credentials there .
-   Run `php artisan key:generate`.
-   Run `php artisan migrate` to run database migrations.
-   Run `php artisan db:seed ProductSeeder` to seed product data into db.
-   Run `php artisan serve` to start the server (Ignore if using valet) .
