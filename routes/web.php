<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::get('/landing-page', function () {
    return view('user.landingpage');
});

Route::get('/service-page', function () {
    return view('user.servicepage');
});


Route::get('/detailbengkel-page', function () {
    return view('user.detailbengkelpage');
});
Route::get('/pesan-page', function () {
    return view('user.pemesananpage');
});

Route::get('/profileuser-page', function () {
    return view('user.profileuserpage');
});

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/userregister', [AuthController::class, "userregister"])->name('userregister');
Route::get('/ownerregister', [AuthController::class, "ownerregister"])->name('ownerregister');
