<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TentangkamiController extends Controller
{
    public function tentangkami(){
        $data_about = [
            'isi_about' => 'Halo sahabat yang luar biasa, pada kesempatan kali ini izinkan kami dari (tulis nama toko online Anda di sini) untuk memperkenalkan diri. Mudah-mudahan dengan adanya perkenalan ini sahabat-sahabat sekalian akan lebih senang berbelanja di toko online ini.

Sungguh terhormat bagi kami, jika Anda datang ke toko ini dan bisa memperoleh banyak hal yang bermanfaat.

(Tulis nama toko online Anda di sini) adalah sebuah toko yang menyediakan (sebutkan berbagai produk yang Anda jual di sini). Bermula dari sebuah bangunan yang berlokasi di Jalan (isi dengan alamat toko Anda di sini), toko kami akhirnya bisa menjangkau pasar yang lebih luas lagi melalui internet.

Seiring dengan semakin berkembangnya teknologi, maka kami mencoba berinovasi dalam berbisnis. Salah satu bentuk inovasinya adalah dengan menyediakan berbagai layanan toko kami melalui media internet, dan toko online ini adalah salah satu bentuk pelayanan kami kepada Anda.

(Tulis nama toko online Anda di sini) didirikan oleh Bapak/Ibu/Mas/Mbak (Isi dengan nama Anda di sini) pada (isi dengan kapan berdirinya toko online Anda). Keberadaan dari toko online ini diharapkan dapat mempermudah Anda untuk mendapatkan berbagai produk berkualitas tinggi namun dengan harga yang terjangkau.

Dalam memberi layanan, kami selalu mencoba memberi persembahan terbaik kepada siapapun. Selain itu kami juga selalu menjunjung tinggi nilai-nilai etika yang baik, seperti kejujuran, ketepatan, dan profesionalitas dalam berbisnis. Mudah-mudahan dengannya toko online kami bisa memberi banyak manfaat bagi Anda.

Sekian dulu perkenalan ini. Semoga perkenalan ini bisa memberi inspirasi dan manfaat bagi Anda.

Salam super dan semoga Anda sukses selalu.


SHOESHOP
(DI JALAN RAYA BANDUNG).
YA POKOK NYARI CUAN.'
        ];

        return view('include.about', $data_about);
    }
}
