<?php

namespace App\Imports;

//use Illuminate\Support\Collection;
//use Maatwebsite\Excel\Concerns\ToCollection;
use App\Models\Mapel;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportMapel implements ToModel
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        return new Mapel([
            'nama' => $row[0],
            'kode' => $row[1],
            // 'nip' => $row[2],
            // 'jenis_kelamin' => $row[3],
            // 'tempat_lahir' => $row[4],
            // 'tanggal_lahir' => $row[5],
            // 'nik' => $row[6],
            // 'mapel_id' => $row[7],
            // 'agama_id' => $row[8],
            // 'jurusan_id' => $row[9],
            // 'RFID_ID' => $row[4],
        ]);
    }
}
