<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2772d41cb50c1e9fad052ea83592319a
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Suraj\\Framework\\' => 16,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Suraj\\Framework\\' => 
        array (
            0 => __DIR__ . '/../..' . '/framework',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2772d41cb50c1e9fad052ea83592319a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2772d41cb50c1e9fad052ea83592319a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2772d41cb50c1e9fad052ea83592319a::$classMap;

        }, null, ClassLoader::class);
    }
}
