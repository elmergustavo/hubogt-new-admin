<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;
use BezhanSalleh\PanelSwitch\PanelSwitch;


class AppServiceProvider extends ServiceProvider
{
      /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
          //
    }

      /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Model::unguard();

        PanelSwitch::configureUsing(function (PanelSwitch $panelSwitch)
        {
            $panelSwitch
                ->modalWidth('sm')
                ->slideOver()
                ->excludes([
                    'seller', 
                    'service', 
                    'administrador'
                ])
                ->icons([
                    'admin'            => 'eos-admin',
                    'seller-request'   => 'fas-sheet-plastic',
                    'customer-service' => 'ri-customer-service-2-fill',
                ], $asImage = false)
                ->labels([
                'admin'            => 'Admin',
                'seller-request'   => 'Solicitudes',
                'customer-service' => 'Servicio al Cliente'
                ]);
        });

        if (app()->environment('production'))
        {
            URL::forceScheme('https');
        }
    }
}
