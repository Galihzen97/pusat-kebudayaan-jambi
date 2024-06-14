@extends('layouts.admin')
@push('addon-style')
    <!-- summernote -->
    <link rel="stylesheet" href="/assets/plugins/summernote/summernote-bs4.min.css">
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
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">{{ $title }}</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    
                    <div class="card">
                        <div class="card-header">
                            <a  href="javascript:history.back();" class="btn btn-warning btn-sm border-radius">
                                <i class="fa fa-arrow-left"></i>&nbsp; Kembali
                            </a>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('programKegiatanSubmit') }}" method="POST" enctype="multipart/form-data">
                            <div class="card-body">
                                @csrf
                                <input type="hidden" name="form_id" value="{{ setValueInput('id', !empty($row) ? $row : false) }}" id="form_id">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Judul <span class="text-danger">*</span></label>
                                    <input type="text" name="judul" class="form-control" value="{{ setValueInput('judul', !empty($row) ? $row : false) }}" placeholder="Masukkan Judul" required>
                                </div>
                                @if ($mode == '')
                                <div class="form-group">
                                    <label for="exampleInputFile">Gambar <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="gambar" class="custom-file-input" required> 
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                </div> 
                                @else
                                <div class="form-group">
                                    <label for="exampleInputFile">Gambar</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="gambar" class="custom-file-input" > 
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                </div> 
                                @endif
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tanggal Upload</label>
                                    <input type="date" value="{{ setValueInput('tgl_buat', !empty($row) ? $row : false) }}" name="tgl_buat" class="form-control" placeholder="Masukkan Tanggal">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Penulis <span class="text-danger">*</span></label>
                                    <input type="text" name="penulis" value="{{ setValueInput('penulis', !empty($row) ? $row : false) }}" class="form-control" placeholder="Masukkan penulis" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Status <span class="text-danger">*</span></label>
                                    <select name="status" class="form-control select2" style="width: 100%;">
                                        <option value="ajukan" {{ setValueInput('status', !empty($row) ? $row : false) == 'ajukan' ? 'selected' : '' }}>Diajukan</option>
                                        <option value="aktif" {{ setValueInput('status', !empty($row) ? $row : false) == 'aktif' ? 'selected' : '' }}>Aktif</option>
                                        <option value="tidak_aktif" {{ setValueInput('status', !empty($row) ? $row : false) == 'tidak_aktif' ? 'selected' : '' }}>Tidak Aktif</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Konten <span class="text-danger">*</span></label>
                                    <textarea required name="konten" id="summernote">  
                                        {{ setValueInput('konten', !empty($row) ? $row : false) }}
                                    </textarea>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </div>
@endsection
@push('addon-script')
    <script src="/assets/plugins/summernote/summernote-bs4.min.js"></script>
    <script>
        $(function() {
            // Summernote
            $('#summernote').summernote()

            // CodeMirror
            CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
                mode: "htmlmixed",
                theme: "monokai"
            });
        })
    </script>
@endpush
