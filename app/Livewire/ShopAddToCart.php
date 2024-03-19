<?php

namespace App\Livewire;

use Livewire\Component;
use Detection\MobileDetect;

class ShopAddToCart extends Component
{

    public $modalWidth;

    public function render()
    {
        $detect = new MobileDetect;
        $this->modalWidth = $detect->isMobile() ? 'xs' : 'md';
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
