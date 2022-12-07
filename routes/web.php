<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PabrikController;

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
route::group(['prefix' => '/pabrik'], function(){
    Route::get('/all', [PabrikController:: class, 'index']);
    Route::get('/detail/{pabrik}',[PabrikController::class,'show']);
    Route::get('/create', [PabrikController:: class, 'create']);
    Route::post('/add', [PabrikController:: class, 'store']);
    Route::get('/edit/{pabrik}',[PabrikController::class,'edit']);
    Route::post('/update/{pabrik}', [PabrikController:: class, 'update']);
    Route::delete('/delete/{pabrik}',[PabrikController::class,'destroy']);
});