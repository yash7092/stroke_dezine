<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

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
        // Force HTTPS in production or when request is secure
        if ($this->app->environment('production') || request()->isSecure()) {
            URL::forceScheme('https');
        }
        
        // Also force HTTPS if we detect ngrok or other tunneling services
        if (str_contains(request()->getHost(), 'ngrok') || 
            str_contains(request()->getHost(), 'tunnel') ||
            request()->header('X-Forwarded-Proto') === 'https') {
            URL::forceScheme('https');
        }
    }
}
