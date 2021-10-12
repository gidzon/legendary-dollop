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

Route::get('/', 'MainController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@index')->name('admin.home');

Route::prefix('admin/category/')->group(function (){
    Route::get('create', 'AdminCategoryController@create')->name('admin.category.create');
    Route::post('store', 'AdminCategoryController@store')->name('admin.category.store');
    Route::get('show', 'AdminCategoryController@show')->name('admin.category.show');
    Route::post('update/', 'AdminCategoryController@update')->name('admin.category.update');
    Route::get('delete/{id}', 'AdminCategoryController@delete')->name('admin.category.delete');
    Route::get('edit/{name}/{id}', 'AdminCategoryController@edit')->name('admin.category.edit');
});

Route::prefix('admin/product/')->group(function () {
    Route::get('create/', 'AdminProductController@create')->name('product.create');
    Route::post('store', 'AdminProductController@store')->name('product.store');
    Route::get('show/{id}', 'AdminProductController@show')->name('admin.product.show');
    Route::get('index/', 'AdminProductController@index')->name('admin.product.index');
    Route::get('edit/{product}', 'AdminProductController@edit')->name('product.edit');
    Route::post('update/', 'AdminProductController@update')->name('product.update');
    Route::get('delete/{id}', 'AdminProductController@delete')->name('product.delete');
});

Route::get('admin/attr/create/{id}', 'AdminProductAttributeController@create')->name('attribute.create');
Route::post('attribute/store', 'AdminProductAttributeController@store')->name('attribute.store');
Route::get('admin/attribute/show/{id}', 'AdminProductAttributeController@show')->name('attribute.show');
Route::get('admin/attribute/edit/{name}/{value}/{id}', 'AdminProductAttributeController@edit')->name('attribute.edit');
Route::post('admin/attribute/update', 'AdminProductAttributeController@update')->name('attribute.update');
Route::get('admin/attribute/delete/{id}', 'AdminProductAttributeController@delete')->name('attribute.delete');




Route::get('category/{id}', 'CategoryController')->name('category.product');
Route::post('product/attribute', 'ProductAttributeController')->name('filtres');

Route::get('product/{id}', 'ProductController')->name('product.show');