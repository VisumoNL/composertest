<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit595178fdd4f8c93f0c818387b5a7943c
{
    public static $prefixesPsr0 = array (
        'H' => 
        array (
            'HelloWorld' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit595178fdd4f8c93f0c818387b5a7943c::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
