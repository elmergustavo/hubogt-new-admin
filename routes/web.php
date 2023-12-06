<?php

use App\Livewire\Form;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoutingController;

\Illuminate\Support\Facades\Route::get('form', Form::class);



Route::get('/', fn () => view('index'))->name('home');
