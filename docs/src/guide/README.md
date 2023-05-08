# Introduction
Laravel Apigee is a Laravel package built to enable Laravel developers to easily communicate with Apigee edge 
through it's Management API.

## Prerequisites
- Laravel 9.x or higher

## Installation
You can install the package via composer:

```bash
composer require lordjoo/laravel-apigee
```
The package will automatically register itself.

Publish the config file with:
```bash
php artisan vendor:publish --provider="Lordjoo\Apigee\ApigeeServiceProvider"
```

## Configuration

Set the following environment variables in your `.env` file:
```dotenv
APIGEE_ENDPOINT=
APIGEE_USERNAME=
APIGEE_PASSWORD=
APIGEE_ORGANIZATION=
```
::: warning Note
At the moment, the package only supports Basic Authentication.
:::


## How to use

Laravel Apigee create singleton instance of Apigee class, so you can use it anywhere in your application.

```php
use \Lordjoo\Apigee\Apigee;

$client = app(Apigee::class);
```

You can also use the Apigee Facade as well
```php
use \Lordjoo\Apigee\Facades\Apigee;

$apis = Apigee::apiProxy()->get();
```
