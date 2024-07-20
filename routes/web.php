<?php

use App\Http\Controllers\barangController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');
});

//barang
Route::get('/barang', [barangController::class, 'index'])->name('barang.index');
Route::get('/barang/create', [barangController::class, 'create'])->name('barang.create');
Route::post('/barang', [barangController::class, 'store'])->name('barang.store');
Route::get('/barang/{barang}/edit', [barangController::class, 'edit'])->name('barang.edit');
Route::patch('/barang/{barang}', [barangController::class, 'update'])->name('barang.update');
Route::delete('/barang/{barang}', [barangController::class, 'destroy'])->name('barang.destroy');
