<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitbdce3e334b44fd1f62078bf11e2d34a9
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

        spl_autoload_register(array('ComposerAutoloaderInitbdce3e334b44fd1f62078bf11e2d34a9', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitbdce3e334b44fd1f62078bf11e2d34a9', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitbdce3e334b44fd1f62078bf11e2d34a9::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
