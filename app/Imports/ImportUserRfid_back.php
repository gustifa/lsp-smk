<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

use App\Models\UserRfid;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\SkipsErrors;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Throwable;

class ImportUserRfid implements ToModel,ToCollection,WithHeadingRow,WithValidation,SkipsOnError,SkipsOnFailure
{
   use Importable, SkipsErrors,SkipsFailures;

    /**
    * @param Collection $collection
    */
    public function collection(Collection $row)
    {
        foreach($row as $rows)
        {
            $user =  User::create([
                'username' => $rows['nis'],
                'role' => 'siswa',
                'password' => Hash::make('password'),
            ]);

            $user->UserRfid()->create([
                'id' => $user->id,
                'nis' => $rows['Nis'],
                'nama' => $rows['Nama'],
                'kelas' => $rows['Kelas'],
                'jurusan' => $rows['Jurusan'],
                'group' => $rows['Group'],
                'rfid_id' => $rows['RFID_ID'],
            ]);
        }
    }

    public function rules(): array
    {
        return [
            // '*.nipd' => ['unique:siswa,nipd','unique:users.username'],
            '*.Nis' => ['unique:UserRfid,Nis'],

        ];
    }

}