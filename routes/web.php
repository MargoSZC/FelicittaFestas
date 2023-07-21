<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\CardapioController;
use App\Http\Controllers\PacoteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('principal');
});

Route::get('dashboard', function () {
    return view('admin');
})
    ->middleware(['auth', 'verified'])
    ->name('admin');

    Route::get('principal', function () {
        return view('principal');
    })
        ->middleware(['auth', 'verified'])
        ->name('principal');



Route::middleware('auth')->group(function () {
    Route::resource('usuario', UsuarioController::class);
    Route::post('usuario/search', [UsuarioController::class, 'search']);

    Route::resource('cliente', ClienteController::class);
    Route::post('cliente/search', [ClienteController::class, 'search']);

    Route::resource('pacote', PacoteController::class);
    Route::post('pacote/search', [PacoteController::class, 'search']);

    Route::resource('cardapio', CardapioController::class);
    Route::post('cardapio/search', [CardapioController::class, 'search']);

    Route::resource('produto', ProdutoController::class);
    Route::post('produto/search', [ProdutoController::class, 'search']);


    Route::get('/profile', [ProfileController::class, 'edit'])->name(
        'profile.edit'
    );
    Route::patch('/profile', [ProfileController::class, 'update'])->name(
        'profile.update'
    );
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name(
        'profile.destroy'
    );
});

require __DIR__ . '/auth.php';
