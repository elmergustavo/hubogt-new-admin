<?php

namespace App\Livewire;

use Filament\Forms\Get;
use Filament\Forms\Set;
use Closure;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Illuminate\Support\Facades\Http;

use App\Helpers\DepartmentMunicipalityOptions;
use Filament\Forms\Components\Select;


use Illuminate\Support\Str;
use Illuminate\Support\HtmlString;
use Illuminate\Support\Facades\Auth;


class SellerRegister extends Component implements HasForms
{
    use InteractsWithForms;
    public ?array $data = [
        'department'             => '',
        'municipality'           => '',
    ];
    public $step = 1;

    public $department;
    public $municipality;
    public $name;
    public $cui;
    public $legal_reason;

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
            'Shipping_price1' => $this->makeForm()
                ->schema($this->getShippingPrice1FormSchema()),
            'Shipping_price2' => $this->makeForm()
                ->schema($this->getShippingPrice2FormSchema()),
            'Estimated_shipping_time' => $this->makeForm()
                ->schema($this->getEstimatedShippingTimeFormSchema()),
            'Offer_price' => $this->makeForm()
                ->schema($this->getOfferPriceFormSchema()),
            'Amount' => $this->makeForm()
                ->schema($this->getAmountFormSchema()),
            'SKU' => $this->makeForm()
                ->schema($this->getSKUFormSchema()),
            'individual' => $this->makeForm()
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
                ->label('cui')
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
            TextInput::make('x')
                ->label('Nombre de la empresa'),
            TextInput::make('g')
                ->label('Correo electronico')
                ->required(),
            TextInput::make('h')
                ->label('Telefono')
                ->required(),
        ];
    }
    protected function getIndividualFormSchema(): array
    {
        return [
            TextInput::make('cui2')
                ->label('cui')
                ->required()
                ->lazy(),
            TextInput::make('a')
                ->label('Primer Nombre')
                ->required(),
            TextInput::make('b')
                ->label('Apellidos')
                ->required(),
            TextInput::make('c')
                ->label('Correo electronico')
                ->required(),
            TextInput::make('d')
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
            TextInput::make('description')
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
    protected function getShippingPrice1FormSchema(): array
    {
        return [
            TextInput::make('shipping_price1')
                ->label('')
                ->numeric()
                ->required()
        ];
    }
    protected function getShippingPrice2FormSchema(): array
    {
        return [
            TextInput::make('shipping_price2')
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
                // ->extraAttributes(['title' => __('onboarding.tab_entity_info.municipality_tool_tip')])
                ->required(),
        ];
    }

    protected function getNameShopFormSchema(): array
    {
        return [
            TextInput::make('name')
                ->label('Nombre')
                ->prefixIcon('heroicon-m-building-office')
                ->placeholder(__('Escribe el nombre de tu tienda'))
                // ->extraAttributes(['title' => __('onboarding.tab_entity_name.name_tool_tip')])
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
            // ->get(env('FELPLEX_END_POINT') . env('FELPLEX_ENTITY_ID') . "find/CUI/{$get('cui')}");
            ->get('https://felplex.dev.plex.lat/api/entity/141/'. "find/CUI/{$get('cui')}");
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
            $set('legal_reason', 'hola');
        }
    }

    public function render()
    {
        return view('livewire.seller-register');
    }
}
