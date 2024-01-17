<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function show()
    {
        $addresses = 'Hola mundo';
        $shippingMethods = 'Esto es xd';
        return view('frontend.home.secction-info', compact('addresses', 'shippingMethods'));
    }
}
