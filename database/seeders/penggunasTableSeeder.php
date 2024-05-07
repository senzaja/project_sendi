<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class penggunasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $penggunas =[
            ['nama'=>'xenso'],
            ['nama'=>'xiksi'],
            ['nama'=>'dedo'],
            ['nama'=>'sesen'],
            ['nama'=>'roro'],
            ];
            // masukan data ke data base\
            DB::table('penggunas')->insert($penggunas);
    }
}
