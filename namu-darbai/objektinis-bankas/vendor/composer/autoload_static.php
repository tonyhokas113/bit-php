<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4520fe2189a835f81a248ebfcad4989b
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Bank\\' => 5,
        ),
        'A' => 
        array (
            'App\\DB\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Bank\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'App\\DB\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit4520fe2189a835f81a248ebfcad4989b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4520fe2189a835f81a248ebfcad4989b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4520fe2189a835f81a248ebfcad4989b::$classMap;

        }, null, ClassLoader::class);
    }
}
