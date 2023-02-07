<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Carbon\Carbon;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('setting')->insert([
            //admin
            [
                'nama' => 'Nama Aplikasi',
                'judul1' => 'Judul1',
                'judul2' => 'Judul2',
                'alamat' => 'Alamat',
                'created_at' => Carbon::now(),
            ],

        ]);
    }
}
