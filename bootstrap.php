<?php

// Autoload 自动载入
use Illuminate\Database\Capsule\Manager as Capsule;
define('BASE_PATH', __DIR__);
require BASE_PATH . '/vendor/autoload.php';

// Eloquent ORM
$capsule = new Capsule;
$capsule->addConnection(require '../config/database.php');
$capsule->bootEloquent();

// whoops 错误提示
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();
