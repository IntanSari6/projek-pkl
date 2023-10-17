<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\InventoryLabController;
use App\Http\Controllers\LabController;
use App\Http\Controllers\ManageTeacherDataController;
use App\Http\Controllers\ManageInventoryController;
use App\Http\Controllers\ReqloansController;
use App\Http\Controllers\ManageLoansController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ManageScheduleController;
use App\Http\Controllers\ScheduleController;

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
Route::get('/', [LandingPageController::class, 'landing_page'])->name('beranda');
Route::get('/get-data/{title}', [LandingPageController::class, 'get_datamodal']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->middleware('auth');
Route::get('/profile', [DashboardController::class, 'profile'])->middleware('auth');

Route::get('/inventory-lab', [InventoryLabController::class, 'inventory'])->middleware('auth');
Route::get('/labb/{id}', [InventoryLabController::class, 'labb'])->middleware('auth');

Route::resource('manage-teacher-data', ManageTeacherDataController::class)->middleware('admin');

Route::resource('manage-inventory-lab', ManageInventoryController::class)->except('create')->middleware('admin');
Route::get('/manage-inventory-lab/{lab_id}/create', [ManageInventoryController::class, 'create'])->name('manage-inventory-lab.create')->middleware('admin');

Route::get('lab/tambah', [LabController::class, 'create1'])->name('lab.create1')->middleware('admin');
Route::post('lab/simpan', [LabController::class, 'store'])->name('lab.store')->middleware('admin');
Route::delete('lab/{id}', [LabController::class, 'destroy'])->name('lab.destroy')->middleware('admin');
Route::get('/lab/{id}', [ManageInventoryController::class, 'lab'])->name('lab.index')->middleware('admin');

Route::get('/manage_loans', [ManageLoansController::class, 'manage_loans'])->middleware('admin');

Route::get('/requestLoans', [ReqloansController::class, 'index'])->middleware('auth');
Route::get('/requestLoans/create', [ReqloansController::class, 'create']);
Route::post('/manage_loans/store', [ReqloansController::class, 'store']);

Route::get('/manage_schedule', [ManageScheduleController::class, 'manage_schedule'])->middleware('admin');
Route::get('/get-datamodal/{title}', [ManageScheduleController::class, 'get_datamodal'])->name('get-datamodal');
Route::get('/get_datamodal_batalkan/{id}', [ManageScheduleController::class, 'get_bataldatamodal'])->name('get_bataldatamodal');

Route::get('/schedule', [ScheduleController::class, 'schedule'])->middleware('auth');
Route::get('/get_sedangdipakaidatamodal/{id}', [ScheduleController::class, 'get_sedangdipakaidatamodal'])->name('get_sedangdipakaidatamodal');
Route::get('/get_selesaidatamodal/{id}', [ScheduleController::class, 'get_selesaidatamodal'])->name('get_selesaidatamodal');


Route::get('ubah_statusLoans/{id}/{status}', [ManageLoansController::class,'update_status']);