<?php

namespace App\Imports;

use App\Models\Guru;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportGuru implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Guru([
            'nama' => $row[0],
            'nuptk' => $row[1],
            'nip' => $row[2],
            'jenis_kelamin' => $row[3],
            'tempat_lahir' => $row[4],
            'tanggal_lahir' => $row[5],
            'nik' => $row[6],
            // 'mapel_id' => $row[7],
            // 'agama_id' => $row[8],
            // 'jurusan_id' => $row[9],
            // 'RFID_ID' => $row[4],
        ]);
    }
}
