<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContohController extends Controller
{
    public function latihan() {
        return 'Ini Contoh Latihan Controller';
    }


public function latihan2(){
        $a = 'ilham' ;
        $b = 'Ahmad' ;
        return 'Nama saya Adalah '.$a.' '.$b;
    }

    //pasing data from contoller to view
public function latihan3() {
        $a = "Aceng Basreng";

        return view('test', compact('a'));
    }
public function latihan4() {
        $a = "Dadang Goreng";
        return view('test2' , ['nama' => $a]);
    }
public function menu($a) {
        return view('menu',compact('a'));
    }

public function menu2($a = null,$b = null,$c = null)
        {
        if(isset($a)) 
        {
            $a = 'anda memesan ' .$a;
        }
        if(isset($b)) 
        {
            $b = ' & ' .$b;
        }

        if(isset($c)){
        if ($c >= 25000) {
            $c = ',Jumbo';
        }
        else if ($c < 25000  && $c > 15000 ) {
           $c = ',Medium';
        }
        else if ($c <= 15000  && $c > 0) {
            $c = ',Small';
        }
        else 
            $c = 'Harga tidak valid';
        }

        if(!isset($a)) 
        {
            $a = 'anda Belum memesan sesuatu';
         }
        return view('menu2', compact('a','b','c'));
    }
}
