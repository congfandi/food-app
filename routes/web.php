<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FandiController;
use App\Http\Controllers\web\AbsensiController;

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

// Route::get('absensi','AbsensiController@index');


Route::middleware('fandi')->get('/user/{name?}', [FandiController::class,'fandi']);


Route::resource('absensi',AbsensiController::class);

Route::get('fandi', function () {
    return view('content1');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/home', function () {
    return view('admin/home',[
        'menu' => 'Home',
    ]);
});

Route::get('page1', function () {
    return view('page1');
})->name('page1');

Route::get('page2', function () {
    return view('pge2');
});

Route::get('page1template', function () {
    return view('page1template');
});

Route::group(
    [
        'middleware'=> 'auth',
        'prefix' => 'admin',
    ],
    function () {
        Route::get('home', [HomeController::class, 'index']);
        Route::resource('categories', CategoryController::class);
        Route::resource('orders', OrderController::class);
        Route::resource('foods', FoodController::class);
        Route::resource('users', UserController::class);
    }
);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
