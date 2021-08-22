<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'FrontendController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('add/slider', 'SliderController@addSlider')->name('add.slider');
Route::get('index/slider', 'SliderController@indexSlider')->name('index.slider');
Route::post('store/slider', 'SliderController@storeSlider')->name('store.slider');
Route::get('edit/slider/{id}', 'SliderController@editSlider')->name('edit.slider');
Route::post('update/slider/{id}', 'SliderController@updateSlider')->name('update.slider');
Route::get('delete/slider/{id}', 'SliderController@deleteSlider')->name('delete.slider');
