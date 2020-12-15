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

Route::get('/map', function () {
    return view('map');
});

Route::view('/companies', 'companies');
Route::view('/employees', 'employees');

Route::get('company', 'CompanyController@create')->name('company.create');
Route::post('company', 'CompanyController@store')->name('company.store');

Route::get('employee', 'EmployeeController@create')->name('employee.create');
Route::post('employee', 'EmployeeController@store')->name('employee.store');

