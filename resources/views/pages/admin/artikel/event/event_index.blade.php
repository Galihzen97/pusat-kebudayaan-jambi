@extends('layouts.admin')
@push('addon-style')
    <link rel="stylesheet" href="/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
@endpush
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{ $title }}</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">{{ $title }}</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <a  href="javascript:history.back();" class="btn btn-warning btn-sm border-radius">
                                    <i class="fa fa-arrow-left"></i>&nbsp; Kembali
                                </a>
                                <a href="{{ route('programKegiatanAdd') }}" class="btn btn-sm btn-primary"><i class=" fa fa-plus"></i> Tambah</a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="dataTable" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Judul</th>
                                            <th>Gambar</th>
                                            <th>Penulis</th>
                                            <th>Tgl. diupload</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
    </div>
@endsection
@push('addon-script')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
    <script>
        $(function() {
            var table = $('#dataTable').DataTable({
                processing: true,
                serverSide: true,
                ordering: true,
                ajax : {
                    url : '{!! url()->current() !!}', 
                },    
                    columns : [
                    {
                        width: '3%',
                        render: function (data, type, row, meta) {
                            var firstNumber = meta.settings._iDisplayStart + 1;
                            var adjustedNumber = firstNumber + meta.row;
                            return adjustedNumber;
                        }
                    },
                    { data: 'judul'},
                    { data: 'gambar',width: '5%',
                        render: function(data, type, full, meta) {
                            if (type === 'display') {
                                return '<img style="width:80px; height:50px; object-fit:cover;" src="http://127.0.0.1:8000/' + data + '" >';
                            }
                            return data;
                        }
                    },
                    { data: 'penulis'},
                    { data: 'created_at',
                        render: function(data, type, row) {
                        var created_at = data ? new Date(data) : null;
                        var date = created_at ? created_at.getDate() + ' ' + getBulan(created_at.getMonth()) + ' ' + created_at.getFullYear() : '';
                        return date ;
                    }},
                    {
                        data: 'status',
                        render: function (data, type, row) {
                            var statusBerita = '';
                            switch (data) {
                                case 'ajukan':
                                    statusBerita = 'Sedang Diajukan';
                                    break;
                                case 'aktif':
                                    statusBerita = 'Aktif';
                                    break;
                                case 'tidak_aktif':
                                    statusBerita = 'Tidak Aktif';
                                    break;
                            }
                            return statusBerita;
                        }
                    },
                    { 
                        data: 'id', 
                        orderrable: false, 
                        scarcable: false, 
                        width: '15%',
                        render: function(data, type, row) {
                            var judul = row.judul;
                            var btnAksi = '';
                           
                            btnAksi += `<a href="{{ route('programKegiatanEdit', '') }}/${data}" data-placement="top" data-toggle="tooltip"
                            class="btn btn-primary btn-sm mr-2"
                            data-id="${data}" title="Edit">
                            <i class="fa fa-edit"></i>
                            </a>`;
                           
                            btnAksi += `<a href="javascript:void(0)" data-placement="top" data-toggle="tooltip"
                            class="btn btn-danger btn-sm deleteBtn m3px"
                            data-id="${data}" data-judul="${judul}" title="Hapus">
                            <i class="fa fa-trash"></i>
                            </a>`;
                           
                            return btnAksi;
                        }
                    },
                    ]
            });
            /* Hapus */
            $('body').on('click', '.deleteBtn', function () {
                var id = $(this).data("id");
                var judul = $(this).data("judul");
                Swal.fire({
                    title: 'Apakah Anda Yakin?',
                    html: 'Menghapus Artikel <br><br><strong>' + judul + '?</strong>',
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonText: 'Hapus',
                    cancelButtonText: 'Batal',
                    reverseButtons: true
                }).then((result) => {
                    if (result.isConfirmed) {
                        var csrf_token = $('meta[name="csrf-token"]').attr('content'); 
                        $.ajax({
                            type: "POST",
                            url: "{{ route('programKegiatanHapus', '') }}/" + id,
                            data: {
                                _token: csrf_token 
                            },
                            dataType: "json",
                            success: function (response) {
                                table.draw();
                                if (response.status == 1) {
                                    Swal.fire({
                                        title: 'Deleted!',
                                        text: response.message,
                                        icon: 'success',
                                        timer: 1500,
                                        timerProgressBar: true,
                                        showConfirmButton: false 
                                    });
                                } else {
                                    Swal.fire('Error!', response.message, 'error');
                                }
                            },
                            error: function (xhr, status, error) {
                                console.log('Error:', error);
                            }
                        });
                    }
                });
            });
        });
    </script>
@endpush
