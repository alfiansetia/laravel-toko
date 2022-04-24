@extends('backend.layouts.template')

@push('css')

<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('backend/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
<!-- Select2 -->
<link rel="stylesheet" href="{{ asset('backend/plugins/select2/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('backend/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
@endpush

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>{{ $title }}</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">{{ $title }}</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><i class="fas fa-cubes mr-1" data-toggle="tooltip" title="{{ $title }}"></i>{{ $title }}</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="" id="delete">
                    <table id="tableData" class="table table-sm table-hover table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center checkbox-column dt-no-sorting"><input type="checkbox" class="text-center new-control-input chk-parent select-customers-info" data-toggle="tooltip" title="Select All Data"></th>
                                <th>Nama</th>
                                <th>Kategori</th>
                                <th>Harga</th>
                                <th>Foto</th>
                                <th>Ket</th>
                                <th class="text-center">Tampil</th>
                                <th class="text-center">Favorit</th>
                                <th class="text-center dt-no-sorting">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </form>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->
    </div>
</section>
<!-- /.content -->

<div class="modal animated fade fadeInDown" id="modalAdd" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"><i class="fas fa-plus mr-1" data-toggle="tooltip" title="Add Data"></i>Add Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" data-toggle="tooltip" title="Close">&times;</span>
                </button>
            </div>
            <form id="form" action="" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="container">
                        <div class="form-group row">
                            <label for="nama" class="col-sm-3 col-form-label"><i class="fas fa-cubes mr-1" data-toggle="tooltip" title="Nama Produk"></i>Nama Produk :</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama" minlength="2" maxlength="50" required>
                                <span id="err_nama" class="error invalid-feedback" style="display: hide;"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="merk" class="col-sm-3 col-form-label"><i class="fas fa-tags mr-1" data-toggle="tooltip" title="Merk Produk"></i>Merk Produk :</label>
                            <div class="col-sm-9">
                                <input type="text" name="merk" class="form-control" id="merk" placeholder="Masukkan Merk" required>
                                <span id="err_merk" class="error invalid-feedback" style="display: hide;"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kategori" class="col-sm-3 col-form-label"><i class="fas fa-cube mr-1" data-toggle="tooltip" title="Pilihan Kategori Produk"></i>Kategori Produk:</label>
                            <div class="col-sm-9">
                                <select name="kategori" id="kategori" class="form-control select2 select2bs4" style="width: 100%;" required>
                                    <option value="">Pilih Kategori</option>
                                </select>
                                <span id="err_kategori" class="error invalid-feedback" style="display: hide;"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="diskon" class="col-sm-3 col-form-label"><i class="fas fa-percent mr-1" data-toggle="tooltip" title="Diskon"></i>Diskon :</label>
                            <div class="col-sm-9">
                                <input type="number" name="diskon" class="form-control" id="diskon" placeholder="Masukkan Diskon" required value="0">
                                <span id="err_diskon" class="error invalid-feedback" style="display: hide;"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="harga_beli" class="col-sm-3 col-form-label"><i class="fas fa-money-bill-wave mr-1" data-toggle="tooltip" title="Harga Beli"></i>Harga Beli :</label>
                            <div class="col-sm-9">
                                <input type="number" name="harga_beli" class="form-control" id="harga_beli" placeholder="Masukkan Harga Beli" required value="0">
                                <span id="err_harga_beli" class="error invalid-feedback" style="display: hide;"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="harga_jual" class="col-sm-3 col-form-label"><i class="fas fa-money-bill mr-1" data-toggle="tooltip" title="Harga Jual"></i>Harga Jual :</label>
                            <div class="col-sm-9">
                                <input type="number" name="harga_jual" class="form-control" id="harga_jual" placeholder="Masukkan Harga Jual" required value="0">
                                <span id="err_harga_jual" class="error invalid-feedback" style="display: hide;"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="stok" class="col-sm-3 col-form-label"><i class="fas fa-layer-group mr-1" data-toggle="tooltip" title="Stok"></i>Stok :</label>
                            <div class="col-sm-9">
                                <input type="number" name="stok" class="form-control" id="stok" placeholder="Masukkan stok" required value="0">
                                <span id="err_stok" class="error invalid-feedback" style="display: hide;"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="keterangan" class="col-sm-3 col-form-label"><i class="fas fa-clipboard mr-1" data-toggle="tooltip" title="Keterangan"></i>Keterangan</label>
                            <div class="col-sm-9">
                                <textarea name="keterangan" id="keterangan" class="form-control" placeholder="Masukkan Keterangan"></textarea>
                                <span id="err_keterangan" class="error invalid-feedback" style="display: hide;"></span>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <!-- <button type="button" class="btn btn-lg btn-primary" id="trig">TRIGGER</button> -->
                            <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times mr-1" data-toggle="tooltip" title="Close"></i>Close</button>
                            <button type="reset" id="reset" class="btn btn-warning"><i class="fas fa-undo mr-1" data-toggle="tooltip" title="Reset"></i>Reset</button>
                            <button type="submit" class="btn btn-primary"><i class="fas fa-paper-plane mr-1" data-toggle="tooltip" title="Save"></i>Save</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal animated fade fadeInDown" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="titleEdit"><i class="fas fa-edit mr-1" data-toggle="tooltip" title="Edit Data"></i>Edit Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" data-toggle="tooltip" title="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="formEdit" action="" method="POST" enctype="multipart/form-data">
                {{ method_field('PUT') }}
                <div class="modal-body">
                    <div class="container">
                        <div class="form-group row">
                            <label for="edit_nama" class="col-sm-3 col-form-label"><i class="fas fa-cubes mr-1" data-toggle="tooltip" title="Nama Produk"></i>Nama Produk :</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" class="form-control" id="edit_nama" placeholder="Masukkan Nama" minlength="2" maxlength="50" required>
                                <span id="err_edit_nama" class="error invalid-feedback" style="display: hide;"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="edit_merk" class="col-sm-3 col-form-label"><i class="fas fa-tags mr-1" data-toggle="tooltip" title="Merk Produk"></i>Merk Produk :</label>
                            <div class="col-sm-9">
                                <input type="text" name="merk" class="form-control" id="edit_merk" placeholder="Masukkan Merk" required>
                                <span id="err_edit_merk" class="error invalid-feedback" style="display: hide;"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="edit_kategori" class="col-sm-3 col-form-label"><i class="fas fa-cube mr-1" data-toggle="tooltip" title="Pilihan Kategori Produk"></i>Kategori Produk:</label>
                            <div class="col-sm-9">
                                <select name="kategori" id="edit_kategori" class="form-control select2 select2bs4" style="width: 100%;" required>
                                    <option value="">Pilih Kategori</option>
                                </select>
                                <span id="err_edit_kategori" class="error invalid-feedback" style="display: hide;"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="edit_diskon" class="col-sm-3 col-form-label"><i class="fas fa-percent mr-1" data-toggle="tooltip" title="Diskon"></i>Diskon :</label>
                            <div class="col-sm-9">
                                <input type="number" name="diskon" class="form-control" id="edit_diskon" placeholder="Masukkan Diskon" required value="0">
                                <span id="err_edit_diskon" class="error invalid-feedback" style="display: hide;"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="edit_harga_beli" class="col-sm-3 col-form-label"><i class="fas fa-money-bill-wave mr-1" data-toggle="tooltip" title="Harga Beli"></i>Harga Beli :</label>
                            <div class="col-sm-9">
                                <input type="number" name="harga_beli" class="form-control" id="edit_harga_beli" placeholder="Masukkan Harga Beli" required value="0">
                                <span id="err_edit_harga_beli" class="error invalid-feedback" style="display: hide;"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="edit_harga_jual" class="col-sm-3 col-form-label"><i class="fas fa-money-bill mr-1" data-toggle="tooltip" title="Harga Jual"></i>Harga Jual :</label>
                            <div class="col-sm-9">
                                <input type="number" name="harga_jual" class="form-control" id="edit_harga_jual" placeholder="Masukkan Harga Jual" required value="0">
                                <span id="err_edit_harga_jual" class="error invalid-feedback" style="display: hide;"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="edit_stok" class="col-sm-3 col-form-label"><i class="fas fa-layer-group mr-1" data-toggle="tooltip" title="Stok"></i>Stok :</label>
                            <div class="col-sm-9">
                                <input type="number" name="stok" class="form-control" id="edit_stok" placeholder="Masukkan stok" required value="0">
                                <span id="err_edit_stok" class="error invalid-feedback" style="display: hide;"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="edit_keterangan" class="col-sm-3 col-form-label"><i class="fas fa-clipboard mr-1" data-toggle="tooltip" title="Keterangan"></i>Keterangan</label>
                            <div class="col-sm-9">
                                <textarea name="keterangan" id="edit_keterangan" class="form-control" placeholder="Masukkan Keterangan"></textarea>
                                <span id="err_edit_keterangan" class="error invalid-feedback" style="display: hide;"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-lg btn-primary" id="trig">TRIGGER</button> -->
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times mr-1" data-toggle="tooltip" title="Close"></i>Close</button>
                    <button type="button" id="edit_reset" class="btn btn-warning"><i class="fas fa-undo mr-1" data-toggle="tooltip" title="Reset"></i>Reset</button>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-paper-plane mr-1" data-toggle="tooltip" title="Save"></i>Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal animated fade fadeInDown" id="modalFoto" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Foto Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" data-toggle="tooltip" title="Close">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container" id="containerFoto">


                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('js')


<!-- DataTables  & Plugins -->
<script src="{{ asset('backend/plugins/custom.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<!-- bs-custom-file-input -->
<script src="{{ asset('backend/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
<!-- Select2 -->
<script src="{{ asset('backend/plugins/select2/js/select2.full.min.js') }}"></script>
<!-- jquery-validation -->
<script src="{{ asset('backend/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
<script src="{{ asset('backend/plugins/jquery-validation/additional-methods.min.js') }}"></script>

<script>
    $(document).ready(function() {
        bsCustomFileInput.init();

        $('.select2').select2()

        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })

        $("#kategori").select2({
            theme: 'bootstrap4',
            ajax: {
                delay: 1000,
                url: "{{ route('catprod.index') }}",
                processResults: function(data) {
                    return {
                        results: $.map(data.data, function(item) {
                            return {
                                text: item.nama_kat,
                                id: item.id
                            }
                        })
                    };
                },
            }
        });


        var table = $('#tableData').DataTable({
            processing: true,
            serverSide: true,
            rowId: 'id',
            ajax: "{{ route('products.index') }}",
            lengthChange: false,
            'stateSave': false,
            "oLanguage": {
                "oPaginate": {
                    "sPrevious": '<i class="fas fa-arrow-alt-circle-left"></i>',
                    "sNext": '<i class="fas fa-arrow-alt-circle-right"></i>'
                },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<i class="fas fa-search"></i>',
                "sSearchPlaceholder": "Search...",
                "sLengthMenu": "Results :  _MENU_",
            },
            "lengthMenu": [
                [10, 50, 100, 1000],
                ['10 rows', '50 rows', '100 rows', '1000 rows']
            ],
            "pageLength": 10,
            "dom": "<'dt--top-section'<'row'<'col-sm-12 col-md-6 d-flex justify-content-md-start justify-content-center'B><'col-sm-12 col-md-6 d-flex justify-content-md-end justify-content-center mt-md-0 mt-3'f>>>" +
                "<'table-responsive'tr>" +
                "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
            autoWidth: false,
            columnDefs: [{
                    "className": "text-center",
                    "targets": [0, 3, 4, 6, 7, 8]
                },
                {
                    targets: 0,
                    width: "30px",
                    className: "text-center dt-no-sorting",
                    orderable: !1,
                }, {
                    targets: 8,
                    className: "text-center dt-no-sorting",
                    orderable: !1,
                }
            ],
            'select': {
                'style': 'multi'
            },
            columns: [{
                    data: 'id',
                    render: function(data, type, row, meta) {
                        return `<input type="checkbox" name="id[]" value="${data}" class="new-control-input child-chk select-customers-info">`
                    }
                },
                {
                    data: 'name',
                    title: "Nama",
                },
                {
                    data: 'catprod.name',
                    title: "Kategori",
                },
                {
                    data: 'price',
                    title: 'Harga'
                },
                {
                    data: 'id',
                    title: 'Foto',
                    render: function(data, type, row, meta) {
                        let text = `<button type="button" value="${data}"  id="btnFoto" class="btn btn-xs bg-gradient-info" data-toggle="tooltip" title="Lihat Foto">Lihat</button>`;
                        return text
                    }
                },
                {
                    data: 'desc',
                    title: 'Ket'
                },
                {
                    data: 'show',
                    title: 'Tampil',
                    render: function(data, type, row, meta) {
                        let text
                        if (data == 1) {
                            text = `<span class="badge badge-success">tampil</span>`;
                        } else {
                            text = `<span class="badge badge-danger">sembunyi</span>`;
                        }
                        return text
                    }
                },
                {
                    data: 'is_fav',
                    title: 'Favorit',
                    render: function(data, type, row, meta) {
                        let text
                        if (data == 1) {
                            text = `<span class="badge badge-success">fav</span>`;
                        } else {
                            text = `<span class="badge badge-danger">not fav</span>`;
                        }
                        return text
                    }
                },
                {
                    title: 'Action',
                    "data": 'id',
                    render: function(data, type, row, meta) {
                        let text = `<button type="button" id="btnEdit" data-id="${data}" class="btn btn-xs bg-gradient-warning"><i class="fas fa-pencil-alt text-white" data-toggle="tooltip" data-placement="top" title="Edit"></i></button>`;
                        return text;
                    }
                }
            ],
            buttons: [, {
                text: '<i class="fa fa-plus mr-1"></i>Add',
                className: 'btn btn-sm btn-primary bs-tooltip',
                attr: {
                    'data-toggle': 'tooltip',
                    'title': 'Add Data'
                },
                action: function(e, dt, node, config) {
                    $('#modalAdd').modal('show');
                }
            }, {
                text: '<i class="fas fa-trash mr-1"></i>Del',
                className: 'btn btn-sm btn-danger',
                attr: {
                    'data-toggle': 'tooltip',
                    'title': 'Delete Selected Data'
                },
                action: function(e, dt, node, config) {
                    Swal.fire({
                        title: 'Delete Selected Data?',
                        text: "You won't be able to revert this!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: '<i class="fa fa-thumbs-up"></i> Yes!',
                        confirmButtonAriaLabel: 'Thumbs up, Yes!',
                        cancelButtonText: '<i class="fa fa-thumbs-down"></i> No',
                        cancelButtonAriaLabel: 'Thumbs down',
                        padding: '2em',
                    }).then(function(result) {
                        if (result.value) {
                            var id = $('input[name="id[]"]:checked').length;
                            if (id <= 0) {
                                Swal.fire({
                                    title: 'Failed!',
                                    text: "No Selected Data!",
                                    icon: 'error',
                                })
                            } else {
                                $("#delete").submit();
                            }
                        }
                    })
                }
            }, {
                extend: "pageLength",
                attr: {
                    'data-toggle': 'tooltip',
                    'title': 'Page Length'
                },
                className: 'btn btn-sm btn-info'
            }],
            "stripeClasses": [],
            initComplete: function() {
                $('#tableData').DataTable().buttons().container().appendTo('#tableData_wrapper .col-md-6:eq(0)');
            }
        });

        multiCheck(table);

        var id;

        $('body').on('click', '#btnFoto', function() {
            let id = $(this).val();
            let url = "{{ route('products.edit', ':id') }}"
            url = url.replace(':id', id);
            $.get(url).done(function(res) {
                let img = `<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">`;
                img += `            <div class="carousel-item active">
                                    <img class="d-block w-100" src="{{ asset('img/product') }}/${res.data.img}" alt="First slide">
                                </div>`;
                for (let i = 0; i < res.data.fotoprod.length; i++) {
                    img += `            <div class="carousel-item">
                                    <img class="d-block w-100" src="{{ asset('img/fotoprod') }}/${res.data.fotoprod[i].name}" alt="Next slide">
                                </div>`;
                }
                img += `        </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                            </div>`;
                $('#containerFoto').html(img);
                $('#modalFoto').modal('show');
            }).fail(function() {
                Swal.fire(
                    'error',
                    'Server error',
                    'error'
                )
            })
        })

        $('#edit_reset').click(function() {
            id = $(this).val();
            $('#formEdit .error.invalid-feedback').each(function(i) {
                $(this).hide();
            });
            $('#formEdit input.is-invalid').each(function(i) {
                $(this).removeClass('is-invalid');
            });
            let url = "{{ route('products.edit', ':id') }}";
            url = url.replace(':id', id);
            $.ajax({
                url: url,
                method: 'GET',
                success: function(result) {
                    console.log(result)
                    $('#edit_reset').val(result.data.id);
                    $('#edit_nama').val(result.data.nama_prod);
                    $('#edit_merk').val(result.data.merk_prod);
                    $('#edit_harga_beli').val(result.data.harga_beli);
                    $('#edit_harga_jual').val(result.data.harga_jual);
                    $('#edit_diskon').val(result.data.diskon);
                    $('#edit_stok').val(result.data.stok);
                    $('#edit_keterangan').val(result.data.ket);
                    var option = new Option(result.data.kategori.nama_kat, result.data.kategori_id, true, true);
                    $('#edit_kategori').append(option).trigger('change');
                },
                error: function(xhr, status, error) {
                    er = xhr.responseJSON.errors
                    Swal.fire(
                        'Failed!',
                        'Server Error',
                        'error'
                    )
                }
            });
            $('#modalEdit').modal('show');
        })

        $('body').on('click', '#btnEdit', function() {
            $('#formEdit .error.invalid-feedback').each(function(i) {
                $(this).hide();
            });
            $('#formEdit input.is-invalid').each(function(i) {
                $(this).removeClass('is-invalid');
            });
            id = $(this).data('id');
            let url = "{{ route('products.edit', ':id') }}";
            url = url.replace(':id', id);
            $.ajax({
                url: url,
                method: 'GET',
                success: function(result) {
                    console.log(result)
                    $('#edit_reset').val(result.data.id);
                    $('#edit_nama').val(result.data.nama_prod);
                    $('#edit_merk').val(result.data.merk_prod);
                    $('#edit_harga_beli').val(result.data.harga_beli);
                    $('#edit_harga_jual').val(result.data.harga_jual);
                    $('#edit_diskon').val(result.data.diskon);
                    $('#edit_stok').val(result.data.stok);
                    $('#edit_keterangan').val(result.data.ket);
                    var option = new Option(result.data.kategori.nama_kat, result.data.kategori_id, true, true);
                    $('#edit_kategori').append(option).trigger('change');
                },
                error: function(xhr, status, error) {
                    er = xhr.responseJSON.errors
                    Swal.fire(
                        'Failed!',
                        'Server Error',
                        'error'
                    )
                }
            });
            $('#modalEdit').modal('show');

        })

        $('#formEdit').submit(function(event) {
            event.preventDefault();
        }).validate({
            errorElement: 'span',
            errorPlacement: function(error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function(element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
                $(element).addClass('is-valid');
            },
            submitHandler: function(form) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    }
                });
                let url = "{{ route('products.update', ':id') }}";
                url = url.replace(':id', id);
                $.ajax({
                    type: 'POST',
                    url: url,
                    data: $(form).serialize(),
                    beforeSend: function() {
                        $('button[type="submit"]').prop('disabled', true);
                        console.log('loading bro');
                        $('#formEdit .error.invalid-feedback').each(function(i) {
                            $(this).hide();
                        });
                        $('#formEdit input.is-invalid').each(function(i) {
                            $(this).removeClass('is-invalid');
                        });
                    },
                    success: function(res) {
                        table.ajax.reload();
                        $('button[type="submit"]').prop('disabled', false);
                        $('#reset').click();
                        if (res.status == true) {
                            Swal.fire(
                                'Success!',
                                res.message,
                                'success'
                            )
                        } else {
                            Swal.fire(
                                'Failed!',
                                res.message,
                                'error'
                            )
                        }
                    },
                    error: function(xhr, status, error) {
                        $('button[type="submit"]').prop('disabled', false);
                        er = xhr.responseJSON.errors
                        console.log(xhr)
                        erlen = Object.keys(er).length
                        for (i = 0; i < erlen; i++) {
                            obname = Object.keys(er)[i];
                            $('#' + obname).addClass('is-invalid');
                            $('#err_edit_' + obname).text(er[obname][0]);
                            $('#err_edit_' + obname).show();
                        }
                    }
                });
            }
        });;

        $('#reset').click(function() {
            $('#form .error.invalid-feedback').each(function(i) {
                $(this).hide();
            });
            $('#form input.is-invalid').each(function(i) {
                $(this).removeClass('is-invalid');
            });
            $('#kategori').val('').change();

        })

        $('#form').submit(function(event) {
            event.preventDefault();
        }).validate({
            errorElement: 'span',
            errorPlacement: function(error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function(element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
                $(element).addClass('is-valid');
            },
            submitHandler: function(form) {
                var formData = new FormData($(form)[0]);
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: 'POST',
                    url: "{{ route('products.store') }}",
                    mimeType: 'application/json',
                    dataType: 'json',
                    data: formData,
                    contentType: false,
                    processData: false,
                    beforeSend: function() {
                        $('button[type="submit"]').prop('disabled', true);
                        console.log('loading bro');
                        $('#form .error.invalid-feedback').each(function(i) {
                            $(this).hide();
                        });
                        $('#form input.is-invalid').each(function(i) {
                            $(this).removeClass('is-invalid');
                        });
                    },
                    success: function(res) {
                        table.ajax.reload();
                        $('button[type="submit"]').prop('disabled', false);
                        $('#reset').click();
                        if (res.status == true) {
                            Swal.fire(
                                'Success!',
                                res.message,
                                'success'
                            )
                        } else {
                            Swal.fire(
                                'Failed!',
                                res.message,
                                'error'
                            )
                        }
                    },
                    error: function(xhr, status, error) {
                        $('button[type="submit"]').prop('disabled', false);
                        er = xhr.responseJSON.errors
                        erlen = Object.keys(er).length
                        for (i = 0; i < erlen; i++) {
                            obname = Object.keys(er)[i];
                            $('#' + obname).addClass('is-invalid');
                            $('#err_' + obname).text(er[obname][0]);
                            $('#err_' + obname).show();
                        }
                    }
                });
            }
        });

        $('#delete').submit(function(event) {
            var form = this;
            event.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'DELETE',
                url: "{{ route('products.destroy') }}",
                data: $(form).serialize(),
                beforeSend: function() {
                    console.log('otw')
                },
                success: function(res) {
                    table.ajax.reload();
                    if (res.status == true) {
                        Swal.fire(
                            'Deleted!',
                            res.message,
                            'success'
                        )
                    } else {
                        Swal.fire(
                            'Failed!',
                            res.message,
                            'error'
                        )
                    }
                },
                error: function(xhr, status, error) {
                    table.rows('.selected').nodes().to$().removeClass('selected');
                    er = xhr.responseJSON.errors
                    console.log(er);
                    Swal.fire(
                        'Failed!',
                        'Server Error',
                        'error'
                    )
                }
            })

        });

    });
</script>

@endpush