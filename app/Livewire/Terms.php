<?php

namespace App\Livewire;

use Livewire\Component;
use App\Settings\EntitySettings;
// use App\Settings\GeneralSettings;

class Terms extends Component
{


    public $terms_conditions;

    public function mount(EntitySettings $settings)
    {
        $this->terms_conditions = $settings->terms_conditions;
    }

    public function render()
    {
        return view('livewire.terms');
    }
}
