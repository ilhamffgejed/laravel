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
use App\Siswa;
use App\Buku;
use App\Olahrga;
use App\Gaji;

Route::get('/', function () {
    //return 'ahaha';
return Buku::all();
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
Route::get('update-buku/{id}/{judul?}','BukuController@update');
Route::get('buatdata','BukuController@buatdata');

//Route::get (siswa)
Route::get('get-siswa','SiswaController@index');
Route::get('create-siswa/{nama}/{nis}/{tgl}','SiswaController@buatdata');
Route::get('get-siswa/{id}','SiswaController@show');
Route::get('delete-siswa/{id}','SiswaController@delete');
Route::get('update-siswa/{id}/{nama?}','SiswaController@update');


//passing data
Route::get('pass','PracticeControrller@pass');
Route::get('pass1','PracticeControrller@pass1');
Route::get('status/{a?}','PracticeControrller@status');
Route::get('buku','PracticeControrller@loop');

//book
Route::get('book','BukuController@index');
Route::get('book/{id}','BukuController@show');

//gaji
Route::get('gaji','GajiController@index');
Route::get('gjh/{id}','GajiController@show');

//belajar Blade teplating
Route::get('/profile',function()
{
    return view ('profile');
});
Route::get('/kontak',function()
{
    return view ('kontak');
});
Route::get('/blog',function()
{
    return view ('blog');   
});



//Relasi
use App\Mahasiswa;
use App\Dosen;
use App\Hobi;

//mahasiswa
Route::get('relasi-1',function () {

    #Temukan mahasisawa dengan NIM 1015015072
    $mahasiswa = Mahasiswa::where('nim', '=' , '1015015072')->first();

    #tampilkan Nama wali mahasiswa
    return $mahasiswa->wali->nama;
});

Route::get('relasi-2',function () {

    #Temukan mahasisawa dengan NIM 1015015072
    $mahasiswa = Mahasiswa::where('nim', '=' , '1015015072')->first();

    #tampilkan Nama wali mahasiswa
    return $mahasiswa->dosen->nama;
});

Route::get('relasi-3',function () {

    #Mencari Data Mahasiswa Yang Bernama Abdul Mustofa
    $dosen = Dosen::where('nama', '=' , 'Abdul Mustofa')->first();

    #Tampilan Seluruh DAta mahasiswa didikanya
    foreach($dosen->mahasiswa as $temp)
    echo '<li> Nama : ' . $temp->nama .
    ' <strong>' . $temp->nim . '</strong></li>';
    
});

Route::get('relasi-4',function () {

    # Mencari Data Mahasiswa Yang Bernama Noviyanto Rachmadi
    $novay = Mahasiswa::where('nama', '=' , 'Noviyanto Rachmadi')->first();

    foreach ($novay->hobi as $temp)
    echo '<li>' . $temp->hobi . '</li>';
});

Route::get('relasi-5',function () {

    # Mencari Data Mahasiswa Yang Bernama Noviyanto Rachmadi
    $mandi_hujan = Hobi::where('hobi', '=' , 'Mandi Hujan')->first();

    foreach ($mandi_hujan->mahasiswa as $temp)
    echo '<li> Nama : ' . $temp->nama . 
        ' <strong>' . $temp->nim  . '</strong></li>';
});

Route::get('eloquent', function () {
    $data = Mahasiswa::with('wali', 'dosen', 'hobi')->get();
    return view('eloquent', compact('data'));
}); 