<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit265c2d22c4d6d08ac3d59a4c316e562f
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Modules\\Pageextension\\' => 22,
            'Modules\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Modules\\Pageextension\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
            1 => __DIR__ . '/../..' . '/',
        ),
        'Modules\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Modules',
        ),
    );

    public static $classMap = array (
        'Modules\\Pageextension\\Database\\Seeders\\PageextensionDatabaseSeeder' => __DIR__ . '/../..' . '/Database/Seeders/PageextensionDatabaseSeeder.php',
        'Modules\\Pageextension\\Entities\\PageExtension' => __DIR__ . '/../..' . '/Entities/PageExtension.php',
        'Modules\\Pageextension\\Entities\\PageExtensionTranslation' => __DIR__ . '/../..' . '/Entities/PageExtensionTranslation.php',
        'Modules\\Pageextension\\Http\\Controllers\\Admin\\PageExtensionController' => __DIR__ . '/../..' . '/Http/Controllers/Admin/PageExtensionController.php',
        'Modules\\Pageextension\\Providers\\EventServiceProvider' => __DIR__ . '/../..' . '/Providers/EventServiceProvider.php',
        'Modules\\Pageextension\\Providers\\PageextensionServiceProvider' => __DIR__ . '/../..' . '/Providers/PageextensionServiceProvider.php',
        'Modules\\Pageextension\\Providers\\RouteServiceProvider' => __DIR__ . '/../..' . '/Providers/RouteServiceProvider.php',
        'Modules\\Pageextension\\Repositories\\Cache\\CachePageExtensionDecorator' => __DIR__ . '/../..' . '/Repositories/Cache/CachePageExtensionDecorator.php',
        'Modules\\Pageextension\\Repositories\\Eloquent\\EloquentPageExtensionRepository' => __DIR__ . '/../..' . '/Repositories/Eloquent/EloquentPageExtensionRepository.php',
        'Modules\\Pageextension\\Repositories\\PageExtensionRepository' => __DIR__ . '/../..' . '/Repositories/PageExtensionRepository.php',
        'Modules\\Pageextension\\Sidebar\\SidebarExtender' => __DIR__ . '/../..' . '/Sidebar/SidebarExtender.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit265c2d22c4d6d08ac3d59a4c316e562f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit265c2d22c4d6d08ac3d59a4c316e562f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit265c2d22c4d6d08ac3d59a4c316e562f::$classMap;

        }, null, ClassLoader::class);
    }
}
