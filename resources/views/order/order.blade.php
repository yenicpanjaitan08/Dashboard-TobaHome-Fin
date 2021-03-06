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
                     <li class="breadcrumb-item active">Daftar Pemesanan</li>
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
             <h3 class="card-title">Daftar Pemesanan TobaHome</h3>

             <div class="card-tools">
                 <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                     <i class="fas fa-minus"></i></button>
                 <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                     <i class="fas fa-times"></i></button>
             </div>
         </div>
         <div class="card-body">
             <a href="{{ route ('order.create') }}" class="btn btn-info">Tambah Pemesanan</a>
             <br><br>
             <table class="table table-striped table-hover table-bordered table-sm">
                 <thead>
                     <tr>
                         <th scope="col">ID</th>
                         <th scope="col">Nama</th>
                         <th scope="col">Nomor Telepon</th>
                         <th scope="col">Nama Homestay</th>
                         <th scope="col">Action</th>
                     </tr>
                 </thead>
                 <tbody>
                     @foreach ($order as $result =>$hasil)
                     <tr>
                         <th>{{$result + $order->firstitem()}}</th>
                         <th>{{$hasil->nama}}</th>
                         <th>{{$hasil->notel}}</th>
                         <th>{{$hasil->nama_homestay}}</th>

                         <th>
                             <form action="{{route('order.destroy', $hasil->id)}}" method="POST">
                                 @csrf
                                 @method('delete')
                                 <a href="{{route('order.edit', $hasil->id) }}" type="submit" class="btn btn-info">Edit</a>
                                 <button href="" type="submit" class="btn btn-danger">Delete</button>

                             </form>
                         </th>

                     </tr>
                     @endforeach
                 </tbody>
             </table>
             {{$order->links()}}
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