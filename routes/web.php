<?php

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

Route::get('/home', 'App\Http\Controllers\MissingPersonController@index')->name('home');
Route::get('/missing-persons/create', 'App\Http\Controllers\MissingPersonController@create')->name('missing-persons.create');
Route::post('/missing-persons', 'App\Http\Controllers\MissingPersonController@store')->name('missing-persons.store');
Route::get('/missing-persons', 'App\Http\Controllers\MissingPersonController@index')->name('missing-persons.index');

Route::get('/missing-persons/{id}', 'App\Http\Controllers\MissingPersonController@show')->name('missing-persons.show');
