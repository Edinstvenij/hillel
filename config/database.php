<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
    'driver' => getenv('DATABASE_driver'),
    'host' => getenv('DATABASE_host'),
    'database' => getenv('DATABASE_database'),
    'username' => getenv('DATABASE_username'),
    'password' => getenv('DATABASE_password'),
    'charset' => getenv('DATABASE_charset'),
    'collation' => getenv('DATABASE_collation'),
    'prefix' => '',
]);

// Set the event dispatcher used by Eloquent models... (optional)
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;

$capsule->setEventDispatcher(new Dispatcher(new Container));

// Make this Capsule instance available globally via static methods... (optional)
$capsule->setAsGlobal();

// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();
