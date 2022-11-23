@extends('index')
@section('container')
    <div class="container mt-1">
         <form action="" method="post">
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
                        <h4 class="fw-bold">Barang</h4>
                        <div class="ms-1 d-flex">
                            <div class="d-flex small text-warning mb-2"> 4.9
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                            </div>
                            <p class="ms-2">Populer</p>
                        </div>
                        <h2 class="fw-bolder text-warning">Rp. 250.000</h2>
                        <div class="d-flex mt-4 ms-1">
                            <div class="form-group row ms-1 me-2">
                                <select class="form-control" id="kategori" name="warna">
                                    <option value="0" class="fw-bolder"> Warna </option>
                                    <option class="text-center" value="hitam"> Hitam </option>
                                    <option class="text-center" value="putih"> Putih </option>       
                                </select>
                            </div>
                            <div class="form-group row ms-1">
                                <select class="form-control" id="kategori" name="size">
                                    <option value="0" class="fw-bolder"> Size </option>
                                    <option class="text-center" value="40"> 40 </option>
                                    <option class="text-center" value="41"> 41 </option>       
                                </select>
                            </div>
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
                       
                        <div class="ms-1 d-flex mt-4 mb-4">
                           
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
                   Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis iste soluta sed officia voluptate eligendi maiores totam, aliquam laboriosam facilis natus sequi ipsa libero, sint et, hic officiis. Iusto, repellat.
                   Tenetur eligendi adipisci dolor, nihil assumenda voluptatum vitae, est ratione distinctio in dignissimos similique molestiae accusantium totam error perferendis nam quisquam aut voluptate quaerat expedita modi nemo provident! Libero, eveniet?
                   Ab commodi illo id quos odio sint adipisci eligendi voluptatem quisquam reiciendis temporibus libero incidunt fugit perferendis in, neque aliquid debitis modi velit unde eos sunt! In, officia asperiores? Autem.
                   Cupiditate, porro. Soluta est distinctio eos vel accusantium! In temporibus vel suscipit quibusdam ab consequatur maxime amet molestiae doloremque, totam velit veritatis laboriosam soluta eius minima cumque tempore iste! Culpa.
                   Esse, nesciunt quo perspiciatis id ullam hic delectus, ab repellendus odit eos illo nulla animi commodi, veniam quae sit cum ad magni quibusdam rem voluptas quia dicta reprehenderit. Magni, quae.
                   Neque numquam sapiente similique! Est tempora mollitia enim illo odit similique harum unde. Qui magni a facere illo! Laudantium illo similique iure et aperiam qui repellendus deserunt architecto animi ipsum.
                   Magnam, vero numquam? Asperiores voluptate animi vel esse iste earum vitae quis quidem natus debitis? Repudiandae, laudantium! Amet eos esse delectus soluta culpa, inventore atque dolores! Repudiandae illum suscipit eum?
                   Dolorum hic cum repellat ratione deserunt dolores esse consectetur itaque eius sint molestiae praesentium id facere, harum deleniti temporibus nulla amet a qui at. Vitae suscipit eos praesentium minus totam.
                </p>
            </div>          
        </div>
    </div>
@endsection