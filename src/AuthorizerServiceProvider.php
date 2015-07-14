<?php

namespace Winponta\Authorizer;

use Illuminate\Support\ServiceProvider;

class AuthorizerServiceProvider extends ServiceProvider {

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot() {
        if (!$this->app->routesAreCached()) {
            require __DIR__ . '/Http/routes.php';
        }

        $this->loadViewsFrom(__DIR__ . '/resources/views', 'authorizer');

        $this->loadTranslationsFrom(__DIR__ . '/resources/lang', 'authorizer');

        $this->publishes([
            __DIR__ . '/config/authorizer.php' => config_path('authorizer.php'),
        ], 'config');
        
        $this->publishes([
            __DIR__ . '/database/migrations/' => database_path('migrations'),
        ], 'migrations');
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register() {
        $this->mergeConfigFrom(
                __DIR__ . '/config/authorizer.php', 'authorizer'
        );
    }

}
