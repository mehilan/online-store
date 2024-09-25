<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class KeyFactoryServiceProvider extends ServiceProvider
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
        $this->registerMacros();
    }

    protected function registerMacros(): void
    {
        $this->app->singleton('key-factory', function () {
            return new \Domains\Shared\Models\Concerns\KeyFactory();
        });

        \Illuminate\Support\Str::macro('key', function (string $prefix, ?int $length = null) {
            return $this->app->make('key-factory')->generate($prefix, $length);
        });
    }
}
