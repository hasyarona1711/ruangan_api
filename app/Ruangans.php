<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruangans extends Model
{
    protected $fillable = ['id','nama_ruangan','lokasi_ruangan','kapasitas_ruangan'];
}
