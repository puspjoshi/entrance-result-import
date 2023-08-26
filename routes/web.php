<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MarkController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\SettingController;

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

Route::get('/', function () {
    return view('home');
});
//Route::get('/result',[ResultController::class,'index']);
Route::get('/result',[ResultController::class,'result']);

Route::get('login', [SessionController::class, 'index'])->middleware('guest')->name('login');
Route::post('login',[SessionController::class, 'login'])->middleware('guest');
Route::get('logout', [SessionController::class,'destroy']);

Route::middleware('can:admin')->group(function(){
    Route::get('admin/dashboard',[DashboardController::class, 'index']);
    Route::resource('admin/marks',MarkController::class)->except('show');
    Route::post('/admin/marks/import',[MarkController::class, 'uploadImport']);
    Route::get('/admin/marks/import',[MarkController::class, 'markImport']);
    Route::get('admin/marks/search',[MarkController::class, 'search']);
    Route::get('admin/settings',[SettingController::class, 'index']);
    Route::post('admin/settings',[SettingController::class,'update']);
});



