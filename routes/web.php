<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\VendorController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\VendorLoginController;

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

Auth::routes();


// Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::get('/admin', [AdminAuthController::class, 'welcome'])->name('admin.welcome');
Route::get('/admin/loginForm', [AdminAuthController::class, 'loginForm'])->name('admin.loginForm');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login');
Route::get('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

Route::get('/vendor', [VendorController::class, 'welcome'])->name('vendor.welcome');
Route::get('/vendor/loginForm', [VendorController::class, 'loginForm'])->name('vendor.loginForm');

Route::post('/vendor/login', [VendorController::class, 'login'])->name('vendor.login');
Route::get('/vendor/logout', [VendorController::class, 'logout'])->name('vendor.logout');
Route::get('/vendor/registrationForm', [VendorController::class, 'registrationForm'])->name('vendor.registrationForm');

Route::post('/vendorRegistration', [VendorController::class, 'vendorRegistration'])->name('vendor.registration');

Route::get('/user/logout', [AdminAuthController::class, 'userLogout'])->name('user.logout');

Route::group(['middleware' => ['auth:admin']], function () {
Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
});
Route::group(['middleware' => ['auth:vendor']], function () {
Route::get('vendor/dashboard', [VendorLoginController::class, 'dashboard'])->name('vendor.dashboard');
});

Route::group(['middleware' => ['auth:web']], function () {
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});