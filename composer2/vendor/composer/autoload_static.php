<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite3af0da494582625c27f12654933df21
{
    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'Unitek\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Unitek\\' => 
        array (
            0 => __DIR__ . '/../..' . '/fuente',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite3af0da494582625c27f12654933df21::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite3af0da494582625c27f12654933df21::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
