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
	
	 return datatables()->eloquent(App\Client::query())->addColumn('btn','frond.actions')->rawColumns(['btn'])->toJson();
		
});

Route::get('products/all', function () {
	
	 return datatables()->eloquent(App\Product::query())->toJson();
		
});

Route::get('credits/all', function () {
	
	 return datatables()->eloquent(App\Credit::query())->toJson();
		
});

Route::get('lots/all', function () {
	
	 return datatables()->eloquent(App\Lot::query())->toJson();
		
});


Route::get('raw_materials/all', function () {
	
	 return datatables()->eloquent(App\Raw_material::query())->toJson();
		
});

Route::get('sales/all', function () {
	
	 return datatables()->eloquent(App\Sale::query())->toJson();
		
});


Route::get('spendings/all', function () {
	
	 return datatables()->eloquent(App\Spending::query())->toJson();
		
});

Route::get('warrantys/all', function () {
	
	 return datatables()->eloquent(App\Warranty::query())->toJson();
		
});

Route::get('purchases/all', function () {
	
	 return datatables()->eloquent(App\Purchase::query())->toJson();
		
});

Route::get('users/all', function () {
	
	return datatables()->eloquent(App\User::query())->addColumn('btn','frond.users.buttons.actions')->rawColumns(['btn'])->toJson();
		
});
Route::get('roles/all', function () {
	
	 return datatables()->eloquent(App\Models\Role::query())->addColumn('btn','frond.roles.buttons.actions')->rawColumns(['btn'])->toJson();
		
});
Route::get('permissions/all', function () {
	
	 return datatables()->eloquent(App\Models\Permission::query())->addColumn('btn','frond.permissions.buttons.actions')->rawColumns(['btn'])->toJson();
		
});




//  Se crea una api

Route::apiResource('products', 'ProductController');
Route::apiResource('clients', 'ClientController');
Route::apiResource('credits', 'CreditController');
Route::apiResource('lots', 'LotController');
Route::apiResource('raw_materials', 'RawMaterialController');
Route::apiResource('sales', 'SaleController');
Route::apiResource('spendings', 'SpendingController');
Route::apiResource('warranties', 'WarrantyController');
Route::apiResource('purchases', 'PurchaseController');
Route::apiResource('users', 'UserController');

// users-roles-permissions

Route::apiResource('roles', 'RoleController');
Route::apiResource('permisions', 'RoleController');