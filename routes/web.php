<?php

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SalesController;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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
// Route::get('/', function () {
//     return view('index');
// });

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route for email
Route::get('/email', function () {
    Mail::to('sterotech@outlook.com')->send(new WelcomeMail());
    return new WelcomeMail();
});
Route::controller(
    Route::resource('/customers', CustomersController::class)
);

Route::controller(
    Route::resource('/sales', SalesController::class)
);

Route::get('/reports', [App\Http\Controllers\ReportsController::class, 'index'])->name('reports');

Route::controller(
    Route::resource('/products', ProductsController::class)
);

