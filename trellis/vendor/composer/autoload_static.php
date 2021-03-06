<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit34271a71478ad439e8f8b7c7c4d7b5e4
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit34271a71478ad439e8f8b7c7c4d7b5e4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit34271a71478ad439e8f8b7c7c4d7b5e4::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
