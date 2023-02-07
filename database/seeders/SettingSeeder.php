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
                'nama' => 'LSP-P1 SMK NEGERI 1 KINALI',
                'judul1' => 'Lembaga Sertifikasi P1 merupakan lembaga pendidikan, lembaga pelatihan (lemdiklat) yang melatih pesertanya untuk memenuhi kebutuhan industri dan juga diperuntukkan untuk Industri yang ingin mensertifikasi karyawan yang ada diperusahaan mereka',
                'judul2' => 'Judul2',
                'alamat' => 'Alamat',
                'created_at' => Carbon::now(),
            ],

        ]);
    }
}
