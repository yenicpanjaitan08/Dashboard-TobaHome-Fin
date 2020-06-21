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
                     <li class="breadcrumb-item active">Daftar Homestay</li>
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
             <h3 class="card-title">Daftar Informasi Homestay TobaHome</h3>

             <div class="card-tools">
                 <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                     <i class="fas fa-minus"></i></button>
                 <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                     <i class="fas fa-times"></i></button>
             </div>
         </div>
         <div class="card-body">
         <a href="{{ route ('homestay.create') }}" class="btn btn-info">Tambah Info Homestay</a>
             <br><br>
             <table class="table table-striped table-hover table-bordered table-sm">
                 <thead>
                     <tr>
                         <th scope="col">ID</th>
                         <th scope="col">Nama Homestay</th>
                         <th scope="col">Status</th>
                         <th scope="col">Gambar</th>
                         <th scope="col">Deskripsi Homestay</th>
                         <th scope="col">Action</th>
                     </tr>
                 </thead>
                 <tbody>
                     @foreach ($homestay as $result =>$hasil)
                     <tr>
                         <th>{{$result + $homestay->firstitem()}}</th>
                         <th>{{$hasil->nama_homestay}}</th>
                         <th>{{$hasil->status}}</th>
                         <th><img src= "{{ asset( $hasil-> gambar) }}" class="img-fluid" style=" width:100px" ></th>
                         <th>{{$hasil->deskripsi_homestay}}</th>
                         <th>
                             <form action="{{route('homestay.destroy', $hasil->id)}}" method="POST">
                                 @csrf
                                 @method('delete')
                                 <a href="{{route('homestay.edit', $hasil->id) }}" type="submit" class="btn btn-info">Edit</a>
                                 <button href="" type="submit" class="btn btn-danger">Delete</button>

                             </form>
                         </th>

                     </tr>
                     @endforeach
                 </tbody>
             </table>
             {{$homestay->links()}}
         </div>
     </div>
     <!-- /.card-body -->
     <div class="card-footer">
         Informasi Homestay
     </div>
     <!-- /.card-footer-->
     </div>
     <!-- /.card -->

 </section>
 <!-- /.content -->
 @endsection
