<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Module install with CRUD BUilder

====================== // Auth - With boostrap

composer require laravel/ui

php artisan ui bootstrap --auth

====================== // Modelis gaketeba

RESOURCE: https://crestapps.com/

// Modelis dainstalireba

php artisan resource-file:create Blog --fields=id,title,slug,Blogcategory_id,description,photo,seoname,metabody

php artisan create:resources Blog --with-form-request --models-per-page=10 --with-migration --with-auth --translation-for=ka,en

// Imave modelis Categoriis dainstalireba

php artisan resource-file:create Blogcategory --fields=id,name,slug,description

php artisan create:resources Blogcategory --with-form-request --models-per-page=15 --with-migration --with-auth --translation-for=ka,en

====================== // TESTTT

php artisan resource-file:create item --fields=id,title,slug,itemcategory_id,itemcolor_id,itemsize_id,description,photo,seoname,metabody

php artisan create:resources item --with-form-request --models-per-page=10 --with-migration --with-auth --translation-for=ka,en

php artisan resource-file:create itemcategory --fields=id,name

php artisan create:resources itemcategory --with-form-request --models-per-page=15 --with-migration --with-auth --translation-for=ka,en

----------------

php artisan resource-file:create itemcolor --fields=id,name

php artisan create:resources itemcolor --with-form-request --models-per-page=15 --with-migration --with-auth --translation-for=ka,en

php artisan resource-file:create itemsize--fields=id,name

php artisan create:resources itemsize --with-form-request --models-per-page=15 --with-migration --with-auth --translation-for=ka,en


