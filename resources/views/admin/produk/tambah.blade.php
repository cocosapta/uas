@extends('layouts.adminApp')
@section('content')
    @if (session()->has('success'))
        <div class="col-sm-12">
            <div class="alert  alert-success alert-dismissible fade show" role="alert">
                <span class="badge badge-pill badge-success"></span> Data telah di tambah
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    @endif
    @if (session()->has('destroy'))
        <div class="col-sm-12">
            <div class="alert  alert-success alert-dismissible fade show" role="alert">
                <span class="badge badge-pill badge-success"></span> Data Success di Hapus
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    @endif
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah">
        Tambah Barang
    </button>
    <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="largeModalLabel">Tambah Menu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form class="form-horizontal row-fluid" action="{{route('create')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Kategori</label>
                            <select id="kategori" class="form-control @error('kategori') is-invalid @enderror" name="kategori"
                                required autocomplete="kategori" autofocus>
                                <option value="">-pilih-</option>
                                @foreach($kt as $item)
                                <option value="{{$item->id_kategori_barang}}">{{$item->nama_kategori_barang}}</option>
                                @endforeach
                            </select>
                            @error('kategori')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Nama Barang</label>
                            <input id="nama_barang" type="text" class="form-control @error('nama_barang') is-invalid @enderror"
                                name="nama_barang" value="{{ old('nama_barang') }}" required autocomplete="nama_barang" autofocus>

                            @error('nama_barang')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="basicinput">Jumlah Barang</label>
                            <div class="controls">
                                <div class="input-append">
                                   <input type="text" placeholder="total barang" class="span8 @error('nama_barang') is-invalid @enderror" name="jumlah_barang"><span class="add-on">Pcs</span>
                                    @error('jumlah_barang')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Ketersediaan Size</label>
                            <div class="controls d-flex">
                                @foreach ($s as $s)
                                    <label class="checkbox inline">
                                        <input type="checkbox" class="d-flex @error('size') is-invalid @enderror" name="size"
                                            value="{{ $s->id_size }}">
                                        {{ $s->size }}
                                    </label>
                                @endforeach
                                @error('size')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Warna</label>
                            <div class="controls d-flex">
                                @foreach ($w as $w)
                                    <label class="checkbox inline">
                                        <input type="checkbox" class="d-flex @error('warna') is-invalid @enderror" name="warna"
                                            value="{{ $w->id_warna }}">
                                        {{ $w->warna }}
                                    </label>
                                @endforeach
                                @error('warna')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label" for="basicinput">Harga Barang</label>
                            <div class="controls">
                                <div class="input-append">
                                    <span class="add-on">Rp.</span><input type="text" placeholder="5.000"
                                        class="span8  @error('harga_satuan') is-invalid @enderror" name="harga_satuan">
                                    @error('harga_satuan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Gambar</label>
                            <input type="file" class="form-control @error('gambar') is-invalid @enderror"
                                name="gambar">

                            <!-- error message untuk title -->
                            @error('gambar')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" name="deskripsi" id="site-description">{{ old('discription') }}</textarea>

                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-md btn-primary">Simpan</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
                </form>
            </div>
        </div>
    </div>
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
                                    <th>Kategori</th>
                                    <th>Harga</th>
                                    <th>Jumlah</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <?php
                            $no = 1;
                            ?>
                                @foreach ($b as $item)
                            <tbody>
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $item->nama_barang }}</td>
                                        <td>{{ $item->nama_kategori_barang }}</td>
                                        <td>{{ $item->harga_satuan }}</td>
                                        <td>{{ $item->jumlah_barang }}</td>
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
                                            <a href="{{ url('hapus', $item->id) }}" class="btn"><i class="fa fa-eye"
                                                    style="color: blue;"></i></a>
                                            <a class="btn" data-toggle="modal"
                                                data-target="#edit-{{ $item->id }}"><i class="fa fa-edit"></i></a>
                                            <a href="{{ url('hapus', $item->id) }}" class="btn"><i
                                                    class="fa fa-trash" style="color: red;"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                                @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
    <script src="{{ asset('backend/assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/dist/js/pages/mask/mask.init.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/select2/dist/js/select2.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/jquery-asColor/dist/jquery-asColor.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/jquery-asGradient/dist/jquery-asGradient.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/jquery-minicolors/jquery.minicolors.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/quill/dist/quill.min.js') }}"></script>
    <script>
        //***********************************//
        // For select 2
        //***********************************//
        $(".select2").select2();

        /*colorpicker*/
        $(".demo").each(function() {
            //
            // Dear reader, it's actually very easy to initialize MiniColors. For example:
            //
            //  $(selector).minicolors();
            //
            // The way I've done it below is just for the demo, so don't get confused
            // by it. Also, data- attributes aren't supported at this time...they're
            // only used for this demo.
            //
            $(this).minicolors({
                control: $(this).attr("data-control") || "hue",
                position: $(this).attr("data-position") || "bottom left",

                change: function(value, opacity) {
                    if (!value) return;
                    if (opacity) value += ", " + opacity;
                    if (typeof console === "object") {
                        console.log(value);
                    }
                },
                theme: "bootstrap",
            });
        });
        /*datwpicker*/
        jQuery(".mydatepicker").datepicker();
        jQuery("#datepicker-autoclose").datepicker({
            autoclose: true,
            todayHighlight: true,
        });
        var quill = new Quill("#editor", {
            theme: "snow",
        });
    </script>
@endsection
