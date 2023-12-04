<?php

use Illuminate\Support\Facades\Route;
use App\Models\Location;
use App\Http\Controllers\OptionController;
use App\Http\Controllers\OrderManage;
use App\Http\Controllers\RestController;
use App\Http\Controllers\InstallApp;
use App\Http\Controllers\LocationController;
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
Route::middleware(['verify.shopify'])->group(function () {
    Route::get('/', function () {
        $locations = Location::all();
        return view('home.index', compact('locations'));
    })->name('home');

    Route::get('/options/{id}', [OptionController::class, 'index'])->name('options');
    Route::put('/update-option', [OptionController::class, 'update'])->name('update');
    Route::get('/order-manage', [OrderManage::class, 'index'])->name('order');
    Route::put('/update-draft', [OrderManage::class, 'updateAdditionalData'])->name('update-draft');
    Route::post('/slots', [OrderManage::class, 'getSlots'])->name('slots');
    Route::put('/save-postcode', [LocationController::class, 'save'])->name('save-postcode');
    Route::get('/getOption', [OptionController::class, 'getOptionById'])->name('getOption');
});

Route::post('/rest', [RestController::class, 'index'])->name('rest');
Route::get('/install', [InstallApp::class, 'index'])->name('install');