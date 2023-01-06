<?php

namespace App\Exports;


use App\Models\UserRfid;

use Maatwebsite\Excel\Excel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Contracts\Support\Responsable;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
//use Maatwebsite\Excel\Concerns\WithStyles;

// use Maatwebsite\Excel\Concerns\WithTitle;

class ExsportUserRfid implements FromCollection, Responsable, WithHeadings, WithColumnWidths
{
      use Exportable;


    
    /**
    * It's required to define the fileName within
    * the export class when making use of Responsable.
    */
    private $fileName = 'userRfid.xlsx';
    
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
        return UserRfid::select("Nis", "Nama", "Kelas", 'Jurusan', "Group", "RFID_ID")->get();
    }

    // public function headings(): array
    // {
    //     return ["Nis", "Nama", "Kelas", "Jurusan", "Group", "RFID_ID"];
    // }

     public function columnWidths(): array
    {
        return [
            'A' => 10,
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
            'Nis',
            'Nama',
            'Kelas',
            'Jurusan',
            'Group',
            'RFID_ID',
        ];
    }

    // public function styles(Worksheet $sheet)
    // {
    //     return [
    //         // Style the first row as bold text.
    //         1    => ['font' => ['bold' => true]],

    //         // Styling a specific cell by coordinate.
    //         //'B2' => ['font' => ['italic' => true]],

    //         // Styling an entire column.
    //         //'C'  => ['font' => ['size' => 16]],
    //     ];
    // }



    


}
