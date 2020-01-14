<?php

namespace App\Http\Controllers;

use App\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        $buku =Buku::all();
        return $buku;
    }
    public function show()
    {
        $buku = Buku::find('judul');
        return $buku;
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


    public function update($id)
    {
        $buku = Buku::find($id);
        $buku->judul = "Buku Update";
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
