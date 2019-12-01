<?php

Route::get('/', function () {
   return view('home');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// Product Controller
Route::get('/', 'ProductController@all_product');
Route::get('Add_Product', 'ProductController@Add_Product');
Route::post('insert_product', 'ProductController@insert_product');
Route::get('delete_product/{product_id}', 'ProductController@delete_product');
Route::get('edit_product/{product_id}', 'ProductController@edit_product');
Route::post('edit_product_insert', 'ProductController@edit_product_insert');
Route::get('restore_product/{product_id}', 'ProductController@restore');
Route::get('force_delete/{product_id}', 'ProductController@force_Delete');
Route::get('all_product', 'ProductController@all_product');
Route::get('view_product/{product_id}', 'ProductController@view_product');
Route::get('category_wise_menu/{category_id}', 'ProductController@category_wise_menu');
Route::get('add_to_card/{product_id}', 'ProductController@add_to_card');


// Category Controller
Route::get('add_category', 'CategoryController@add_category');
Route::post('insert_category', 'CategoryController@insert_category');
Route::get('change_category/{category_id}', 'CategoryController@change_category');

// Home controller
Route::get('contact', 'HomeController@contact');
Route::post('contact_insert', 'HomeController@contact_insert');
Route::get('contact_sms_view', 'HomeController@contact_sms_view');
Route::get('view_sms/{sms_id}', 'HomeController@view_sms');
Route::get('delete_sms/{sms_id}', 'HomeController@delete_sms');
Route::get('card', 'HomeController@card');
Route::get('card_delete/{card_no}', 'HomeController@card_delete');
Route::get('delete_all_cart', 'HomeController@delete_all_cart');



