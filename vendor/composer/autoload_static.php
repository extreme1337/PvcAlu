<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3e3c64d1ed352abf631bdd3a758a8b68
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
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3e3c64d1ed352abf631bdd3a758a8b68::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3e3c64d1ed352abf631bdd3a758a8b68::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}