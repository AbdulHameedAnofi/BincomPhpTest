<?php

use App\Http\Controllers\InecResultsContoller;
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

Route::post('pollingUnit', [InecResultsContoller::class, 'pollingUnitResult']);

Route::view('pollingUnitResults', 'PollingUnitResults');

Route::post('LGA', [InecResultsContoller::class, 'LGAresult']);

Route::view('LGAresult', 'LGAresults');

Route::post('NewUnit', [InecResultsContoller::class, 'newPollingUnit']);

Route::view('NewPollingUnit', 'NewPollingUnit');