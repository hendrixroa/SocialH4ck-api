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

Luego de haber instalado el proyecto importar el .sql a mysql respectivamente donde estan las migraciones y algunas tablas llenas.

y para ejecutar el proyecto en en la carpeta bon-voyage se debe ejecutar el siguiente comando :

$ php artisan serve --host 0.0.0.0

El mismo indicara por que puerto y host correra la aplicacion.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
