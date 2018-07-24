<?php
use varywork\VaryWorkApp;

$app =  new VaryWorkApp();

//laravel model
$modelmanager=new \Illuminate\Database\Capsule\Manager();
$modelmanager->addConnection(config('database.mysql'));
$modelmanager->bootEloquent();

// redis
Predis\Autoloader::register();


return $app;
