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

Route::get('/secure/config/migrate-refresh', ['uses' => 'ConfigController@migrateRefresh']);
Route::get('/secure/config/migrate', ['uses' => 'ConfigController@migrate']);
Route::get('/secure/config/db-seed', ['uses' => 'ConfigController@dbSeed']);
Route::get('/secure/config/clear-autoload', ['uses' => 'ConfigController@clearAutoLoad']);
Route::get('/secure/config/config-cache', ['uses' => 'ConfigController@configCache']);
Route::get('/secure/config/cache-clear', ['uses' => 'ConfigController@cacheClear']);
Route::get('/secure/config/key-generate', ['uses' => 'ConfigController@keyGenerate']);
Route::get('/secure/config/optimize', ['uses' => 'ConfigController@optimize']);
Route::get('/config/locale/{locale}', ['as' => 'locale', 'uses' => 'LocalizationController@index']);

Auth::routes();

Route::group(['namespace' => 'Auth'], function () {


    Route::post('logout', ['as' => 'logout', 'uses' => 'LoginController@logout']);

});

Route::group(['middleware' => ['auth']], function () {

    Route::get('/home', 'HomeController@index')->name('home');
    Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
        Route::get('branches', ['uses' => 'BranchController@index', 'as' => 'branch.index']);
        Route::get('branch/create', ['uses' => 'BranchController@create', 'as' => 'branch.create']);
        Route::post('branch/store', ['uses' => 'BranchController@store', 'as' => 'branch.store']);
        Route::get('branch/edit/{id}', ['uses' => 'BranchController@edit', 'as' => 'branch.edit'])->where('id', '[0-9]+');
        Route::post('branch/update/{id}', ['uses' => 'BranchController@update', 'as' => 'branch.update'])->where('id', '[0-9]+');
        Route::post('branch/visible/{id}', ['uses' => 'BranchController@visibleChange', 'as' => 'branch.visible'])->where('id', '[0-9]+');


        Route::get('categories', ['uses' => 'CategoryController@index', 'as' => 'category.index']);
        Route::get('category/create', ['uses' => 'CategoryController@create', 'as' => 'category.create']);
        Route::post('category/store', ['uses' => 'CategoryController@store', 'as' => 'category.store']);
        Route::get('category/edit/{id}', ['uses' => 'CategoryController@edit', 'as' => 'category.edit'])->where('id', '[0-9]+');
        Route::post('category/update/{id}', ['uses' => 'CategoryController@update', 'as' => 'category.update'])->where('id', '[0-9]+');
        Route::post('category/visible/{id}', ['uses' => 'CategoryController@visibleChange', 'as' => 'category.visible'])->where('id', '[0-9]+');


        Route::get('projects', ['uses' => 'ProjectController@index', 'as' => 'project.index']);
        Route::get('project/create', ['uses' => 'ProjectController@create', 'as' => 'project.create']);
        Route::post('project/store', ['uses' => 'ProjectController@store', 'as' => 'project.store']);
        Route::get('project/edit/{id}', ['uses' => 'ProjectController@edit', 'as' => 'project.edit'])->where('id', '[0-9]+');
        Route::post('project/update/{id}', ['uses' => 'ProjectController@update', 'as' => 'project.update'])->where('id', '[0-9]+');
        Route::post('project/visible/{id}', ['uses' => 'Project``Controller@visibleChange', 'as' => 'project.visible'])->where('id', '[0-9]+');


        Route::get('gallery/{project_id}', ['uses' => 'GalleryController@index', 'as' => 'gallery.index'])->where('project_id', '[0-9]+');
        Route::get('gallery/create/{project_id}', ['uses' => 'GalleryController@create', 'as' => 'gallery.create'])->where('project_id', '[0-9]+');
        Route::post('gallery/store/{project_id}', ['uses' => 'GalleryController@store', 'as' => 'gallery.store'])->where('project_id', '[0-9]+');
        Route::get('gallery/edit/{id}', ['uses' => 'GalleryController@edit', 'as' => 'gallery.edit'])->where('id', '[0-9]+');
        Route::post('gallery/update/{id}', ['uses' => 'GalleryController@update', 'as' => 'gallery.update'])->where('id', '[0-9]+');
        Route::delete('gallery/delete/{id}', ['uses' => 'GalleryController@destroy', 'as' => 'gallery.delete'])->where('id', '[0-9]+');


        Route::get('products', ['uses' => 'ProductController@index', 'as' => 'product.index']);
        Route::get('product/create', ['uses' => 'ProductController@create', 'as' => 'product.create']);
        Route::post('product/store', ['uses' => 'ProductController@store', 'as' => 'product.store']);
        Route::get('product/edit/{id}', ['uses' => 'ProductController@edit', 'as' => 'product.edit'])->where('id', '[0-9]+');
        Route::post('product/update/{id}', ['uses' => 'ProductController@update', 'as' => 'product.update'])->where('id', '[0-9]+');
        Route::delete('product/delete/{id}', ['uses' => 'ProductController@destroy', 'as' => 'product.delete'])->where('id', '[0-9]+');

    });
});

Route::group(['namespace' => 'Client'], function () {
    Route::get('/', ['uses' => 'MainController@index', 'as' => 'client.index']);
    Route::get('/services', ['uses' => 'MainController@services', 'as' => 'client.services']);
    Route::get('/project', ['uses' => 'MainController@project', 'as' => 'client.project']);
    Route::get('/contact', ['uses' => 'MainController@contact', 'as' => 'client.contact']);
    Route::get('/blog-single', ['uses' => 'MainController@blogSingle', 'as' => 'client.blogSingle']);
    Route::get('/blog', ['uses' => 'MainController@blog', 'as' => 'client.blog']);
    Route::get('/about', ['uses' => 'MainController@about', 'as' => 'client.about']);
});