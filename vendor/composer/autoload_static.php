<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6a3738fd520425ed82f7c237714e0b0c
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'shop\\' => 5,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'shop\\' => 
        array (
            0 => __DIR__ . '/..' . '/shop/core',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6a3738fd520425ed82f7c237714e0b0c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6a3738fd520425ed82f7c237714e0b0c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}