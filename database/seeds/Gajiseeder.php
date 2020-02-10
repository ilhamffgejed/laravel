<?php

use App\Gaji;
use Illuminate\Database\Seeder;

class GajiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gaji = new Gaji();
        $gaji->nip = 1222;
        $gaji->nama = 'ilham ahmad s';
        $gaji->agama = 'Islam';
        $gaji->jenis_kelamin = 'Laki_laki';
        $gaji->alamat = 'SkaBumi';
        $gaji->jabatan = 'Manager';
        $gaji->jam_kerja = '250';
        $gaji->save();

        $gaji = new Gaji();
        $gaji->nip = 123;
        $gaji->nama = 'abdul ahmad s';
        $gaji->agama = 'Islam';
        $gaji->jenis_kelamin = 'Laki_laki';
        $gaji->alamat = 'SkaBu';
        $gaji->jabatan = 'sekertaris';
        $gaji->jam_kerja = '100';
        $gaji->save();

        $gaji = new Gaji();
        $gaji->nip = 124;
        $gaji->nama = 'doleh ahmad s';
        $gaji->agama = 'Islam   ';
        $gaji->jenis_kelamin = 'Laki_laki';
        $gaji->alamat = 'SkaMi';
        $gaji->jabatan = 'Staff';
        $gaji->jam_kerja = '150';
        $gaji->save();
    }
}
