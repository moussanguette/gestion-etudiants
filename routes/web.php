<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;

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
//php artisan route:list -c => pour voir la liste des routes
Route::resource('etudiant', EtudiantController::class);

/* Route::get('/etudiant', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
             */