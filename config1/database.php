<?php
namespace config;
return [
	'mysql'=>[
        'host'=>'127.0.0.1',
        'port'=>'3306',
        'username'=>'root',
        'password'=>'',
        'database'=>'software',
        'driver'=>'mysql',
        'charset'=>'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix'    => ''
	],
    'redis'=>[
        'host'=>'127.0.0.1',
        'port'=>'6379',
//        'password'=>'',
        'database'=>0,
    ]
	
];