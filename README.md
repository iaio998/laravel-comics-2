<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Installazione Laravel

```bash
cd in cartella esercizi

composer create-project --prefer-dist laravel/laravel:^9.2 your_project_name_here

cd in cartella progetto

code . -r

php artisan serve

ctrl + c

clear

```

## Configurazione Laravel

```bash
composer require pacificdev/laravel_9_preset

php artisan preset:ui bootstrap

npm install

npm install --save @fortawesome/fontawesome-free

#in vite.config aggiungo agli alias
'~@fortawesome': path.resolve(__dirname, 'node_modules/@fortawesome'),

#copio la cartella dei webfont (dentro node modules -> bootstrap) in resources e se voglio la rinomino

#creo una cartella partials in scss e dentro una _variables.scss

$fa-font-path: "../webfonts" !default;

@use 'partials/variables' as *;

@import "~@fortawesome/fontawesome-free/scss/fontawesome";
@import "~@fortawesome/fontawesome-free/scss/regular";
@import "~@fortawesome/fontawesome-free/scss/solid";
@import "~@fortawesome/fontawesome-free/scss/brands";

#creo cartella layout in views e dentro creo app.blade.php

#creo cartella partials in views e dentro creo app.blade.php

#estendo la app.blade in home.blade

#verificare se la route ha i nomi corretti

git init
git add .
git commit -m "first commit"
git branch -M main
git remote add origin put_your_url
git push -u origin main

#creata nuova repo ed importato il file di lavoro con template

composer install

#duplico file .env.example e lo rinomino in .env

php artisan key:generate

npm install

# creo il database da phpmyadmin

# inserisco i dati per il collegamento al db in env

# creo migration
php artisan make:migration create_nome_tabella_table
php artisan make:migration update_users_table --table
php artisan make:migration add_phone_number_to_users_table

# lancio migration
php artisan migrate

#popolo il db
php artisan make:seeder NomeTableSeeder

php artisan db:seed --class=NomeTableSeeder

# preparo le rotte file web.php es.
Route::get('/books', [BookController::class, 'index'])->name('books.index');

# creo controller
php artisan make:controller NomeController

#creo model
php artisan make:model Nome

# creo le views relative
```
