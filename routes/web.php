<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FactsController;

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

//Route::get('/', function () {
//    return view('home');
//});

Route::get('/', [FactsController::class, 'facts']);

Route::get('/verloren', function () {
    return view('verloren');
});
