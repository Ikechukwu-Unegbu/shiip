<?php

use App\Http\Controllers\Blog\BlogController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\MoviesController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;
use App\Http\Controllers\Posts\PortfolioController;
use App\Models\Posts\Portfolio;

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
Route::get('/contact', [PageController::class, 'contactPage']);
Route::get('/portfolio', [PageController::class, 'portfolio']);
Route::get('/blog', [PageController::class, 'blogPage']);



Route::get('/dashboard', function () {
    return view('newDashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/dashboard/portfolio',[PortfolioController::class, 'index'])
->middleware(['auth'])
->name('portfolio.index');

Route::post('/dashboard/portfolio/post', [PortfolioController::class, 'post'])
->middleware(['auth'])
->name('portfolio.post');

Route::get('dashboard/portfolio/{id}', [PortfolioController::class, 'show'])
->middleware(['auth'])
->name('portfolio.show');

Route::get('/dashboard/blog', [BlogController::class, 'index'])
->middleware(['auth'])
->name('blog.index');
require __DIR__.'/auth.php';
