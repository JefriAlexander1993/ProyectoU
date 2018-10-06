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
                 $table->date('date');
                 $table->string('name');
                 $table->string('size')->nullable();
                 $table->string('brand')->nullable();
                 $table->integer('quantity')->default(0);
                 $table->float('iva')->default(0);
                 $table->float('unit_price');
                 $table->float('sale_price');
                 $table->integer('stockmin');
                 $table->string('file',128)->nullable();
                 $table->softDeletes();
                 $table->timestamps();

        });

        /*-------------------------TYPES-----------------------------------------*/

     Schema::create('types', function (Blueprint $table) {
                 $table->increments('id');
                 $table->string('name')->unique();
                 $table->integer('product_id')->unsigned();
                 $table->foreign('product_id')->references('id')->on('products');
                 $table->softDeletes();
                 $table->timestamps();

        });

    /*-------------------------BRANDS-----------------------------------------*/

     Schema::create('brands', function (Blueprint $table) {
                 $table->increments('id');
                 $table->string('name')->unique();
                 $table->integer('product_id')->unsigned();
                 $table->foreign('product_id')->references('id')->on('products');
                 $table->softDeletes();
                 $table->timestamps();

        });

    /*-------------------------Sezes-----------------------------------------*/

     Schema::create('sizes', function (Blueprint $table) {
                 $table->increments('id');
                 $table->string('name')->unique();
                 $table->integer('product_id')->unsigned();
                 $table->foreign('product_id')->references('id')->on('products');
                 $table->softDeletes();
                 $table->timestamps();

        });

     /*-------------------------Commentary-----------------------------------------*/
  Schema::create('comments', function (Blueprint $table) {
                 $table->increments('id');
                 $table->string('name');

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

                 $table->integer('user_id')->unsigned()->nullable();
                 $table->foreign('user_id')->references('id')->on('users');
                 $table->softDeletes();
                 $table->timestamps();

        });



                 /*--------------------------PROVEEDORES------------------------------------*/
    Schema::create('providers', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('nit')->unique();
            $table->string('nameprovider')->unique();
            $table->string('namerepresentative');
            $table->string('address')->nullable();
            $table->string('phone');
            $table->string('email')->nullable();
            $table->text('observation')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

    /*--------------------------ARTICULO_PROVEEDOR------------------------------------*/
    Schema::create('product_provider', function (Blueprint $table) {

        $table->increments('id');
        $table->integer('product_id')->unsigned();
        $table->integer('provider_id')->unsigned();
        $table->foreign('product_id')->references('id')->on('products')
            ->onUpdate('cascade')->onDelete('cascade');
        $table->foreign('provider_id')->references('id')->on('providers')
            ->onUpdate('cascade')->onDelete('cascade');
        // $table->primary(['articulo_id', 'proveedor_id']);
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
            $table->double('totalPurchase');

            $table->integer('users_id')->unsigned();
            $table->foreign('users_id')->references('id')->on('users');
            $table->softDeletes();
            $table->timestamps();
        });
             /*--------------------------COMPRA_ARTICULO------------------------------------*/


        Schema::create('purchase_product', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('quantity');
            $table->float('unit_price');
            $table->float('subtotal');
            $table->float('total');
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
        $table->float('unit_price');
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
