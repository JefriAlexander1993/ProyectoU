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
    return view('welcome');
});

Auth::routes();

//Rutas 

Route::get('/home', 'HomeController@index')->name('home');
Route::get('products', 'ProductController@index')->name('products.index');//
Route::get('clients', 'ClientController@index')->name('clients.index');//
Route::get('lots', 'LotController@index')->name('lots.index');//
Route::get('sales', 'SaleController@index')->name('sales.index');
Route::get('credits', 'CreditController@index')->name('credits.index');//
Route::get('raw_materials', 'RawMaterialController@index')->name('raw_material.index');//
Route::get('spendings', 'SpendingController@index')->name('spendings.index');//
Route::get('warranties', 'WarrantyController@index')->name('warranties.index');
Route::get('purchases', 'PurchaseController@index')->name('purchases.index');
Route::get('users', 'UserController@index')->name('users.index');	
Route::get('roles', 'RoleController@index')->name('roles.index');	
Route::get('permissions', 'PermissionController@index')->name('permissions.index');	

