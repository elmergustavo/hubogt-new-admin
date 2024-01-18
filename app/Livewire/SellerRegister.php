<?php

namespace App\Livewire;

use Livewire\Component;

class SellerRegister extends Component
{
    public $step = 1;

    public function stepPage2()
    {
        $this->step = 2;
    }

    public function render()
    {
        return view('livewire.onboarding.seller-register');
    }
}
