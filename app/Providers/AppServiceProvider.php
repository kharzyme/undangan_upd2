<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;
// --- WAJIB: Import kelas Vite ---
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
        // --- FIX 1: Memaksa HTTPS untuk Vercel ---
        if ($this->app->environment('production')) {
            URL::forceScheme('https');
        }
        
        // --- FIX 2: Vercel Workaround untuk Vite Manifest ---
        // Kita paksa Vite menggunakan direktori build yang benar
        // tanpa bergantung pada asumsi path Vercel.
        if ($this->app->environment('production')) {
            // Kita asumsikan direktori build adalah 'public/build'
            Vite::useBuildDirectory('public/build');
            
            // Opsional, jika masih gagal, gunakan base path secara eksplisit
            // Vite::withBaseUrl('/build'); 
        }
        // ----------------------------------------------------
    }
}