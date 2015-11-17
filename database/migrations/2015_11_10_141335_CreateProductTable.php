<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    public function up()
    {
        Schema::create('Products', function (Blueprint $table) {      
            $table->increments('id');
            $table->string('kode_barang');
            $table->string('merk');
            $table->string('size');
            $table->string('base');
            $table->timestamps();
            $table->softDeletes();            
        });
    }

    public function down()
    {
        Schema::drop('Products');
    }
}
