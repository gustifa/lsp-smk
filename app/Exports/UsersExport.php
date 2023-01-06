<?php

namespace App\Exports;

use App\Models\User;

use Maatwebsite\Excel\Excel;
use Illuminate\Contracts\Support\Responsable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;

class UsersExport implements FromCollection, Responsable, WithHeadings
{
    use Exportable;
    
    /**
    * It's required to define the fileName within
    * the export class when making use of Responsable.
    */
    private $fileName = 'user.xlsx';
    
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
        //return User::all();
        return User::select("id", "name", "email")->get();
    }

     public function headings(): array
    {
        return ["ID", "Name", "Email"];
    }
}
