<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registerController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\admin_orderController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\user_indexController;

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

Route::get('/admin/dashboard', function () {
    return view('Admin.dashboard');
});

// Route::get('/admin/order', function () {
//     return view('Admin.order');
// });

Route::get('/admin/report', function () {
    return view('Admin.report');
});


Route::get('/signup', [registerController::class, 'index']);
Route::post('/signup', [registerController::class, 'store']);

Route::get('/signin', [loginController::class, 'index']);
Route::post('/signin', [loginController::class, 'validates']);

Route::get('/admin/order', [admin_orderController::class, 'index']);
Route::post('/admin/order', [admin_orderController::class, 'update']);

Route::get('/admin/products', [ProductsController::class, 'index']);
Route::resource('/admin/products', ProductsController::class);

Route::get('/home', [user_indexController::class, 'index']);

Route::get('/dryclean', [ProductsController::class, 'dryclean']);
Route::post('/dryclean', [ProductsController::class, 'drycleanPost']);

// Route::get('/fullwash', [ProductsController::class, 'fullwash']);

// Route::get('/iron', [ProductsController::class, 'iron']);

// Route::get('/shoewash', [ProductsController::class, 'shoewash']);

// Route::get('/carpetwash', [ProductsController::class, 'carpetwash']);

// Route::get('/dollwash', [ProductsController::class, 'dollwash']);

// Route::get('/bagwash', [ProductsController::class, 'bagwash']);
