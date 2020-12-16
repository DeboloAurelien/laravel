<?php

use FarhanWazir\GoogleMaps\GMaps;
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
    $config = array();
    $config['center'] = 'Air Canada Centre, Toronto';
    $config['zoom'] = '14';
    $config['map_height'] = '500px';
    //$config['map_width'] = '500px';
    $config['scrollwheel'] = false;

    (new FarhanWazir\GoogleMaps\GMaps)->initialize($config);

    $marker['position'] = 'Air Canada Centre, Toronto';
    $marker['infowindow_content'] = 'Air Canada Centre, Toronto';

    (new FarhanWazir\GoogleMaps\GMaps)->add_marker($marker);

    $map = (new FarhanWazir\GoogleMaps\GMaps)->create_map();

    return view('map')->with('map', $map);
});

Route::view('/companies', 'companies');
Route::view('/employees', 'employees');

Route::view('/removeCompany', 'removeCompany');
Route::view('/removeEmployee', 'removeEmployee');

Route::view('/updateCompany', 'updateCompany');
Route::view('/updateEmployee', 'updateEmployee');

Route::get('company', 'CompanyController@create')->name('company.create');
Route::post('company', 'CompanyController@store')->name('company.store');

Route::get('employee', 'EmployeeController@create')->name('employee.create');
Route::post('employee', 'EmployeeController@store')->name('employee.store');
