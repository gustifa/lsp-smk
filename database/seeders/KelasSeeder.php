<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Carbon\Carbon;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kelas')->insert([
            //admin
            [
                'nama' => 'X',
                'created_at' => Carbon::now(),
            ],

            [
                'nama' => 'XI',
                'created_at' => Carbon::now(),
            ],

            [
                'nama' => 'XII',
                'created_at' => Carbon::now(),
            ],

        ]);
    }
}
