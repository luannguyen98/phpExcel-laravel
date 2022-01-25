<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testController;
use Illuminate\Support\Facades\DB;
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
    return view('test');
});

Route::post('/import-csv',[testController::class, 'import']);

Route::post('/export-csv',[testController::class, 'export']);