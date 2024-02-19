<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SppControllers;


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

// Route::get('/master', function () {
//     return view('master');
// });
// Route::get('/template/about', function () {
//     return view('template.about');
// });
// Route::get('/template/home', function () {
//     return view('template.home');
//});

Route::get('/views/spp/create', function () {
    return view('views.spp.create');
});

// Route Untuk mengelola GenreController

Route::controller(SppControllers::class)->group(function () {
    Route::get('/spp', 'index')->name('spp.index');
    Route::get('/spp/create', 'create')->name('spp.create');
    Route::post('/spp', 'store')->name('spp.store');
    Route::get('/spp/{spp}/edit', 'edit')->name('spp.edit');
    Route::put('/spp/{spp}', 'update')->name('spp.update');
    Route::delete('/spp/{spp}', 'destroy')->name('spp.destroy');
});

