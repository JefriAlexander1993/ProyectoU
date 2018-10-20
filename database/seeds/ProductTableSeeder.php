<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      /*factory(Producto::class,20)->create([
 			'code'=>'0001',
 			'date'=>'2018-08-01',
 			'name'=>'rc7',
 			'size'=>'36',
 			'brand'=>'nada',
 			'quantity'=>20,
 			'unit_price'=>3000,
 			'sale_price'=>35000,
 			'stockmin'=>2,



 		]);*/


 		DB::table('productos')->insert([
 			/*'code'=>'0001',
 			'date'=>'2018-08-01',
 			'name'=>'rc7',
 			'size'=>'36',
 			'brand'=>'nada',
 			'quantity'=>20,
 			'unit_price'=>3000,
 			'sale_price'=>35000,
 			'stockmin'=>2,*/
 			'nombre'=>'cr7',
 			'descripcion'=>'zapatillas',
 			'imagen'=>'https://home.ripley.com.pe/Attachment/WOP_5/2084204716750/2084204716750_2.jpg',
 			'precio'=>30000.00

 		]);

 			DB::table('productos')->insert([
 			/*'code'=>'0001',
 			'date'=>'2018-08-01',
 			'name'=>'rc7',
 			'size'=>'36',
 			'brand'=>'nada',
 			'quantity'=>20,
 			'unit_price'=>3000,
 			'sale_price'=>35000,
 			'stockmin'=>2,*/
 			'nombre'=>'nike ',
 			'descripcion'=>'zapatillas',
 			'imagen'=>'https://http2.mlstatic.com/zapatillas-rusty-andreuss-negro-hombre-skate-rz000101-D_NQ_NP_126115-MLA25134816691_102016-F.jpg',
 			'precio'=>50000.00



 		]);

 			DB::table('productos')->insert([
 			/*'code'=>'0001',
 			'date'=>'2018-08-01',
 			'name'=>'rc7',
 			'size'=>'36',
 			'brand'=>'nada',
 			'quantity'=>20,
 			'unit_price'=>3000,
 			'sale_price'=>35000,
 			'stockmin'=>2,*/
 			'nombre'=>'adidas',
 			'descripcion'=>'zapatillas',
 			'imagen'=>'https://www.goalinn.com/f/13634/136344535/adidas-leonero.jpg',
 			'precio'=>80000.00



 		]);	

 			DB::table('productos')->insert([
 			/*'code'=>'0001',
 			'date'=>'2018-08-01',
 			'name'=>'rc7',
 			'size'=>'36',
 			'brand'=>'nada',
 			'quantity'=>20,
 			'unit_price'=>3000,
 			'sale_price'=>35000,
 			'stockmin'=>2,*/
 			'nombre'=>'Reebok',
 			'descripcion'=>'zapatillas',
 			'imagen'=>'https://dexter.vteximg.com.br/arquivos/ids/362353-540-540/AO9819001_1.jpg?v=636595837230800000',
 			'precio'=>80000.00



 		]);		
    }
}

