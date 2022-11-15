@extends('index')
@section('keranjang')
      <div class="container mt-3 mb-2">
        <div class="row">
            <div class="col-3  mt-2  ">
                <div class="bg-light rounded pb-5">
                   <div class="ps-2 pt-2 pb-5">
                    <div class="mt-3 ms-3">
                        <a href="/profile" class="text-decoration-none text-dark pt-3 fs-6 fw-bold"><img  class="me-2" src="user_icon/loginuser/us.png" class="ms-1" width="25px">Username</a>
                    </div>
                    <div class="mt-3 pb-5" style="margin-left:-20px;">
                        <ul>
                            <ol class="menu"><a href="/keranjang" class="text-decoration-none text-secondary"> Keranjang</a></ol>
                            <ol class="menu"><a href="/belanja" class="text-decoration-none text-secondary"> Item Terbaru</a></ol>
                            <ol class="menu"><a href="/belanja" class="text-decoration-none text-secondary"> Item Populer</a></ol>
                            <ol class="menu"><a href="/" class="text-decoration-none text-secondary pb-5"> Logout</a></ol>

                        </ul>
                    </div>
                     
                   </div>
                </div>
            </div>

            <div class="col-9  mt-2 rounded" style="margin-left: 0px;">
                <div style="margin-left: 2px;">
                     <div class="text rounded" style="background-color: rgba(0, 0, 0, 0.626)">
                       <div class="pt-3 ps-1 text-center pb-1" ><h5 class="ps-1 text-light">Keranjang Belanja</h5></div>
                     </div>
                     {{-- hdjhdjnjkdnk --}}
                     <div class="bg-light mt-2 ">
                        <div class="pt-3 ps-3 pe-3 pb-2">
                            <div>
                               <h6 class="ms-3">Sepatu Hiking</h6>
                                <hr> 
                            </div>
                            <div class=>
                                <div class="row">
                                    <div class="col-3">
                                        <img src="user_icon/sepatu.jpg" class="ms-5 mt-2" width="140px">
                                    </div>
                                    <div class="col-5">
                                        <ul>
                                            <ol class="fs-6">Size = 39</ol>
                                            <ol class="fs-6">Variasi = Putih</ol>
                                            <ol class="fs-6">Jumlah = 1 </ol>
                                            <ol class="fs-6">Harga = Rp.250.000</ol>
                                            <ol class="fs-6">Diskon = Rp.20.000</ol>
                                            <ol><h5 class="pt-2 fw-bolder text-warning" >Total = Rp.230.000</h5></ol>
                                        </ul>
                                    </div>
                                    <div class="col-4">
                                        
                                        <div class="ms-1 mt-5">
                                            <form action="" method="">
                                                <button type="button" class="btn btn-danger" aria-label="">Hapus</button>
                                                <a type="submit" class="btn btn-success" aria-label="" href="/pembayaran">Checkout</a>
                                            </form>
                                            
                                        </div>
                                        
                                    </div>
                                </div>  
                            </div>
                            <hr>
                        </div>
                     </div>
                     {{-- hdjhdjnjkdnk --}}
                     <div class="bg-light mt-2 ">
                        <div class="pt-3 ps-3 pe-3 pb-2">
                            <div>
                               <h6 class="ms-3">Sepatu Hiking</h6>
                                <hr> 
                            </div>
                            <div class=>
                                <div class="row">
                                    <div class="col-3">
                                        <img src="user_icon/sepatu.jpg" class="ms-5 mt-2" width="140px">
                                    </div>
                                    <div class="col-5">
                                        <ul>
                                            <ol class="fs-6">Size = 39</ol>
                                            <ol class="fs-6">Variasi = Putih</ol>
                                            <ol class="fs-6">Jumlah = 1 </ol>
                                            <ol class="fs-6">Harga = Rp.250.000</ol>
                                            <ol class="fs-6">Diskon = Rp.20.000</ol>
                                            <ol><h5 class="pt-2 fw-bolder text-warning" >Total = Rp.230.000</h5></ol>
                                        </ul>
                                    </div>
                                    <div class="col-4">
                                        <div class="ms-1 mt-5">
                                        <form action="" method="">
                                                <button type="button" class="btn btn-danger" aria-label="">Hapus</button>
                                                 <a type="submit" class="btn btn-success" aria-label="" href="/pembayaran">Checkout</a>
                                            </form>
                                            
                                        </div>
                                        
                                    </div>
                                </div>  
                            </div>
                            <hr>
                        </div>
                     </div>
                     


                    
                </div>
            </div>
        </div>
    </div>
    <style>
        .side {
            margin-left: -55px;
            margin-top: 2px;
        }

.menu:hover {
    background-color: rgba(143, 143, 143, 0.368);
}
    </style>
@endsection