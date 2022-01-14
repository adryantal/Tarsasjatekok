<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TarsasjatekController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/api/tarsasjatekok/all', [TarsasjatekController::class, 'all']);  //összes t.játék megjel.
Route::get('/api/tarsasjatekok', [TarsasjatekController::class, 'index']);  //összes t.játék megjel.
Route::get('/api/tarsasjatek/{id}', [TarsasjatekController::class, 'show']); //adott id-jú t.játék megjelenítése
Route::post('/api/tarsasjatek', [TarsasjatekController::class, 'store']); //új rekord létrehozása request alapján
Route::put('/api/tarsasjatek/{id}', [TarsasjatekController::class, 'update']); //adott id-jú t.játék szerkesztése    
Route::get('/tarsasjatek/new', [TarsasjatekController::class, 'newView']);  //új t.játék rögzítése   
Route::delete('/api/tarsasjatek/{id}', [TarsasjatekController::class, 'destroy']); //id alapján töröl
Route::get('/tarsasjatek/edit/{id}', [TarsasjatekController::class, 'editView']); //adott id-jú t.játék szerkesztése (form)
