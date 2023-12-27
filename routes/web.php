<?php

use App\Livewire\Form;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoutingController;

\Illuminate\Support\Facades\Route::get('form', Form::class);



Route::get('/', fn () => view('index'))->name('home');
Route::get('/home', fn () => view('home'))->name('ecommerce');
// Route::get('/login', fn () => view('login'))->name('login');
Route::get('/preguntas-frecuentes', fn () => view('faq'))->name('faq');
// Route::get('/login', fn () => view('login'))->name('cookie-settings');
// Route::get('/login', fn () => view('login'))->name('sell-on-buhogt');


Route::fallback(function () {
    return view('not-fond');
});



// Route::view('/', 'welcome');

// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

// Route::view('profile', 'profile')
//     ->middleware(['auth'])
//     ->name('profile');

require __DIR__ . '/auth.php';
