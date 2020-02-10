<?php

namespace App\Http\Controllers;

use App\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    //
    public function index()
    {
        $siswa = Siswa::all();
        return $siswa;
    }
    public function show($id)
    {
        $siswa = Siswa::find($id);
        return $siswa;
    }
       public function hitungsiswa(){
        $siswa = Siswa::count();
        return $siswa;
    }
    public function buatdata($nama,$nis,$tgl){
        $siswa = new Siswa();
        $siswa->nama = $nama;
        $siswa->nis = $nis;
        $siswa->kelas = "wkwkk";
        $siswa->jurusan = "opoppopp";
        $siswa->alamat = "opoppopp";
        $siswa->tgl_lahir = $tgl;
        $siswa->save();
        return $siswa;
    }


    public function update($id,$nama,$nis)
    {
        $siswa = Siswa::find($id);
        $siswa->nama = $nama;
        $siswa->nis = 1000;
        $siswa->kelas = "wkwkk";
        $siswa->jurusan = "opoppopp";
        $siswa->alamat = "opoppopp";
        $siswa->tgl_lahir = "";
        $siswa->save();
        return $siswa;
    }
    public function delete($id)
    {
        $siswa = Siswa::find($id);
        $siswa->delete();
        return $siswa;
    }
}
