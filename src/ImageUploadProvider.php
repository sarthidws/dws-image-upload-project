<?php

namespace Dwsproduct\ImageUpload;

use Illuminate\Support\ServiceProvider;

class ImageUploadProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');

        // Load migrations
        $this->loadMigrationsFrom(__DIR__ . '/Database/migrations');

        // Load views
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'imageupload');

        // Publish configuration file
        $this->publishes(
            [
                __DIR__ . '/Config/imageupload.php' => config_path('imageupload.php'),
            ],
            'config',
        );

        // Publish views
        $this->publishes(
            [
                __DIR__ . '/resources/views' => resource_path('views/vendor/imageupload'),
            ],
            'views',
        );

        // Optionally, you might want to publish assets
        $this->publishes(
            [
                __DIR__ . '/resources/assets' => public_path('vendor/imageupload'),
            ],
            'public',
        );
    }
}
