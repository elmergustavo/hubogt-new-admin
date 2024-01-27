<?php

use App\Http\Controllers\frontend\HomeController;
use App\Livewire\Form;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoutingController;
use App\Livewire\FormRequests;
use Laravel\Socialite\Facades\Socialite;


\Illuminate\Support\Facades\Route::get('form', Form::class);



// Route::get('/', fn () => view('index'))->name('home');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', fn () => view('home'))->name('ecommerce');
Route::get('/producto-detalle', fn () => view('frontend.home.producto-detalle'))->name('producto_detalle');
Route::get('/tiendas', fn () => view('frontend.home.vendor'))->name('vendor');
Route::get('/comparar', fn () => view('frontend.home.compare'))->name('compare');
Route::get('/landing', fn () => view('frontend.landing.index'))->name('landing');
Route::get('/blogs', fn () => view('frontend.home.blog'))->name('blog');
Route::get('/preguntas-frecuentes', fn () => view('frontend.home.faqs'))->name('faqs');
Route::post('/', [FormRequests::class, 'sendMail'])->name('form.send');
Route::get('/onboarding', fn () => view('frontend.onboarding.Seller-register'))->name('seller_register');
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function ()
{
    Route::get('/dashboard', function ()
    {
        return view('dashboard');
    })->name('dashboard');
});
