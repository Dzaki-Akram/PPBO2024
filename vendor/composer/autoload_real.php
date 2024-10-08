<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit60bd5e57b916ff72c1b13b99f69d8777
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

        spl_autoload_register(array('ComposerAutoloaderInit60bd5e57b916ff72c1b13b99f69d8777', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit60bd5e57b916ff72c1b13b99f69d8777', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit60bd5e57b916ff72c1b13b99f69d8777::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
