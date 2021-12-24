<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registerController;
use App\Http\Controllers\loginController;

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
    return view('onBoarding');
});

Route::get('/admin', function () {
    return view('Admin.index');
});


Route::get('/signup', [registerController::class, 'index']);
Route::post('/signup', [registerController::class, 'store']);

Route::get('/signin', [loginController::class, 'index']);
Route::post('/signin', [loginController::class, 'validates']);
