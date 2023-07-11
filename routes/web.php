<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\SubkriteriaController;
use App\Http\Controllers\AlternatifController;
use App\Http\Controllers\PenilaianController;
use App\Http\Controllers\PerhitunganController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    session(['dark-mode' => false]);
    return view('dashboard.index', [
        'title' => 'Dashboard',
        'bodyClass' => 'hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed'
    ]);
});

Route::resource('kriteria', KriteriaController::class)->except(['show']);
Route::get('kriteria/{id}', [KriteriaController::class, 'display'])->name('kriteria.display');

Route::resource('subkriteria', SubkriteriaController::class)->except(['show']);

Route::resource('alternatif', AlternatifController::class)->except(['show']);

Route::resource('penilaian', PenilaianController::class)->except(['show']);

Route::get('/perhitungan', [PerhitunganController::class, 'index'])->name('perhitungan.index');
// Route::get('/kriteria', function() {
//     session(['dark-mode' => false]);
//     return view('kriteria.index', [
//         'title' => 'Kriteria',
//         'bodyClass' => 'hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed'
//     ]);
// });

Route::get('/test', function () {
    session(['dark-mode' => true]);
    return view('layouts.dashboard', [
        // 'title' => 'Test',
        'bodyClass' => 'hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed'
    ]);
});
