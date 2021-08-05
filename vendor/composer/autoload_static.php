<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc33e2a3f593b55eab861fef057778982
{
    public static $classMap = array (
        'App\\App' => __DIR__ . '/../..' . '/app/core/App.php',
        'App\\Auth' => __DIR__ . '/../..' . '/app/core/Auth.php',
        'App\\ButtonItem' => __DIR__ . '/../..' . '/app/core/ButtonsList.php',
        'App\\ButtonList' => __DIR__ . '/../..' . '/app/core/ButtonsList.php',
        'App\\Database' => __DIR__ . '/../..' . '/app/core/Database.php',
        'App\\Models\\Drink' => __DIR__ . '/../..' . '/app/models/Drink.php',
        'App\\Models\\Ingredient' => __DIR__ . '/../..' . '/app/models/Ingredient.php',
        'App\\Models\\User' => __DIR__ . '/../..' . '/app/models/User.php',
        'App\\Request' => __DIR__ . '/../..' . '/app/core/Request.php',
        'App\\Router' => __DIR__ . '/../..' . '/app/core/Router.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitc33e2a3f593b55eab861fef057778982::$classMap;

        }, null, ClassLoader::class);
    }
}
