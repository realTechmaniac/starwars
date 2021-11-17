<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PaymentController;

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


Route::get('/', [PagesController::class, 'index'])->name('page.index');

Route::get('/userdashboard',[DashboardController::class , 'index'])->name('dashboard.index')->middleware('auth');

Route::get('verify-payment/{reference}', [PaymentController::class, 'verifyPayment'])->middleware('auth');

Route::get('/paymentpage', [PaymentController::class, 'index'])->middleware('auth');

Route::get('/success', [PaymentController::class, 'redirectSuccess'])->middleware('auth');

Route::get('/films', [PagesController::class, 'showFilms'])->middleware('auth');

Route::get('/people',[PagesController::class, 'showPeople'])->middleware('auth');

Route::get('/planet',[PagesController::class, 'showPlanet'])->middleware('auth');

Route::get('/species', [PagesController::class, 'showSpecies'])->middleware('auth');

Route::get('/starships',[PagesController::class, 'showStarships'])->middleware('auth');

Route::get('/vehicles',[PagesController::class, 'showVehicles'])->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('hosme');


