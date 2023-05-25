<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
<<<<<<< HEAD
use App\Http\Controllers\BengkelController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\JadwalController;
=======
use App\Http\Controllers\ProfileUserController;
>>>>>>> 4b4eda15784cbc681c328295558d80c67d6b5cb1

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

// USER
Route::get('/profileuser', [ProfileUserController::class, 'showuser']);
Route::get('/profileuser/{id}', [ProfileUserController::class, 'showdetailuser']);
Route::get('/profileuser/{id}/edit', [ProfileUserController::class, 'edit']);
Route::post('/profileuser/{id}', [ProfileUserController::class, 'storedetailuser']);
Route::put('/profileuser/{id}', [ProfileUserController::class, 'updatedetailuser']);
Route::get('/profilekendaraan', [ProfileUserController::class, 'showkendaraan']);
Route::get('/profilekendaraan/add', [ProfileUserController::class, 'createkendaraan']);
Route::post('/profilekendaraan', [ProfileUserController::class, 'storekendaraan']);
Route::get('/profilekendaraan/{id}/delete', [ProfileUserController::class, 'destroykendaraan']);
Route::get('/profilekendaraan/{id}/edit', [ProfileUserController::class, 'editkendaraan']);
Route::put('/profilekendaraan/{id}', [ProfileUserController::class, 'updatekendaraan']);


// AUTH
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'doLogin']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/userregister', [AuthController::class, "userregister"])->name('userregister');
Route::get('/ownerregister', [AuthController::class, "ownerregister"])->name('ownerregister');
Route::post('/userregister', [AuthController::class, "douserregister"])->name('do.userregister');
Route::post('/ownerregister', [AuthController::class, "doownerregister"])->name('do.ownerregister');

// ADMIN
Route::get('/adminindex', [AdminController::class, 'index'])->name('adminindex');
Route::get('/adminlistuser', [AdminController::class, 'listuser'])->name('showlistuser');
Route::get('/adminlistuser/{id}/delete', [AdminController::class, 'destroyuser'])->name('deletelistuser');
Route::get('/adminlistowner', [AdminController::class, 'listowner'])->name('showlistowner');
Route::get('/adminlistowner/{id}/delete', [AdminController::class, 'destroyowner'])->name('deletelistowner');

<<<<<<< HEAD
Route::prefix('/owner')->middleware('auth:pemilikbengkel')->group(function () {

    Route::get('/' , [ BengkelController::class , 'index'])->name('bengkel.index');
    Route::resource('bengkel', BengkelController::class);
    Route::resource('layanan', LayananController::class);
    Route::resource('jadwal', JadwalController::class);
});
=======


// BENGKEL
Route::get('/bengkelindex', function () {
    return view('bengkel.index');
})->middleware('auth:pemilikbengkel');
>>>>>>> 4b4eda15784cbc681c328295558d80c67d6b5cb1
