<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit66fea6b3f0616535255bae54d45fe31d
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit66fea6b3f0616535255bae54d45fe31d::$classMap;

        }, null, ClassLoader::class);
    }
}
