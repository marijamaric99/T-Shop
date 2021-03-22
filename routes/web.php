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

    Route::get('logout', 'Auth\LoginController@logout');
    Route::get('/', 'HomeController@index');
    Route::post('/homefilter', 'HomeController@filter');
    Route::get('/homesearch', 'HomeController@search');
    Route::get('/add-to-cart/{id}', ['uses'=>'ProductsController@getAddToCart', 'as'=>'product.addToCart']);
    Route::get('/shopping-cart', ['uses'=>'ProductsController@getCart', 'as'=>'product.shoppingCart']);
    Route::post('/removeone', ['uses'=>'ProductsController@removeone', 'as'=>'removeone']);
    Route::post('/removeall', ['uses'=>'ProductsController@removeall', 'as'=>'removeall']);
    Route::post('/buy', ['uses'=>'ProductsController@buy', 'as'=>'buy']);
    Route::get('/about', ['uses'=>'HomeController@about', 'as'=>'product.about']);
Route::group(['middleware' => ['auth', 'admin']], function() {
    

    Route::post('/addproduct', 'ProductsController@addproduct');
    Route::post('/addcategory', 'CategoriesController@addcategory');
    Route::get('/delnot/{not}', ['uses'=>'ProductsController@delnot', 'as'=>'product.Delnot']);
    Route::get('/delprod/{id}', ['uses'=>'ProductsController@delprod', 'as'=>'product.Delprod']);
    Route::post('/editproduct', ['uses'=>'ProductsController@editproduct', 'as'=>'product.Editproduct']);


});



Auth::routes();
