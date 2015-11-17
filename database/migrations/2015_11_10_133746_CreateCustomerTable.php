<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerTable extends Migration
{
    public function up()
    {
        Schema::create('Customers', function (Blueprint $table) {      
            $table->increments('id');
            $table->string('kode_customer');
            $table->string('nama');
            $table->text('alamat');
            $table->string('nomor_hp');
            $table->string('nomor_rumah');
            $table->string('nama_toko');
            $table->timestamps();
            $table->softDeletes();            
        });
    }

    public function down()
    {
        Schema::drop('Customers');
    }
}

