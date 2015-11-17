<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionDetailTable extends Migration
{
    public function up()
    {
        Schema::create('Transaction_Details', function (Blueprint $table) {      
            $table->increments('id');
            $table->integer('transaksi_id');
            $table->integer('produk_id');
            $table->string('warna');
            $table->float('quantity');
            $table->float('harga');
            $table->timestamps();
            $table->softDeletes();            
        });
    }

    public function down()
    {
        Schema::drop('Transaction_Details');
    }
}
