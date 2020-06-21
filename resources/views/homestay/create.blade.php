@extends('layouts.master')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Homestay</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Input Info Homestay</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Form Input Informasi Homestay TobaHome</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
            </div>
        </div>
        <div class="card-body">
            @if(count($errors)>0)
            @foreach($errors->all() as $errors)
            <div class="alert alert-danger" role="alert">
                {{$errors}}
            </div>
            @endforeach
            @endif

            @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{Session ('success')}}
            </div>
            @endif
            <form action="{{route('homestay.store')}}" enctype="multipart/form-data" method="POST">
                @csrf

                <div class="form-group col-md-8">
                    <label for="inputid">ID</label>
                    <input type="text" class="form-control" name="id">
                </div>

                <div class="form-group col-md-8">
                    <label for="inputnamahomestay">Nama Homestay</label>
                    <input type="text" class="form-control" name="nama_homestay">
                </div>

                <div class="form-group col-md-8">
                    <label for="inputstatus">Status Homestay</label>
                    <select name="status" class="form-control">
                        <option value="" holder>Pilih Status</option>
                        <option>Tersedia</option>
                        <option>Tidak Tersedia</option>
                    </select>
                </div>

                <div class="form-group col-md-8">
                    <label for="inputgambar">Gambar</label>
                    <input type="file" class="form-control" name="gambar">
                </div>

                <div class="form-group col-md-8">
                    <label for="inputdeskripsihomestay">Deskripsi Homestay</label>
                    <textarea  class="form-control" name="deskripsi_homestay" rows="5"></textarea>
                </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-info col-md-8">Tambahkan Informasi Homestay</button>
        </div>
        </form>

    </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        Informasi Homestay
    </div>
    <!-- /.card-footer-->


</section>
<!-- /.content -->
@endsection