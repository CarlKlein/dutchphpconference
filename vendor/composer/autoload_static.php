<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd9b6869ba6904d4bea425bf49436fe09
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Carl\\Greet\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Carl\\Greet\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd9b6869ba6904d4bea425bf49436fe09::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd9b6869ba6904d4bea425bf49436fe09::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}