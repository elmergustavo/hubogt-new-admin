<?php

namespace App\Providers\Filament;

use App\Filament\App\Pages\RegisterTeam;
use App\Filament\Pages\Auth\Login;
use App\Models\Team;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Panel;
use Filament\Pages;
use App\Filament\Pages\Dashboard;
use App\Http\Middleware\RoleMiddleware;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets;
use Filament\Support\Enums\MaxWidth;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class AppPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            // ->default()
            ->default()
            ->id('app')
            ->path('admin')
            ->login(Login::class)
            // ->registration()
            ->passwordReset()
            ->emailVerification()
            ->brandLogo(fn () => view('filament.admin.logo'))
            ->brandLogoHeight('3rem')
            ->colors([
                'primary' => '#252a61',
                // 'gray' => Color::Gray,

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
            // RoleMiddleware::class,
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
}
