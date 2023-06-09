<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/register', 'AuthController@register');
Route::post('/login', 'AuthController@login')->name('login');
Route::get('/vk/login', 'AuthController@loginVK')->name('login.vk');
Route::get('/vk/login/callback', 'AuthController@loginCallbackVK');
Route::post('/logout', 'AuthController@logout');
Route::post('/refresh', 'AuthController@refresh');
Route::post('/me', 'AuthController@me');
