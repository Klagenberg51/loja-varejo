<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd1e0b76751e298ce88a990b3631f6804
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'APP\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'APP\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitd1e0b76751e298ce88a990b3631f6804::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd1e0b76751e298ce88a990b3631f6804::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd1e0b76751e298ce88a990b3631f6804::$classMap;

        }, null, ClassLoader::class);
    }
}
