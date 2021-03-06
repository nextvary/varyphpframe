<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc060feffb62aa5ddb4bc07e835600f49
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '72579e7bd17821bb1321b87411366eae' => __DIR__ . '/..' . '/illuminate/support/helpers.php',
        '895ee9bcf60fabc8152dafc9ed1af68d' => __DIR__ . '/../..' . '/app/common/function.php',
    );

    public static $prefixLengthsPsr4 = array (
        'v' => 
        array (
            'varywork\\' => 9,
            'vary\\' => 5,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\Translation\\' => 30,
            'Swoole\\' => 7,
        ),
        'P' => 
        array (
            'Psr\\SimpleCache\\' => 16,
            'Psr\\Log\\' => 8,
            'Psr\\Container\\' => 14,
            'Predis\\' => 7,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
        'I' => 
        array (
            'Illuminate\\Support\\' => 19,
            'Illuminate\\Database\\' => 20,
            'Illuminate\\Contracts\\' => 21,
            'Illuminate\\Container\\' => 21,
        ),
        'D' => 
        array (
            'Doctrine\\Common\\Inflector\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'varywork\\' => 
        array (
            0 => __DIR__ . '/..' . '/varywork',
        ),
        'vary\\' => 
        array (
            0 => __DIR__ . '/..' . '/vary',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\Translation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/translation',
        ),
        'Swoole\\' => 
        array (
            0 => __DIR__ . '/..' . '/Swoole',
        ),
        'Psr\\SimpleCache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/simple-cache/src',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Predis\\' => 
        array (
            0 => __DIR__ . '/..' . '/predis/predis/src',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
        'Illuminate\\Support\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/support',
        ),
        'Illuminate\\Database\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/database',
        ),
        'Illuminate\\Contracts\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/contracts',
        ),
        'Illuminate\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/container',
        ),
        'Doctrine\\Common\\Inflector\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/inflector/lib/Doctrine/Common/Inflector',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/..' . '/nesbot/carbon/src',
    );

    public static $classMap = array (
        'app\\front\\FrontController' => __DIR__ . '/../..' . '/app/front/FrontController.php',
        'app\\front\\index\\controllers\\IndexController' => __DIR__ . '/../..' . '/app/front/index/controllers/IndexController.php',
        'app\\front\\sql\\controllers\\IndexController' => __DIR__ . '/../..' . '/app/front/sql/controllers/IndexController.php',
        'app\\front\\sql\\models\\AdminOperationLog' => __DIR__ . '/../..' . '/app/front/sql/models/AdminOperationLog.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc060feffb62aa5ddb4bc07e835600f49::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc060feffb62aa5ddb4bc07e835600f49::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInitc060feffb62aa5ddb4bc07e835600f49::$fallbackDirsPsr4;
            $loader->classMap = ComposerStaticInitc060feffb62aa5ddb4bc07e835600f49::$classMap;

        }, null, ClassLoader::class);
    }
}
