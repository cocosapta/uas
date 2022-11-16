<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function item(){
        $data_item = [
            'nama_barang' => 'Sepatu Sijalak Hrupat',
            'kategori' => "populer",
            'harga' => '250.000',
            'warna1' => 'hitam',
            'warna2' => 'putih',
            'foto1' => 'sepatu.jpg',
            'foto2' => 'ss.jpg',
            'deskripsi' => 'Selamat berbelanja di Mohaki Official

                            Semua motif yg bisa di pilih di variasi artinya barang tersedia ya!

                            Cara Pemesan Banyak Motif :
                            1. Pilih motif dan jumlahnya masukan ke dalam keranjang pesanan
                            2. Bayar pesanan semua secara langsung agar masih dalam 1 ongkos kirim

                            Catatan:
                            *Tidak menerima pergantian motif di chat
                            *Motif yg tidak masuk dalam variasi bisa dicantumkan di note/catatan order
                            *Jika ada kendala terkait produk atau pengiriman bisa menghubugi admin untuk dibantu sampai selesai

                            Karakteristik Produk:
                            1. Kualiatas Bahan Terbaik
                            2. Kuat Tidak Gampang Sobek
                            3. Anti Gerah dan Bau
                            4. Bahan Lentur Nyaman
                            5. Sporty
                            6. Casual
                            7. Panjang 3/4 (Setengah Betis)
                            8. All Size

                            Petunjuk Perawatan Produk :
                            •Cuci dengan air maksimum 30°C
                            •Jangan diperas dan disetrika
                            •Jangan menggunakan Pemutih
                            •Hindari Sinar Matahari

                            Terima Kasih Selamat Berbelanja

                            #KaosKakiPremium'
         ];
       
    return view('include.item', $data_item);

    }
}
