<?php

namespace LaravelEditorJs;

use Illuminate\Support\ServiceProvider;

class LaravelEditorJsProvider extends ServiceProvider
{
    /**
    * Bootstrap any package services.
    *
    * @return void
    */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-editor-js');

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/laravel-editor-js'),
        ], 'laravel-editor-js-views');

        $this->publishes([
            __DIR__.'/../config/laravel-editor-js.php' => config_path('laravel-editor-js.php'),
        ], 'laravel-editor-js-config');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/laravel-editor-js.php', 'laravel-editor-js'
        );
    }
}