<?php

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

Route::get('calculadora','CalculatorController@index')->name('calculator');
Route::get('calculadora/categoria/{id}','CalculatorController@detail')->name('calculator/category');
Route::get('calculadora/subcategoria/{id}','CalculatorController@subdetail')->name('calculator/subcategory');
Route::post('calculadora/buscar','CalculatorController@search')->name('calculator/search');
Route::get('calculadora/evento/{id}','CalculatorController@eventdetail')->name('calculator/event');
Route::post('calculadora/agregar-sancion','CalculatorController@addpenalty')->name('calculator/add-penalty');
Route::get('calculadora/total','CalculatorController@showTotal')->name('calculator/total');
Route::get('calculadora/nuevo','CalculatorController@newCalc')->name('calculator/new');
Route::get('contacto','ContactController@index')->name('contact');
Route::post('contacto','ContactController@saveContact')->name('contact');
Route::get('calculadora/evento/borrar/{index}','CalculatorController@destroy')->name('calculator/event/delete');

Auth::routes();
Route::get('cerrar-sesion','Auth\LoginController@logout')->name('logout');
Route::get('/', 'HomeController@index')->name('/');
Route::get('quienes-somos','HomeController@about')->name('about');
