<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## CREACION DEL PROYECTO

Ejecutar el siguiente comando para la creacion de los archivos en la consola de su entorno de Desarrollo preferido
```
composer create-project laravel/laravel api-clinica

```


## INSTALACION DE LA API JWT (JSON WEB TOKEN)
Un JWT es un estándar para la autenticación y el intercambio de información

![](https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQS5fskDQ_NGYlJIduK_KRaXMmbhxrUxrpipQ&usqp=CAU)



###Seguir los siguientes Comandos para instalar la API de JWT
```
composer require tymon/jwt-auth
php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider"
php artisan jwt:secret

```


