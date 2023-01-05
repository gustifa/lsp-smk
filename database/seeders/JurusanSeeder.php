<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Carbon\Carbon;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jurusan')->insert([
            //admin
            [
                'nama' => 'Teknik Jaringan Komputer dan Telekomunikasi',
                'kode' => 'TJKT',
                'created_at' => Carbon::now(),
            ],

            [
                'nama' => 'Teknik Elektronika',
                'kode' => 'ELKA',
                'created_at' => Carbon::now(),
            ],

            [
                'nama' => 'Desain Komunikasi Visual',
                'kode' => 'DKV',
                'created_at' => Carbon::now(),
            ],

            [
                'nama' => 'Akuntansi dan Keuangan Lembaga',
                'kode' => 'AKL',
                'created_at' => Carbon::now(),
            ],

            [
                'nama' => 'Manajemen Perkantoran Lembaga Binis',
                'kode' => 'MPLB',
                'created_at' => Carbon::now(),
            ],

            [
                'nama' => 'Teknik Komputer dan Jaringan',
                'kode' => 'TKJ',
                'created_at' => Carbon::now(),
            ],

            [
                'nama' => 'Teknik Audio dan Video',
                'kode' => 'TAV',
                'created_at' => Carbon::now(),
            ],

            [
                'nama' => 'Multimedia',
                'kode' => 'MM',
                'created_at' => Carbon::now(),
            ],


        ]);
    }
}
