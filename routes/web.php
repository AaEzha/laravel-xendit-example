<?php

use App\Http\Controllers\AfterCartController;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\CallbackInvoiceController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\InstagramController;
use App\Http\Controllers\TwitterController;
use App\Http\Controllers\User\ChangePasswordController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['login'=>false, 'register'=>false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('checkout', CartController::class)->only(['index', 'store']);

Route::get('/success', [AfterCartController::class, 'success'])->name('success');
Route::get('/failure', [AfterCartController::class, 'failure'])->name('failure');
Route::post('/x/callback-invoice', CallbackInvoiceController::class);
