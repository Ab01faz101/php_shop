<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit13ecb94cee9d098850e83835f500eab2
{
    public static $files = array (
        '6eecb8d0f67636f8598fdd2e2a3c9ecf' => __DIR__ . '/../..' . '/app/Helpers/helper.php',
        'b2d49666e18bc4b7193bec4b5e908818' => __DIR__ . '/../..' . '/app/Helpers/ViewLoader.php',
        '5d23e20fcead6dfa609cebb10f754149' => __DIR__ . '/../..' . '/config/app.php',
        'bc53ba17a5346466d1400bc68e4b2fe1' => __DIR__ . '/../..' . '/config/database.php',
    );

    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Core\\' => 5,
        ),
        'A' => 
        array (
            'App\\Models\\' => 11,
            'App\\Http\\Controllers\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Core',
        ),
        'App\\Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/Models',
        ),
        'App\\Http\\Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/Http/Controllers',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit13ecb94cee9d098850e83835f500eab2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit13ecb94cee9d098850e83835f500eab2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit13ecb94cee9d098850e83835f500eab2::$classMap;

        }, null, ClassLoader::class);
    }
}
