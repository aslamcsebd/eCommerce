<?php
// Route::get('/', function () {
//     return view('welcome');
// });
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('Add_Product', 'ProductController@Add_Product');
Route::post('insert_product', 'ProductController@insert_product');
Route::get('delete_product/{product_id}', 'ProductController@delete_product');
Route::get('edit_product/{product_id}', 'ProductController@edit_product');
Route::post('edit_product_insert', 'ProductController@edit_product_insert');

Route::get('restore_product/{product_id}', 'ProductController@restore');
Route::get('force_delete/{product_id}', 'ProductController@force_Delete');
Route::get('/', 'ProductController@all_product');
Route::get('all_product', 'ProductController@all_product');
Route::get('view_product/{product_id}', 'ProductController@view_product');

Route::get('add_category', 'CategoryController@add_category');
Route::post('insert_category', 'CategoryController@insert_category');