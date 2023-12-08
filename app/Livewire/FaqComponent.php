<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Faq;

class FaqComponent extends Component
{
    public $faqs;

    public function mount()
    {
        $this->faqs = Faq::where('active', true)->get();
    }


    public function render()
    {
        return view('livewire.faq-component');
    }
}
