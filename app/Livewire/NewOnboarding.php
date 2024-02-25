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

use Filament\Forms\Components\Grid;

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
                                    // CreateAccount::make('sd')
                                    //     ->label('')
                                    //     ->view('forms.components.create-account')
                                    //     ->columnSpan(2),
                                    TextInput::make('person')
                                        ->label('Nombre completo')
                                        ->prefixIcon('bi-person-fill')
                                        ->helperText('Ingrese aquí el nombre de la persona que administra la cuenta'),
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
                                        ->label('Nombre')
                                        ->prefixIcon('heroicon-m-building-office')
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
                                    TextInput::make('person')
                                        ->label('Razón social o nombre de la persona individual')
                                        ->helperText('Ingrese aquí el nombre que representará a su negocio en Mombii'),
                                    TextInput::make('nit')
                                        ->label('NIT')
                                        ->helperText('Ingrese aquí el NIT con el que realizará las facturas a sus clientes'),
                                    SpatieMediaLibraryFileUpload::make('avatar')
                                        ->label('RTU')
                                        ->acceptedFileTypes(['application/pdf'])
                                        ->helperText('Cargue aquí el RTU actualizado'),

                                    TextInput::make('phone')
                                        ->tel()
                                        ->minLength(8)
                                        ->label(__('Teléfono'))
                                        ->prefixIcon('heroicon-s-phone')
                                        ->helperText(__('Teléfono con el que se comunican con tu empresa'))
                                        ->mask('9999-9999')
                                        ->helperText('Ingrese aquí el número de telefono del negocio'),

                                    TextInput::make('email')
                                        ->email()
                                        ->regEx('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/')
                                        ->label(__('Correo Electrónico'))
                                        ->prefixIcon('heroicon-s-at-symbol')
                                        ->helperText(__('Ingrese aquí el correo el negocio')),

                                    TextInput::make('adreess')

                                        ->label(__('Dirección fiscal del comercio'))
                                        // ->prefixIcon('heroicon-s-phone')
                                        ->helperText(__('Teléfono con el que se comunican con tu empresa'))

                                        ->helperText('Ingrese aquí la dirección fiscal del comercio'),


                                    SpatieMediaLibraryFileUpload::make('avatar')
                                        ->label('Factura de servicios (agua, luz o teléfono)')
                                        // ->acceptedFileTypes(['application/pdf'])
                                        ->helperText('Cargue aquí una factura de servicio'),








                                ])

                        ]),
                    Wizard\Step::make('Representante Legal')
                        ->icon('fas-user-shield')
                        ->schema([
                            // ...
                        ]),
                    Wizard\Step::make('Añade inventario a tu tienda')
                        ->schema([
                            // ...
                        ]),
                    Wizard\Step::make('Configuración de pagos')
                        ->schema([
                            // ...
                        ]),
                ])->nextAction(fn (Action $action) => $action->extraAttributes([
                    'class' => 'bg-primary mt-4',
                ]))

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
