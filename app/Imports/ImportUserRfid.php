<?php

namespace App\Imports;

use App\Models\UserRfid;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportUserRfid implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new UserRfid([
            'Nis' => $row[0],
            'Nama' => $row[1],
            'Jurusan' => $row[2],
            'Kelas' => $row[3],
            'RFID_ID' => $row[4],
        ]);
    }
}