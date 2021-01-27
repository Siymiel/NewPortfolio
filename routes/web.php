<?php

use App\Http\Controllers\Dashboard\DashhomeController;
use App\Http\Controllers\Dashboard\ServiceController;
use Illuminate\Support\Facades\Route;

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
    return view('site.index');
});

Route::get('/contact', function () {
    return view('site.contact');
});

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.', 'middleware' => ['auth']], function () {
    Route::get('/', [DashhomeController::class, 'index'])->name('index');
    Route::resources([
        'services' => ServiceController::class,
    ]);
});