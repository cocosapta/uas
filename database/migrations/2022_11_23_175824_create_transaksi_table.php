<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id('id_transaksi');
            $table->string('id_pengguna');
            $table->date('tgl_transaksi');
            $table->integer('total_transaksi')->nullable();
            $table->unsignedBigInteger('id_user');
            $table->enum('status', ['menunggu', 'dibayar','diproses','dikirim','diterima','selesai','dikembalikan','kadaluwarsa','dibatalkan']);
            $table->timestamps();

            $table->foreign('id_user')->references('id')->on('users');
        });
       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi');
        
    }
};
