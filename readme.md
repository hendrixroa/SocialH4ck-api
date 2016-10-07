# Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

## Oficial Documentacion

La documentacion la puedes encontrar en  [Laravel website](http://laravel.com/docs).

## API-REST SOCIALH4CK

## Rutas del API-REST

http://localhost:8000/user             

**Métodos aceptados : POST | GET**

http://localhost:8000/user/{iduser}

**Métodos aceptados : DELETE | PUT | GET**

## Instrucciones de instalación:

1) Se debe instalar Lamp para linux, wamp para Windows, o mamp para Mac. 
2) La configuracion del proyecto esta en un archivo .env donde estaran todas las variables de entorno tales como nombre de base de datos, password entre otros. 
3) Instalar la version estable de Composer

Una vez instalado composer ir a la carpeta donde esta el package.json y correr el siguiente comando: $ composer install

Se debe renombrar el archivo .env.example a .env y modificar las variables correspondientes a los datos de la base de datos que se este utilizando ejemplo :

DB_CONNECTION=mysql

DB_HOST=127.0.0.1

DB_PORT=3306

DB_DATABASE=h4ck

DB_USERNAME=root

DB_PASSWORD=root

O bien utilizar la BD de su preferencia.

Luego de haber instalado el proyecto se debe ejecutar el comando $ php artisan migrate , para correr debidamente las migraciones

y para ejecutar el proyecto en la carpeta principal se debe ejecutar el siguiente comando :

$ php artisan serve

El mismo indicara por que puerto y host correra la aplicacion.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
