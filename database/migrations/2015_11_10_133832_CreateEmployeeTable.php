<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeTable extends Migration
{
    public function up()
    {
        Schema::create('Employees', function (Blueprint $table) {      
            $table->increments('id');
            $table->string('username');
            $table->string('password');
            $table->text('nama');
            $table->string('akses');
            $table->string('nomor_rumah');
            $table->string('nama_toko');
            $table->timestamps();
            $table->softDeletes();            
        });
    }

    public function down()
    {
        Schema::drop('Employees');
    }
}
