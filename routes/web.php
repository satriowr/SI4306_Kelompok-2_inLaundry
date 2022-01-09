<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registerController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\admin_orderController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\user_indexController;
use App\Http\Controllers\admin_dashboardController;

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

// Route::get('/admin/dashboard', function () {
//     return view('Admin.dashboard');
// });

Route::get('/admin/dashboard', [admin_dashboardController::class, 'index'])->middleware('admin');
Route::get('/admin/dashboard/delete/{id}', [admin_dashboardController::class, 'deleteNote'])->middleware('admin');
Route::post('/admin/dashboard/new', [admin_dashboardController::class, 'newNote'])->middleware('admin');

// Route::get('/admin/order', function () {
//     return view('Admin.order');
// });

Route::get('/admin/report', function () {
    return view('Admin.report');
});


Route::get('/signup', [registerController::class, 'index']);
Route::post('/signup', [registerController::class, 'store']);

Route::get('/signin', [loginController::class, 'index'])->name('login');
Route::post('/signin', [loginController::class, 'validates']);

Route::get('/logout', [loginController::class, 'logout'])->name('logout');

Route::get('/admin/order', [admin_orderController::class, 'index'])->middleware('admin');
Route::post('/admin/order', [admin_orderController::class, 'update'])->middleware('admin');

Route::get('/admin/order/{id}', [admin_orderController::class, 'update'])->middleware('admin');
Route::post('/admin/order/{id}', [admin_orderController::class, 'updatePost'])->middleware('admin');

Route::get('/admin/order/delete/{id}', [admin_orderController::class, 'delete'])->middleware('admin');

Route::get('/admin/products', [ProductsController::class, 'index'])->middleware('admin');
Route::resource('/admin/products', ProductsController::class)->middleware('admin');

Route::get('/home', [user_indexController::class, 'index'])->middleware('auth');

Route::get('/dryclean', [ProductsController::class, 'dryclean'])->middleware('auth');
Route::post('/dryclean', [ProductsController::class, 'drycleanPost'])->middleware('auth');
Route::get('/dryclean/status', [ProductsController::class, 'drycleanStatus'])->middleware('auth');
Route::post('/dryclean/status', [ProductsController::class, 'drycleanStatusPost'])->middleware('auth');

Route::get('/fullwash', [ProductsController::class, 'fullwash'])->middleware('auth');
Route::post('/fullwash', [ProductsController::class, 'fullwashPost'])->middleware('auth');

Route::get('/iron', [ProductsController::class, 'iron'])->middleware('auth');
Route::post('/iron', [ProductsController::class, 'ironPost'])->middleware('auth');

Route::get('/shoeswash', [ProductsController::class, 'shoeswash'])->middleware('auth');
Route::post('/shoeswash', [ProductsController::class, 'shoeswashPost'])->middleware('auth');

Route::get('/carpetwash', [ProductsController::class, 'carpetwash'])->middleware('auth');
Route::post('/carpetwash', [ProductsController::class, 'carpetwashPost'])->middleware('auth');

Route::get('/dollwash', [ProductsController::class, 'dollwash'])->middleware('auth');
Route::post('/dollwash', [ProductsController::class, 'dollwashPost'])->middleware('auth');

Route::get('/bagwash', [ProductsController::class, 'bagwash'])->middleware('auth');
Route::post('/bagwash', [ProductsController::class, 'bagwashPost'])->middleware('auth');





