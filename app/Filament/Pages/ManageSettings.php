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
use Filament\Support\RawJs;
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
                ->tabs([Tabs\Tab::make(__('Información de la empresa'))
                    ->icon('heroicon-o-identification')
                    ->schema([
                        TextInput::make('name')
                            ->label(__('Nombre de la empresa'))
                            ->prefixIcon('heroicon-o-finger-print')
                            ->required()
                            ->helperText(__('Este es el nombre que identifica a la empresa'))
                            ->columnSpan(2),
                        TextInput::make('location')
                            ->label(__('Ubicación'))
                            ->helperText(__('Ubicación de la empresa'))
                            ->prefixIcon('heroicon-m-map-pin')
                            ->rules([
                                function (Get $get)
                                {
                                    return function (string $attribute, $value, $fail) use ($get)
                                    {
                                        if ($get('name') == $get('location'))
                                            $fail(__('settings.tab_general.name_location_fail'));
                                    };
                                }
                            ])
                            ->columnSpan(2),
                        TextInput::make('email')
                            ->email()
                            ->regEx('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/')
                            ->label(__('Correo Electrónico'))
                            ->prefixIcon('heroicon-s-at-symbol')
                            ->helperText(__('Correo electrónico de tu empresa'))
                            ->columnSpan(2),
                        TextInput::make('phone')
                            ->tel()
                            ->minLength(8)
                            ->label(__('Teléfono'))
                            ->prefixIcon('heroicon-s-phone')
                            ->helperText(__('Teléfono con el que se comunican con tu empresa'))
                            ->mask('9999-9999')
                            ->columnSpan(2),
                        //------------------------------NEEDS FIXES----------------------------------
                        // Croppie::make('logo')
                        //     ->label(__('settings.tab_general.logo'))
                        //     ->disk('azure')
                        //     ->image()
                        //     ->directory('nomiplex/' . env('PLEX_APP', 'plex') . '_' .  tenant()->id)
                        //     ->preserveFilenames()
                        //     ->enableDownload()
                        //     ->imageResizeTargetWidth('800')
                        //     ->imageResizeTargetHeight('300')
                        //     ->helperText(__('settings.tab_general.logo_description'))
                        //     ->modalHeading(__('settings.tab_general.logo_modal_heading'))
                        //     ->modalSize('4xl')
                        //     ->keepOriginalSize()
                        //     ->enableOpen()
                        //     ->columnSpan(2),
                        TextInput::make('nit')
                            ->label(__('NIT'))
                            ->required()
                            ->live()
                            ->alphaNum()
                            ->numeric()
                            ->prefixIcon('heroicon-s-user')
                            ->helperText(__('El NIT de tu empresa. Al ingresar el NIT la razón social será completada automáticamente con el nombre registrado en la SAT.'))
                            ->mask(
                                RawJs::make(<<<'JS'
                                    $input.replace(/[^0-9k.]/g, '').replace(/(\..*?)\..*/g, '$1');
                                JS)
                            )
                            ->regEx('/^[0-9]{5}([0-9]){0,4}(-?[0-9kK]){1}$/')
                            ->afterStateUpdated(
                                function (Get $get, Set $set)
                                {
                                    if (config('app.env') == 'local')
                                    {
                                        $client = new \GuzzleHttp\Client(array(
                                            'verify' => false
                                        ));
                                    }
                                    else
                                    {
                                        $client = new \GuzzleHttp\Client;
                                    }
                                    try
                                    {

                                        $response = Http::withHeaders([
                                            'Accept'          => 'application/json',
                                            'X-Authorization' => env('FELPLEX_AUTHORIZATION_HEADER')
                                        ])->timeout(10)->get(env('FELPLEX_END_POINT') . 'entity/' . env('FELPLEX_ENTITY_ID') . '/' . 'find-exact/' . "NIT/{$get('nit')}");
                                        if ($response->successful())
                                        {
                                            if (isset($response['tax_name']))
                                            {
                                                $normalized_tax_name = str_replace(',', ' ', $response['tax_name']);
                                                $cleaned_tax_name    = trim(preg_replace('/\s\s+/', ' ', str_replace("\n", " ", $normalized_tax_name)));
                                                $set('legal_reason', $cleaned_tax_name);
                                            }
                                            else
                                            {
                                                $set('legal_reason', '');
                                            }
                                        }
                                        else
                                        {
                                            $set('legal_reason', '');
                                        }
                                    }
                                    catch (\GuzzleHttp\Exception\RequestException $e)
                                    {
                                        $set('legal_reason', '');
                                    }
                                }
                            )
                            ->columnSpan(2),
                        TextInput::make('legal_reason')
                            ->label(__('Razón social'))
                            ->prefixIcon('heroicon-m-building-office')
                            ->helperText(__('Razón social de tu empresa. Si el NIT no autocompleta la razón social de tu empresa, puedes ingresarla manualmente'))
                            ->columnSpan(2),
                    ])
                    ->columns(3)
                    ->inlineLabel(),
                Tabs\Tab::make(__('Información Home'))
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
