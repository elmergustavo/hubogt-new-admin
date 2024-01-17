<?php

namespace App\Livewire;

use Livewire\Component;
use App\Settings\EntitySettings;

class Info extends Component
{
    public $title;
    public $subtitle;
    public $title_column1;
    public $description_column1;
    public $title_column2;
    public $description_column2;
    public $title_column3;
    public $description_column3;

    public function render(EntitySettings $settings)
    {
        $this->title               = $settings->title;
        $this->subtitle            = $settings->subtitle;
        $this->title_column1       = $settings->title_column1;
        $this->description_column1 = $settings->description_column1;
        $this->title_column2       = $settings->title_column2;
        $this->description_column2 = $settings->description_column2;
        $this->title_column3       = $settings->title_column3;
        $this->description_column3 = $settings->description_column3;

        return view('livewire.info');
    }
}
