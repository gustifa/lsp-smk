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
    <td rowspan="3">
      <h2>
  <?php $image_path = '/upload/sekolah_images/logo_lsp.jpg'; ?>
  <img src="{{ public_path() . $image_path }}" width="100" height="100">

    </h2>
  </td>
    <td rowspan="2">
      <h2>FORMULIR</h2>
    </td> 
    <td>
      No. Dokumen
    </td>
     <td>
      :
    </td>
     <td>
      Form/LSP-P1 SMKN1KNL/FR.APL.01
    </td>
  </tr>
  <tr>
    
    
    <td>
      Edisi/Revisi
    </td>
     <td>
      :
    </td>
     <td>
      2/1
    </td>
  </tr>
  <tr>
    
    <td rowspan="2">
      <h4>FR.APL.01. PERMOHONAN SERTIFIKASI KOMPETENSI</h4>
    </td> 
    <td>
      Berlaku Sejak
    </td>
     <td>
      :
    </td>
     <td>
      17 Januari 2022
    </td>
  </tr>
  
  <tr>
    
    <td>
      <h6>LSP-P1SMKN 1 KINALI</h6>
    </td> 
    <td>
     Halaman
    </td>
     <td>
      :
    </td>
     <td>
      1/3
    </td>
  </tr>
  
</table>

<p align="left"><b>Bagian 1 :  Rincian Data PemohonSertifikasi</b></p>
<p align="left">Pada bagian ini,  cantumkan data pribadi, data pendidikan formal serta data pekerjaan anda pada saat ini.</p>
<p align="left">a. Data Pribadi</p>

<table id="customers">
  <tr>
    <td width="20%">Nama lengkap</td>
    <td width="2%" align="center">:</td>
    <td width="78%">{{$allSiswa->name}}</td>

  </tr>
    <tr>
    <td>No. KTP/NIK/Paspor</td>
    <td >:</td>
    <td>{{$allSiswa->nik}}</td>

  </tr>
  <tr>
    <td>Tempat / tgl. Lahir</td>
    <td align="center">:</td>
    <td>{{$allSiswa->tanggal_lahir}}</td>
  </tr>

  <tr>
    <td>Kebangsaan</td>
    <td align="center">:</td>
    <td>{{$allSiswa->kebangsaan}}</td>

  </tr>
    <tr>
    <td>Alamatrumah</td>
    <td align="center">:</td>
    <td>{{$allSiswa->address}}</td>

  </tr>
  <tr>
    <td>No. Telepon</td>
    <td align="center">:</td>
    <td>{{$allSiswa->phone}}</td>
  </tr>
  <tr>
    <td>Email</td>
    <td align="center">:</td>
    <td>{{$allSiswa->email}}</td>
  </tr>

  <tr>
    <td>Kualifikasi Pendidikan </td>
    <td align="center">:</td>
    <td>{{$allSiswa->pendidikan}}</td>
  </tr>
</table>
<br>

<p align="left">b. Data PekerjaanSekarang</p>
<p align="left">Pada bagian ini,  cantumkan data pribadi, data pendidikan formal serta data pekerjaan anda pada saat ini.</p>
<table id="customers">
  <tr>
    <td width="20%">Nama Institusi/ Perusahaan </td>
    <td width="2%" align="center">:</td>
    <td width="78%">{{$allSiswa->pekerjaan}}</td>

  </tr>
    <tr>
    <td>Jabatan</td>
    <td>:</td>
    <td>{{$allSiswa->jabatan}}</td>

  </tr>
  <tr>
    <td>Alamat Kantor</td>
    <td>:</td>
    <td>{{$allSiswa->alamat_kantor}}</td>
  </tr>

  <tr>
    <td>No. Telp</td>
    <td>:</td>
    <td>{{$allSiswa->phone_kantor}}</td>

  </tr>
    <tr>
    <td>E-mail </td>
    <td>:</td>
    <td>{{$allSiswa->email_kantor}}</td>

  </tr>
  <tr>
    <td>Kode Pos</td>
    <td>:</td>
    <td>{{$allSiswa->kode_pos_kantor}}</td>
  </tr>
  
</table>
<br>
<br>

<p align="left"><b>Bagian  2 :  Data Sertifikasi</b></p>
<p align="">TuliskanJudul dan Nomor Skema Sertifikasi, Tujuan Asesmen  serta Daftar Unit Kompetensi sesuai kemasan pada skema sertifikasi yang anda ajukan untuk mendapatkan pengakuan sesuai dengan latar belakang pendidikan, pelatihan serta pengalaman kerja yang andamiliki</p>

<table id="customers">
  <tr>
    <td rowspan="2">Skema Sertifikasi (KKNI/Okupasi/Klaster</td>
    <td>Judul</td>
    <td>:</td>
    <td colspan="2">KKNI LEVEL IITEKNIK AUDIO VIDEO KLASTER PENERAPAN RANGKAIAN ELEKTRONIKA AUDIO VIDEO</td>


  </tr>
  <tr>

    <td>Nomor</td>
    <td>:</td>
    <td colspan="2">5.7.1</td>

  </tr>
  <tr>
    <td colspan="2">Tujuan Asesmen</td>

    <td>:</td>
    <td>Sertifikasi</td>
    <td>Sertifikasi Ulang</td>
  </tr>
  
</table>

<p>Daftar Unit Kompetensi sesuai kemasan:<p>

<table id="customers">
  <tr>
    <th width="10%">No </th>
    <th width="30%">Kode Unit</th>
    <th width="45%">Judul Unit</th>
    <th width="15%">Jenis Standar</th>

  </tr>
  @foreach($dataUk as $key => $item)
    <tr>
    <td>{{$key+1}}</td>
    <td>{{$item->kode_unit}}</td>
    <td>{{$item->judul_unit}}</td>
    <td>{{$item->jenis_standar}}</td>
  </tr>
    @endforeach
</table>
<p><b>Bagian  3  :  Bukti Kelengkapan Pemohon</b></p>
<p>Bukti Persyaratan Dasar Pemohon</p>


<table id="customers">
  <tr>
    <td>Rekomendasi (diisi oleh LSP): Berdasarkan ketentuan persyaratan dasar, maka pemohon: Diterima/ Tidakditerima *) sebagai peserta  sertifikasi
* coret yang tidaksesuai
 </td>
    <td>Kode Unit</td>
    <td>Judul Unit</td>
    <td>Jenis Standar</td>

  </tr>
    <tr>
    <td>1</td>
    <td>ELM.UM01.009.01</td>
    <td>Membaca Gambar/Skematik Diagram Elektronika</td>
    <td>SKKNI</td>
  </tr>
    
</table>
<!-- <p align="left">b. Data PekerjaanSekarang</p>
<p align="left">Pada bagian ini,  cantumkan data pribadi, data pendidikan formal serta data pekerjaan anda pada saat ini.</p>



<p align="left">Bagian  2 :  Data Sertifikasi</p>
<p align="left">Pada bagian ini,  cantumkan data pribadi, data pendidikan formal serta data pekerjaan anda pada saat ini.</p>

  
  

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
    <td>Defitri Heriandi, S.Pd </td>
  </tr>

    
   
</table>
<br> <br>
  <i style="font-size: 10px; float: right;">Tanggal Print : {{ date("d M Y") }}</i>

 -->





</body>
</html>
