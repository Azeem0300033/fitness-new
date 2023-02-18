<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitaf7dab863713aaeb10e369ead0d2ed9d
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitaf7dab863713aaeb10e369ead0d2ed9d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitaf7dab863713aaeb10e369ead0d2ed9d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitaf7dab863713aaeb10e369ead0d2ed9d::$classMap;

        }, null, ClassLoader::class);
    }
}