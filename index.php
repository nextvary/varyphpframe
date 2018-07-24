<?php
// require_onece();

require __DIR__.'/vendor/varywork/autoload.php';
require __DIR__.'/vendor/autoload.php';


$app = require_once __DIR__.'/vendor/varywork/application.php';

$app->getInstance('front');

