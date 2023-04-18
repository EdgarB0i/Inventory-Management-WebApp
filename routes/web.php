<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WarehouseController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/items/search', 'App\Http\Controllers\ItemController@search')->name('items.search');
    Route::get('/items/performance', 'App\Http\Controllers\ItemController@performance')->name('items.performance');
    Route::get('/items/create', 'App\Http\Controllers\ItemController@create')->name('items.create');
    Route::post('/items', 'App\Http\Controllers\ItemController@store')->name('items.store');
    Route::get('/items', 'App\Http\Controllers\ItemController@index')->name('items.index');
    Route::get('/items/{item}/edit', 'App\Http\Controllers\ItemController@edit')->name('items.edit');
    Route::put('/items/{item}', 'App\Http\Controllers\ItemController@update')->name('items.update');
    Route::delete('/items/{item}', 'App\Http\Controllers\ItemController@destroy')->name('items.destroy');
    Route::get('/items/{item}', 'App\Http\Controllers\ItemController@show')->name('items.show');
    
    Route::get('/warehouse', [WarehouseController::class, 'index'])->name('warehouse.index');
    Route::post('/warehouse', [WarehouseController::class, 'store'])->name('warehouse.store');
});
