<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function ofil() {
        $a = "Ilham Ahmad";
        $b = 'Islam';
        $c = 'Laki - laki';
        $d = 'CB.Duyut';
        $e = 'SMK ASSALAAM';
        $f = 'XI RPL 3';
        $g = 'Rekayasa Perangkat Lunak';
        $h = 'Main Game aNd sleeP';
        $i = '17 tahun';

        return view('biodata', ['nama' => $a,'agama'=>$b,'jk'=>$c
                            ,'alamat'=>$d,'sekolah'=>$e,'kelas'=>$f
                            ,'jurusan'=>$g,'hobi'=>$h,'umur'=>$i]);
    }
}

