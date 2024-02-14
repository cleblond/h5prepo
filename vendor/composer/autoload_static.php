<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit810df67247146ebe6752ce26ec0ba0ed
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'Grav\\Plugin\\H5prepo\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Grav\\Plugin\\H5prepo\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Grav\\Plugin\\H5prepoPlugin' => __DIR__ . '/../..' . '/h5prepo.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit810df67247146ebe6752ce26ec0ba0ed::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit810df67247146ebe6752ce26ec0ba0ed::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit810df67247146ebe6752ce26ec0ba0ed::$classMap;

        }, null, ClassLoader::class);
    }
}