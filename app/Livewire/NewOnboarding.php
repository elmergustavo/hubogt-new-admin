<?php

namespace App\Livewire;

use App\Models\Shop\Shop;
use App\Models\Shop\Vendor;
use App\Models\Shop\Product;

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

    // public function create(): void
    // {
    //     dd($this->form->getState());
    // }


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
                                'sm'      => 1,
                                'md'      => 2,
                                // 'xl' => 2,
                            ])
                                ->schema([
                                    CreateAccount::make('sd')
                                        ->label('')
                                        ->view('forms.components.create-account')
                                        ->viewData([
                                            'title'     => 'Datos de contacto',
                                            'sub_title' => 'Estos datos serán utilizados para el envío de notificaciones de ventas, administración de las órdenes y notificaciones en general.',
                                        ])
                                        ->columnSpan(['default' => 1, 'sm' => 1, 'md' => 2, 'xl' => 2,]),
                                    TextInput::make('person')
                                        ->label('Nombre completo')
                                        ->prefixIcon('bi-person-fill')
                                        ->helperText('Ingrese aquí el nombre de la persona que administra la cuenta')
                                        ->required(),
                                    PhoneInput::make('phone1')
                                        ->label(__('Número de teléfono'))
                                        ->prefixIcon('heroicon-s-phone')
                                        ->helperText('Ingrese aquí el número de teléfono donde notificaremos asuntos sobre ventas')
                                        ->required(),
                                    TextInput::make('email1')
                                        ->email()
                                        ->regEx('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/')
                                        ->label(__('Correo Electrónico'))
                                        ->prefixIcon('heroicon-s-at-symbol')
                                        ->helperText(__('Ingrese aquí el correo electrónico a donde notificaremos asuntos sobre ventas'))
                                        ->required(),
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
                                'default' => 1, 'sm' => 1, 'md' => 2,
                            ])
                                ->schema([
                                    CreateAccount::make('sd')
                                        ->label('')
                                        ->view('forms.components.create-account')
                                        ->viewData([
                                            'title'     => 'Información del negocio',
                                            'sub_title' => '',
                                        ])
                                        ->columnSpan(['default' => 1, 'sm' => 1, 'md' => 2, 'xl' => 2,]),
                                    Select::make('regimen')
                                        ->label('Régimen Tributario')
                                        ->native(false)
                                        ->options([
                                            'draft'     => 'Empresa SA. - Régimen general del IVA',
                                            'reviewing' => 'Personal individual - Régimen general del IVA',
                                            'published' => 'Personal individual - Pequeño contribuyente',
                                        ])
                                        ->reactive()
                                        ->helperText('Seleccione si es SA. o empresa individual')
                                        ->required(),
                                    TextInput::make('dpis')
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
                                                    ])->timeout(10)
                                                        // ->get(env('FELPLEX_END_POINT') . 'entity/' . env('FELPLEX_ENTITY_ID') . '/' . 'find-exact/' . "NIT/{$get('nit')}");
                                                        ->get(env('FELPLEX_END_POINT') . env('FELPLEX_ENTITY_ID') . "/find/NIT/" . $get("nit"));
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
                                        ->label(__('Nombre de la persona individual'))
                                        ->prefixIcon('heroicon-m-building-office')
                                        ->placeholder(__('Ingrese aquí el nombre que representará a su negocio en Mombii'))
                                        ->helperText(__('Razón social de tu negocio. Si el NIT no autocompleta la razón social de tu negocio, puedes ingresarla manualmente'))
                                        ->required(),
                                    TextInput::make('adreess')
                                        ->label(__('Dirección comercial'))
                                        ->helperText('Ingrese aquí la dirección comercial')
                                        ->required(),
                                    PhoneInput::make('phone')
                                        ->label(__('Teléfono'))
                                        ->prefixIcon('heroicon-s-phone')
                                        ->helperText('Ingrese aquí el número de telefono del tienda')
                                        ->required(),
                                    TextInput::make('email')
                                        ->email()
                                        ->regEx('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/')
                                        ->label(__('Correo Electrónico'))
                                        ->prefixIcon('heroicon-s-at-symbol')
                                        ->helperText(__('Ingrese aquí el correo de la tienda'))
                                        ->required(),
                                    Section::make('Documentos')
                                        ->description('')
                                        ->schema([
                                            Grid::make([
                                                'default' => 2, 'sm' => 2, 'md' => 2, 'xl' => 2, '2xl' => 2,
                                            ])
                                                ->schema([
                                                    SpatieMediaLibraryFileUpload::make('avatar')
                                                        ->label('Factura de servicios (agua, luz o teléfono)')
                                                        ->helperText('Puedes subir un archivo de tipo (pdf, png, jpg, jpeg)'),

                                                    SpatieMediaLibraryFileUpload::make('rtu')
                                                        ->label('Cargue aquí el RTU actualizado')
                                                        ->acceptedFileTypes(['application/pdf'])
                                                        ->helperText('Puedes subir un archivo de tipo (pdf, png, jpg, jpeg)'),
                                                ])
                                        ])
                                ]),

                            Section::make('')
                                ->hidden(fn (Get $get) => $this->hiddenPayPeriod($get('regimen')))
                                ->reactive()
                                ->schema([
                                    Grid::make(['default' => 1, 'sm' => 1, 'md' => 2,])
                                        ->schema([
                                            CreateAccount::make('sd')
                                                ->label('')
                                                ->view('forms.components.create-account')
                                                ->viewData([
                                                    'title'     => 'Representante Legal',
                                                    'sub_title' => 'Ingrese los datos del representante legal de la SA.',
                                                ])
                                                ->columnSpan(['default' => 1, 'sm' => 1, 'md' => 2, 'xl' => 2,]),
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
                                                ->helperText(__('Si el DPI no autocompleta el nombre completo, puedes ingresarla manualmente'))
                                                ->required(),
                                            TextInput::make('phone3')
                                                ->tel()
                                                ->minLength(8)
                                                ->label(__('Número de teléfono'))
                                                ->prefixIcon('heroicon-s-phone')
                                                ->required()
                                                ->mask('9999-9999')
                                                ->helperText('Ingrese aquí el teléfono del representate legal'),
                                            TextInput::make('email')
                                                ->email()
                                                ->regEx('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/')
                                                ->label(__('Correo Electrónico'))
                                                ->prefixIcon('heroicon-s-at-symbol')
                                                ->helperText(__('Ingrese aquí el correo del representate legal'))
                                                ->required(),
                                            DatePicker::make('date_of_birth')
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
                                                            SpatieMediaLibraryFileUpload::make('dpi_or_')
                                                                ->label('DPI o pasaporte')
                                                                ->helperText('Puedes subir un archivo de tipo (pdf, png, jpg, jpeg)'),
                                                            SpatieMediaLibraryFileUpload::make('rtu_legal')
                                                                ->label('RTU')
                                                                ->helperText('Puedes subir un archivo de tipo (pdf, png, jpg, jpeg)'),
                                                            SpatieMediaLibraryFileUpload::make('invoices')
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
                                    CreateAccount::make('sd')
                                        ->label('')
                                        ->view('forms.components.create-account')
                                        ->viewData([
                                            'title'     => 'Crear un producto',
                                            'sub_title' => 'Añade algunas fotos y detalles sobre el artículo. Rellena lo que puedas por ahora, podrás modificarlo más adelante.',
                                        ])
                                        ->columnSpan(['default' => 1, 'sm' => 1, 'md' => 2, 'xl' => 2,]),
                                    Grid::make(['default' => 1, 'sm' => 1, 'md' => 3,])
                                        ->schema([
                                            TextInput::make('name')
                                                ->label('Nombre')
                                                ->prefixIcon('polaris-product-filled-icon')
                                                ->placeholder(__('Ingrese aquí el nombre de tu artículo')),
                                            TextInput::make('price')
                                                ->label('Precio original')
                                                ->numeric()
                                                ->prefix('Q.'),
                                            TextInput::make('discount')
                                                ->label('Precio descuento')
                                                ->numeric()
                                                ->prefix('Q.'),
                                        ]),
                                    Grid::make(['default' => 1, 'sm' => 1, 'md' => 1,])
                                        ->schema([
                                            Textarea::make('description')
                                                ->label('Descripción')
                                                ->placeholder(__('Comienza con una breve descripción de las mejores cualidades del artículo')),
                                            Section::make('Imagenes del producto')
                                                ->description('')
                                                ->collapsible()
                                                ->schema([
                                                    SpatieMediaLibraryFileUpload::make('media')
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
                            Select::make('banck')
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
                                ->required()
                                ->reactive()
                                ->live()
                                ->native(false)
                                ->columnSpan(['default' => 1])
                                ->searchable(),
                            Radio::make('status')
                                ->label('¿Qué tipo de cuenta tienes?')
                                ->inline()
                                ->inlineLabel(false)
                                ->columnSpan(['default' => 1,])
                                ->options([
                                    'ahorro' => 'Ahorro',
                                    'monetario' => 'Monetario',
                                ]),
                            Grid::make(['default' => 1, 'sm' => 1, 'md' => 2,])
                                ->schema([
                                    TextInput::make('name_account')
                                        ->label('Nombre de cuenta')
                                        ->prefixIcon('heroicon-m-user')
                                        ->placeholder(__('Ingrese aquí el nombre completo de tu cuenta de banco')),
                                    TextInput::make('number_account')
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



    public function hiddenPayPeriod($regimenValue)
    {
        // Retorna true para ocultar la sección basado en tu lógica
        return $regimenValue !== 'draft';  // Ajusta esta condición según tus necesidades
    }

    public function submit(): void
    {
        // Post::create($this->form->getState());
        // $this->form->getState();

        $vendor = Vendor::create($this->form->getState());
        // 'user_id',
        // 'is_company',
        // 'nit',
        // 'cui',
        // 'phone',
        // 'email',
        // 'address',
        // 'legal_info',
        // 'legal_representative',
        // 'registration_date',
        // 'vendor_type',
        // 'is_verified',
        // 'logo',
        // 'website_url',
        // 'bank_details',
        // 'preferred_language',
        // 'time_zone',
        // 'data',
        $shop = Shop::create($this->form->getState());
        // 'vendor_id', 
        // 'name', 
        // 'banner', 
        // 'description', 
        // 'fb_link',
        // 'tw_link', 
        // 'insta_link', 
        // 'status', 
        // 'shop_url', 
        // 'opening_hours',
        // 'return_policy', 
        // 'average_rating', 
        // 'review_count', 
        // 'category',
        // 'geolocation', 
        // 'metadata'
        $product = Product::create($this->form->getState());
        // 'shop_brand_id',
        // 'shop_id',
        // 'name',
        // 'slug',
        // 'sku',
        // 'barcode',
        // 'description',
        // 'qty',
        // 'security_stock',
        // 'featured',
        // 'video_link',
        // 'is_approved',
        // 'is_visible',
        // 'old_price',
        // 'price',
        // 'discount',
        // 'cost',
        // 'type',
        // 'status',
        // 'backorder',
        // 'requires_shipping',
        // 'published_at',
        // 'seo_title',
        // 'seo_description',
        // 'weight_value',
        // 'weight_unit',
        // 'height_value',
        // 'height_unit',
        // 'width_value',
        // 'width_unit',
        // 'depth_value',
        // 'depth_unit',
        // 'volume_value',
        // 'volume_unit',
        // 'data'
    }

    public function render()
    {
        return view('livewire.new-onboarding');
    }
}
