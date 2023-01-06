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
            'Kelas' => $row[2],
            'Jurusan' => $row[3],
            'Group' => $row[4],
            // 'RFID_ID' => $row[4],
        ]);
    }
}