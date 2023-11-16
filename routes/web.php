<?php

use App\Cars\Truck;
use Illuminate\Support\Facades\Route;

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
    //dd(get_declared_classes());

    return view('file_upload');
});
Route::put('/files_store', 'App\Http\Controllers\CarsController@store')->name('store');
