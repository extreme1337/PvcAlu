<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3e3c64d1ed352abf631bdd3a758a8b68
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twig\\' => 5,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twig\\' => 
        array (
            0 => __DIR__ . '/..' . '/twig/twig/src',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $prefixesPsr0 = array (
        'U' => 
        array (
            'Upload' => 
            array (
                0 => __DIR__ . '/..' . '/codeguy/upload/src',
            ),
        ),
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3e3c64d1ed352abf631bdd3a758a8b68::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3e3c64d1ed352abf631bdd3a758a8b68::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit3e3c64d1ed352abf631bdd3a758a8b68::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
