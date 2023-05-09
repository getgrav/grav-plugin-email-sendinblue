<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit443c09493f822f551ba299a96fad4ad2
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Component\\Mailer\\Bridge\\Sendinblue\\' => 43,
        ),
        'G' => 
        array (
            'Grav\\Plugin\\EmailSendinblue\\' => 28,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Component\\Mailer\\Bridge\\Sendinblue\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/sendinblue-mailer',
        ),
        'Grav\\Plugin\\EmailSendinblue\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Grav\\Plugin\\EmailSendinbluePlugin' => __DIR__ . '/../..' . '/email-sendinblue.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit443c09493f822f551ba299a96fad4ad2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit443c09493f822f551ba299a96fad4ad2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit443c09493f822f551ba299a96fad4ad2::$classMap;

        }, null, ClassLoader::class);
    }
}