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
    return view('admin.admin');
});

Route::get('/admin', 'AdminController@index');

Route::get('/admin/categories/', 'AdminController@categories');
Route::get('/admin/categories/tambah', 'AdminController@categoriesTambah');
Route::get('/admin/articles/', 'AdminController@articles');
Route::get('/admin/articles/tambah', 'AdminController@articlesTambah');
