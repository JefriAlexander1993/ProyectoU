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

Route::get('store','StoreController@index')->name('store');

//ruta para obtener el producto seleccionado por el cliente

/*Route::bind('producto',function($id){
	return App\Producto::where('id',$id)->first();
});*/


//ruta carrito
Route:: get('carrito/show',[
'as'=>'mostrar-carrito',
'uses'=>'CarritoController@show'
]);

//ruta agregar producto carrito
Route:: get('carrito/add/{producto}',[
'as'=>'agregar-producto',
'uses'=>'CarritoController@add'
]);

//ruta eliminar producto carrito
Route:: get('carrito/delete/{producto}',[
'as'=>'eliminar-producto',
'uses'=>'CarritoController@delete'
]);


//ruta vaciar producto carrito
Route:: get('carrito/trash',[
'as'=>'vaciar-carrito',
'uses'=>'CarritoController@trash'
]);


//ruta actualizar producto carrito
Route:: get('carrito/update/{producto}/{quantity?}',[
'as'=>'actualizar-producto',
'uses'=>'CarritoController@update'
]);


//ruta detalle producto
Route:: get('producto/{id}',[
'as'=>'detalle-producto',
'uses'=>'StoreController@show'
]);

//ruta detalle pedido
Route:: get('detalle',[
'as'=>'detalle-pedido',
'uses'=>'CarritoController@detalle'
]);



Route::get('/home', 'Backend\HomeController@index')->name('home');
Route::get('/principal','Backend\PrincipalController@index');
Route::get('/navbar','NavbarController@index');
Route::get('/catalogo','Backend\CatalogoController@index')->name('catalogo');
Route::Resource('products', 'Backend\ProductController');
Route::Resource('clients', 'Backend\ClientController');
Route::Resource('credits', 'Backend\CreditController');
Route::Resource('lots', 'Backend\LotController');
Route::Resource('raw_materials', 'Backend\RawMaterialController');
Route::Resource('sales', 'Backend\SaleController');
Route::Resource('spendings', 'Backend\SpendingController');
Route::Resource('warranties', 'Backend\WarrantyController');
Route::Resource('purchases', 'Backend\PurchaseController');
Route::Resource('users', 'Backend\UserController');

// users-roles-permissions

Route::Resource('roles', 'Backend\RoleController');
Route::Resource('permissions', 'Backend\PermissionController');

