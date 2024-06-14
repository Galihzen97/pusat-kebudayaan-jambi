<?php

use App\Http\Controllers\Admin\AdminArtikelController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('homeAwal');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/event', [App\Http\Controllers\HomeController::class, 'event'])->name('event');
Route::get('/event/{id}', [App\Http\Controllers\HomeController::class, 'detailEvent'])->name('detailEvent');
Route::get('/publicPers', [App\Http\Controllers\HomeController::class, 'publicPers'])->name('publicPers');
Route::get('/detailPublicPers/{id}', [App\Http\Controllers\HomeController::class, 'detailPublicPers'])->name('detailPublicPers');
Route::get('/publicNews', [App\Http\Controllers\HomeController::class, 'publicNews'])->name('publicNews');
Route::get('/detailPublicNews/{id}', [App\Http\Controllers\HomeController::class, 'detailPublicNews'])->name('detailPublicNews');
Route::get('/oaseOpini', [App\Http\Controllers\HomeController::class, 'oaseOpini'])->name('oaseOpini');
Route::get('/detailOaseOpini/{id}', [App\Http\Controllers\HomeController::class, 'detailOaseOpini'])->name('detailOaseOpini');
Route::get('/oaseEsai', [App\Http\Controllers\HomeController::class, 'oaseEsai'])->name('oaseEsai');
Route::get('/detailOaseEsai/{id}', [App\Http\Controllers\HomeController::class, 'detailOaseEsai'])->name('detailOaseEsai');
Route::get('/oasePustaka', [App\Http\Controllers\HomeController::class, 'oasePustaka'])->name('oasePustaka');
Route::get('/detailOasePustaka/{id}', [App\Http\Controllers\HomeController::class, 'detailOasePustaka'])->name('detailOasePustaka');
Route::get('/oaseInfografis', [App\Http\Controllers\HomeController::class, 'oaseInfografis'])->name('oaseInfografis');
Route::get('/detailOaseInfografis/{id}', [App\Http\Controllers\HomeController::class, 'detailOaseInfografis'])->name('detailOaseInfografis');

Route::middleware('auth')->group(function() {
    Route::prefix('admin')->group(function () {
        Route::get('/', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
        Route::prefix('artikel')->controller(AdminArtikelController::class)->group(function(){
            // Program Kegiatan
            Route::get('/program-dan-kegiatan','programKegiatan')->name('programKegiatanShow');
            Route::get('/program-dan-kegiatan/add','programKegiatanAdd')->name('programKegiatanAdd');
            Route::get('/program-dan-kegiatan/edit/{id}','programKegiatanEdit')->name('programKegiatanEdit');
            Route::post('/program-dan-kegiatan/hapus/{id}','programKegiatanHapus')->name('programKegiatanHapus');
            Route::post('/program-dan-kegiatan/submit','programKegiatanStore')->name('programKegiatanSubmit');
    
            Route::get('/info-publik/berita-media','beritaMedia')->name('beritaMediaShow');
            Route::get('/info-publik/siaran-pers','siaranPers')->name('siaranPersShow');
            Route::get('/oase-esai','oaseEsai')->name('oaseEsaiShow');
            Route::get('/oase-infografis','oaseInfografis')->name('oaseInfografisShow');
            Route::get('/oase-opini','oaseOpini')->name('oaseOpiniShow');
            Route::get('/oase-pustaka','oasePustaka')->name('oasePustakaShow');
        });
    });
});


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
