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

Route::get('/', 'HomeController@welcome')->name('welcome');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => ['auth']], function () {
    Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
        Route::get('branches', ['uses' => 'BranchController@index', 'as' => 'branch.index']);
        Route::get('branch/create', ['uses' => 'BranchController@create', 'as' => 'branch.create']);
        Route::post('branch/store', ['uses' => 'BranchController@store', 'as' => 'branch.store']);
        Route::get('branch/edit', ['uses' => 'BranchController@edit', 'as' => 'branch.edit']);
        Route::post('branch/update', ['uses' => 'BranchController@update', 'as' => 'branch.update']);

        Route::get('categories', ['uses' => 'CategoryController@index', 'as' => 'category.index']);
        Route::get('category/create', ['uses' => 'CategoryController@create', 'as' => 'category.create']);
        Route::post('category/store', ['uses' => 'CategoryController@store', 'as' => 'category.store']);
    });
});
