<?php

namespace App\Livewire;

use Livewire\Component;
use App\Settings\EntitySettings;

class Policy extends Component
{

    public $privacy_policies;

    public function mount(EntitySettings $settings)
    {
        $this->privacy_policies = $settings->privacy_policies;
    }

    public function render()
    {
        return view('livewire.policy');
    }
}
