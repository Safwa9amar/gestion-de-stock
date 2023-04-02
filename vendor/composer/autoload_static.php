<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd79dfba9cb79c9abb0768dec3f85538a
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'GestionDeStock\\Astro\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'GestionDeStock\\Astro\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitd79dfba9cb79c9abb0768dec3f85538a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd79dfba9cb79c9abb0768dec3f85538a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd79dfba9cb79c9abb0768dec3f85538a::$classMap;

        }, null, ClassLoader::class);
    }
}