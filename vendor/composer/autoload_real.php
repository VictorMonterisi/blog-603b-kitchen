<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitafc476a3245fb58b4d8235f2dc04bd2a
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

        spl_autoload_register(array('ComposerAutoloaderInitafc476a3245fb58b4d8235f2dc04bd2a', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitafc476a3245fb58b4d8235f2dc04bd2a', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitafc476a3245fb58b4d8235f2dc04bd2a::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
