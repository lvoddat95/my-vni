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

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function () {

    Route::get('/', 'BackendController@index')->name('backend.dashboard');

    Route::prefix('categories')->group(function () {

        Route::get('/', [
            'as' => 'categories.index',
            'uses' => 'CategoryController@index'
        ]);

        Route::get('/create', [
            'as' => 'categories.create',
            'uses' => 'CategoryController@create'
        ]);

        Route::post('/store', [
            'as' => 'categories.store',
            'uses' => 'CategoryController@store'
        ]);

        Route::get('/edit/{id}', [
            'as' => 'categories.edit',
            'uses' => 'CategoryController@edit'
        ]);

        Route::post('/update/{id}', [
            'as' => 'categories.update',
            'uses' => 'CategoryController@update'
        ]);

        Route::get('/delete/{id}', [
            'as' => 'categories.delete',
            'uses' => 'CategoryController@delete'
        ]);

    });

});

Route::get('/login', 'AdminController@login');

Route::post('/login', 'AdminController@postLoginAdmin');

Route::prefix('qlac')->group(function () {
    Route::get('/', 'QlacController@index')->name('frontend.qlac.index');



});
