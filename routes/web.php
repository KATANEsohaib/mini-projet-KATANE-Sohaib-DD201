<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MiniproController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Routes pour l'authentification



    
Route::get('/produits/{id}', [MiniproController::class, 'show'])->name('produits.show');
Route::get('/ajouter', [MiniproController::class, 'showAjouterForm'])->name('ajouter.form');
Route::post('/ajouter', [MiniproController::class, 'create'])->name('ajouter.create');
Route::get('/afficher','App\Http\Controllers\MiniproController@index' )->name('afficher');
Route::post('/afficher','App\Http\Controllers\MiniproController@index' )->name('affichage');
Route::get('/produits', [MiniproController::class, 'index'])->name('produits');



Route::get('/login', [MiniproController::class, 'showLoginForm'])->name('login');
Route::post('/login', [MiniproController::class, 'login'])->name('logine');

Route::get('/supprimer/{c}','App\Http\Controllers\MiniproController@destroy' );





Route::get('/', function () {
    return view('welcome');
});



