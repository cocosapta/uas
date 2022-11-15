@extends('index')
@section('container')
     <div class="container mt-5 mb-5">
        <div class="box rounded m-3 bg-muted shadow-lg p-3 mt-3 mb-5">
            <div class=" d-flex ms-3 mt-3 me-3 mb-0">
                <p class="fw-bold me-5">Username<br> Tlpn:(0341)-0687-453</p>
                <p class="ms-5" style="text-align: justify;">
                Alamat : Jalan Pesangrahan No.3 Pandeglang, Banten
                </p>
            </div>  
            <hr> 
            <div class="ms-3 mt-3 me-3 mb-0">
                <table class="table">
                <thead>
                    <tr class="text-center">
                        <th width= "20%">Foto</th>
                        <th width= "30%">Produk</th>
                        <th width= "20%">Jumlah</th>
                        <th width= "15%">Harga Satuan</th>
                        <th width= "15%">Harga Total</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-center">
                        <td><img src="user_icon/sepatu.jpg" class="shadow p3" width="70px"></td>
                        <td>Sepatu Hiking Sijalak Harupat</td>
                        <td>1</td>
                        <td>Rp.250.000</td>
                        <td>Rp.230.000</td>
                    </tr>
                </tbody>
                </table>  
            </div>

            <div class="d-flex justify-content-end me-3">
                <h4 class="fw-bold text-warning me-3">Rp.230.000</h4>
                <a type="button" class="btn btn-dark">Konfirmasi Pesanan</a>
            </div>
            
        </div>
    </div>
@endsection