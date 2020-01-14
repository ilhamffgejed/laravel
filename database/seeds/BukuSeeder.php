<?php

use App\Buku;
use Illuminate\Database\Seeder;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $buku = new Buku();
        $buku->judul = 'Belajar_PHP 1';
        $buku->jumlah_halaman = 100;
        $buku->penerbit = 'Gramedia Pustaka';
        $buku->synopsis = 'ini Adalah...';
        $buku->status = 1;
        $buku->save();
        $buku = new Buku();
        $buku->judul = 'Belajar_PHP 2';
        $buku->jumlah_halaman = 100;
        $buku->penerbit = 'Gramedia Pustaka';
        $buku->synopsis = 'ini Adalah...';
        $buku->status = 1;
        $buku->save();
        $buku = new Buku();
        $buku->judul = 'Belajar_PHP 3';
        $buku->jumlah_halaman = 100;
        $buku->penerbit = 'Gramedia Pustaka';
        $buku->synopsis = 'ini Adalah...';
        $buku->status = 1;
        $buku->save();
        $buku = new Buku();
        $buku->judul = 'Belajar_PHP 4';
        $buku->jumlah_halaman = 100;
        $buku->penerbit = 'Gramedia Pustaka';
        $buku->synopsis = 'ini Adalah...';
        $buku->status = 1;
        $buku->save();
        $buku = new Buku();
        $buku->judul = 'Belajar_PHP 5';
        $buku->jumlah_halaman = 100;
        $buku->penerbit = 'Gramedia Pustaka';
        $buku->synopsis = 'ini Adalah...';
        $buku->status = 1;
        $buku->save();
    }
}
