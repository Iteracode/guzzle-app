<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9acc001dcf2102cb5192b864167db669
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Component\\EventDispatcher\\' => 34,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Component\\EventDispatcher\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/event-dispatcher',
        ),
    );

    public static $prefixesPsr0 = array (
        'G' => 
        array (
            'Guzzle\\Tests' => 
            array (
                0 => __DIR__ . '/..' . '/guzzle/guzzle/tests',
            ),
            'Guzzle' => 
            array (
                0 => __DIR__ . '/..' . '/guzzle/guzzle/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9acc001dcf2102cb5192b864167db669::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9acc001dcf2102cb5192b864167db669::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit9acc001dcf2102cb5192b864167db669::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
