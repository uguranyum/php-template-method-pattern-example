<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit431fe7b1c91a7361e9af970ddd00c8e1
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit431fe7b1c91a7361e9af970ddd00c8e1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit431fe7b1c91a7361e9af970ddd00c8e1::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
