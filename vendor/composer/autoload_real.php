<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitafb88f07795991f8d431ad07f40b9991
{
    private static ?\Composer\Autoload\ClassLoader $loader = null;

    public static function loadClassLoader($class)
    {
        if (\Composer\Autoload\ClassLoader::class === $class) {
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

        spl_autoload_register(['ComposerAutoloaderInitafb88f07795991f8d431ad07f40b9991', 'loadClassLoader'], true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(['ComposerAutoloaderInitafb88f07795991f8d431ad07f40b9991', 'loadClassLoader']);

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitafb88f07795991f8d431ad07f40b9991::getInitializer($loader));

        $loader->register(true);

        $filesToLoad = \Composer\Autoload\ComposerStaticInitafb88f07795991f8d431ad07f40b9991::$files;
        $requireFile = \Closure::bind(static function ($fileIdentifier, $file) {
            if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
                $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

                require $file;
            }
        }, null, null);
        foreach ($filesToLoad as $fileIdentifier => $file) {
            $requireFile($fileIdentifier, $file);
        }

        return $loader;
    }
}
