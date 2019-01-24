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


 		DB::table('products')->insert([
 			'code'=>'0010',
 			'name'=>'rc7',
 			'unit_price'=>3000,
 			'sale_price'=>35000,
 			'stockmin'=>2,
 			'name'=>'cr7',
 			'description'=>'zapatillas',
 			'file'=>'https://home.ripley.com.pe/Attachment/WOP_5/2084204716750/2084204716750_2.jpg',
 

 		]);

 			DB::table('products')->insert([
 			'code'=>'0011',
 			'name'=>'Nike ',
 			'unit_price'=>3000,
 			'sale_price'=>50000.00,
 			'stockmin'=>2,
 			'description'=>'zapatillas',
 			'file'=>'https://http2.mlstatic.com/zapatillas-rusty-andreuss-negro-hombre-skate-rz000101-D_NQ_NP_126115-MLA25134816691_102016-F.jpg',
 	



 		]);

 			DB::table('products')->insert([
 			'code'=>'0012',
 			'name'=>'Adidas',
 			'description'=>'zapatillas',
 			'unit_price'=>3000,
 			'sale_price'=>35000,
 			'stockmin'=>2,
 			'file'=>'https://www.goalinn.com/f/13634/136344535/adidas-leonero.jpg',
 		



 		]);	

 			DB::table('products')->insert([
 			'code'=>'0013',
 			'name'=>'Rc7',
 			'unit_price'=>3000,
 			'sale_price'=>35000,
 			'stockmin'=>2,
 			'name'=>'Reebok',
 			'description'=>'zapatillas',
 			'file'=>'https://dexter.vteximg.com.br/arquivos/ids/362353-540-540/AO9819001_1.jpg?v=636595837230800000',
 		



 		]);		
    }
}

