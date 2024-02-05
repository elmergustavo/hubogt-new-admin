<?php

namespace App\Livewire;

use Livewire\Component;
use App\Settings\EntitySettings;

class Terms extends Component
{


    public  $settings         = EntitySettings::class;
    public $name = 'xd';

    public function render()
    {

        $settings->name;


        \Log::info($settings->name);
        return view('terms');
    }
}
