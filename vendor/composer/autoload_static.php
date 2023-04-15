<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7229da4a3a2e19ab8c0e7dc95f540dc2
{
    public static $prefixLengthsPsr4 = array (
        'd' => 
        array (
            'douggonsouza\\routes\\' => 20,
            'douggonsouza\\request\\' => 21,
            'douggonsouza\\regexed\\' => 21,
            'douggonsouza\\propertys\\' => 23,
            'douggonsouza\\mvc\\' => 17,
            'douggonsouza\\logged\\' => 20,
            'douggonsouza\\language\\' => 22,
            'douggonsouza\\imwvg\\' => 19,
            'douggonsouza\\html\\' => 18,
            'douggonsouza\\gentelela\\' => 23,
            'douggonsouza\\genpermissions\\' => 28,
            'douggonsouza\\genalerts\\' => 23,
            'douggonsouza\\etl\\' => 17,
            'douggonsouza\\downloads\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'douggonsouza\\routes\\' => 
        array (
            0 => __DIR__ . '/..' . '/douggonsouza/routes/src',
        ),
        'douggonsouza\\request\\' => 
        array (
            0 => __DIR__ . '/..' . '/douggonsouza/request/src',
        ),
        'douggonsouza\\regexed\\' => 
        array (
            0 => __DIR__ . '/..' . '/douggonsouza/regexed/src',
        ),
        'douggonsouza\\propertys\\' => 
        array (
            0 => __DIR__ . '/..' . '/douggonsouza/propertys/src',
        ),
        'douggonsouza\\mvc\\' => 
        array (
            0 => __DIR__ . '/..' . '/douggonsouza/mvc/src',
        ),
        'douggonsouza\\logged\\' => 
        array (
            0 => __DIR__ . '/..' . '/douggonsouza/logged/src',
        ),
        'douggonsouza\\language\\' => 
        array (
            0 => __DIR__ . '/..' . '/douggonsouza/language/src',
        ),
        'douggonsouza\\imwvg\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'douggonsouza\\html\\' => 
        array (
            0 => __DIR__ . '/..' . '/douggonsouza/html/src',
        ),
        'douggonsouza\\gentelela\\' => 
        array (
            0 => __DIR__ . '/..' . '/douggonsouza/gentelela/src',
        ),
        'douggonsouza\\genpermissions\\' => 
        array (
            0 => __DIR__ . '/..' . '/douggonsouza/genpermissions/src',
        ),
        'douggonsouza\\genalerts\\' => 
        array (
            0 => __DIR__ . '/..' . '/douggonsouza/genalerts/src',
        ),
        'douggonsouza\\etl\\' => 
        array (
            0 => __DIR__ . '/..' . '/douggonsouza/etl/src',
        ),
        'douggonsouza\\downloads\\' => 
        array (
            0 => __DIR__ . '/..' . '/douggonsouza/downloads/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7229da4a3a2e19ab8c0e7dc95f540dc2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7229da4a3a2e19ab8c0e7dc95f540dc2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7229da4a3a2e19ab8c0e7dc95f540dc2::$classMap;

        }, null, ClassLoader::class);
    }
}
