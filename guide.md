# Guide laravel Course

listar rutas

`php artisan route list`

database migrations

    php artisan migrate --help

run migrate

    php artisan migrate

deshacer una migration (--step 1): ultima migracion

    php artisan migrate:rollback --step 1

instalar vista paquete

    composer require laravel/ui=^3.4

<https://github.com/laravel/ui>
<https://laravel.com/docs/7.x/frontend>

Generate basic scaffolding...

    php artisan ui bootstrap
    php artisan ui vue
    php artisan ui react

// Generate login / registration scaffolding...

    php artisan ui bootstrap --auth
    php artisan ui vue --auth
    php artisan ui react --auth

run "npm install && npm run dev" to compile your fresh scaffolding.

dark theme

    npm install bootswatch

<https://github.com/thomaspark/bootswatch/>
