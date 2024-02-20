<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TreatmentController;
use App\Http\Controllers\StylistController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\RezervationController;
use App\Http\Controllers\ProducttController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\QueryController;
use App\Http\Controllers\WeatherController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/', function () {
        
        return view('dashboard');
    })->name('dashboard');

    Route::get('querys', function () {
        $location='Bihac';

        $apiKey='18e8d1a70909126d04c1551778680241';
        $response=Http::get("http://api.openweathermap.org/data/2.5/weather?q={$location}&appid={$apiKey}");

        dd($response->json());
        return view('querys');
    });
    
    Route::get('treatments', [TreatmentController::class, 'index']) 
    ->name('treatments');

    Route::get('stylists', [StylistController::class, 'index']) 
    ->name('stylists');

    Route::get('clients', [ClientController::class, 'index']) 
    ->name('clients');

    Route::get('rezervations', [RezervationController::class, 'index']) 
    ->name('rezervations');

    Route::get('querys', [QueryController::class, 'index']) 
    ->name('querys');

    Route::get('products', [ProducttController::class, 'index']) 
    ->name('products');
    
    Route::get('checkouts', [CheckoutController::class, 'index']) 
    ->name('checkouts');

    Route::get('add_stylist', [StylistController::class, 'create']) 
    ->name('add_stylist');

    Route::post('store_stylist', [StylistController::class, 'store']) 
    ->name('store_stylist');

    Route::get('add_treatment', [TreatmentController::class, 'create']) 
    ->name('add_treatment');

    Route::post('store_treatment', [TreatmentController::class, 'store']) 
    ->name('store_treatment');

    Route::get('add_client', [ClientController::class, 'create']) 
    ->name('add_client');

    Route::post('store_client', [ClientController::class, 'store']) 
    ->name('store_client');

    Route::get('add_rezervation', [RezervationController::class, 'create']) 
    ->name('add_rezervation');

    Route::post('store_rezervation', [RezervationController::class, 'store']) 
    ->name('store_rezervation');

    Route::get('add_checkout', [CheckoutController::class, 'create']) 
    ->name('add_checkout');

    Route::post('store_checkout', [CheckoutController::class, 'store']) 
    ->name('store_checkout');

    Route::post('delete_stylist', [StylistController::class, 'delete']) 
    ->name('delete_stylist');

    Route::post('edit_stylist', [StylistController::class, 'edit']) 
    ->name('edit_stylist');

    Route::post('update_stylist', [StylistController::class, 'update']) 
    ->name('update_stylist');

    Route::post('delete_treatment', [TreatmentController::class, 'delete']) 
    ->name('delete_treatment');

    Route::post('edit_treatment', [TreatmentController::class, 'edit']) 
    ->name('edit_treatment');

    Route::post('update_treatment', [TreatmentController::class, 'update']) 
    ->name('update_treatment');

    Route::post('delete_client', [ClientController::class, 'delete']) 
    ->name('delete_client');

    Route::post('edit_client', [ClientController::class, 'edit']) 
    ->name('edit_client');

    Route::post('update_client', [ClientController::class, 'update']) 
    ->name('update_client');

    Route::post('file_add', [TreatmentController::class, 'file_add']) 
    ->name('file_add');

    Route::get('/weather', [WeatherController::class, 'index'])->name('weather');


   

   
});
