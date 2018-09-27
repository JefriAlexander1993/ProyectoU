<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nuip_nit')->unique();
            $table->text('names');
            $table->text('surnames');
            $table->text('type_document');
            $table->text('company');
            $table->text('address');
            $table->text('phone');
            $table->text('cell_phone');
            $table->text('fax');
            $table->string('email')->unique();
            $table->text('city');
            $table->text('departament');
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
        Schema::dropIfExists('clients');
    }
}
