<?php

use Livewire\Volt\Volt;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\PlatsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\TablesController;
use App\Http\Controllers\GerantsController;
use App\Http\Controllers\PaniersController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\LivreursController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\CommandesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PaiementsController;

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\LivraisonsController;
use App\Http\Controllers\ReservationsController;

Route::get('/home', function () {
    return view('welcome');
})->name('home');

Route::get('/', [WelcomeController::class,'index']);


Route::resource('messages',MessagesController::class);


Route::resource('categories',CategoriesController::class);
Route::resource('users',UsersController::class);
Route::resource('gerants',GerantsController::class);
Route::resource('livreurs',LivreursController::class);
Route::resource('tables',TablesController::class);

Route::resource('reservations',ReservationsController::class);
Route::resource('paniers',PaniersController::class);
Route::resource('commandes',CommandesController::class);
Route::resource('livraisons',LivraisonsController::class);
Route::resource('paiements',PaiementsController::class);
Route::resource('plats',PlatsController::class);

Route::get('/ajouterpanier/{id}',[PaniersController::class,'ajouterpanier'])->name('ajouterpanier');
Route::get('/voirpanier',[PaniersController::class,'voirpanier'])->name('voirpanier');
Route::delete('/suppanier/{id}',[PaniersController::class,'suppanier'])->name('suppanier');


Route::get('/paiement', [PaniersController::class, 'index'])->name('payment.form');
Route::post('/checkout/{id}', [PaniersController::class, 'commandes'])->name('payment.checkout');
Route::get('/success', [PaniersController::class, 'success'])->name('payment.success');
Route::get('/cancel', [PaniersController::class, 'cancel'])->name('payment.cancel');


Route::get('/passeratable',[ReservationsController::class,'passeratable'])->name('passeratable');
Route::get('/listeReservation',[ReservationsController::class,'listeReservation'])->name('listeReservation');

Route::view('dashboard', 'dashboard.dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('dashboard/dashboard', [DashboardController::class,'index'])
    ->middleware(['auth', 'verified', 'admin'])
    ->name('dashboard.dashboard');

// Route::view('dashboard/dashboard', 'dashboard.dashboard')
//     ->middleware(['auth', 'verified','admin'])
//     ->name('dashboard.dashboard');    
   

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
