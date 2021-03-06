<?php

use App\Http\Controllers\CityController;
use App\Http\Controllers\CountryController;
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
    return view('welcome');
});

Route::get('/add-country', [CountryController::class, 'addCountry'])->name('country.add');
Route::post('/add-country', [CountryController::class, 'submitCountry']);
Route::get('/countries', [CountryController::class, 'ShowAllCountries'])->name('country.show');
//search
// Route::get('/search', [CountryController::class, 'searchCountries'])->name('country.search');

Route::get('/add-city', [CityController::class, 'addCity'])->name('city.add');
Route::post('/add-city', [CityController::class, 'submitCity']);

Route::get('/cities', [CityController::class, 'ShowAllCity'])->name('city.show');


// Route::get('/search', [CityController::class, 'ShowAllCity'])->name('city.show');