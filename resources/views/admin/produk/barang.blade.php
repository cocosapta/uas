@extends('layouts.adminApp')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Data Produk</h5>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name Barang</th>
                                    <th>Harga</th>
                                    <th>Jumlah</th>
                                    <th>Status</th>
                                    <th>Status Action</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <?php
                            $no = 1;
                            ?>
                            <tbody>
                                @foreach ($b as $item)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $item->nama_barang }}</td>
                                        <td>{{ $item->harga_satuan }}</td>
                                        <td>{{ $item->jumlah_barang }}</td>
                                        <td>{{ $item->status }}</td>
                                        <td>
                                            <form action="{{ url('status', $item->id_barang) }}" method="post">
                                                @csrf
                                                @if ($item->status == 'ready')
                                                    <input type="hidden" name="ready" value="ready">
                                                    <button class="btn " type="submit" disabled><i class="fa fa-eye"
                                                            style="color: green;"></i></button>
                                                    <input type="hidden" name="sold" value="sold out">
                                                    <button class="btn" type="submit"><i class="fa fa-eye-slash"
                                                            style="color: red;"></i></button>
                                                @elseif($item->status == 'sold out')
                                                    <input type="hidden" name="ready" value="ready">
                                                    <button class="btn " type="submit"><i class="fa fa-eye"
                                                            style="color: green;"></i></button>
                                                    <input type="hidden" name="sold" value="sold out">
                                                    <button class="btn" type="submit" disabled><i
                                                            class="fa fa-eye-slash" style="color: red;"></i></button>
                                                @endif
                                            </form>
                                        </td>
                                        <td>
                                            <a href="{{ url('hapus', $item->id_barang) }}" class="btn"><i class="fa fa-eye"
                                                    style="color: blue;"></i></a>
                                            <a class="btn" data-toggle="modal" data-target="#edit-{{ $item->id_barang }}"><i
                                                    class="fa fa-edit"></i></a>
                                            <a href="{{ url('hapus', $item->id_barang) }}" class="btn"><i class="fa fa-trash"
                                                    style="color: red;"></i></a>
                                        </td>
                                @endforeach
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @foreach ($b as $item)
        <div class="modal fade" id="edit-{{ $item->id_barang }}" tabindex="-1" role="dialog"
            aria-labelledby="largeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="largeModalLabel">Tambah Menu</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" enctype="multipart/form-data" action="{{ url('add') }}">
                            @csrf
                            <div class="form-group">
                                <label>Nama </label>
                                <input id="nama" type="text"
                                    class="form-control @error('nama') is-invalid @enderror" name="nama"
                                    value="{{ old('nama') }}" required autocomplete="nama" autofocus>

                                @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Kategori</label>
                                <select id="kategori" class="form-control @error('harga') is-invalid @enderror"
                                    name="kategori" required autocomplete="kategori" autofocus>
                                    <option value="">-pilih-</option>
                                    <option value="">Lelenggahan</option>
                                </select>
                                @error('kategori')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Size</label>
                                <select id="size" class="form-control @error('harga') is-invalid @enderror"
                                    name="size" required autocomplete="size" autofocus>
                                    <option value="">-pilih-</option>
                                    <option value="{{$item->id_size}}">{{$item->size}}</option>
                                </select>
                                @error('size')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                            <div class="form-group">
                                <label>Warna</label>
                                <select id="warna" class="form-control @error('harga') is-invalid @enderror"
                                    name="warna" required autocomplete="warna" autofocus>
                                    <option value="">-pilih-</option>
                                    <option value="{{$item->id_warna}}">{{$item->warna}}</option>
                                </select>
                                @error('warna')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Harga</label>
                                <input id="harga" type="text"
                                    class="form-control @error('harga') is-invalid @enderror" name="harga"
                                    value="{{ old('harga') }}" required autocomplete="harga" autofocus>

                                @error('harga')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" name="description" id="site-description">{{ old('discription') }}</textarea>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Gambar</label>
                                <input type="file" class="form-control @error('photo') is-invalid @enderror"
                                    name="photo">

                                <!-- error message untuk title -->
                                @error('photo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-md btn-primary">Simpan</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
@section('script')
    <script src="{{ asset('backend/assets/extra-libs/multicheck/datatable-checkbox-init') }}"></script>
    <script src="{{ asset('backend/assets/extra-libs/multicheck/jquery.multicheck') }}"></script>
    <script src="{{ asset('backend/assets/extra-libs/DataTables/datatables.min') }}"></script>
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $("#zero_config").DataTable();
    </script>
@endsection
