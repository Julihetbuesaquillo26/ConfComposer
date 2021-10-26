<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb202692bc18b8553fd9a5039f2237d8c
{
    public static $files = array (
        'b37edc69ed601dd8aab1a4df0ff2d9a0' => __DIR__ . '/../..' . '/src/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'text\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'text\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb202692bc18b8553fd9a5039f2237d8c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb202692bc18b8553fd9a5039f2237d8c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb202692bc18b8553fd9a5039f2237d8c::$classMap;

        }, null, ClassLoader::class);
    }
}
