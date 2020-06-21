@extends('layouts.master')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Fasilitas</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Input Fasilitas</li>
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
            <h3 class="card-title">Form Input Fasilitas TobaHome</h3>

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
            <form action="{{route('fasilitas.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="inputid">ID</label>
                    <input type="text" class="form-control" name="id" placeholder="masukan id fasilitas">
                </div>
                <div class="form-group">
                    <label for="inputnama">Nama Fasilitas</label>
                    <input type="text" class="form-control" name="nama_fasilitas" placeholder="masukan nama fasilitas">
                </div>
                <div class="form-group">
                    <label for="inputketerangan">Keterangan Fasilitas</label>
                    <textarea class="form-control" name="keterangan" rows="4"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-info">Tambahkan Fasilitas Baru</button>
                </div>
            </form>

        </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        Informasi Fasilitas
    </div>
    <!-- /.card-footer-->
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->
@endsection