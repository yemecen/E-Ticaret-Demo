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
Route::get('/orderByName',['uses' => 'ProductController@OrderByName', 'as' => 'orderByName']);
Route::get('/orderByPrice',['uses' => 'ProductController@OrderByPrice', 'as' => 'orderByPrice']);

Route::get('/shoppingCard','ShoppingCardController@Index');
Route::get('/shoppingCard/{id}',['uses' => 'ShoppingCardController@ProductAddCard', 'as' => 'shoppingCard']);
