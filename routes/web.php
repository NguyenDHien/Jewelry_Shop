<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/login', 'AdminController@login')->name('admin.login');
Route::post('/login', 'AdminController@p_login');

Route::get('/register', 'AdminController@register')->name('admin.register');
Route::post('/register', 'AdminController@p_register');

Route::get('/collection', 'HomeController@collection')->name('collection');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    // Category
    Route::get('/', 'AdminController@index')->name('admin');
    Route::get('/logout', 'AdminController@logout')->name('admin.logout');

    Route::group(['prefix' => 'category'], function () {
        Route::get('/', 'CategoryController@index')->name('cate');
        Route::get('/create', 'CategoryController@create')->name('cate.create');
        Route::post('/create', 'CategoryController@p_create');
        Route::get('/edit/{id}', 'CategoryController@edit')->name('cate.edit');
        Route::post('/edit/{id}', 'CategoryController@p_edit');
        Route::get('/delete/{id}', 'CategoryController@delete')->name('cate.delete');
    });
    // color
    Route::group(['prefix' => 'color'], function () {
        Route::get('/', 'ColorController@index')->name('color');
        Route::get('/create', 'ColorController@create')->name('color.create');
        Route::post('/create', 'ColorController@p_create');
        Route::get('/edit/{id}', 'ColorController@edit')->name('color.edit');
        Route::post('/edit/{id}', 'ColorController@p_edit');
        Route::get('/delete/{id}', 'ColorController@delete')->name('color.delete');
    });
    // size
    Route::group(['prefix' => 'size'], function () {
        Route::get('/', 'SizeController@index')->name('size');
        Route::get('/create', 'SizeController@create')->name('size.create');
        Route::post('/create', 'SizeController@p_create');
        Route::get('/edit/{id}', 'SizeController@edit')->name('size.edit');
        Route::post('/edit/{id}', 'SizeController@p_edit');
        Route::get('/delete/{id}', 'SizeController@delete')->name('size.delete');
    });
    // img
    Route::group(['prefix' => 'image'], function () {
        Route::get('/', 'ImgController@index')->name('image');
        Route::get('/create', 'ImgController@create')->name('image.create');
        Route::post('/create', 'ImgController@p_create');
        Route::get('/edit/{id}', 'ImgController@edit')->name('image.edit');
        Route::post('/edit/{id}', 'ImgController@p_edit');
        Route::get('/delete/{id}', 'ImgController@delete')->name('image.delete');
    });
    // order
    Route::group(['prefix' => 'order'], function () {
        Route::get('/', 'OrderController@index')->name('order');
        Route::get('/create', 'OrderController@create')->name('order.create');
        Route::post('/create', 'OrderController@p_create');
        Route::get('/edit/{id}', 'OrderController@edit')->name('order.edit');
        Route::post('/edit/{id}', 'OrderController@p_edit');
        Route::get('/delete/{id}', 'OrderController@delete')->name('order.delete');
    });
    // order_detail

    // product
    Route::group(['prefix' => 'product'], function () {
        Route::get('/', 'ProductController@index')->name('product');
        Route::get('/create', 'ProductController@create')->name('product.create');
        Route::post('/create', 'ProductController@p_create');
        Route::get('/edit/{id}', 'ProductController@edit')->name('product.edit');
        Route::post('/edit/{id}', 'ProductController@p_edit');
        Route::get('/delete/{id}', 'ProductController@delete')->name('product.delete');
    });
    // product_detail
    Route::group(['prefix' => 'product_detail'], function () {
        Route::get('/', 'productDetailController@index')->name('product_detail');
        Route::get('/create', 'productDetailController@create')->name('product_detail.create');
        Route::post('/create', 'productDetailController@p_create');
        Route::get('/edit/{id}', 'productDetailController@edit')->name('product_detail.edit');
        Route::post('/edit/{id}', 'productDetailController@p_edit');
        Route::get('/delete/{id}', 'productDetailController@delete')->name('product_detail.delete');
    });
    // users
});
