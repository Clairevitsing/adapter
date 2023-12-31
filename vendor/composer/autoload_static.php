<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitddfa7360703315f366483f99e7dac630
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'Vitsi\\Adapter\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Vitsi\\Adapter\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitddfa7360703315f366483f99e7dac630::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitddfa7360703315f366483f99e7dac630::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitddfa7360703315f366483f99e7dac630::$classMap;

        }, null, ClassLoader::class);
    }
}
