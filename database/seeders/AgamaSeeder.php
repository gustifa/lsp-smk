<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Carbon\Carbon;

class AgamaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('agama')->insert([
            //admin
            [
                'nama' => 'Islam',
                'created_at' => Carbon::now(),
            ],

                        [
                'nama' => 'Kristen',
                'created_at' => Carbon::now(),
            ],

            [
                'nama' => 'Khatolik',
                'created_at' => Carbon::now(),
            ],

                        [
                'nama' => 'Hindu',
                'created_at' => Carbon::now(),
            ],

            [
                'nama' => 'Budha',
                'created_at' => Carbon::now(),
            ],

                        [
                'nama' => 'Kong Hu Cu',
                'created_at' => Carbon::now(),
            ],

        ]);
    }
}
