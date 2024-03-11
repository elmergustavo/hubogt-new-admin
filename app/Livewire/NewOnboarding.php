<?php

namespace App\Livewire;

use App\Models\Shop\Shop;
use App\Models\Shop\Vendor;
use App\Models\Shop\Product;
use App\Models\LegalRepresentative;
use App\Models\BusinessInformation;

use Filament\Notifications\Notification;
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
use Closure;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\DatePicker;

use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Support\RawJs;
use Illuminate\Support\Facades\Http;
use Ysfkaya\FilamentPhoneInput\Forms\PhoneInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Radio;

class NewOnboarding extends Component implements HasForms
{
    use InteractsWithForms;
    public $data = [];

    public function mount(): void
    {
        $this->form->fill();
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Wizard::make([
                    //VENDOR
                    Wizard\Step::make('Datos de contacto')
                        ->icon('mdi-store-edit')
                        // ->description('Registrate para comenzar a vender tus productos en Mombii')
                        ->schema([
                            Grid::make([
                                'default' => 1,
                                'sm'      => 1,
                                'md'      => 2,
                                // 'xl' => 2,
                            ])
                                ->schema([
                                    CreateAccount::make('sds')
                                        ->label('')
                                        ->view('forms.components.create-account')
                                        ->viewData([
                                            'title'     => 'Datos de contacto',
                                            'sub_title' => 'Estos datos serán utilizados para el envío de notificaciones de ventas, administración de las órdenes y notificaciones en general.',
                                        ])
                                        ->columnSpan(['default' => 1, 'sm' => 1, 'md' => 2, 'xl' => 2,]),
                                    TextInput::make('vendor_full_name')
                                        ->label('Nombre completo')
                                        ->prefixIcon('bi-person-fill')
                                        ->helperText('Ingrese aquí el nombre de la persona que administra la cuenta')
                                        ->required(),
                                    PhoneInput::make('vendor_phone')
                                        ->label(__('Número de teléfono'))
                                        ->prefixIcon('heroicon-s-phone')
                                        ->helperText('Ingrese aquí el número de teléfono donde notificaremos asuntos sobre ventas')
                                        ->defaultCountry('GT')
                                        ->onlyCountries(['BZ', 'CR', 'SV', 'GT', 'HN', 'NI', 'PA'])
                                        ->required(),
                                    TextInput::make('vendor_email')
                                        ->email()
                                        ->regEx('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/')
                                        ->label(__('Correo Electrónico'))
                                        ->prefixIcon('heroicon-s-at-symbol')
                                        ->helperText(__('Ingrese aquí el correo electrónico a donde notificaremos asuntos sobre ventas'))
                                        ->required(),
                                    TextInput::make('shop_name')
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
                            Grid::make(['default' => 1, 'md' => 2,])
                                ->schema([
                                    CreateAccount::make('sds')
                                        ->label('')
                                        ->view('forms.components.create-account')
                                        ->viewData([
                                            'title'     => 'Información del negocio',
                                            'sub_title' => '',
                                        ])
                                        ->columnSpan(['default' => 1, 'sm' => 1, 'md' => 2, 'xl' => 2,]),
                                    Select::make('bi_regimen')
                                        ->label('Régimen Tributario')
                                        ->native(false)
                                        ->options([
                                            'RPT' => 'Empresa SA. - Régimen general del IVA',
                                            'RPC' => 'Empresa SA. - Régimen Pequeño Contribuyente',
                                            'RGI' => 'Personal individual - Régimen general del IVA',
                                            'PC'  => 'Personal individual - Pequeño contribuyente',
                                        ])
                                        ->reactive()
                                        ->helperText('Seleccione si es SA. o empresa individual')
                                        ->required(),
                                    TextInput::make('bi_cui')
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
                                        ),
                                    TextInput::make('bi_nit')
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
                                                // if (config('app.env') == 'local')
                                                // {
                                                //     $client = new \GuzzleHttp\Client(array(
                                                //         'verify' => false
                                                //     ));
                                                // }
                                                // else
                                                // {
                                                //     $client = new \GuzzleHttp\Client;
                                                // }
                                                // try
                                                // {

                                                //     $response = Http::withHeaders([
                                                //         'Accept'          => 'application/json',
                                                //         'X-Authorization' => env('FELPLEX_AUTHORIZATION_HEADER')
                                                //     ])->timeout(10)
                                                //           // ->get(env('FELPLEX_END_POINT') . 'entity/' . env('FELPLEX_ENTITY_ID') . '/' . 'find-exact/' . "NIT/{$get('nit')}");
                                                //         ->get(env('FELPLEX_END_POINT') . env('FELPLEX_ENTITY_ID') . "/find/NIT/" . $get("nit"));
                                                //     if ($response->successful())
                                                //     {
                                                //         if (isset($response['tax_name']))
                                                //         {
                                                //             $normalized_tax_name = str_replace(',', ' ', $response['tax_name']);
                                                //             $cleaned_tax_name    = trim(preg_replace('/\s\s+/', ' ', str_replace("\n", " ", $normalized_tax_name)));
                                                //             $set('legal_reason', $cleaned_tax_name);
                                                //         }
                                                //         else
                                                //         {
                                                //             $set('legal_reason', '');
                                                //         }
                                                //     }
                                                //     else
                                                //     {
                                                //         $set('legal_reason', '');
                                                //     }
                                                // }
                                                // catch (\GuzzleHttp\Exception\RequestException $e)
                                                // {
                                                //     $set('legal_reason', '');
                                                // }
                                            }
                                        ),
                                    TextInput::make('bi_legal_reason')
                                        ->label(__('Nombre de la persona individual'))
                                        ->prefixIcon('heroicon-m-building-office')
                                        ->placeholder(__('Ingrese aquí el nombre que representará a su negocio en Mombii'))
                                        ->helperText(__('Razón social de tu negocio. Si el NIT no autocompleta la razón social de tu negocio, puedes ingresarla manualmente'))
                                        ->required(),
                                    TextInput::make('bi_adreess')
                                        ->label(__('Dirección comercial'))
                                        ->helperText('Ingrese aquí la dirección comercial')
                                        ->required(),
                                    PhoneInput::make('bi_phone')
                                        ->label(__('Teléfono'))
                                        ->prefixIcon('heroicon-s-phone')
                                        ->helperText('Ingrese aquí el número de telefono del tienda')
                                        ->defaultCountry('GT')
                                        ->onlyCountries(['BZ', 'CR', 'SV', 'GT', 'HN', 'NI', 'PA'])
                                        ->required(),
                                    TextInput::make('bi_email')
                                        ->email()
                                        ->regEx('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/')
                                        ->label(__('Correo Electrónico'))
                                        ->prefixIcon('heroicon-s-at-symbol')
                                        ->helperText(__('Ingrese aquí el correo de la tienda'))
                                        ->required(),
                                    Section::make('Documentos')
                                        ->description('')
                                        ->collapsible()
                                        ->schema([
                                            Grid::make([
                                                'default' => 2, 'sm' => 2, 'md' => 2, 'xl' => 2, '2xl' => 2,
                                            ])
                                                ->schema([
                                                    SpatieMediaLibraryFileUpload::make('shop_public_services_bill')
                                                        ->label('Factura de servicios (agua, luz o teléfono)')
                                                        ->helperText('Puedes subir un archivo de tipo (pdf, png, jpg, jpeg)'),

                                                    SpatieMediaLibraryFileUpload::make('shop_rtu')
                                                        ->label('Cargue aquí el RTU actualizado')
                                                        ->acceptedFileTypes(['application/pdf'])
                                                        ->helperText('Puedes subir un archivo de tipo (pdf, png, jpg, jpeg)'),
                                                ])
                                        ])
                                ]),

                            Section::make('')
                                ->hidden(function (Get $get)
                                {
                                    if ($get('bi_regimen') == 'RPT' || $get('bi_regimen') == 'RPC')
                                    {
                                        return false;
                                    }
                                    return true;
                                })
                                ->reactive()
                                ->schema([
                                    Grid::make(['default' => 1, 'sm' => 1, 'md' => 2,])
                                        ->schema([
                                            CreateAccount::make('sdc')
                                                ->label('')
                                                ->view('forms.components.create-account')
                                                ->viewData([
                                                    'title'     => 'Representante Legal',
                                                    'sub_title' => 'Ingrese los datos del representante legal de la SA.',
                                                ])
                                                ->columnSpan(['default' => 1, 'sm' => 1, 'md' => 2, 'xl' => 2,]),
                                            TextInput::make('lr_cui')
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
                                                ->afterStateUpdated(
                                                    function (Get $get, Set $set)
                                                    {
                                                        // if (config('app.env') == 'local')
                                                        // {
                                                        //     $client = new \GuzzleHttp\Client(array(
                                                        //         'verify' => false
                                                        //     ));
                                                        // }
                                                        // else
                                                        // {
                                                        //     $client = new \GuzzleHttp\Client;
                                                        // }
                                                        // try
                                                        // {

                                                        //     $response = Http::withHeaders([
                                                        //         'Accept'          => 'application/json',
                                                        //         'X-Authorization' => env('FELPLEX_AUTHORIZATION_HEADER')
                                                        //     ])->timeout(10)->get(env('FELPLEX_END_POINT') . 'entity/' . env('FELPLEX_ENTITY_ID') . '/' . 'find/' . "CUI/{$get('dpi')}");
                                                        //     if ($response->successful())
                                                        //     {
                                                        //         if (isset($response[0]['tax_name']))
                                                        //         {
                                                        //             $normalized_tax_name = str_replace(',', ' ', $response[0]['tax_name']);
                                                        //             $cleaned_tax_name    = trim(preg_replace('/\s\s+/', ' ', str_replace("\n", " ", $normalized_tax_name)));
                                                        //             $set('name_dpi', $cleaned_tax_name);
                                                        //         }
                                                        //         else
                                                        //         {
                                                        //             $set('name_dpi', '');
                                                        //         }
                                                        //     }
                                                        //     else
                                                        //     {
                                                        //         $set('name_dpi', '');
                                                        //     }
                                                        // }
                                                        // catch (\GuzzleHttp\Exception\RequestException $e)
                                                        // {
                                                        //     $set('name_dpi', '');
                                                        // }
                                                    }
                                                ),
                                            TextInput::make('lr_legal_reason')
                                                ->label(__('Nombre completo'))
                                                ->prefixIcon('heroicon-m-user')
                                                ->placeholder(__('Ingrese aquí el nombre completo del representate legal'))
                                                ->helperText(__('Si el DPI no autocompleta el nombre completo, puedes ingresarla manualmente'))
                                                ->required(),
                                            PhoneInput::make('lr_phone')
                                                ->label(__('Teléfono'))
                                                ->prefixIcon('heroicon-s-phone')
                                                ->defaultCountry('GT')
                                                ->onlyCountries(['CR', 'SV', 'GT', 'HN', 'NI', 'PA', 'BZ'])
                                                ->required()
                                                ->helperText('Ingrese aquí el teléfono del representate legal'),
                                            TextInput::make('lr_email')
                                                ->email()
                                                ->regEx('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/')
                                                ->label(__('Correo Electrónico'))
                                                ->prefixIcon('heroicon-s-at-symbol')
                                                ->helperText(__('Ingrese aquí el correo del representate legal'))
                                                ->required(),
                                            DatePicker::make('lr_expiration')
                                                ->label('Fecha de expiración de DPI o pasaporte')
                                                ->format('d/m/Y')
                                                ->required(),
                                            // ->native(false),
                                            Section::make('Documentos')
                                                ->description('')
                                                ->collapsible()
                                                ->schema([
                                                    Grid::make([
                                                        'default' => 2, 'sm' => 2, 'md' => 2, 'xl' => 2, '2xl' => 2,
                                                    ])
                                                        ->schema([
                                                            SpatieMediaLibraryFileUpload::make('vendor_dpi_or_passport')
                                                                ->label('DPI o pasaporte')
                                                                ->helperText('Puedes subir un archivo de tipo (pdf, png, jpg, jpeg)'),
                                                            SpatieMediaLibraryFileUpload::make('vendor_rtu')
                                                                ->label('RTU')
                                                                ->helperText('Puedes subir un archivo de tipo (pdf, png, jpg, jpeg)'),
                                                            SpatieMediaLibraryFileUpload::make('vendor_public_services_bill')
                                                                ->label('Factura de servicios (agua, luz o teléfono)')
                                                                ->helperText('Puedes subir un archivo de tipo (pdf, png, jpg, jpeg)'),
                                                        ])
                                                ])

                                        ])
                                ])

                        ]),
                    Wizard\Step::make('Añade inventario a tu tienda')
                        ->icon('mdi-storefront-plus')
                        ->schema([
                            Grid::make([
                                'default' => 1, 'sm' => 1, 'md' => 2,
                            ])
                                ->schema([
                                    CreateAccount::make('sdsd')
                                        ->label('')
                                        ->view('forms.components.create-account')
                                        ->viewData([
                                            'title'     => 'Crear un producto',
                                            'sub_title' => 'Añade algunas fotos y detalles sobre el artículo. Rellena lo que puedas por ahora, podrás modificarlo más adelante.',
                                        ])
                                        ->columnSpan(['default' => 1, 'sm' => 1, 'md' => 2, 'xl' => 2,]),
                                    Grid::make(['default' => 1, 'sm' => 1, 'md' => 3,])
                                        ->schema([
                                            TextInput::make('product_name')
                                                ->label('Nombre')
                                                ->prefixIcon('polaris-product-filled-icon')
                                                ->placeholder(__('Ingrese aquí el nombre de tu artículo')),
                                            TextInput::make('product_price')
                                                ->label('Precio original')
                                                ->numeric()
                                                ->prefix('Q.'),
                                            TextInput::make('product_discount')
                                                ->label('Precio descuento')
                                                ->numeric()
                                                ->prefix('Q.'),
                                        ]),
                                    Grid::make(['default' => 1, 'sm' => 1, 'md' => 1,])
                                        ->schema([
                                            Textarea::make('product_description')
                                                ->label('Descripción')
                                                ->placeholder(__('Comienza con una breve descripción de las mejores cualidades del artículo')),
                                            Section::make('Imagenes del producto')
                                                ->description('')
                                                ->collapsible()
                                                ->schema([
                                                    SpatieMediaLibraryFileUpload::make('product_images')
                                                        ->label('')
                                                        ->collection('product-images')
                                                        ->multiple()
                                                        ->maxFiles(5),
                                                ])
                                        ])
                                ])
                        ]),
                    Wizard\Step::make('Configuración de pagos')
                        ->icon('fluentui-payment-16')
                        ->schema([
                            CreateAccount::make('sd')
                                ->label('')
                                ->columnSpan(['default' => 1])
                                ->view('forms.components.create-account')
                                ->viewData([
                                    'title'     => 'Configuración de pagos',
                                    'sub_title' => '',
                                ]),
                            Select::make('shop_banck')
                                ->label('Banco')
                                ->placeholder('Seleccione un banco de preferencia')
                                ->prefixIcon('bxs-bank')
                                ->options([
                                    'bac'    => 'BAC Credomatic',
                                    'bi'     => 'Banco Industrial',
                                    'brural' => 'Banrural',
                                    'gyt'    => 'Banco G&T Continental',
                                    'bam'    => 'Bam',
                                    'inter'  => 'InterBanco',
                                    'other'  => 'Otra'
                                ])
                                ->reactive()
                                ->live()
                                ->native(false)
                                ->columnSpan(['default' => 1])
                                ->searchable(),
                            Radio::make('shop_type_account')
                                ->label('¿Qué tipo de cuenta tienes?')
                                ->inline()
                                ->inlineLabel(false)
                                ->columnSpan(['default' => 1,])
                                ->options([
                                    'ahorro'    => 'Ahorro',
                                    'monetario' => 'Monetario',
                                ]),
                            Grid::make(['default' => 1, 'sm' => 1, 'md' => 2,])
                                ->schema([
                                    TextInput::make('shop_name_account')
                                        ->label('Nombre de cuenta')
                                        ->prefixIcon('heroicon-m-user')
                                        ->placeholder(__('Ingrese aquí el nombre completo de tu cuenta de banco')),
                                    TextInput::make('shop_number_account')
                                        ->label('Número de cuenta')
                                        ->placeholder(__('Ingrese aquí el número completo de tu cuenta de banco'))
                                        ->prefixIcon('iconpark-bankcardtwo')
                                        ->numeric(),
                                ])

                        ]),
                ])
                    ->skippable()
                    ->nextAction(fn (Action $action) => $action->extraAttributes([
                        'class' => 'bg-primary mt-4',
                    ])->label('Guardar y continuar'))
                    ->submitAction(new HtmlString(Blade::render(<<<BLADE
                        <x-filament::button
                            type="submit"
                            size="sm"
                        >
                            Guardar
                        </x-filament::button>
                    BLADE)))
            ])
            ->statePath('data');
    }

    public function submit(): void
    {
        $data = $this->form->getState();

        if ($data['bi_regimen'] == 'RPT' || $data['bi_regimen'] == 'RPC')
        {
            $legal_representative = LegalRepresentative::create([
                'full_name'      => $data['lr_legal_reason'],
                'cui'            => $data['lr_cui'],
                'cui_expiration' => $data['lr_expiration'],
                'phone'          => $data['lr_phone'],
                'email'          => $data['lr_email'],
            ]);
        }

        $business_information = BusinessInformation::create([
            'legal_representative_id' => $legal_representative->id ?? null,
            'full_name'               => $data['bi_legal_reason'],
            'cui'                     => $data['bi_cui'],
            'nit'                     => $data['bi_nit'],
            'tax_regime'              => $data['bi_regimen'],
            'commercial_address'      => $data['bi_adreess'],
            'phone'                   => $data['bi_phone'],
            'email'                   => $data['bi_email'],
        ]);

        $vendor = Vendor::create([
            'user_id'   => auth()->user()->id,
            'full_name' => $data['vendor_full_name'],
            'phone'     => $data['vendor_phone'],
            'email'     => $data['vendor_email'],
        ]);

        $shop = Shop::create([
            'business_information_id' => $business_information->id,
            'user_id'                 => auth()->user()->id,
            'shop_vendor_id'          => $vendor->id,
            'name'                    => $data['shop_name'],
            'bank'                    => $data['shop_banck'],
            'type_account'            => $data['shop_type_account'],
            'name_account'            => $data['shop_name_account'],
            'number_account'          => $data['shop_number_account'],
        ]);

        $product = Product::create([
            'shop_id'     => $shop->id,
            'name'        => $data['product_name'],
            'price'       => $data['product_price'],
            'discount'    => $data['product_discount'],
            'description' => $data['product_description'],

        ]);

        Notification::make()
            ->title('Estaremos revisando tu solictitud,y te estaremos contactando por medio de correo en las proximas 48 horas.')
            ->success()
            ->send();
    }

    public function render()
    {
        return view('livewire.new-onboarding');
    }
}
