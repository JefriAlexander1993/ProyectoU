<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


//   Trae toda la información de la clase y le da un formato. Se crea una api

Route::get('clients/all', function () {

	 return datatables()->eloquent(App\Models\Client::query())->addColumn('btn','frond.actions')->rawColumns(['btn'])->toJson();

});

Route::get('products/all', function () {

	 return datatables()->eloquent(App\Models\Product::query())->toJson();

});


Route::get('sales/all', function () {

	 return datatables()->eloquent(App\Models\Sale::query())->toJson();

});

Route::get('purchases/all', function () {

	 return datatables()->eloquent(App\Models\Purchase::query())->toJson();

});

Route::get('users/all', function () {


	return datatables()->eloquent(App\Models\User::query())->addColumn('btn','frond.users.fragment.actions')->rawColumns(['btn'])->toJson();

});
Route::get('roles/all', function () {

	 return datatables()->eloquent(App\Role::query())->addColumn('btn','frond.roles.fragment.actions')->rawColumns(['btn'])->toJson();

});
Route::get('permissions/all', function () {

	 return datatables()->eloquent(App\Permission::query())->addColumn('btn','frond.permissions.fragment.actions')->rawColumns(['btn'])->toJson();

});




//  Se crea una api
