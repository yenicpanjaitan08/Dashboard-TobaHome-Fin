@extends('layouts.master')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Pemesanan</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="./dashboard1">Home</a></li>
                    <li class="breadcrumb-item">Edit Info Pemesanan</li>
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
            <h3 class="card-title">Form Edit Pemesanan TobaHome</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
                    <i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip"
                    title="Remove">
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
            <form action="{{route('order.update', $homestay->id) }}" method="POST">
                @csrf
                @method('patch')
                <div class="form-row">

                    <div class="form-group col-md-4">
                        <label for="inputid">ID</label>
                        <input type="text" class="form-control" name="id" value="{{$order->id}}">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputnama">Nama</label>
                        <input type="text" class="form-control" name="nama" value="{{$order->nama}}">
                    </div>


                </div>
                <div class="form-row">

                    <div class="form-group col-md-4">
                        <label for="inputnotel">Nomor Telepon</label>
                        <input type="text" class="form-control" name="notel" value="{{$order->notel}}">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputnamahomestay">Nama Homestay</label>
                        <input type="text" class="form-control" name="nama_homestay" value="{{$order->nama_homestay}}">
                    </div>

                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-info col-md-8">Tambahkan Perubahan Informasi Pemesanan</button>
                </div>
            </form>

        </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        Informasi Pemesanan
    </div>
    <!-- /.card-footer-->
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->
@endsection