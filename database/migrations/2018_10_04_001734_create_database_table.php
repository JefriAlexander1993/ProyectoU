<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateDatabaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


    Schema::create('categories', function (Blueprint $table) {

        $table->increments('id');
        $table->string('name')->unique();
        $table->string('characteristics')->nullable();
        $table->timestamps();
        $table->softDeletes();
    });



     /*-------------------------PRODUCTS-----------------------------------------*/

     Schema::create('products', function (Blueprint $table) {
                 $table->increments('id');
                 $table->string('code')->unique();
                 $table->string('name');
                 $table->mediumtext('description')->nullable();
                 $table->float('unit_price');
                 $table->float('sale_price');
                 $table->integer('quantity')->default(0);
                 $table->integer('stockmin')->default(0);
                 $table->string('file',128)->nullable();
                 $table->integer('category_id')->unsigned()->nullable();
                $table->foreign('category_id')->references('id')->on('categories');
        
                 $table->softDeletes();
                 $table->timestamps();

        });


     /*-------------------------Commentary-----------------------------------------*/
  Schema::create('comments', function (Blueprint $table) {
                 $table->increments('id');
                 $table->string('name');
                 $table->string('affair');
                 $table->string('email')->unique();
                 $table->mediumtext('body');
                 $table->integer('user_id')->unsigned()->nullable();
                 $table->foreign('user_id')->references('id')->on('users');
                 $table->softDeletes();
                 $table->timestamps();

        });
     /*-------------------------Commentary-----------------------------------------*/
  Schema::create('users_comments', function (Blueprint $table) {

                $table->increments('id');
                $table->mediumtext('body');
                $table->integer('user_id')->unsigned();
                $table->integer('comment_id')->unsigned();
                $table->foreign('user_id')->references('id')->on('users')
                    ->onUpdate('cascade')->onDelete('cascade');
                $table->foreign('comment_id')->references('id')->on('comments')
                    ->onUpdate('cascade')->onDelete('cascade');
                $table->softDeletes();
                $table->timestamps();

        });



     /*-------------------------Commentary-----------------------------------------*/
  Schema::create('quotes', function (Blueprint $table) {
                 $table->increments('id');
                 $table->string('name');
                 $table->string('email');
                 $table->mediumtext('body');
                 $table->softDeletes();
                 $table->timestamps();

        });

  Schema::create('users_quotes', function (Blueprint $table) {
                      $table->increments('id');
                      $table->float('costTotal');
                      $table->integer('user_id')->unsigned();
                      $table->integer('quotes_id')->unsigned();
                      $table->foreign('user_id')->references('id')->on('users')
                          ->onUpdate('cascade')->onDelete('cascade');
                      $table->foreign('quotes_id')->references('id')->on('quotes')
                          ->onUpdate('cascade')->onDelete('cascade');
                      $table->softDeletes();
                      $table->timestamps();

              });

    Schema::create('products_quotes', function (Blueprint $table) {
                            $table->increments('id');
                            $table->float('costTotal');
                            $table->integer('product_id')->unsigned();
                            $table->integer('quotes_id')->unsigned();
                            $table->foreign('product_id')->references('id')->on('products')
                                ->onUpdate('cascade')->onDelete('cascade');
                            $table->foreign('quotes_id')->references('id')->on('quotes')
                                ->onUpdate('cascade')->onDelete('cascade');
                            $table->softDeletes();
                            $table->timestamps();

    });



           /*--------------------------COMPRAS------------------------------------*/

        Schema::create('purchases', function (Blueprint $table) {
            $table->increments('id');
            $table->double('totalpurchase');

            $table->integer('users_id')->unsigned();
            $table->foreign('users_id')->references('id')->on('users');
            $table->softDeletes();
            $table->timestamps();
        });
             /*--------------------------COMPRA_ARTICULO------------------------------------*/


        Schema::create('purchase_product', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('quantity');
            $table->double('subtotal');
            $table->integer('purchase_id')->unsigned()->nullable();
            $table->integer('product_id')->unsigned()->nullable();
            $table->foreign('purchase_id')->references('id')->on('purchases')
             ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')
             ->onUpdate('cascade')->onDelete('cascade');
            $table->softDeletes();
            $table->timestamps();

        });


    /*--------------------------VENTAS------------------------------------*/
    Schema::create('sales', function (Blueprint $table) {

        $table->increments('id');
        $table->double('totalsale');
        $table->integer('users_id')->unsigned();
        $table->foreign('users_id')->references('id')->on('users');
        $table->softDeletes();
        $table->timestamps();


     });
    /*--------------------------VENTA_ARTICULO------------------------------------*/
    Schema::create('sale_product', function (Blueprint $table) {

        $table->increments('id');
        $table->integer('quantity');
        $table->float('subtotal');
        $table->float('total');
        $table->integer('sale_id')->unsigned()->nullable();
        $table->integer('product_id')->unsigned()->nullable();

         $table->foreign('sale_id')->references('id')->on('sales')
         ->onUpdate('cascade')->onDelete('cascade');
         $table->foreign('product_id')->references('id')->on('products')
             ->onUpdate('cascade')->onDelete('cascade');
         $table->softDeletes();
         $table->timestamps();


     });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {   Schema::dropIfExists('categories');
        Schema::dropIfExists('products');
        Schema::dropIfExists('users_comments');
        Schema::dropIfExists('brandss');
        Schema::dropIfExists('sizes');
        Schema::dropIfExists('comments');
        Schema::dropIfExists('quotes');
        Schema::dropIfExists('proveedores');
        Schema::dropIfExists('clients');
        Schema::dropIfExists('purchases');
        Schema::dropIfExists('sales');
        Schema::dropIfExists('product_provider');
        Schema::dropIfExists('sale_product');
        Schema::dropIfExists('purchase_product');
    }
}
