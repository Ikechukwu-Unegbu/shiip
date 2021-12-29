<?php

use App\Http\Controllers\LocationController;
use App\Http\Controllers\MoviesController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PageController::class, 'home']);
Route::get('/dashboard/movies/new', [MoviesController::class, 'create'])->middleware(['auth']);
Route::post('/dashboard/movies/store', [MoviesController::class, 'store'])->middleware(['auth']);
Route::get('/dashboard/location/new', [LocationController::class, 'create'])->middleware(['auth'])->name('new_location');
Route::post('/dashboard/location/store', [LocationController::class, 'store'])->middleware(['auth']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
