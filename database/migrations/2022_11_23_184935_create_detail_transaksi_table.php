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
        Schema::create('detail_transaksi', function (Blueprint $table) {
            $table->id('id_detail_transaksi');
            $table->string('id_pengguna');
            $table->date('tgl_transaksi');
            $table->integer('total_transaksi')->nullable();
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_keranjang');
            $table->unsignedBigInteger('id_barang');
            $table->unsignedBigInteger('id_transaksi');
            $table->timestamps();

            $table->foreign('id_barang')->references('id_barang')->on('barang');
            $table->foreign('id_transaksi')->references('id_transaksi')->on('transaksi');
            $table->foreign('id_keranjang')->references('id_keranjang')->on('keranjang_barang');
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
        Schema::dropIfExists('detail_transaksi');
    }
};
