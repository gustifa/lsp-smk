<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Carbon\Carbon;

class SekolahTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sekolahs')->insert([
            //admin
            [
                'npsn' => '10308183',
                'nama' => 'SMK N 1 KINALI',
                'nss' => '10308183',
                'alamat' => 'Jln. TEUKU UMAR PADANG KURANJI KM.1 KAPUNDUANG',
                'provinsi' => 'Sumatera Barat',
                'created_at' => Carbon::now(),
            ],

        ]);
    }
}
