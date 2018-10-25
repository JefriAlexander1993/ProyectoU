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


/*Route::get('/', function () {
    return view('frond.catalogo.index');
});*/

Route::group(['prefix' => 'admin', 'middleware' => ['role:admin']], function() {
    Route::get('/home');
});

Auth::routes();

 Route::get('products/getProduct/{code}' , 'Backend\ProductController@getProductByCode');

Route::get('store','StoreController@index')->name('store');

//ruta para obtener el producto seleccionado por el cliente

/*Route::bind('producto',function($id){
	return App\Producto::where('id',$id)->first();
});*/

Route::group(['middleware' => 'auth'], function () {

		Route:: get('carrito/show',[
		'as'=>'mostrar-carrito',
		'uses'=>'CarritoController@show'
		]);

});
//ruta carrito

 
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
Route::get('/','Backend\CatalogoController@index')->name('catalogo');

Route::Resource('products', 'Backend\ProductController');
Route::Resource('clients', 'Backend\ClientController');
Route::Resource('sales', 'Backend\SaleController');
Route::Resource('purchases', 'Backend\PurchaseController');
Route::Resource('users', 'Backend\UserController');

Route::Resource('commentaries', 'Backend\CommentaryController');
Route::Resource('quotations', 'Backend\QuotationController');

// users-roles-permissions

Route::Resource('roles', 'Backend\RoleController');
Route::Resource('permissions', 'Backend\PermissionController');
Route::Resource('users_roles', 'Backend\UserRoleController');
Route::Resource('role_permissions', 'Backend\RolePermissionController');

//pdf clients
Route::get('/clientspdf', 'Backend\ClientController@pdfClient',function(){
return back();

});

Route::get('/clientsexcel', 'Backend\ClientController@excelClient',function(){
return back();

});
//pdf commentaries
Route::get('/commentariespdf', 'Backend\CommentaryController@pdfCommentary',function(){
return back();

});

Route::get('/commentariesexcel', 'Backend\CommentaryController@excelCommentary',function(){
return back();

});


//pdf users
Route::get('/userspdf', 'Backend\UserController@pdfUser',function(){
return back();

});

Route::get('/usersexcel', 'Backend\UserController@excelUser',function(){
return back();

});

//pdf permissions
Route::get('/permissionspdf', 'Backend\PermissionController@pdfPermission',function(){
return back();

});

Route::get('/permissionsexcel', 'Backend\PermissionController@excelPermission',function(){
return back();

});


//pdf roles
Route::get('/rolespdf', 'Backend\RoleController@pdfRole',function(){
return back();

});

Route::get('/rolesexcel', 'Backend\RoleController@excelRole',function(){
return back();

});

Route::get('/cardspdf', 'CarritoController@pdfQuotation',function(){
return back();

});