<?php

use App\Http\Controllers\Auth\AuthController;
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


route::get('auth/dashboard',[AuthController::class,'dashboard'])->name('auth.dashboard');
Route::get('/', function () {
    return view('/auth/login');
});

Route::get('/equipo', 'App\Http\Controllers\Auth\AuthController@equipo')->name('equipo');
Route::get('/asignados', 'App\Http\Controllers\Auth\AuthController@asignados')->name('asignados');
Route::get('/prestamos', 'App\Http\Controllers\Auth\AuthController@prestamos')->name('prestamos');


//auth
/**Route::prefix('auth')->group(function(){
    Route::get('login', function(){
        return 'hello word';
    })->name('login');
        Route::get('login',[AuthController::class 'login'])->name('login');

});*/

//route::get('auth/login',[AuthController::class,'login'])->name('auth.login');