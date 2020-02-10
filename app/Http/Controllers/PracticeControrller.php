<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeControrller extends Controller
{
    public function pass()
    {
        $nama ="Ucup Abdul Mustofa";
        $alamat ="Gang Perjaka";
        return view('latihan', compact('nama','alamat'));
    }
    public function pass1()
    {
        $gaji = 2000000;
        return view('latihan1',['penghasilan'=>$gaji]);
    }

    //pass data parameter
    public function status($status='jomblo')
    {
        return view('latihan2',compact('status'));
    }

    public function loop()
    {
        $buku = [
            ['judul'=>'Bangkit dari remedial','penerbit'=>'erlangga',
            'harga'=>10000,'penulis'=>'aku yang suka remedi'],
            
            ['judul'=>'Tips MOve On','penerbit'=>'erlangga',
            'harga'=>250000,'penulis'=>'Si MOve On'],
            
            ['judul'=>'Kekuatn 1/3 Malam','penerbit'=>'naon maksud',
            'harga'=>190000,'penulis'=>'1/3malam']  
        ];
        return view('latihan33',compact('buku'));
    }
}
