<?php

namespace App\Livewire;

use App\Models\Shop\Shop;
use App\Models\Shop\Vendor;
use App\Models\Shop\Product;
use App\Notifications\VendorNotification;
use App\Helpers\DepartmentMunicipalityOptions;

use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Forms\Components\Select;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;

use Illuminate\Support\Str;
use Illuminate\Support\HtmlString;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Notification;
use Illuminate\Notifications\AnonymousNotifiable;

use Livewire\Component;

class SellerRegister extends Component implements HasForms
{
    use InteractsWithForms;

    public $media1     = [];
    public $media2     = [];

    public $current_page     = 'page1';
    public $current_step     = 1;
    public $curren_page_step = 1;
    // 
    public $department;
    public $municipality;
    // 
    public $name_shop;
    // 
    public $sku;
    public $tag;
    public $price;
    public $title;
    public $category;
    public $local_price;
    public $offer_price;
    public $description;
    // public $social_networks = '';
    // public $social_networks_name = [];
    // public $link = [];
    public $nationwide_price;
    public $estimated_shipping_time;
    //
    public $banck;
    public $phone;
    public $amount;
    public $birthdate;
    public $type_account;
    public $cui_business;
    public $account_name;
    public $company_name;
    public $business_email;
    public $account_number;
    // public $business_phone;
    public $cui_individual;
    public $individual_email;
    public $legal_reason_business;
    public $legal_reason_individual;
    //
    public $radio_questions;
    //
    public $sell_online;
    public $promote_my_store;
    public $brand_positioning;
    public $payments_shipments;
    //
    public $radio_individual_business = 'individual';

    protected function getForms(): array
    {
        return [
            'Departament' => $this->makeForm()
                ->schema($this->getDepartamentFormSchema()),
            // 
            'NameShop' => $this->makeForm()
                ->schema($this->getNameShopFormSchema()),
            // 
            'Title' => $this->makeForm()
                ->schema($this->getTitleFormSchema()),
            'Category' => $this->makeForm()
                ->schema($this->getCategoryFormSchema()),
            'Description' => $this->makeForm()
                ->schema($this->getDescriptionFormSchema()),
            'Tag' => $this->makeForm()
                ->schema($this->getTagFormSchema()),
            'Social_networks' => $this->makeForm()
                ->schema($this->getSocialNetworksFormSchema()),
            'Price' => $this->makeForm()
                ->schema($this->getPriceFormSchema()),
            'LocalPrice' => $this->makeForm()
                ->schema($this->getLocalPriceFormSchema()),
            'NationwidePrice' => $this->makeForm()
                ->schema($this->getNationwidePriceFormSchema()),
            'Estimated_shipping_time' => $this->makeForm()
                ->schema($this->getEstimatedShippingTimeFormSchema()),
            'Offer_price' => $this->makeForm()
                ->schema($this->getOfferPriceFormSchema()),
            'Amount' => $this->makeForm()
                ->schema($this->getAmountFormSchema()),
            'SKU' => $this->makeForm()
                ->schema($this->getSKUFormSchema()),
            // 
            'Individual' => $this->makeForm()
                ->schema($this->getIndividualFormSchema()),
            'Business' => $this->makeForm()
                ->schema($this->getBusinesslFormSchema()),
            'Account_name' => $this->makeForm()
                ->schema($this->getAccountNameFormSchema()),
            'Account_number' => $this->makeForm()
                ->schema($this->getAccountNumberFormSchema()),
            'Banck' => $this->makeForm()
                ->schema($this->getBanckFormSchema()),
            'Type_account' => $this->makeForm()
                ->schema($this->getTypeAccountFormSchema()),
            'Documents' => $this->makeForm()
                ->schema($this->getDocumentsFormSchema()),
        ];
    }

    public function stepOne()
    {
        $this->Departament->validate();
        $this->current_step     = 2;
        $this->current_step     = 2;
        $this->curren_page_step = 2;
    }

    public function stepTwo()
    {
        $this->NameShop->validate();
        $this->current_step     = 3;
        $this->curren_page_step = 3;
    }

    public function stepThree()
    {
        $this->radio_individual_business == 'individual'
            ? $this->Individual->validate()
            :   $this->Business->validate();

        $this->Banck->validate();
        $this->Type_account->validate();
        $this->Account_name->validate();
        $this->Account_number->validate();
        $this->Documents->validate();
        $this->current_step     = 4;
        $this->curren_page_step = 4;
    }

    public function stepFour()
    {
        $this->Title->validate();
        $this->Category->validate();
        $this->Description->validate();
        $this->Tag->validate();
        $this->Social_networks->validate();
        $this->Price->validate();
        $this->LocalPrice->validate();
        $this->NationwidePrice->validate();
        $this->Estimated_shipping_time->validate();
        $this->Amount->validate();
        
        // 

        $this->radio_individual_business == 'individual'
            ? $is_company                       = false
            : $is_company                       = true;

        

        $vendor = Vendor::create([
            'user_id'              => auth()->user()->id,
            'is_company'           => $is_company,
            'nit'                  => 00,
            'cui'                  => $this->cui_individual ?? $this->cui_business,
            'phone'                => $this->phone,
            'email'                => $this->business_email ?? $this->individual_email,
            'address'              => '',
            'legal_info'           => null,
            'legal_representative' => $this->legal_reason_business ?? $this->legal_reason_individual,
            'registration_date'    => null,
            'vendor_type'          => $this->radio_individual_business,
            'is_verified'          => 0,
            'logo'                 => null,
            'website_url'          => null,
            'bank_details'         => null,
            'preferred_language'   => 'es',
            'time_zone'            => null,
            'data'                 => json_encode([
                $this->banck,
                $this->birthdate,
                $this->account_name,
                $this->account_number,
            ]),
        ]);

        $this->Documents->model($vendor)->saveRelationships();

        $shop = Shop::create([
            'shop_vendor_id' => $vendor->id,
            'user_id'        => auth()->user()->id,
            'name'           => $this->name_shop ?? $this->company_name,
            'banner'         => 'x',
            'description'    => 'x',
            'fb_link'        => null,
            'tw_link'        => null,
            'insta_link'     => null,
            'status'         => 0,
            'phone'          => null,
            'email'          => null,
            'address'        => null,
            'shop_url'       => null,
            'opening_hours'  => null,
            'return_policy'  => null,
            'average_rating' => null,
            'review_count'   => null,
            'category'       => null,
            'geolocation'    => null,
            'metadata'       => json_encode([
                $this->sell_online,
                $this->promote_my_store,
                $this->brand_positioning,
                $this->payments_shipments,
                $this->radio_questions,
            ]),
        ]);

        $product = Product::create([
            'shop_brand_id'     => null,
            'shop_id'           => $shop->id,
            'name'              => $this->title,
            'slug'              => null,
            'sku'               => $this->sku,
            'barcode'           => null,
            'description'       => $this->description,
            'qty'               => $this->amount,
            'security_stock'    => 0,
            'featured'          => 0,
            'video_link'        => null,
            'is_approved'       => 0,
            'is_visible'        => 0,
            'old_price'         => $this->local_price,
            'price'             => $this->price,
            'discount'          => $this->offer_price ?? 0,
            'cost'              => null,
            'type'              => null,
            'status'            => 'needs_review',
            'backorder'         => 0,
            'requires_shipping' => 0,
            'published_at'      => null,
            'seo_title'         => null,
            'seo_description'   => null,
            'weight_value'      => null,
            'weight_unit'       => 'kg',
            'height_value'      => null,
            'height_unit'       => 'cm',
            'width_value'       => null,
            'width_unit'        => 'cm',
            'depth_value'       => null,
            'depth_unit'        => 'cm',
            'volume_value'      => null,
            'volume_unit'       => 'l',
            'data'              => json_encode([
                $this->tag,
                $this->category,
                // $this->social_networks,
                $this->nationwide_price,
                $this->estimated_shipping_time,
            ]),
        ]);
        // \Log::info($this->business_email);
        // \Log::info($this->individual_email);
        // \Log::info($this->phone);
        // \Log::info($this->legal_reason_business);
        // \Log::info($this->legal_reason_individual);
        $mail = $this->business_email ?? $this->individual_email;

        if (!empty($this->business_email))
        {
            $mail = $this->business_email;
        }
        if (!empty($this->individual_email))
        {
            $mail = $this->individual_email;
        }
        if (!empty($this->legal_reason_business))
        {
            $name = $this->legal_reason_business;
        }
        if (!empty($this->legal_reason_individual))
        {
            $name = $this->legal_reason_individual;
        }

        $data = [
            'phone' => $this->phone,
            'mail'  => $mail,
            'name'  => $name,
        ];

        $notifiable = new AnonymousNotifiable;
        $notifiable->route('mail', 'suporte@mombi.shop');
        Notification::send($notifiable, new VendorNotification($data));


        $this->department;
        $this->municipality;

        $this->current_step     = 5;
        $this->curren_page_step = 5;
    }

    public function irAlaTienda()
    {
        $this->department = ''; //--
        $this->municipality = ''; //--
        // 
        $this->name_shop = '';
        // 
        $this->sku = '';
        $this->tag = '';
        $this->price = '';
        $this->title = '';
        $this->category = '';
        $this->local_price = '';
        $this->offer_price = '';
        $this->description = '';
        $this->social_networks = ''; //repeater
        $this->nationwide_price = '';
        $this->estimated_shipping_time = '';
        //
        $this->banck = '';
        $this->phone = '';
        $this->amount = '';
        $this->birthdate = '';
        $this->type_account = '';
        $this->cui_business = '';
        $this->account_name = '';
        $this->company_name = '';
        $this->business_email = '';
        $this->account_number = '';
        // $this->business_phone = '';
        $this->cui_individual = '';
        $this->individual_email = '';
        $this->legal_reason_business = '';
        $this->legal_reason_individual = '';
        //
        $this->radio_questions = '';
        //
        $this->sell_online = '';
        $this->promote_my_store = '';
        $this->brand_positioning = '';
        $this->payments_shipments = '';

        $this->current_page     = 'page1';
        $this->current_step     = 1;
        $this->curren_page_step = 1;
        return redirect()->route('home');
    }

    protected function getDocumentsFormSchema(): array
    {
        return [
            SpatieMediaLibraryFileUpload::make('media1')
                ->label('Factura de servicios (agua, luz o teléfono)')
                ->collection('vendor-documents')
                ->multiple()
                ->maxFiles(5)
                ->required(),
            SpatieMediaLibraryFileUpload::make('media2')
                ->label('RTU')
                ->collection('vendor-documents')
                ->maxFiles(1)
                ->required(),
        ];
    }
    protected function getRtuFormSchema(): array
    {
        return [
            SpatieMediaLibraryFileUpload::make('media')
                ->label('Factura de servicios (agua, luz o teléfono)')
                ->collection('vendor-documents')
                ->multiple()
                ->maxFiles(5)
                ->required()
            // ->hiddenLabel()
            ,
        ];
    }

    protected function getBanckFormSchema(): array
    {
        return [
            Select::make('banck')
                ->label('Banco')
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
                ->placeholder('Seleccione un banco de preferencia')
                ->reactive()
                ->live()
                ->native(false)
                ->searchable(),
        ];
    }
    protected function getTypeAccountFormSchema(): array
    {
        return [
            Select::make('type_account')
                ->label('Tipo de cuenta')
                ->options([
                    'monetarios' => 'Monetarios',
                    'ahorros'    => 'Ahorros',
                ])
                ->required()
                ->placeholder('Seleccione un tipo de cuenta')
                ->reactive()
                ->live()
                ->native(false),
        ];
    }

    protected function getAccountNumberFormSchema(): array
    {
        return [
            TextInput::make('account_number')
                ->required()
                ->label('Número de cuenta'),
        ];
    }

    protected function getAccountNameFormSchema(): array
    {
        return [
            TextInput::make('account_name')
                ->required()
                ->label('Nombre de cuenta'),
        ];
    }

    protected function getBusinesslFormSchema(): array
    {
        return [
            TextInput::make('cui_business')
                ->label('DPI')
                ->required()
                ->lazy()
                ->afterStateUpdated(
                    function (Get $get, Set $set)
                    {
                        self::getLegalReason(config('app.env'), $get, $set, $this->radio_individual_business, 'cui_business');
                    }
                ),
            TextInput::make('legal_reason_business')
                ->label('Representate legal')
                ->required(),
            TextInput::make('company_name')
                ->label('Nombre de la empresa')
                ->required(),
            TextInput::make('business_email')
                ->label('Correo')
                ->email()
                ->required(),
            TextInput::make('phone')
                ->label('Telefono')
                ->mask('9999-9999')
                ->minlength(8)
                ->required(),
        ];
    }

    protected function getIndividualFormSchema(): array
    {
        return [
            TextInput::make('cui_individual')
                ->label('DPI')
                ->required()
                ->lazy()
                ->afterStateUpdated(
                    function (Get $get, Set $set)
                    {
                        self::getLegalReason(config('app.env'), $get, $set, $this->radio_individual_business, 'cui_individual');
                    }
                ),
            TextInput::make('legal_reason_individual')
                ->label('Nombre completo')
                ->required(),
            TextInput::make('individual_email')
                ->label('Correo electrónico')
                ->email()
                ->required(),
            DatePicker::make('birthdate')
                ->label('Fecha de nacimiento')
                ->required(),
        ];
    }

    protected function getTitleFormSchema(): array
    {
        return [
            TextInput::make('title')
                ->label('')
                ->required()
        ];
    }

    protected function getCategoryFormSchema(): array
    {
        return [
            TextInput::make('category')
                ->label('')
                ->required()
        ];
    }

    protected function getDescriptionFormSchema(): array
    {
        return [
            RichEditor::make('description')
                ->toolbarButtons([])
                ->label('')
                ->required()
        ];
    }

    protected function getTagFormSchema(): array
    {
        return [
            TextInput::make('tag')
                ->label('')
                ->required()
        ];
    }

    protected function getSocialNetworksFormSchema(): array
    {
        return [
            // Repeater::make('social_networks')
            // ->schema([
            //     TextInput::make('social_networks_name'),
            //     TextInput::make('link'),
            // ])
            // ->collapsed()
            // ->columns(2)
        ];
    }

    protected function getPriceFormSchema(): array
    {
        return [
            TextInput::make('price')
                ->label('')
                ->numeric()
                ->required()
        ];
    }

    protected function getLocalPriceFormSchema(): array
    {
        return [
            TextInput::make('local_price')
                ->label('')
                ->numeric()
                ->required()
        ];
    }

    protected function getNationwidePriceFormSchema(): array
    {
        return [
            TextInput::make('nationwide_price')
                ->label('')
                ->numeric()
                ->required()
        ];
    }

    protected function getEstimatedShippingTimeFormSchema(): array
    {
        return [
            TextInput::make('estimated_shipping_time')
                ->label('')
                ->required()
        ];
    }

    protected function getOfferPriceFormSchema(): array
    {
        return [
            TextInput::make('offer_price')
                ->numeric()
                ->label('')
        ];
    }

    protected function getAmountFormSchema(): array
    {
        return [
            TextInput::make('amount')
                ->label('')
                ->numeric()
                ->required()
        ];
    }

    protected function getSKUFormSchema(): array
    {
        return [
            TextInput::make('sku')
                ->label('')
        ];
    }

    protected function getDepartamentFormSchema(): array
    {
        return [
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
        ];
    }

    protected function getNameShopFormSchema(): array
    {
        return [
            TextInput::make('name_shop')
                ->label('Nombre')
                ->prefixIcon('heroicon-m-building-office')
                ->placeholder(__('Escribe el nombre de tu tienda'))
                ->required()
        ];
    }

    protected function getLegalReason($environment, $get, $set, $type, $name_input)
    {
        if ($environment == 'local')
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
                ->get(env('FELPLEX_END_POINT') . env('FELPLEX_ENTITY_ID') . "/find/CUI/" . $get("$name_input"));
            if ($response->successful())
            {
                if (isset($response[0]['tax_name']))
                {
                    $normalized_tax_name  = str_replace(',', ' ', $response[0]['tax_name']);
                    $cleaned_tax_name     = trim(preg_replace('/\s\s+/', ' ', str_replace("\n", " ", $normalized_tax_name)));
                    $type                == 'individual'
                        ? $set('legal_reason_individual', $cleaned_tax_name)
                        :   $set('legal_reason_business', $cleaned_tax_name);
                }
                else
                {
                    $type == 'individual'
                        ? $set('legal_reason_individual', '')
                        :   $set('legal_reason_business', '');
                }
            }
            else
            {
                $type == 'individual'
                    ? $set('legal_reason_individual', '')
                    :   $set('legal_reason_business', '');
            }
        }
        catch (\GuzzleHttp\Exception\RequestException $e)
        {
            $type == 'individual'
                ? $set('legal_reason_individual', '')
                :   $set('legal_reason_business', '');
        }
    }

    public function render()
    {
        return view('livewire.seller-register');
    }
}
