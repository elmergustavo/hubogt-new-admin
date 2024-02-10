<?php

namespace App\Livewire;

use App\Helpers\DepartmentMunicipalityOptions;

use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Forms\Components\Select;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Concerns\InteractsWithForms;

use Illuminate\Support\Str;
use Illuminate\Support\HtmlString;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

use Livewire\Component;

class SellerRegister extends Component implements HasForms
{
    use InteractsWithForms;

    public $current_page = 'page1';
    public $current_step = 1;
    public $curren_page_step = 1;

    public ?array $data = [
        'department'             => '',
        'municipality'           => '',
    ];

    public $department;
    public $municipality;
    
    public $sku;
    public $cui;
    public $tag;
    public $banck;
    public $phone;
    public $title;
    public $price;
    public $amount;
    public $category;
    public $surnames;
    public $name_shop;
    public $birthdate;
    public $first_name;
    public $local_price;
    public $description;
    public $account_name;
    public $offer_price;
    public $legal_reason;
    public $company_name;
    public $business_email;
    public $account_number;
    public $business_phone;
    public $cui_individual;
    public $social_networks;
    public $individual_email;
    public $nationwide_price;
    public $estimated_shipping_time;

    protected function getForms(): array
    {
        return [
            'Departament' => $this->makeForm()
                ->schema($this->getDepartamentFormSchema()),


            'NameShop' => $this->makeForm()
                ->schema($this->getNameShopFormSchema()),


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
            
            

            'Individual' => $this->makeForm()
                ->schema($this->getIndividualFormSchema()),
            'business' => $this->makeForm()
                ->schema($this->getBusinesslFormSchema()),
            'account_name' => $this->makeForm()
                ->schema($this->getAccountNameFormSchema()),
            'account_number' => $this->makeForm()
                ->schema($this->getAccountNumberFormSchema()),
            'banck' => $this->makeForm()
                ->schema($this->getBanckFormSchema()),
        ];
    }

    public function currentStepOne()
    {
        
        $this->Departament->validate();
        
        $this->current_step = 2;
        $this->curren_page_step = 2;
    }
    
    public function currentStepTwo()
    {
        $this->NameShop->validate();
        $this->current_step = 3;
        $this->curren_page_step = 3;
    }
    
    public function currentStepThree()
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
        $this->Offer_price->validate();
        $this->Amount->validate();
        $this->SKU->validate();
        $this->current_step = 4;
        $this->curren_page_step = 4;
    }

    public function currentStepFour()
    {
        $this->current_step = 5;
        $this->curren_page_step = 5;
    }

    protected function getBanckFormSchema(): array
    {
        return [
            Select::make('banck')
                ->label('')
                ->options([
                    'bac'    => 'BAC Credomatic',
                    'bi'     => 'Banco Industrial',
                    'brural' => 'Banrural',
                    'gyt'    => 'Banco G&T Continental',
                    'bam'    => 'Bam',
                    'inter'  => 'InterBanco',
                    'other'  => 'Otra'
                ])
                ->placeholder('Seleccione un banco de preferencia')
                ->reactive()
                ->live()
                ->native(false)
                ->searchable(),
        ];
    }

    protected function getAccountNumberFormSchema(): array
    {
        return [
            TextInput::make('account_number')
                ->label(''),
        ];
    }

    protected function getAccountNameFormSchema(): array
    {
        return [
            TextInput::make('account_name')
                ->label(''),
        ];
    }

    protected function getBusinesslFormSchema(): array
    {
        return [
            TextInput::make('cui')
                ->label('CUI')
                ->required()
                ->lazy()
                ->afterStateUpdated(
                    function (Get $get, Set $set)
                    {
                        self::getLegalReason(config('app.env'), $get, $set);
                    }
                ),
            TextInput::make('legal_reason')
                ->label('Representate legal')
                ->required(),
            TextInput::make('company_name')
                ->label('Nombre de la empresa'),
            TextInput::make('business_email')
                ->label('')
                ->required(),
            TextInput::make('phone')
                ->label('Telefono')
                ->required(),
        ];
    }

    protected function getIndividualFormSchema(): array
    {
        return [
            TextInput::make('cui_individual')
                ->label('CUI')
                ->required()
                ->lazy(),
            TextInput::make('first_name')
                ->label('Primer Nombre')
                ->required(),
            TextInput::make('surnames')
                ->label('Apellidos')
                ->required(),
            TextInput::make('individual_email')
                ->label('Correo electrónico')
                ->required(),
            TextInput::make('birthdate')
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
            TextInput::make('social_networks')
                ->label('')
                ->required()
        ];
    }

    protected function getPriceFormSchema(): array
    {
        return [
            TextInput::make('price')
                ->label('')
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
                ->label('')
                ->required()
        ];
    }

    protected function getAmountFormSchema(): array
    {
        return [
            TextInput::make('amount')
                ->label('')
                ->required()
        ];
    }

    protected function getSKUFormSchema(): array
    {
        return [
            TextInput::make('sku')
                ->label('')
                ->required()
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

    protected function getLegalReason($environment, $get, $set)
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
                ->get(env('FELPLEX_END_POINT') . env('FELPLEX_ENTITY_ID') . "/find/CUI/{$get('cui')}");
            if ($response->successful())
            {
                if (isset($response[0]['tax_name']))
                {
                    $normalized_tax_name = str_replace(',', ' ', $response[0]['tax_name']);
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

    public function render()
    {
        return view('livewire.seller-register');
    }
}
