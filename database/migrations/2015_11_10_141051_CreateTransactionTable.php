<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionTable extends Migration
{
    public function up()
    {
        Schema::create('Transactions', function (Blueprint $table) {      
            $table->increments('id');
            $table->integer('customer_id');
            $table->integer('employee_id');
            $table->string('nomor_nota');
            $table->datetime('waktu_transaksi');
            $table->float('diskon');
            $table->float('total');
            $table->timestamps();
            $table->softDeletes();            
        });
    }

    public function down()
    {
        Schema::drop('Transactions');
    }
}
