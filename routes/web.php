<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\Gedung\Gedungs;
use App\Http\Livewire\Admin\UnitKerja\UnitKerjas;
use App\Http\Livewire\Admin\Ruang\Ruangs;
use App\Http\Livewire\Admin\KodeBarang\KodeBarangs;

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

Route::group(['middleware' => ['auth:sanctum', 'verified']], function() {
    Route::get('/dashboard', function() {
        return view('dashboard');
    })->name('dashboard');

    Route::get('gedung', Gedungs::class)->name('gedung');
    Route::get('unit', UnitKerjas::class)->name('unit');
    Route::get('ruang', Ruangs::class)->name('ruang');
    Route::get('kodebarang', KodeBarangs::class)->name('kodebarang');
});
