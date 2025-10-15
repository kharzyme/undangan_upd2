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

        // --- FIX 2: Perbaikan direktori build Vite ---
        if ($this->app->environment('production')) {
            // Pastikan Vite mencari manifest di folder yang benar
            app(Vite::class)->useBuildDirectory('build');

            // (Opsional) Jika file JS/CSS masih tidak muncul,
            // kamu bisa tambahkan base URL seperti ini:
            // app(Vite::class)->withBaseUrl('/build');
        }
    }
}
