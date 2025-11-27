<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;

use App\Http\Controllers\pelangganController;

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

// dengan mengan menggunakan get
Route::get('/welcome', function() {
    echo 'Hello World';
});
// dengan mengan menggunakan any
Route::any('/welcome', function() {
    echo 'Route menerima semua method';
});
// dengan mengan menggunakan post
Route::post('/store', function() {
    echo 'Data berhasil dikirim dengan POST';
});
Route::get('/about', function () {
    return view('about');
});
// dengan mengan menggunakan put
Route::put('/update', function() {
    echo 'Data berhasil diperbarui';
});
// dengan mengan menggunakan delete
Route::delete('/delete', function() {
    echo 'Data berhasil dihapus';
});
// dengan mengan menggunakan match
Route::match(['get', 'post'], '/welcome', function() {
    echo 'Route match GET dan POST';
});


// dengan mengan menggunakan parameter
Route::get('/show/{id}', function($id) {
    echo 'Nilai parameter adalah '.$id;
});
// dengan mengan menggunakan  nama 
Route::get('/edit/{nama}', function($nama) {
    echo 'Nilai parameter adalah '.$nama;
})->where('nama', '[A-Za-z]+');
Route::get('/create', function() {
    echo "Route diakses menggunakan nama";
})->name('create');


Route::get('/produk', [ProdukController::class, 'index']);
Route::get('/produk/show', [ProdukController::class, 'show']);
Route::get('/halaman', function () {
    $title = 'Harry Potter';
    $content = 'Harry Potter and the Deathly Hallows: Part 2';
    return view('content.halaman', compact('title', 'content'));
});

Route::get('/pelanggan', [pelangganController::class, 'index']);
Route::get('/danau', function () {
    return view('danau'); // 'danau' adalah nama file blade Anda (tanpa .blade.php)
});