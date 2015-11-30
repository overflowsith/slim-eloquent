# Eloquent ORM within Slim 3

This is a light and dirty wrapper for using Eloquent ORM.

## Usage

```php
<?php

require_once __DIR__ . '/vendor/autoload.php';

$app = new Slim\App();

$dbSettings = [
    'driver'    => 'mysql',
    'host'      => '127.0.0.1',
    'database'  => 'database',
    'username'  => '',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
];

Overflowsith\SlimEloquent\Eloquent::boot($dbSettings);

class User extends Overflowsith\SlimEloquent\Model
{
}

$app->get('/', function ($request, $response, $args) use ($app) {

    $userCount = User::count();

    $response->write("# of users: " . $userCount);

    return $response;

});

$app->run();

?>
```
