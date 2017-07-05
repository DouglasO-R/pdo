<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb854cfc3dcb3da9d5908b0b470e1e9f7
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Source\\' => 7,
        ),
        'P' => 
        array (
            'Psr\\Container\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Source',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Pimple' => 
            array (
                0 => __DIR__ . '/..' . '/pimple/pimple/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb854cfc3dcb3da9d5908b0b470e1e9f7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb854cfc3dcb3da9d5908b0b470e1e9f7::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitb854cfc3dcb3da9d5908b0b470e1e9f7::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
