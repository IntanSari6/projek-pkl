<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventoryLabController;

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
    return view('landing-page');
});

Route::get('/a', function () {
    return view('main');
});

Route::get('/inventory', [InventoryLabController::class, 'inventory']);
