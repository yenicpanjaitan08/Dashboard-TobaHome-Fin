<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    //protected $table = 'ruangan';
    protected $fillable = ['id','tipe_room','kapasitas','ukuran','tipe_bed','harga'];
}
