<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class teleponsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $telepons =[
            ['nomor_telepon'=>'08978289', 'pengguna_id'=>1],
            ['nomor_telepon'=>'08978288', 'pengguna_id'=>2],
            ['nomor_telepon'=>'08978286', 'pengguna_id'=>3],
            ['nomor_telepon'=>'08978285', 'pengguna_id'=>4],
            ['nomor_telepon'=>'08978284', 'pengguna_id'=>5],
            ];
            // masukan data ke data base\
            DB::table('telepons')->insert($telepons);
    }
}
