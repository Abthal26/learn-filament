<?php

namespace App\Providers\Filament;

use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use LaraZeus\Sky\SkyPlugin;
use Filament\SpatieLaravelTranslatablePlugin;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->colors([
                'primary' => Color::Amber,
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
                Widgets\AccountWidget::class,
                Widgets\FilamentInfoWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ])
            ->plugins([
                SpatieLaravelTranslatablePlugin::make()
                    ->defaultLocales([config('app.locale')]),
                SkyPlugin::make()
                    ->navigationGroupLabel('Sky')
                // uploading config
                    ->uploadDisk('zeus-sky')
                    ->uploadDirectory('zeus-sky')
                    ->skyModels([
                        // ...
                        'Tag' => \LaraZeus\Sky\Models\Tag::class,
                    ])
                    ->tagTypes([
                        'tag' => 'Tag',
                        'category' => 'Category',
                        'library' => 'Library',
                        'faq' => 'Faq',
                    ])
                       // disable a Resource, if you dont use it, or want to replace them with your own resource
                    ->postResource()
                    ->pageResource()
                    ->faqResource()
                    ->libraryResource()
                    ->tagResource()
                    ->navigationResource()
 
                      // hide a Resource, if you need to register them, but want to hide them from the sidebar navigation
                    


            ]);
            
           
       
    }
}

/*class FilamentServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Filament::serving(function () {
            SpatieLaravelTranslatablePlugin::make()
                ->defaultLocales([config('app.locale')]);
               
            
            SkyPlugin::make()
                ->navigationGroupLabel('Sky')
                ->uploadDisk("app.locale")
                ->uploadDirectory("app.locale")
                ->skyModels([
                    // ...
                    'Tag' => \LaraZeus\Sky\Models\Tag::class,
                ])
                ->tagTypes([
                    'tag' => 'Tag',
                    'category' => 'Category',
                    'library' => 'Library',
                    'faq' => 'Faq',
                ])
                ->postResource('heroicon-o-home')
                ->pageResource('heroicon-o-home')
                ->faqResource('heroicon-o-home')
                ->libraryResource('heroicon-o-home')
                ->tagResource('heroicon-o-home')
                ->navigationResource()
                ->hideResources([
                    FaqResource::class,
                ]);
        });
    }
}
use Filament\Pages;
use Filament\Panel;
use Filament\Widgets;
use Filament\PanelProvider;
use Filament\Facades\Filament;
use Filament\Support\Colors\Color;
use Illuminate\Support\ServiceProvider;
use Filament\Http\Middleware\Authenticate;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Gecche\Multidomain\Foundation\Application;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use LaraZeus\Sky\SkyPlugin;
use Filament\SpatieLaravelTranslatablePlugin;*/