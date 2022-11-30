@extends('index')
@section('container')
    <div class="container mt-5 mb-5">
        <div class="box rounded m-3 bg-muted shadow-lg p-3 mt-3 mb-5">
            <div class="text-left  ms-5 mt-4 mb-5">
                <h2 class="fw-bolder text-dark ps-3">Daftar Akun</h2>
            </div>
            <div class="row mt-3">
                <div class="col-4">
                    <form action="{{ route('register') }}" method="post">
                        @csrf
                        <div class="m-2 justify-content-center text-center">
                            <h4 class="m-3 ">Foto Profile</h4>
                            <img src="user_icon/loginuser/us.png" value="user_icon/loginuser/us.png" width="200px"
                                class="rounded-circle border border-dark p-1 justify-content-center ms-3">
                            <div class="mt-3">
                                <input type="file" class="form ms-5  @error('foto') is-invalid @enderror" id="myfile" name="foto">
                                
                                @error('foto')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                </div>
                <div class=" col-8 mb-2">
                    <div class="ms-5 mt-1 me-3 bg-light shadow-lg p-1 rounded">
                        <div class="p-4 ">
                            <div class=" mb-1">
                                <label for="exampleFormControlInput1" class="form-label fw-bolder">Nama Lengkap </label>
                                <input type="name" class="form-control  @error('name') is-invalid @enderror"
                                    id="exampleFormControlInput1" placeholder="Nama Lengkap" name="nama">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class=" mb-1">
                                <label for="exampleFormControlInput1" class="form-label fw-bolder">Username </label>
                                <input type="text" class="form-control  @error('username') is-invalid @enderror"
                                    id="exampleFormControlInput1" placeholder="username" name="username">

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class=" mb-1">
                                <label for="exampleFormControlInput1" class="form-label fw-bolder">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    id="exampleFormControlInput1" placeholder="Email" name="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class=" mb-1">
                                <label for="exampleFormControlInput1" class="form-label fw-bolder">No Telepon </label>
                                <input type="text" class="form-control @error('telepon') is-invalid @enderror"
                                    id="exampleFormControlInput1" placeholder="Telepon" name="telepon">

                                @error('telepon')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class=" mb-1">
                                <label for="exampleFormControlInput1" class="form-label fw-bolder">Alamat </label>
                                <input type="text" class="form-control @error('alamat') is-invalid @enderror"
                                    id="exampleFormControlInput1" placeholder="Alamat" name="alamat">

                                @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class=" mb-1">
                                <label for="exampleFormControlInput1" class="form-label fw-bolder">Password </label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    id="exampleFormControlInput1" placeholder="Password" name="password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class=" mb-1">
                                <label for="exampleFormControlInput1" class="form-label fw-bolder">Konfirmasi Password
                                </label>
                                <input type="password" class="form-control  @error('konfirmpass') is-invalid @enderror"
                                    id="exampleFormControlInput1" placeholder="Konfirmasi Password" name="konfirmpass">

                                @error('konfirmpass')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end me-3 mt-4 mb-4">
                <a type="button" class="btn btn-outline-danger me-2" href="/">Back</a>
                <button type="button" class="btn btn-dark"  type="submit">Daftar</button>
            </div>
            </form>
        </div>
    </div>
@endsection
