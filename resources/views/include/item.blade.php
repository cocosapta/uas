@extends('index')
@section('container')
    <div class="container mt-1">
         <form>
        <div class="box rounded m-3 bg-muted shadow-lg p-3">
            <div class="row">
                <div class="col-5">
                    <div class="ms-4 mt-3 me-4">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="user_icon/ss.jpg" width="400px" class="shadow p1 img-fluid">
                                </div>
                                <div class="carousel-item">
                                    <img src="user_icon/sepatu.jpg" width="400px" class="shadow p1 img-fluid">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>


                        
                    </div>
                </div>
                <div class="col-7">
                    <div class="ms-3 mt-3 me-3">
                        <h4 class="fw-bold">{{ $barang['nama_barang'] }}</h4>
                        <div class="ms-1 d-flex">
                            <div class="d-flex small text-warning mb-2"> 4.9
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                            </div>
                            <p class="ms-2">{{ $barang['kategori_barang'] }}</p>
                        </div>
                        <h2 class="fw-bolder text-warning">Rp. {{ $barang['harga'] }}</h2>
                        <div class="d-flex mt-4 ms-1">
                            <button type="button" class="btn btn-outline-secondary me-2" value="hitam">Hitam</button>
                            <button type="button" class="btn btn-outline-secondary me-2" value="putih">Putih</button>
                        </div>
                        <div class="ms-1 mt-4">
                            <ul class="pagination">
                                <li class="page-item">
                                <a class="page-link" aria-label="Previous">
                                    <span aria-hidden="true">-</span>
                                </a>
                                </li>
                                <li class="page-item"><a class="page-link">1</a></li>
                                <li class="page-item">
                                <a class="page-link" aria-label="Next">
                                    <span aria-hidden="true">+</span>
                                </a>
                                </li>
                            </ul>
                        </div>
                       
                        <div class="ms-1 d-flex mt-5">
                           
                            <a class="btn btn-outline-secondary position-relative" href="#"><img src="user_icon/keranjang.png" height="20px"></a>
                            <a type="button" class="btn btn-dark ms-2" href="/pembayaran">CheckOut</a>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
         </form>
    </div>
     <div class="container mt-1">
        <div class="box rounded m-3 bg-muted shadow-lg p-3">
            <div class="m-3">
                <p class="" style="text-align: justify;">
                    {{ $barang['deskripsi']}}
                </p>
            </div>          
        </div>
    </div>
@endsection