<?php

namespace App\Providers\Filament;

use App\Filament\Pages\Auth\Login;
use App\Filament\Pages\Dashboard;
use App\Http\Middleware\Authenticate;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Support\Colors\Color;
use Filament\Pages;
use Filament\Panel;
use Filament\Support\Facades\FilamentView;
use Filament\PanelProvider;
use Illuminate\Support\Facades\Blade;
use Filament\Widgets;
use App\Models\Team;
use App\Filament\App\Pages\RegisterTeam;
use App\Http\Middleware\RoleMiddleware;
use Filament\Support\Enums\MaxWidth;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            // ->default()
            ->id('administrador')
            ->path('administrador')
            ->login(Login::class)
            // ->registration()
            ->passwordReset()
            ->emailVerification()
            ->brandLogo(asset('images/logo_horizontal.svg'))
            ->brandLogoHeight('3rem')
            ->colors([
                'primary' => '#252a61',
                'gray' => Color::Gray,

            ])
            // ->font('Nunito')
            // ->topNavigation();
            ->authGuard('web')
            ->maxContentWidth(MaxWidth::ScreenTwoExtraLarge)
            ->favicon(asset('images/favicon.ico'))
            ->viteTheme('resources/css/filament/admin/theme.css')
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
                Widgets\AccountWidget::class,
                // Widgets\FilamentInfoWidget::class,
            ])
            ->navigationGroups([
                'Shop',
                'Blog',
            ])
            ->plugin(
                \Hasnayeen\Themes\ThemesPlugin::make()
            )
            ->databaseNotifications()
            // ->tenant(Team::class)
            // ->tenantRegistration(RegisterTeam::class)
            ->middleware([
            // \Hasnayeen\Themes\Http\Middleware\SetTheme::class,
            RoleMiddleware::class,
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
            // ->tenantMiddleware([
            //     \Hasnayeen\Themes\Http\Middleware\SetTheme::class,
            // ])
            ->authMiddleware([
                Authenticate::class,
            ]);
    }

    public function register(): void
    {
        parent::register();
        FilamentView::registerRenderHook('panels::body.end', fn (): string => Blade::render("@vite('resources/js/app.js')"));
        // FilamentView::registerRenderHook('panels::body.end', fn(): string => Blade::render("@vite('resources/css/app.css')"));
    }
}
