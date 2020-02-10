<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
       <title>Document</title> 
</head>
<body>
        <center>Daftar Buku</center>
        <table border=2 align=center>
        <thead>
        <tr>    
            <th>Nip</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Jabatan</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
            @foreach($gaji as $gjh)
            <tr>
                <td>{{ $gjh->nip }}</td>
                <td>{{ $gjh->nama }}</td>
                <td>{{ $gjh->jenis_kelamin }}</td>
                <td>{{ $gjh->jabatan }}</td>
                <td><a href="/gjh/{{ $gjh->id }}">lihat</a></td>
            </tr>
            @endforeach
            </tbody>
            </table>
</body>
</html>
