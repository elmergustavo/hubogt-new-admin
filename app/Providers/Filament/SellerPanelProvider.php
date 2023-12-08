<?php

namespace App\Providers\Filament;

use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages;
use App\Filament\Pages\Auth\Login;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Support\Facades\FilamentView;
use Filament\Navigation\MenuItem;
use Filament\Widgets;
use Filament\Support\Enums\MaxWidth;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Support\Facades\Blade;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class SellerPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->id('seller')
            ->path('vendedor')
            ->login(Login::class)
            ->registration()
            ->passwordReset()
            ->emailVerification()
            // ->brandLogo(asset('images/logo_horizontal.svg'))
            ->brandLogo(fn () => view('filament.admin.logo'))
            ->brandLogoHeight('3rem')
            ->colors([
                'primary' => '#252a61',
                // 'gray' => Color::Gray,
            ])
            // ->font('Nunito')
            ->authGuard('web')
            ->favicon(asset('images/favicon.ico'))
            ->discoverResources(in: app_path('Filament/Seller/Resources'), for: 'App\\Filament\\Seller\\Resources')
            ->discoverPages(in: app_path('Filament/Seller/Pages'), for: 'App\\Filament\\Seller\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->viteTheme('resources/css/filament/admin/theme.css')
            // ->discoverWidgets(in: app_path('Filament/Seller/Widgets'), for: 'App\\Filament\\Seller\\Widgets')
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
                Widgets\AccountWidget::class,
                // Widgets\FilamentInfoWidget::class,
            ])
            ->navigationGroups([
                'Shop',
                'Marketing'
                // 'Blog',
            ])
            // ->plugin(
            //     \Hasnayeen\Themes\ThemesPlugin::make()
            // )
            // ->collapsibleNavigationGroups(false)

            ->databaseNotifications()
            ->sidebarCollapsibleOnDesktop()
            ->profile()
            ->authPasswordBroker('users')
            ->maxContentWidth(MaxWidth::ScreenTwoExtraLarge)
            // ->spa()

            // ->userMenuItems([
            //     'profile' => MenuItem::make()->label('Edit profile'),
            //     // ...
            // ])
            // ->sidebarFullyCollapsibleOnDesktop()
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
            ]);
    }

    public function register(): void
    {
        parent::register();
        FilamentView::registerRenderHook('panels::body.end', fn (): string => Blade::render("@vite('resources/js/app.js')"));
        // FilamentView::registerRenderHook('panels::body.end', fn (): string => Blade::render("@vite('resources/css/app.css')"));
    }
}
