<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit79e3da5a16fbde6708adc280505078da
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit79e3da5a16fbde6708adc280505078da::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit79e3da5a16fbde6708adc280505078da::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit79e3da5a16fbde6708adc280505078da::$classMap;

        }, null, ClassLoader::class);
    }
}
