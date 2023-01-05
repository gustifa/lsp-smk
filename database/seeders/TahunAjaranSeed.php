<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Carbon\Carbon;

class TahunAjaranSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tahun_ajaran')->insert([
            //admin
            [
                'nama' => '2022/2023',
                'created_at' => Carbon::now(),
            ],

            [
                'nama' => '2023/2024',
                'created_at' => Carbon::now(),
            ],

            [
                'nama' => '2024/2025',
                'created_at' => Carbon::now(),
            ],

            [
                'nama' => '2025/2026',
                'created_at' => Carbon::now(),
            ],

                        [
                'nama' => '2026/2027',
                'created_at' => Carbon::now(),
            ],

            [
                'nama' => '2027/2028',
                'created_at' => Carbon::now(),
            ],

                        [
                'nama' => '2028/2029',
                'created_at' => Carbon::now(),
            ],
        ]);
    }
}
