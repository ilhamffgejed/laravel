<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Buku;
use App\Olahrga;

Route::get('/', function () {
    //return 'ahaha';
return Buku::all(/*'judul','jumlah_halaman','penerbit'*/);
    return Olahraga::all();
});

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('Laporan', function () {
    return 'Ini Halaman 1 Laporan';
});

Route::get('Bebeja', function () {
    return 'Ini Halaman 2 Bebeja';
});

Route::get('Olahraga', function () {
    return 'Ini Halaman 3 Olahraga';
});

Route::get('Politik', function () {
    return 'Ini Halaman 4 Politik';
});

Route::get('Negara', function (){
    return 'Ini Halaman 5 Negara';
});

Route::get('variabel', function () {
    $data1= 'ini data Satu';
    $data2= 'ini data dua';
    $data3= 'ini data tiga';
    $data4= 'ini data empat';
    $data5= 'ini data lima';

    return $data1.'<br>'.$data2.'<br>'.$data3.'<br>'.$data4.'<br>'.$data5;
});

Route::get('angkot/{jurusan}/{bayar}', function () {
    $jurusan = 'Cibaduyut - karang Setra';
    $angkot = 'Angkot Jurusan : ';
    $harga = '<br> Harga Bayar';
    $bayar = '6000';
    return $angkot . ' ' . $jurusan . ' ' . $harga . ' ' . $bayar;

});

Route::get('user/{nama}/{alamat}/{nomor}', function($nama,$alamat,$nomor){
        return 'halo '.$nama.' yang beralamat di '.$alamat.' nomor '.$nomor;
});

Route::get('siswa/{nama}/{nilai?}', function($nama,$nilai='Blum Mengisi Nilai'){
      if ($nilai <= 100 && $nilai > 50 ) {
         $grade = ' A';
     }
     else if ($nilai <= 50 && $nilai > 40 ) {
        $grade = ' B';
    }
    else if ($nilai <= 30 && $nilai > 20 ) {
        $grade = ' C';
    }
    else if ($nilai <= 20 && $nilai> 20 ) {
        $grade = ' E';
    }
    // else  {
    //     return 'Halo '. $nama . ' Mana Nilai anda';
    // }
    else $grade = ' Tidak Mendapat Grade';
     return 'Halo '.$nama.'<br>'. ' Nilai Anda = ' . $nilai . '<br>' . ' Maka Grade Anda =' . $grade;
});


Route::get('contoh', 'ContohController@latihan');
Route::get('profil', 'ContohController@latihan2');
Route::get('profil2', 'ContohController@latihan3');
Route::get('profil3', 'ContohController@latihan4');

Route::get('Profil', 'ProfilController@ofil');

Route::get('menu/{mkn}','ContohController@menu');

Route::get('menu2/{mkn?}/{minum?}/{ukuran?}','ContohController@menu2');


Route::get('hitungbuku','BukuController@hitungbuku');
// Route::get('show','BukuController@show');
// Route::get('buatdata','BukuController@buatdata');

Route::get('get-buku','BukuController@index');
Route::get('create-buku','BukuController@buatdata');
Route::get('get-buku/{id}','BukuController@show');
Route::get('delete-buku/{id}','BukuController@delete');
Route::get('update-buku/{id}','BukuController@update');
Route::get('buatdata','BukuController@buatdata');



