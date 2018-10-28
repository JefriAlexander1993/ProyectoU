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
           /*-------------------------PRODUCTS-----------------------------------------*/

     Schema::create('products', function (Blueprint $table) {
                 $table->increments('id');
                 $table->string('code')->unique();
                 $table->string('name');
                 $table->date('date')->nullable();
                 $table->mediumtext('description')->nullable();
                 $table->float('iva')->default(0);
                 $table->float('unit_price');
                 $table->float('sale_price');
                 $table->integer('quantity')->default(0);
                 $table->integer('stockmin')->default(0);
                 $table->string('file',128)->nullable();
                 $table->softDeletes();
                 $table->timestamps();

        });

        /*-------------------------TYPES-----------------------------------------*/

     Schema::create('types', function (Blueprint $table) {
                 $table->increments('id');
                 $table->string('name')->unique();
                 $table->string('characteristics')->nullable();
                 $table->integer('product_id')->unsigned();
                 $table->foreign('product_id')->references('id')->on('products');
                 $table->softDeletes();
                 $table->timestamps();

        });


     /*-------------------------Commentary-----------------------------------------*/
  Schema::create('comments', function (Blueprint $table) {
                 $table->increments('id');
                 $table->string('name');
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
  Schema::create('quotations', function (Blueprint $table) {
                 $table->increments('id');
                 $table->string('name');
                 $table->string('email');
                 $table->mediumtext('body');
                 $table->softDeletes();
                 $table->timestamps();

        });

  Schema::create('users_quotations', function (Blueprint $table) {
                      $table->increments('id');
                      $table->float('costTotal');
                      $table->integer('user_id')->unsigned();
                      $table->integer('quotation_id')->unsigned();
                      $table->foreign('user_id')->references('id')->on('users')
                          ->onUpdate('cascade')->onDelete('cascade');
                      $table->foreign('quotation_id')->references('id')->on('quotations')
                          ->onUpdate('cascade')->onDelete('cascade');
                      $table->softDeletes();
                      $table->timestamps();

              });

    Schema::create('products_quotations', function (Blueprint $table) {
                            $table->increments('id');
                            $table->float('costTotal');
                            $table->integer('product_id')->unsigned();
                            $table->integer('quotation_id')->unsigned();
                            $table->foreign('product_id')->references('id')->on('products')
                                ->onUpdate('cascade')->onDelete('cascade');
                            $table->foreign('quotation_id')->references('id')->on('quotations')
                                ->onUpdate('cascade')->onDelete('cascade');
                            $table->softDeletes();
                            $table->timestamps();

    });




    /*--------------------------CLIENTES------------------------------------*/
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nuip')->unique();
            $table->string('name');
            $table->string('phone');
            $table->string('address')->nullable();
            $table->string('email',160)->nullable();
            $table->string('purchase')->nullable();
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
    {
        Schema::dropIfExists('products');
        Schema::dropIfExists('users_comments');
        Schema::dropIfExists('brandss');
        Schema::dropIfExists('sizes');
        Schema::dropIfExists('comments');
        Schema::dropIfExists('quotations');
        Schema::dropIfExists('proveedores');
        Schema::dropIfExists('clients');
        Schema::dropIfExists('purchases');
        Schema::dropIfExists('sales');
        Schema::dropIfExists('product_provider');
        Schema::dropIfExists('sale_product');
        Schema::dropIfExists('purchase_product');
    }
}
