<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit312e03045d36f3390e584a82c25a5a5b
{
    public static $prefixLengthsPsr4 = array (
        'Y' => 
        array (
            'Yazid\\ComposerQuest3\\' => 21,
        ),
        'C' => 
        array (
            'CowSay\\Traits\\' => 14,
            'CowSay\\Core\\' => 12,
            'CowSay\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Yazid\\ComposerQuest3\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'CowSay\\Traits\\' => 
        array (
            0 => __DIR__ . '/..' . '/gipetto/cowsay/src/Traits',
        ),
        'CowSay\\Core\\' => 
        array (
            0 => __DIR__ . '/..' . '/gipetto/cowsay/src/Core',
        ),
        'CowSay\\' => 
        array (
            0 => __DIR__ . '/..' . '/gipetto/cowsay/src/Carcases',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit312e03045d36f3390e584a82c25a5a5b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit312e03045d36f3390e584a82c25a5a5b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit312e03045d36f3390e584a82c25a5a5b::$classMap;

        }, null, ClassLoader::class);
    }
}
