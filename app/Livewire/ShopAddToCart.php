<?php

namespace App\Livewire;

use Livewire\Component;

class ShopAddToCart extends Component
{
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
