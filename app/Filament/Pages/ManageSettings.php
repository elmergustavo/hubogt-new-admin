<?php

namespace App\Filament\Pages;

use Closure;

use App\Settings\EntitySettings;


use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Facades\Filament;
use Filament\Pages\SettingsPage;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;

use Illuminate\Support\HtmlString;
use Filament\Forms\Components\RichEditor;
use Illuminate\Support\Facades\Http;
use Filament\Forms\Components\Grid;



// use BezhanSalleh\FilamentShield\Traits\HasPageShield;

class ManageSettings extends SettingsPage
{
    // use HasPageShield;

    protected static string $settings         = EntitySettings::class;
    protected static ?int $navigationSort     = 10;
    protected static ?string $navigationIcon  = 'heroicon-o-cog';
    protected static ?string $navigationGroup = 'Configuración Tienda';

    public function getTitle(): string
    {
        return trans(__('Configuración de la tienda'));
    }

    public static function getNavigationLabel(): string
    {
        return trans(__('Configuración'));
    }

    protected function getFormSchema(): array
    {
        return [
            Tabs::make('Settings')
                ->tabs([
                    Tabs\Tab::make(__('Información General'))
                        ->icon('entypo-shop')
                        ->schema([
                            Section::make('Información de la tienda')
                                ->description('Sección que es BUHOGT')
                                ->collapsible()
                                ->schema([
                                    Grid::make([
                                        'default' => 1,
                                        'sm' => 2,
                                        'md' => 3,
                                        'lg' => 4,
                                        'xl' => 6,
                                        '2xl' => 4,
                                    ])
                                        ->schema([
                                            TextInput::make('title')
                                                ->label(__('Titulo Principal'))
                                                // ->prefixIcon('heroicon-o-finger-print')
                                                ->required()
                                                // ->helperText(__('settings.tab_general.name_description'))
                                                ->columnSpan(2),
                                            TextInput::make('subtitle')
                                                ->label(__('Titulo secundario'))
                                                // ->prefixIcon('heroicon-o-finger-print')
                                                ->required()
                                                // ->helperText(__('settings.tab_general.name_description'))
                                                ->columnSpan(2),
                                        ]),

                                    TextInput::make('title_column1')
                                        ->label(__('Titulo'))
                                        // ->prefixIcon('heroicon-o-finger-print')
                                        ->required()
                                        ->helperText(__('Titulo primera columna'))
                                        ->columnSpan(2),

                                    RichEditor::make('description_column1')
                                        // ->hint('Translatable')
                                        ->label(__('Descripción columna 1'))
                                        ->hintColor('primary'),

                                    TextInput::make('title_column2')
                                        ->label(__('Titulo'))
                                        // ->prefixIcon('heroicon-o-finger-print')
                                        ->required()
                                        ->helperText(__('Titulo segunda columna'))
                                        ->columnSpan(2),

                                    RichEditor::make('description_column2')
                                        // ->hint('Translatable')
                                        ->label(__('Descripción columna 2'))
                                        ->hintColor('primary'),
                                    TextInput::make('title_column3')
                                        ->label(__('Titulo'))
                                        // ->prefixIcon('heroicon-o-finger-print')
                                        ->required()
                                        ->helperText(__('Titulo tercera columna'))
                                        ->columnSpan(2),

                                    RichEditor::make('description_column3')
                                        ->hint('Translatable')
                                        ->label(__('Descripción columna 3'))
                                        ->hintColor('primary')

                                ])
                        ]),
                    Tabs\Tab::make(__('Landin Page'))
                        ->icon('heroicon-o-map-pin')
                        ->schema([])
                        ->columns(3)
                        ->inlineLabel(),
                    Tabs\Tab::make(__(''))
                        ->icon('heroicon-o-building-library')
                        ->schema([
                            Card::make()
                                ->schema([])
                                ->columns(3)
                                ->inlineLabel()
                        ]),
                    Tabs\Tab::make(__('Pasarela de pagos'))
                        ->icon('heroicon-o-credit-card')
                        ->schema([
                            Card::make()
                                ->schema([])
                                ->columns(3)
                        ]),
                    Tabs\Tab::make(__('Permisos'))
                        ->icon('heroicon-o-user-circle')
                        ->schema([
                            Card::make()
                                ->schema([])
                                ->columns(3)
                                ->inlineLabel(),
                        ]),
                ])->columnSpan('full')
        ];
    }
}
