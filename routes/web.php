<?php

use App\Http\Controllers\frontend\HomeController;
use App\Livewire\Form;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoutingController;
use App\Livewire\FormRequests;
use App\Livewire\IndexHome;
use App\Livewire\NewOnboarding;
use App\Livewire\Profile;
use Laravel\Socialite\Facades\Socialite;
use App\Livewire\SellerRegister;

// Route::get('/', fn () => view('index'))->name('home');
Route::get('/', fn () => view('new-home'))->name('ecommerce');
Route::get('/onboarding-pago', fn () => view('onboarding-pago'))->name('onboarding-pago');
Route::get('/categorias-productos', fn () => view('categorias-productos'))->name('categorias-productos');
Route::get('/productos-descripcion', fn () => view('productos-descripcion'))->name('productos-descripcion');
Route::get('/categorias-segment-productos', fn () => view('categorias-segment-productos'))->name('productos-descripcion');
Route::get('/tienda-especifica', fn () => view('tienda-especifica'))->name('tienda-especifica');
// Route::get('/', IndexHome::class)->name('index-home');
Route::get('/profile', fn () => view('frontend.home.profile'))->name('profile');
Route::get('/producto-detalle', fn () => view('frontend.home.producto-detalle'))->name('producto_detalle');
Route::get('/tiendas', fn () => view('frontend.home.vendor'))->name('vendor');
Route::get('/comparar', fn () => view('frontend.home.compare'))->name('compare');
Route::get('/landing', fn () => view('frontend.landing.index'))->name('landing');
Route::get('/blogs', fn () => view('frontend.home.blog'))->name('blog');
Route::get('/preguntas-frecuentes', fn () => view('frontend.home.faqs'))->name('faqs');
Route::post('/', [FormRequests::class, 'sendMail'])->name('form.send');

// Route::get('/login', fn () => view('login'))->name('login');
// Route::get('/preguntas-frecuentes', fn () => view('faq'))->name('faq');
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

// require __DIR__ . '/auth.php';

Route::middleware(['auth',
    // config('jetstream.auth_session'),
    // 'verified',
])->group(function ()
{
    Route::get('/onboarding', SellerRegister::class)->name('seller_register');
    Route::get('/new-onboarding', NewOnboarding::class)->name('new-onboarding');
});
