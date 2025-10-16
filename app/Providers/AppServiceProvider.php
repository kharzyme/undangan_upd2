<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;
use Illuminate\Foundation\Vite;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // --- FIX 1: Paksa HTTPS untuk production (Vercel) ---
        if ($this->app->environment('production')) {
            URL::forceScheme('https');
        }

        // --- FIX 2: Pastikan Vite pakai folder build ---
        if ($this->app->environment('production')) {
            $vite = app(Vite::class);
            $vite->useBuildDirectory('build');
        }
    }
}
