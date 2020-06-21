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
                    <li class="breadcrumb-item active">Edit Info Ruangan</li>
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
            <h3 class="card-title">Form Edit Ruangan TobaHome</h3>

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
            <form action="{{route('ruangan.update', $ruangan->id) }}" method="POST">
                @csrf
                @method('patch')
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="inputid">ID</label>
                        <input type="text" class="form-control" name="id" value="{{$ruangan->id}}">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputtiperoom">Tipe Ruangan</label>
                        <input type="text" class="form-control" name="tipe_room" value="{{$ruangan->tipe_room}}">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="inputkapasitas">Kapasitas</label>
                        <input type="text" class="form-control" name="kapasitas" value="{{$ruangan->kapasitas}}">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputukuran">Ukuran</label>
                        <select name="ukuran" class="form-control">
                            <option value="" holder>Pilih Ukuran</option>
                            <option>16 Square Feet</option>
                            <option>17 Square Feet</option>
                            <option>18 Square Feet</option>
                            <option>19 Square Feet</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="inputtipebed">Tipe Bed</label>
                        <select name="tipe_bed" class="form-control">
                        <option value="" holder>Pilih Tipe Bed</option>
                            <option>Single Bed</option>
                            <option>Double Bed</option>
                            <option>Extra Bed</option>
                            <option>Baby Cot/Crib</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputharga">Harga</label>
                        <input type="text" class="form-control" name="harga" value="{{$ruangan->harga}}">
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-info col-md-8">Tambahkan Perubahan Informasi Ruangan</button>
                </div>
            </form>
 
        </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        Informasi Ruangan
    </div>
    <!-- /.card-footer-->
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->
@endsection