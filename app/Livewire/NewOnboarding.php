<?php

namespace App\Livewire;

use App\Helpers\DepartmentMunicipalityOptions;
use Livewire\Component;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Form;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Components\Actions\Action;
use Filament\Forms\Components\Select;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Illuminate\Support\HtmlString;
use Filament\Forms\Components\ViewField;
use Illuminate\Support\Facades\Blade;
use App\Forms\Components\CreateAccount;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\DatePicker;

use Filament\Forms\Components\Grid;
use Filament\Support\RawJs;
use Illuminate\Support\Facades\Http;

class NewOnboarding extends Component implements HasForms
{
    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill();
    }

    public function create(): void
    {
        dd($this->form->getState());
    }


    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Wizard::make([
                    Wizard\Step::make('Datos de contacto')
                        ->icon('mdi-store-edit')
                        // ->description('Registrate para comenzar a vender tus productos en Mombii')
                        ->schema([

                            Grid::make([
                                'default' => 1,
                                'sm' => 1,
                                'md' => 2,
                                // 'xl' => 2,

                            ])
                                ->schema([
                                    CreateAccount::make('sd')
                                        ->label('')
                                        ->view('forms.components.create-account')
                                        ->columnSpan(['default' => 1, 'sm' => 1, 'md' => 2, 'xl' => 2,]),
                                    TextInput::make('person')
                                        ->label('Nombre completo')
                                        ->prefixIcon('bi-person-fill')
                                        ->helperText('Ingrese aquí el nombre de la persona que administra la cuenta')
                                        ->required(),
                                    TextInput::make('phone1')
                                        ->tel()
                                        ->minLength(8)
                                        ->label(__('Número de teléfono'))
                                        ->prefix('+502')
                                        ->prefixIcon('heroicon-s-phone')
                                        ->helperText(__('Teléfono con el que se comunican con tu empresa'))
                                        ->mask('9999-9999')
                                        ->helperText('Ingrese aquí el número de teléfono donde notificaremos asuntos sobre ventas'),
                                    TextInput::make('email1')
                                        ->email()
                                        ->regEx('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/')
                                        ->label(__('Correo Electrónico'))
                                        ->prefixIcon('heroicon-s-at-symbol')
                                        ->helperText(__('Ingrese aquí el correo electrónico a donde notificaremos asuntos sobre ventas')),
                                    TextInput::make('name_shop')
                                        ->label('Nombre de la tienda')
                                        ->prefixIcon('bxs-store')
                                        ->placeholder(__('Escribe el nombre de tu tienda'))
                                        ->helperText(__('¡No te preocupes! Puedes usar un nombre temporal ahora y cambiarlo más adelante.'))
                                        ->required(),
                                    Select::make('department')
                                        ->label(__('Departamento'))
                                        ->prefixIcon('heroicon-s-globe-alt')
                                        ->requiredWith('municipality')
                                        ->options(DepartmentMunicipalityOptions::getDepartments())
                                        ->afterStateUpdated(fn (Set $set) => $set('municipality', ''))
                                        ->reactive()
                                        ->live()
                                        ->native(false)
                                        ->searchable()
                                        ->required(),
                                    Select::make('municipality')
                                        ->label(__('Municipio'))
                                        ->prefixIcon('heroicon-m-building-library')
                                        ->requiredWith('department')
                                        ->options(fn (Get $get) => DepartmentMunicipalityOptions::getMunicipality($get('department')))
                                        ->searchable()
                                        ->reactive()
                                        ->live()
                                        ->native(false)
                                        ->required(),
                                ])



                        ]),
                    Wizard\Step::make('Información del negocio')
                        ->icon('gmdi-add-business-r')
                        ->schema([
                            Grid::make([
                                'default' => 1,
                                'sm' => 1,
                                'md' => 2,
                                // 'xl' => 2,

                            ])
                                ->schema([
                                    Select::make('status')
                                        ->label('Régimen Tributario')
                                        ->native(false)
                                        ->options([
                                            'draft' => 'Empresa - Régimen general del IVA',
                                            'reviewing' => 'Personal individual - Régimen general del IVA',
                                            'published' => 'Personal individual - Pequeño contribuyente',
                                        ]),
                                    TextInput::make('adreess')

                                        ->label(__('Dirección fiscal del comercio'))
                                        // ->prefixIcon('heroicon-s-phone')
                                        ->helperText(__('Teléfono con el que se comunican con tu empresa'))

                                        ->helperText('Ingrese aquí la dirección fiscal del comercio'),
                                    // TextInput::make('nit')
                                    //     ->label('NIT')
                                    //     ->helperText('Ingrese aquí el NIT con el que realizará las facturas a sus clientes'),

                                    TextInput::make('nit')
                                        ->label(__('NIT'))
                                        ->required()
                                        ->live()
                                        ->alphaNum()
                                        ->numeric()
                                        ->prefixIcon('heroicon-s-user')
                                        ->helperText(__('Ingrese aquí el NIT con el que realizará las facturas a sus clientes'))
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
                                        ),
                                    TextInput::make('legal_reason')
                                        ->label(__('Razón social o nombre de la persona individual'))
                                        ->prefixIcon('heroicon-m-building-office')
                                        ->placeholder(__('Ingrese aquí el nombre que representará a su negocio en Mombii'))
                                        ->helperText(__('Razón social de tu negocio. Si el NIT no autocompleta la razón social de tu negocio, puedes ingresarla manualmente')),


                                    // TextInput::make('person')
                                    //     ->label('Razón social o nombre de la persona individual')
                                    // ->helperText('Ingrese aquí el nombre que representará a su negocio en Mombii'),


                                    TextInput::make('phone')
                                        ->tel()
                                        ->minLength(8)
                                        ->label(__('Teléfono'))
                                        ->prefix('+502')
                                        ->prefixIcon('heroicon-s-phone')
                                        ->helperText(__('Teléfono con el que se comunican con tu empresa'))
                                        ->mask('9999-9999')
                                        ->helperText('Ingrese aquí el número de telefono del tienda'),

                                    TextInput::make('email')
                                        ->email()
                                        ->regEx('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/')
                                        ->label(__('Correo Electrónico'))
                                        ->prefixIcon('heroicon-s-at-symbol')
                                        ->helperText(__('Ingrese aquí el correo de la tienda')),

                                    SpatieMediaLibraryFileUpload::make('avatar')
                                        ->label('Factura de servicios (agua, luz o teléfono)')
                                        // ->acceptedFileTypes(['application/pdf'])
                                        ->helperText('Cargue aquí una factura de servicio'),

                                    SpatieMediaLibraryFileUpload::make('rtu')
                                        ->label('RTU')
                                        ->acceptedFileTypes(['application/pdf'])
                                        ->helperText('Cargue aquí el RTU actualizado'),
                                ])

                        ]),
                    Wizard\Step::make('Representante Legal')
                        ->icon('fas-user-shield')
                        ->schema([
                            Grid::make([
                                'default' => 1,
                                'sm' => 1,
                                'md' => 2,
                                // 'xl' => 2,

                            ])
                                ->schema([
                                    TextInput::make('dpi')
                                        ->label(__('Número de DPI o pasaporte'))
                                        ->required()
                                        ->live()
                                        ->alphaNum()
                                        ->numeric()
                                        ->prefixIcon('heroicon-o-finger-print')
                                        ->helperText(__('El número de identificación debe de coindicir con el de la imagen cargada'))
                                        ->mask(
                                            RawJs::make(<<<'JS'
                                                $input.replace(/[^0-9k.]/g, '').replace(/(\..*?)\..*/g, '$1');
                                            JS)
                                        )
                                        // ->regEx('/^[0-9]{5}([0-9]){0,4}(-?[0-9kK]){1}$/')
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
                                                    ])->timeout(10)->get(env('FELPLEX_END_POINT') . 'entity/' . env('FELPLEX_ENTITY_ID') . '/' . 'find/' . "CUI/{$get('dpi')}");
                                                    if ($response->successful())
                                                    {
                                                        if (isset($response[0]['tax_name']))
                                                        {
                                                            $normalized_tax_name = str_replace(',', ' ', $response[0]['tax_name']);
                                                            $cleaned_tax_name    = trim(preg_replace('/\s\s+/', ' ', str_replace("\n", " ", $normalized_tax_name)));
                                                            $set('name_dpi', $cleaned_tax_name);
                                                        }
                                                        else
                                                        {
                                                            $set('name_dpi', '');
                                                        }
                                                    }
                                                    else
                                                    {
                                                        $set('name_dpi', '');
                                                    }
                                                }
                                                catch (\GuzzleHttp\Exception\RequestException $e)
                                                {
                                                    $set('name_dpi', '');
                                                }
                                            }
                                        ),
                                    TextInput::make('name_dpi')
                                        ->label(__('Nombre completo'))
                                        ->prefixIcon('heroicon-m-user')
                                        ->placeholder(__('Ingrese aquí el nombre completo del representate legal'))
                                        ->helperText(__('Si el DPI no autocompleta el nombre completo, puedes ingresarla manualmente')),
                                    TextInput::make('phone3')
                                        ->tel()
                                        ->minLength(8)
                                        ->label(__('Número de teléfono'))
                                        ->prefix('+502')
                                        ->prefixIcon('heroicon-s-phone')

                                        ->mask('9999-9999')
                                        ->helperText('Ingrese aquí el teléfono del representate legal'),
                                    TextInput::make('email')
                                        ->email()
                                        ->regEx('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/')
                                        ->label(__('Correo Electrónico'))
                                        ->prefixIcon('heroicon-s-at-symbol')
                                        ->helperText(__('Ingrese aquí el correo del representate legal')),
                                    DatePicker::make('date_of_birth')
                                        ->label('Fecha de expiración de DPI o pasaporte')
                                        ->format('d/m/Y'),
                                    // ->native(false),

                                    SpatieMediaLibraryFileUpload::make('dpi_or_')
                                        ->label('DPI o pasaporte')
                                        // ->acceptedFileTypes(['application/pdf'])
                                        ->helperText('Puedes subir un archivo de tipo (pdf, png, jpg, jpeg)'),
                                    SpatieMediaLibraryFileUpload::make('rtu_legal')
                                        ->label('RTU')
                                        // ->acceptedFileTypes(['application/pdf'])
                                        ->helperText('Puedes subir un archivo de tipo (pdf, png, jpg, jpeg)'),
                                    SpatieMediaLibraryFileUpload::make('invoices')
                                        ->label('Factura de servicios (agua, luz o teléfono)')
                                        // ->acceptedFileTypes(['application/pdf'])
                                        ->helperText('Puedes subir un archivo de tipo (pdf, png, jpg, jpeg)'),

                                ])
                        ]),
                    Wizard\Step::make('Añade inventario a tu tienda')
                        ->icon('mdi-storefront-plus')
                        ->schema([
                            // ...
                        ]),
                    Wizard\Step::make('Configuración de pagos')
                        ->icon('fluentui-payment-16')
                        ->schema([
                            // ...
                        ]),
                ])
                    // ->skippable()
                    ->nextAction(fn (Action $action) => $action->extraAttributes([
                        'class' => 'bg-primary mt-4',
                    ])->label('Guardar y continuar'))

                    ->submitAction(new HtmlString(Blade::render(<<<BLADE
                        <x-filament::button
                            type="submit"
                            size="sm"
                        >
                            Submit
                        </x-filament::button>
                    BLADE)))

            ])

            ->statePath('data');
    }

    use InteractsWithForms;
    public function render()
    {
        return view('livewire.new-onboarding');
    }
}
