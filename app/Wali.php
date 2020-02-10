<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wali extends Model
{

    protected $filelabe = array('nama', 'id_mahasiswa');
    public $timestams = true;


    public function mahasiswa() {
        return $this->belongsTo('Mahasiswa','id_mahasiswa');
    }
}
