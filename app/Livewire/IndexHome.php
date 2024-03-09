<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Redirect;
use Livewire\Component;

class IndexHome extends Component
{
    public function mount()
    {
        return Redirect::to('/');
    }

    public function render()
    {
        // Tu código de renderización aquí, si decides mantener esta función.
    }
}
