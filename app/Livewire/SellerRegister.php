<?php

namespace App\Livewire;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class SellerRegister extends Component implements HasForms
{
    use InteractsWithForms;
    public ?array $data = [];
    public $step = 1;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->required(),
                MarkdownEditor::make('content'),
                // ...
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
