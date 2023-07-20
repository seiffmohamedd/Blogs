<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8a4343bc014c39f97c1f277fbf2519ce
{
    public static $files = array (
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Ctype\\' => 23,
            'Symfony\\Component\\Yaml\\' => 23,
            'Spatie\\YamlFrontMatter\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Symfony\\Component\\Yaml\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/yaml',
        ),
        'Spatie\\YamlFrontMatter\\' => 
        array (
            0 => __DIR__ . '/..' . '/spatie/yaml-front-matter/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8a4343bc014c39f97c1f277fbf2519ce::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8a4343bc014c39f97c1f277fbf2519ce::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8a4343bc014c39f97c1f277fbf2519ce::$classMap;

        }, null, ClassLoader::class);
    }
}
