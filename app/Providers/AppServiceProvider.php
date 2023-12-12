<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;
use LaraZeus\Sky\Filament\Resources\PostResource;

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
       
        PostResource::navigationSort(100);
        PostResource::navigationIcon('heroicon-o-home');
        PostResource::navigationGroup('New Name');
    }
}
