<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit19ef48444fe6ea1d3703ddc927045514
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Manifesto\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Manifesto\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
    );

    public static $classMap = array (
        'AltoRouter' => __DIR__ . '/..' . '/altorouter/altorouter/AltoRouter.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit19ef48444fe6ea1d3703ddc927045514::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit19ef48444fe6ea1d3703ddc927045514::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit19ef48444fe6ea1d3703ddc927045514::$classMap;

        }, null, ClassLoader::class);
    }
}
