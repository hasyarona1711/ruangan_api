<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peminjamans extends Model
{
    protacted $fillable = ['id','nim_mahasiswa','keterangan','tanggal_peminjaman','tanggal_selesai','ruangan_id'];
}
	