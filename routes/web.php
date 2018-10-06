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

Route::get('/home', 'Backend\HomeController@index')->name('home');



Route::Resource('products', 'Backend\ProductController');
Route::Resource('clients', 'Backend\ClientController');

Route::Resource('sales', 'Backend\SaleController');

Route::Resource('purchases', 'Backend\PurchaseController');
Route::Resource('users', 'Backend\UserController');

// users-roles-permissions

Route::Resource('roles', 'Backend\RoleController');
Route::Resource('permissions', 'Backend\PermissionController');
