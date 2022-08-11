<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite89cf245a0970b1ff02ec5c6ae3a1a05
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite89cf245a0970b1ff02ec5c6ae3a1a05::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite89cf245a0970b1ff02ec5c6ae3a1a05::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite89cf245a0970b1ff02ec5c6ae3a1a05::$classMap;

        }, null, ClassLoader::class);
    }
}