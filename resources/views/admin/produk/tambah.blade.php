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
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
        Open modal
    </button>
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Modal Heading</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    Modal body..
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

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
                            <tbody>
                                <tr>
                                    @foreach ($b as $item)
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
                                            <a class="btn" data-toggle="modal" data-target="#edit-{{ $item->id }}"><i
                                                    class="fa fa-edit"></i></a>
                                            <a href="{{ url('hapus', $item->id) }}" class="btn"><i class="fa fa-trash"
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
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <?php
                            $no = 1;
                            ?>
                            <tbody>
                                <tr>
                                    @foreach ($b as $item)
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $item->nama_barang }}</td>
                                        <td>{{ $item->nama_kategori_barang }}</td>
                                        <td>{{ $item->harga_satuan }}</td>
                                        <td>{{ $item->jumlah_barang }}</td>
                                        <td>
                                            <a href="{{ url('hapus', $item->id) }}" class="btn"><i class="fa fa-eye"
                                                    style="color: blue;"></i></a>
                                            <a class="btn" data-toggle="modal"
                                                data-target="#edit-{{ $item->id }}"><i class="fa fa-edit"></i></a>
                                            <a href="{{ url('hapus', $item->id) }}" class="btn"><i
                                                    class="fa fa-trash" style="color: red;"></i></a>
                                        </td>
                                    @endforeach
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Name Barang</th>
                                    <th>Kategori</th>
                                    <th>Harga</th>
                                    <th>Jumlah</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
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
@endsection
