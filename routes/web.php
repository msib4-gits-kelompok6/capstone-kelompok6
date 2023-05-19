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

Route::get('/landingpage', function () {
    return view('user.landingpage');
})->middleware('auth:web');

Route::get('/servicepage', function () {
    return view('user.servicepage');
})->middleware('auth:web');

Route::get('/detailbengkelpage', function () {
    return view('user.detailbengkelpage');
})->middleware('auth:web');

Route::get('/pesanpage', function () {
    return view('user.pemesananpage');
})->middleware('auth:web');

Route::get('/profileuserpage', function () {
    return view('user.profileuserpage');
})->middleware('auth:web');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'doLogin']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/userregister', [AuthController::class, "userregister"])->name('userregister');
Route::get('/ownerregister', [AuthController::class, "ownerregister"])->name('ownerregister');
Route::post('/userregister', [AuthController::class, "douserregister"])->name('do.userregister');
Route::post('/ownerregister', [AuthController::class, "doownerregister"])->name('do.ownerregister');

Route::get('/adminindex', function () {
    return view('admin.index');
})->middleware('auth:admin');

Route::get('/bengkelindex', function () {
    return view('bengkel.index');
})->middleware('auth:pemilikbengkel');
