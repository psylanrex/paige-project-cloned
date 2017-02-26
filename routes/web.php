<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'PagesController@index');  
Route::post('/', 'ManageController@saveCustomers');


Route::group(['prefix' => 'manage'], function () {
    Route::get('', 'ManageController@login');
    Route::post('', 'Auth\LoginController@login');
    Route::get('/register', 'ManageController@register');
    Route::post('/register', 'Auth\RegisterController@create');
    Route::get('/logout', 'Auth\LoginController@logout');

    Route::group(['middleware' => 'auth'], function () {
        Route::get('/home', "ManageController@index");
        Route::get('/customers', 'ManageController@getCustomers');
    });
    Auth::routes();
});

// Route::get('/login', 'PagesController@login'); 

// Route::get('/register', 'PagesController@register'); 

// Route::get('/loan', 'PagesController@loan'); 


// Route::get('/home', 'HomeController@index');
