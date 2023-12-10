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

Route::get('/', 'App\Http\Controllers\PagesController@home');


Route::get('/teachers', 'App\Http\Controllers\PagesController@teachers')->name('teachers');

Route::get('/students', 'App\Http\Controllers\PagesController@students')->name('students');

Route::get('/groups', 'App\Http\Controllers\PagesController@groups');

/*Routes for table Orders*/

Route::get('/orders', 'App\Http\Controllers\OrderController@index' )->name('orders.index');

Route::post('/orders', 'App\Http\Controllers\OrderController@store' )->name('orders.store');
Route::get('/orders/{order}', 'App\Http\Controllers\OrderController@show' )->name('order.show');
Route::get('/orders/{order}/edit', 'App\Http\Controllers\OrderController@edit' )->name('order.edit');
Route::patch('/orders/{order}', 'App\Http\Controllers\OrderController@update' )->name('order.update');
Route::delete('/orders/{order}', 'App\Http\Controllers\OrderController@destroy' )->name('order.delete');


// auth routes
Route::get('/login', 'App\Http\Controllers\AuthController@showLoginForm' )->name('login');
Route::post('/login_process', 'App\Http\Controllers\AuthController@login' )->name('login_process');

Route::get('/logout', 'App\Http\Controllers\AuthController@logout' )->name('logout');

Route::get('/register', 'App\Http\Controllers\AuthController@showRegisterForm' )->name('register');
Route::post('/register_process', 'App\Http\Controllers\AuthController@register' )->name('register_process');

