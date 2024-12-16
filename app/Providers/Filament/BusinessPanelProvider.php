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
use App\Filament\Business\Pages\RegisterBusiness;
use App\Filament\Business\Pages\EditBusinessProfile;
use App\Models\Business;
use Filament\Navigation\MenuItem;
use Filament\Navigation\NavigationItem;
use Filament\Facades\Filament;

class BusinessPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->id('business')
            ->path('business')
            ->colors([
                //'primary' => '#92cace',
                'primary' => [
                    '50'=> '#f2f9f9',
                    '100'=> '#ddf0f0',
                    '200'=> '#bfe1e2',
                    '300'=> '#92cace',
                    '400'=> '#5eabb2',
                    '500'=> '#438f97',
                    '600'=> '#3a7580',
                    '700'=> '#34616a',
                    '800'=> '#315159',
                    '900'=> '#2d464c',
                    '950'=> '#1a2c32',
                ],

            ])
            ->favicon(asset('images/favicon.ico'))
            ->userMenuItems([
                MenuItem::make()
                    ->label(__('Admin Panel'))
                    ->visible(
                        fn () => auth()->user()->isAdmin()
                    )
                    ->url(fn () => route('filament.admin.pages.dashboard'))
                    ->icon('heroicon-s-cog-8-tooth'),
                MenuItem::make()
                    ->label(__('Account'))
                    ->visible(
                        fn () => true
                    )
                    ->url(fn () => route('filament.dashboard.pages.dashboard'))
                    ->icon('heroicon-o-user'),
            ])
            ->navigationItems([
                NavigationItem::make('Landing Page for Business')
                    ->sort(1)
                    ->url(fn () => url('/landing/' . Filament::getTenant()->slug), shouldOpenInNewTab: true)
                    ->icon('heroicon-o-link')
            ])
            ->navigationGroups([
                'Resources',
                'Feedback',
            ])
            ->discoverResources(in: app_path('Filament/Business/Resources'), for: 'App\\Filament\\Business\\Resources')
            ->discoverPages(in: app_path('Filament/Business/Pages'), for: 'App\\Filament\\Business\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->brandLogo(asset('images/logo-dark.png'))
            ->darkModeBrandLogo(asset('images/logo-light.png'))
            ->discoverWidgets(in: app_path('Filament/Business/Widgets'), for: 'App\\Filament\\Business\\Widgets')
            ->widgets([
                Widgets\AccountWidget::class,
                //Widgets\FilamentInfoWidget::class,
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
            ->tenant(Business::class, ownershipRelationship: 'business', slugAttribute: 'slug')
            ->tenantRegistration(RegisterBusiness::class)
            ->tenantProfile(EditBusinessProfile::class);
    }
}

