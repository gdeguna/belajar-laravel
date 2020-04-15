<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index(){
    	$nama = "Guna Dharma";
    	$pelajaran = ["Algoritma & Pemrograman","Jaringan","Pemrograman Web"];


    	return view('guruku',['nama' => $nama, 'matkul' => $pelajaran]);

    }
}
