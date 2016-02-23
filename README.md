# Billingo API Provider for Laravel

This package is a Billingo API service provider and facade for Laravel 5.1+.



## Installing

You have to use Composer to install the library

```
composer require voov/billingo-api-laravel
```

Find the `providers` array in the `config/app.php` file and add the Billingo Service Provider:

```php
'providers' => [
  // ...
  Billingo\API\Laravel\BillingoServiceProvider::class
];
```

Now find the `aliases` array in the same config file and add the Billingo Facade class:

```php
'aliases' => [
  // ...
  'Billingo' => Billingo\API\Laravel\BillingoFacade::class
];
```



## Config

Before you can use the Billingo service provider you have configure it with your API keys. You can access your API keys here: [https://www.billingo.hu/api](https://www.billingo.hu/api)

In the command line type the following:

```
php artisan vendor:publish
```

This command will generate a `billingo.php` file inside your config directory (usually `config/`). Enter your API creditentials here.



## Usage

### Get resource

```php
// Return the list of clients
$clients = Billingo::get('clients');

// Return one client
$client = Billingo::get('clients/123456789');
```



### Save resource

```php
// save a new client
$clientData = [
  "name" => "Gigazoom LLC.",
  "email" => "rbrooks5@amazon.com",
  "billing_address" => [
      "street_name" => "Moulton",
      "street_type" => "Terrace",
      "house_nr" => "2797",
      "city" => "Preston",
      "postcode" => "PR1",
      "country" => "United Kingdom"
  ]
]
Billingo::post('clients', $clientData);
```



### Update resource

```php
// save client
Billingo::put('clients/123456789', $newData);
```



### Delete resource

```php
// delete client
Billingo::delete('clients/123456789');
```

