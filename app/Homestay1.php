<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Homestay1 extends Model
{
    protected $fillable = ['id', 'nama_homestay', 'status', 'gambar', 'deskripsi_homestay'];
}
