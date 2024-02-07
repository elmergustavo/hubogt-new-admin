<?php

namespace App\Livewire;


use Closure;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Illuminate\Contracts\View\View;
use Livewire\Component;

use App\Helpers\DepartmentMunicipalityOptions;
use Filament\Forms\Components\Select;
use Filament\Forms\Get;
use Filament\Forms\Set;

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

    protected function getForms(): array
    {
        return [
            'Departament' => $this->makeForm()
                ->schema($this->getDepartamentFormSchema()),
            'NameShop' => $this->makeForm()
                ->schema($this->getNameShopFormSchema()),
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
                // ->extraAttributes(['title' => __('onboarding.tab_entity_info.deparment_tool_tip')])
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



    public function form(Form $form): Form
    {
        return $form
            ->schema([
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
                    ->extraAttributes(['title' => __('onboarding.tab_entity_info.deparment_tool_tip')]),
                Select::make('municipality')
                    ->label(__('Municipio'))
                    ->prefixIcon('heroicon-m-building-library')
                    ->requiredWith('department')
                    ->options(fn (Get $get) => DepartmentMunicipalityOptions::getMunicipality($get('department')))
                    ->searchable()
                    ->reactive()
                    ->live()
                    ->native(false)
                    ->extraAttributes(['title' => __('onboarding.tab_entity_info.municipality_tool_tip')]),
            ])
            ->statePath('data');
    }

    public function stepPage2()
    {
        $this->step = 2;
    }

    public function render()
    {
        return view('livewire.seller-register');
    }
}
