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
    return "Welcome to e-prov";
});

Route::group([
    'prefix' => 'providersCategories'
], function () {
    Route::post('create', 'ProvidersCategoriesController@store');
    Route::get('/showbyProviderId/{providerId}', 'ProvidersCategoriesController@showbyProviderId');
});

Route::group([
    'prefix' => 'providersSpecialities'
], function () {
    //Route::post('create', 'ProvidersCategoriesController@store');
    Route::get('/showbyProviderId/{providerId}', 'ProvidersSpecialityController@showbyProviderId');
});

Route::group([
    'prefix' => 'provider'
], function () {
    Route::post('create', 'ProviderController@store');
    Route::get('/byUser/{userId}', 'ProviderController@showbyUserId');
    Route::get('/', 'ProviderController@index');
});

Route::group([
    'prefix' => 'client'
], function(){
    Route::post('create', 'ClientController@store');
});

Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('login', 'AuthController@login');
    Route::post('register', 'AuthController@register');

    Route::group([
      'middleware' => 'auth:api'
    ], function() {
        Route::get('logout', 'AuthController@logout');
        Route::get('user', 'AuthController@user');
    });
});

Route::apiResource('/cities', 'CityController' );
Route::apiResource('/speciality', 'SpecialityController' );

Route::group([
    'prefix' => 'categories'
], function () {
    Route::get('/{categoryId:[0-9]+}', 'CategoryController@show');
});

// Route::get('category/{categoryId:[0-9]+}', 'CategoryController@show');

Route::apiResource('/category', 'CategoryController' );






