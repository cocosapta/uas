@extends('index')
@section('container')
     <div class="container mt-5 mb-5">
        <div class="box rounded m-3 bg-muted shadow-lg p-3 mt-3 mb-5">
           <div class="m-3">
            <div class="m-2">
                <h2>Tentang Kami</h2>
            </div>
            <div class="m-2">
                <form>
                    <div class="row">
                        <div class="col-7">
                            <div class="mt-4">
                                <p style="text-align: justify;">{{ $isi_about }}</p>
                            </div>
                            <div class="mt-2">
                                <a type="btn btn-outline-primary" class="text-decoration-none" href="/setting">Kembali</a>
                            </div>
                        </div>

                        <div class="col-5">
                            <div class="mt-3 ms-5">
                                <div class="mb-2">
                                    <h5 class="fst-italic">Social Media</h5>
                                </div>
                                <div class="d-block p-1">
                                    <a class="text-decoration-none d-block p-1" href=""><label for=""><img src="/user_icon/loginuser/wa-logo.png" width="25px" class="ps-1"> WhatsApp</label></a>
                                    <a class="text-decoration-none d-block p-1" href=""><label for=""><img src="/user_icon/loginuser/ig-logo.png" width="25px" class="ps-1"> Instagram</label></a>
                                    <a class="text-decoration-none d-block p-1" href=""><label for=""><img src="/user_icon/loginuser/youtube-logo.png" width="25px" class="ps-1"> YouTube</label></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
           </div>
        </div>
    </div> 
@endsection