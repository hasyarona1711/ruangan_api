<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ruangans;

class RuanganController extends Controller
{
    public function index()
    {
    	$Ruangan = Ruangans::all();
    	return response()->json([
    		'data' => $Ruangan
    	]);
    }

    public function search($namaruangan)
    {
    	$Ruangan = Ruangans::where('nama_ruangan','like',"%{$namaruangan}%")->get();
    	return response()->json([
    		'Ruangan' => $Ruangan
    	]);
    }
}
