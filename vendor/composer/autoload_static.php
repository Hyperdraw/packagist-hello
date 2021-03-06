<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit42a376eeb3124a158aaf795a97d3ef41
{
    public static $prefixLengthsPsr4 = array (
        'h' => 
        array (
            'hyperdraw\\hello\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'hyperdraw\\hello\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/hyperdraw/hello',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit42a376eeb3124a158aaf795a97d3ef41::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit42a376eeb3124a158aaf795a97d3ef41::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
