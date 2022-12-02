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
        Schema::create('kategori_barang', function (Blueprint $table) {
            $table->id('id_kategori_barang');
            $table->string('nama_kategori_barang');
            $table->timestamps();
        });
        Schema::create('barang', function (Blueprint $table) {
            $table->id('id_barang');
            $table->string('nama_barang');
            $table->string('foto_barang')->nullable();
            $table->string('rating')->nullable();
            $table->integer('harga_satuan');
            $table->integer('jumlah_barang');
            $table->text('deskripsi_barang');
            $table->unsignedBigInteger('id_size')->nullable();
            $table->unsignedBigInteger('id_warna')->nullable();
            $table->unsignedBigInteger('id_kategori_barang')->nullable();
            $table->enum('status',['ready','soldout']);
            $table->timestamps();

            $table->foreign('id_size')->references('id_size')->on('size');
            $table->foreign('id_warna')->references('id_warna')->on('warna');
            $table->foreign('id_kategori_barang')->references('id_kategori_barang')->on('kategori_barang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kategori_barang');
        Schema::dropIfExists('barang');
        
    }
};
