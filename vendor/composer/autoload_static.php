<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit60de537006109aeaefe3d2e796ff1abf
{
    public static $files = array (
        '861cf5a9b886ce66ad24d914e609fc18' => __DIR__ . '/../..' . '/field.php',
    );

    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Carbon_Field_Leaflet_Map\\' => 25,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Carbon_Field_Leaflet_Map\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit60de537006109aeaefe3d2e796ff1abf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit60de537006109aeaefe3d2e796ff1abf::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit60de537006109aeaefe3d2e796ff1abf::$classMap;

        }, null, ClassLoader::class);
    }
}