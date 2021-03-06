<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd7745b4d6a7cb0b2116a22642da8840d
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Monolog' => 
            array (
                0 => __DIR__ . '/..' . '/monolog/monolog/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd7745b4d6a7cb0b2116a22642da8840d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd7745b4d6a7cb0b2116a22642da8840d::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitd7745b4d6a7cb0b2116a22642da8840d::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
