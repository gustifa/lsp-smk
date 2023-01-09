<?php

namespace App\Exports;

use App\Models\Guru;

use Maatwebsite\Excel\Excel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Contracts\Support\Responsable;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithColumnWidths;

class ExportGuru implements FromCollection, Responsable, WithHeadings, WithColumnWidths
{
	use Exportable;
    /**
    * @return \Illuminate\Support\Collection
    */
    private $fileName = 'Data_Guru.xlsx';
    
    /**
    * Optional Writer Type
    */
    private $writerType = Excel::XLSX;
    
    /**
    * Optional headers
    */
    private $headers = [
        'Content-Type' => 'text/csv',
    ];


    public function collection()
    {
        //return UserRfid::all();
        return Guru::select(
        	"nama", 
        	"nik", 
        	"nuptk", 
        	'nip', 
        	"jenis_kelamin", 
        	"tanggal_lahir",
        	"tempat_lahir"
        )->get();
    }

    // public function headings(): array
    // {
    //     return ["Nis", "Nama", "Kelas", "Jurusan", "Group", "RFID_ID"];
    // }

     public function columnWidths(): array
    {
        return [
            'A' => 30,
            'B' => 30,
            'C' => 15,
            'D' => 15,  
            'F' => 15,         
            'G' => 15,         
        ];
    }


    public function headings(): array
    {
        return [
            'NAMA',
            'NIK',
            'NUPTK',
            'NIP',
            'Jenis Kelamin',
            'Tanggal Lahir',
            'Tempat Lahir',
        ];
    }

}
