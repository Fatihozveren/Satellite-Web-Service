<?php

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


Route::get('/', [App\Http\Controllers\front\FrontController::class, 'index'])->name('front.home');

Route::get('/satellite', [\App\Http\Controllers\front\SatelliteController::class, "index"])->name('satellite.index');
Route::get('/scientist', [\App\Http\Controllers\front\ScientistController::class, "index"])->name('scientist.index');
Route::get('/about', [\App\Http\Controllers\front\FrontController::class, "about"])->name('about.index');

Route::group(['prefix' => 'panel'], function () {
    Route::controller(\App\Http\Controllers\panel\PanelController::class)->group(function () {
        Route::get('/home', 'index')->name('panel.index');
        });
    });
Route::group(['prefix' => '/category'], function () {
    Route::post('/create', [\App\Http\Controllers\panel\CategoryController::class, "create"])->name('category.create');
    Route::get('/list', [\App\Http\Controllers\panel\CategoryController::class, "list"])->name('category.list');
    Route::get('/fetch', [\App\Http\Controllers\panel\CategoryController::class, 'fetch'])->name('category.fetch');
    Route::post('/delete', [\App\Http\Controllers\panel\CategoryController::class, 'delete'])->name('category.delete');
    Route::get('/get', [\App\Http\Controllers\panel\CategoryController::class, 'get'])->name('category.get');
    Route::post('/update', [\App\Http\Controllers\panel\CategoryController::class, 'update'])->name('category.update');
});

Route::group(['prefix' => '/statu'], function () {
    Route::post('/create', [\App\Http\Controllers\panel\StatuController::class, "create"])->name('statu.create');
    Route::get('/list', [\App\Http\Controllers\panel\StatuController::class, "list"])->name('statu.list');
    Route::get('/fetch', [\App\Http\Controllers\panel\StatuController::class, 'fetch'])->name('statu.fetch');
    Route::post('/delete', [\App\Http\Controllers\panel\StatuController::class, 'delete'])->name('statu.delete');
    Route::get('/get', [\App\Http\Controllers\panel\StatuController::class, 'get'])->name('statu.get');
    Route::post('/update', [\App\Http\Controllers\panel\StatuController::class, 'update'])->name('statu.update');
});

Route::group(['prefix' => '/scientist'], function () {
    Route::post('/create', [\App\Http\Controllers\panel\ScientistController::class, "create"])->name('scientist.create');
    Route::get('/list', [\App\Http\Controllers\panel\ScientistController::class, "list"])->name('scientist.list');
    Route::get('/fetch', [\App\Http\Controllers\panel\ScientistController::class, 'fetch'])->name('scientist.fetch');
    Route::post('/delete', [\App\Http\Controllers\panel\ScientistController::class, 'delete'])->name('scientist.delete');
    Route::get('/get', [\App\Http\Controllers\panel\ScientistController::class, 'get'])->name('scientist.get');
    Route::post('/update', [\App\Http\Controllers\panel\ScientistController::class, 'update'])->name('scientist.update');
});

Route::group(['prefix' => '/satellite'], function () {
    Route::post('/create', [\App\Http\Controllers\panel\SatelliteController::class, "create"])->name('satellite.create');
    Route::get('/list', [\App\Http\Controllers\panel\SatelliteController::class, "list"])->name('satellite.list');
    Route::get('/fetch', [\App\Http\Controllers\panel\SatelliteController::class, 'fetch'])->name('satellite.fetch');
    Route::post('/delete', [\App\Http\Controllers\panel\SatelliteController::class, 'delete'])->name('satellite.delete');
    Route::get('/get', [\App\Http\Controllers\panel\SatelliteController::class, 'get'])->name('satellite.get');
    Route::post('/update', [\App\Http\Controllers\panel\SatelliteController::class, 'update'])->name('satellite.update');
});

Route::group(['prefix' => '/launchpad'], function () {
    Route::post('/create', [\App\Http\Controllers\panel\LaunchpadController::class, "create"])->name('launchpad.create');
    Route::get('/list', [\App\Http\Controllers\panel\LaunchpadController::class, "list"])->name('launchpad.list');
    Route::get('/fetch', [\App\Http\Controllers\panel\LaunchpadController::class, 'fetch'])->name('launchpad.fetch');
    Route::post('/delete', [\App\Http\Controllers\panel\LaunchpadController::class, 'delete'])->name('launchpad.delete');
    Route::get('/get', [\App\Http\Controllers\panel\LaunchpadController::class, 'get'])->name('launchpad.get');
    Route::post('/update', [\App\Http\Controllers\panel\LaunchpadController::class, 'update'])->name('launchpad.update');
});

Route::get('/updateData', [\App\Http\Controllers\panel\PanelController::class, "updateData"])->name('satellite.updateData');




