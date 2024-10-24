<?php

namespace Wzrd\HorusDomain;

use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
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
use Wzrd\HorusDomain\Filament\Plugins\HorusPlugin;

class HorusPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->id('horus')
            ->path('horus_customers')
            ->login()
            ->colors([
                'primary' => Color::Cyan,
            ])
            ->authGuard('horus_customers')
            ->passwordReset()
            ->maxContentWidth('full')
            ->authPasswordBroker('horus_customers')
            ->discoverResources(in: app_path('Filament/Horus/Resources'), for: 'App\\Filament\\Horus\\Resources')
            ->discoverPages(in: app_path('Filament/Horus/Pages'), for: 'App\\Filament\\Horus\\Pages')
            ->pages([])
            ->discoverWidgets(in: app_path('Filament/Horus/Widgets'), for: 'App\\Filament\\Horus\\Widgets')
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
            ->plugins([HorusPlugin::make()]);
    }
}
