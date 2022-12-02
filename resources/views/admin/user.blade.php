@extends('layouts.adminApp')
@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <form class="form-horizontal" method="post" action="/add.user">
                    @csrf
                    <div class="card-body">
                        <h4 class="card-title">Data User</h4>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-end control-label col-form-label">Nama Lengkap</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="user" id="user" placeholder="Isi Nama Lengkap Disini" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-end control-label col-form-label">Username</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="user" id="user" placeholder="Isi Username Disini" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-end control-label col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="user" id="user" placeholder="Isi Email Disini" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-end control-label col-form-label">No. Telepon</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="user" id="user" placeholder="Isi No. Telepon Disini" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-end control-label col-form-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="user" id="user" placeholder="Isi Alamat Disini" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-end control-label col-form-label">Foto Profile</label>
                            <div class="col-md-9">
                              <div class="custom-file">
                                <input type="file" class="custom-file-input" id="validatedCustomFile" required />
                                <label class="custom-file-label" for="validatedCustomFile">Pilih File Foto (PNG,JPG,JPEG)...</label>
                                <div class="invalid-feedback">
                                  Example invalid custom file feedback
                                </div>
                              </div>
                            </div>
                          </div>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-end control-label col-form-label">Password</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="user" id="user" placeholder="Isi Password Disini" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-end control-label col-form-label">Konfirmasi Password</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="user" id="user" placeholder="Konfirmasi Password Disini" />
                            </div>
                        </div>
                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <button type="submit" class="btn btn-primary">
                                Submit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-0">Data User</h5>
                    <div class="form-group mt-3">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <?php
                            $no = 1;
                            ?>
                            <tbody>
                                @foreach ($u as $item)
                                <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $item->size }}</td>
                                        <td>
                                            <a href="{{ url('hapus.size', $item->id_size) }}" class="btn"><i class="fa fa-trash"
                                                    style="color: red;"></i></a>
                                            <a class="btn" data-toggle="modal" data-target="#edit-{{ $item->id }}"><i
                                                    class="fa fa-edit"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                            </tbody>
                            
                        </table>
                    </div>

                </div>
            </div>


        </div>
    </div>
@endsection
@section('script')
<script>
    const size = document.querySelector('#size');
</script>
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
