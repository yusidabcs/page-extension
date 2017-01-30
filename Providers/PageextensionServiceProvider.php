<?php namespace Modules\Pageextension\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Pageextension\Composers\PageExtensionComposer;

class PageextensionServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerBindings();

        view()->composer('page::admin.edit',PageExtensionComposer::class);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array();
    }

    private function registerBindings()
    {
        $this->app->bind(
            'Modules\Pageextension\Repositories\PageExtensionRepository',
            function () {
                $repository = new \Modules\Pageextension\Repositories\Eloquent\EloquentPageExtensionRepository(new \Modules\Pageextension\Entities\PageExtension());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Pageextension\Repositories\Cache\CachePageExtensionDecorator($repository);
            }
        );
// add bindings

    }
}
