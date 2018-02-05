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

Route::get('/', 'ProductController@Index');
Route::get('/product/{id}', 'ProductController@Show');
Route::get('/product/orderByName','ProductController@OrderByName');
Route::get('/product/orderByPrice','ProductController@OrderByPrice');

Route::get('/shoppingCard','ShoppingCardController@Index');
Route::get('/shoppingCard/{id}',['uses' => 'ShoppingCardController@ProductAddCard', 'as' => 'shoppingCard']);
