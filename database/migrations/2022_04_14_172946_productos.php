<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Productos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function(Blueprint $table){
           $table->increments('id');
           $table->string('sku');
           $table->string('nombre');
           $table->integer('id_catego');
           $table->text('descripcion');
           $table->float('precio');
           $table->integer('cantidad');
           $table->string('estado');
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
        //
    }
}
