<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1cfbcd9b77c1a1f488656d4525cfb968
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'DigitalStar\\vk_api\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'DigitalStar\\vk_api\\' => 
        array (
            0 => __DIR__ . '/..' . '/digitalstars/simplevk/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1cfbcd9b77c1a1f488656d4525cfb968::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1cfbcd9b77c1a1f488656d4525cfb968::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
