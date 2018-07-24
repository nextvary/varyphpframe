<?php
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use varywork\VaryWorkApp;

$app =  new VaryWorkApp();

//laravel model
$modelmanager=new \Illuminate\Database\Capsule\Manager();
$modelmanager->addConnection(config('database.mysql'));
$modelmanager->bootEloquent();

// redis
Predis\Autoloader::register();

// create a log channel
//$log = new Logger('work');
//$log->pushHandler(new StreamHandler(storage_path().'work.log', Logger::WARNING));
//$log->pushProcessor(new \Monolog\Processor\WebProcessor());
//// add records to the log
//$log->warning('Foo');
//$log->error('Bar');
//

return $app;
