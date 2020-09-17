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

Route::get('/', function () {
    return redirect('/companies');
});

Route::get('/companies', 'CompaniesController@index');
Route::post('/companies', 'CompaniesController@store');
Route::get('/companies/create', 'CompaniesController@create');
Route::patch('/companies/{company}', 'CompaniesController@update');
Route::get('/companies/{company}', 'CompaniesController@show');
Route::get('/companies/{company}/edit', 'CompaniesController@edit');
Route::delete('/companies/{company}', 'CompaniesController@destroy');
