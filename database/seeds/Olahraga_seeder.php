<?php

use App\Olahraga;
use Illuminate\Database\Seeder;

class Olahraga_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $olahraga = new Olahraga;
        $olahraga->nama = 'Asep Karbiet';
        $olahraga->save();
        //
    }
}
