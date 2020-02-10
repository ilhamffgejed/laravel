<?php

namespace App\Http\Controllers;

use App\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        $buku = Buku::all();
        return view('buku.index',compact('buku'));
    }
    public function show($id)
    {
        $buku = Buku::find($id);
        return view('buku.show',compact('buku'));
    }
       public function hitungbuku(){
        $buku = Buku::count();
        return $buku;
    }
    public function buatdata(){
        $buku = new Buku();
        $buku->judul = "OKOKOO";
        $buku->jumlah_halaman = 1000;
        $buku->penerbit = "wkwkk";
        $buku->synopsis = "opoppopp";
        $buku->status = 1;
        $buku->save();
        return $buku;
    }


    public function update($id,$judul)
    {
        $buku = Buku::find($id);
        $buku->judul = $judul;
        $buku->jumlah_halaman = 10000;
        $buku->penerbit = "wkwkk";
        $buku->synopsis = "opoppopp";
        $buku->status = 0;
        $buku->save();
        return $buku;
    }
    public function delete($id)
    {
        $buku = Buku::find($id);
        $buku->delete();
        return $buku;
    }
}
