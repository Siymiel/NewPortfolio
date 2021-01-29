<?php

use App\Http\Controllers\Dashboard\DashhomeController;
use App\Http\Controllers\Dashboard\ProjectController;
use App\Http\Controllers\Dashboard\ServiceController;
use App\Http\Controllers\Dashboard\ClientController;
use App\Http\Controllers\Dashboard\ContactController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\AppcontactController;
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

// Site
Route::get('/', [SiteController::class, 'index'])->name('home');
Route::get('/contact', [SiteController::class, 'showContactPg'])->name('contact');
Route::post('/contact-chat', [AppContactController::class, 'storeContact'])->name('contactstore');

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.', 'middleware' => ['auth']], function () {
    Route::get('/', [DashhomeController::class, 'index'])->name('index');
    Route::resources([
        'services' => ServiceController::class,
        'projects' => ProjectController::class,
        'clients' => ClientController::class,
        'contacts' => ContactController::class,
    ]);
});