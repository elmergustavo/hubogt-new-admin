<?php

namespace App\Livewire;

use Livewire\Component;
use Detection\MobileDetect;

class ShopAddToCart extends Component
{

    public $modalWidth;

    public function mount()
    {
        $detect = new MobileDetect;
        $this->modalWidth = $detect->isMobile() ? 'xs' : 'md';
    }

    public function render()
    {
        return view('livewire.shop-add-to-cart');
    }

    public function openModalslide()
    {
        $this->dispatch('open-modal', id: 'feedback');

    }
    public function closeModalslide()
    {
        $this->dispatch('close-modal', id: 'feedback');

    }
}
