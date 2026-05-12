<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

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
        // Block Japanese spam URLs (e.g., ?item/123 or ?item=123)
        $queryString = request()->getQueryString();
        if ($queryString && str_contains($queryString, 'item')) {
            abort(404);
        }
    }
}
