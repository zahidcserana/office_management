<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('master');
});


// Customer

Route::get('/customer_registration',['as'=>'customer_registration', 'uses' => 'CustomerController@RegistrationForm']);

Route::post('/customer_registration_post',['as'=>'customer_registration_post', 'uses' => 'CustomerController@RegistrationSubmit']);

// Employee

Route::get('/employee_view',['as'=>'employee_view', 'uses'=>'EmployeeController@Home']);