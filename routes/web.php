<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\KategoriController;
use App\Http\Controllers\Admin\ArtikelController;
use App\Http\Controllers\Admin\KomentarController;
use App\Http\Controllers\Admin\PorfolioController;
use App\Http\Controllers\Admin\MenuController;

use App\Http\Controllers\Site\BerandaController;
use App\Http\Controllers\Site\ArtikelViewController;
use App\Http\Controllers\Site\PorpolioViewController;
use App\Http\Controllers\Site\KontakViewController;
use App\Http\Controllers\Site\GaleriViewController;


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

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/proses_login', [AuthController::class, 'proses_login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Site
Route::get('/', [BerandaController::class, 'index']);

// Artikel
Route::get('/artikel_v', [ArtikelViewController::class, 'index'])->name('artikel');
Route::get('/artikel_v/menu/{kategori_id}', [ArtikelViewController::class, 'artikel_kategori']);
Route::get('/artikel_v/detail/{id}', [ArtikelViewController::class, 'show'])->name('artikel_detail');
Route::post('/komentar/{id}', [ArtikelviewController::class, 'komentar']);

Route::get('/porfolio_v', [PorpolioViewController::class, 'index'])->name('porfolio');
Route::get('/porfolio_v/{id}', [PorpolioViewController::class, 'show'])->name('porfolio_detail');

Route::get('/kontak_v', [KontakViewController::class, 'index'])->name('proyek');
Route::get('/proyek_v/{id}', [ProyekViewController::class, 'show'])->name('proyek_detail');

Route::get('/galeri_v', [GaleriViewController::class, 'index'])->name('galeri');
Route::get('/galeri_v/{id}', [GaleriViewController::class, 'show'])->name('galeri_detail');





// Route group
Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cek_login:admin']], function () {
        // Menu
        Route::resource('/menu', MenuController::class);

        // Dashboard
        Route::get('/admin', [AdminController::class, 'index']);
        
        // Kategori
        Route::resource('/kategori', KategoriController::class);

        // Artikel
        Route::resource('/artikel', ArtikelController::class);

        // Komentar
        Route::resource('/komentar', KomentarController::class);
        

        // Galeri
        Route::resource('/porfolio', PorfolioController::class);


    });
    Route::group(['middleware' => ['cek_login:user']], function () {
        // Dashboard
        Route::get('/user', [AdminController::class, 'index']);        	

    });
});