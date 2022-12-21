<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit66fea6b3f0616535255bae54d45fe31d
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit66fea6b3f0616535255bae54d45fe31d', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit66fea6b3f0616535255bae54d45fe31d', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit66fea6b3f0616535255bae54d45fe31d::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}