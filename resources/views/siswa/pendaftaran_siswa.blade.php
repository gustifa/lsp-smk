<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>


<table id="customers">
  <tr>
    <td><h2>
  <?php $image_path = '/upload/sekolah_images/logo_lsp.jpg'; ?>
  <img src="{{ public_path() . $image_path }}" width="100" height="100">

    </h2></td>
    <td><h2>LEMBAGA SERTIFIKASI PROFESI LSP-P1</h2>
    <h1>SMK NEGERI 1 KINALI</h1>
<p>Jl. Teuku Umar KM. 1 Kecamatan Kinali</p>
<p>Email : lspp1_smkn1kinali@gmail.com</p>
<p>website : https://lsp-p1.smkn1kinali.sch.id</p>

    </td> 
  </tr>
  
   
</table>

<h3 align="center">BUKTI PENDAFTARAN</h3>
<h3 align="center">PERMOHONAN SERTIFIKASI KOMPETENSI</h3>
<p align="center">No Pendaftaran <b>{{ $allSiswa->no_pendaftaran }}</b></p>

<table id="customers">
  <tr>
    <th width="10%">No</th>
    <th width="45%">Bagian</th>
    <th width="45%">Data Siswa</th>
  </tr>
  
  <tr>
    <td>1</td>
    <td><b>NIK</b></td>
    <td>{{ $allSiswa->nik }}</td>
  </tr>
  <tr>
    <td>2</td>
    <td><b>Nama</b></td>
    <td>{{ $allSiswa->name }}</td>
  </tr>
  <tr>
    <td>3</td>
    <td><b>Tempat Lahir</b></td>
    <td>{{ $allSiswa->tempat_lahir }}</td>
  </tr>

  <tr>
    <td>4</td>
    <td><b>Tanggal Lahir</b></td>
    <!-- <td>@phpdate("d F Y", strtotime{{ $allSiswa->tanggal_lahir }}</td> -->
    <td>{{ date("d F Y", strtotime($allSiswa->tanggal_lahir)) }}</td>
  </tr>

  <tr>
    <td>5</td>
    <td><b>Program Keahlian</b></td>
    <td>{{ $allSiswa->jurusan->nama }}</td>
  </tr>

  <tr>
    <td>6</td>
    <td><b>Skema Kompetensi</b></td>
    <td>Klaster 1 - Penerapan Rangkaian Elektronika</td>
  </tr>

    
   
</table>

<br>
<br>
<br>
<table>
  <tr>
    <th width="50%"></th>
    <th width="20%"></th>
    <th width="30%"></th>
  </tr>
  
  

  <tr>
    <td></td>
    <td></td>
    <td>Kinali {{ date("d F Y") }} </td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td>Ketua LSP </td>
  </tr>

  <tr>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td>Rahmad Khalidi, S.Pd </td>
  </tr>

    
   
</table>
<br> <br>
  <i style="font-size: 10px; float: right;">Tanggal Print : {{ date("d M Y") }}</i>







</body>
</html>
