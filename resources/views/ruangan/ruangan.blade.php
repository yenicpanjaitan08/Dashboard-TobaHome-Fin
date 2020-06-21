@extends('layouts.master')
 @section('content')
 <!-- Content Header (Page header) -->
 <section class="content-header">
     <div class="container-fluid">
         <div class="row mb-2">
             <div class="col-sm-6">
                 <h1>Ruangan</h1>
             </div>
             <div class="col-sm-6">
                 <ol class="breadcrumb float-sm-right">
                     <li class="breadcrumb-item"><a href="#">Home</a></li>
                     <li class="breadcrumb-item active">Daftar Ruangan</li>
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
             <h3 class="card-title">Daftar Informasi Ruangan TobaHome</h3>

             <div class="card-tools">
                 <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                     <i class="fas fa-minus"></i></button>
                 <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                     <i class="fas fa-times"></i></button>
             </div>
         </div>
         <div class="card-body">
         <a href="{{ route ('ruangan.create') }}" class="btn btn-info">Tambah Info Ruangan</a>
             <br><br>
             <table class="table table-striped table-hover table-bordered table-sm">
                 <thead>
                     <tr>
                         <th scope="col">ID</th>
                         <th scope="col">Tipe Ruangan</th>
                         <th scope="col">Kapasitas</th>
                         <th scope="col">Ukuran</th>
                         <th scope="col">Tipe Bed</th>
                         <th scope="col">Harga</th>
                         <th scope="col">Action</th>
                     </tr>
                 </thead>
                 <tbody>
                     @foreach ($ruangan as $result =>$hasil)
                     <tr>
                         <th>{{$result + $ruangan->firstitem()}}</th>
                         <th>{{$hasil->tipe_room}}</th>
                         <th>{{$hasil->kapasitas}}</th>
                         <th>{{$hasil->ukuran}}</th>
                         <th>{{$hasil->tipe_bed}}</th>
                         <th>{{$hasil->harga}}</th>
                         <th>
                             <form action="{{route('ruangan.destroy', $hasil->id)}}" method="POST">
                                 @csrf
                                 @method('delete')
                                 <a href="{{route('ruangan.edit', $hasil->id) }}" type="submit" class="btn btn-info">Edit</a>
                                 <button href="" type="submit" class="btn btn-danger">Delete</button>

                             </form>
                         </th>

                     </tr>
                     @endforeach
                 </tbody>
             </table>
             {{$ruangan->links()}}
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
