<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\InventoryLabController;
use App\Http\Controllers\LabController;
use App\Http\Controllers\ManageInventoryController;
use App\Http\Controllers\ReqloansController;
use App\Http\Controllers\ManageLoansController;
use App\Http\Controllers\DashboardController;

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
})->name('beranda');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->middleware('auth');

Route::get('/inventory-lab', [InventoryLabController::class, 'inventory']);
Route::get('/labb/{id}', [InventoryLabController::class, 'labb']);

Route::resource('manage-inventory-lab', ManageInventoryController::class);

Route::get('lab/tambah', [LabController::class, 'create1'])->name('lab.create1');
Route::post('lab/simpan', [LabController::class, 'store'])->name('lab.store');
Route::delete('lab/{id}', [LabController::class, 'destroy'])->name('lab.destroy');
Route::get('/lab/{id}', [ManageInventoryController::class, 'lab'])->name('lab.index');

Route::get('/manage_loans', [ManageLoansController::class, 'manage_loans']);

Route::get('/requestLoans', [ReqloansController::class, 'index']);
Route::get('/requestLoans/create', [ReqloansController::class, 'create']);
Route::post('/manage_loans/store', [ReqloansController::class, 'store']);
