<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class produksTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produks =[
            ['nama_produk'=>'motor', 'merek'=>'yamaha','jumlah'=>'150'],
            ['nama_produk'=>'motor', 'merek'=>'honda','jumlah'=>'200'],
            ['nama_produk'=>'mobil', 'merek'=>'suzuki','jumlah'=>'100'],
            ['nama_produk'=>'laptop', 'merek'=>'acer','jumlah'=>'10'],
            ['nama_produk'=>'laptop', 'merek'=>'lenovo','jumlah'=>'300'],
            ['nama_produk'=>'laptop', 'merek'=>'asus','jumlah'=>'20'],
            ['nama_produk'=>'hp', 'merek'=>'asusrog','jumlah'=>'50'],
            ['nama_produk'=>'hp', 'merek'=>'realme','jumlah'=>'20'],
            ['nama_produk'=>'hp', 'merek'=>'redmi','jumlah'=>'100'],
            ['nama_produk'=>'hp', 'merek'=>'oppo','jumlah'=>'400'],
         
            ];
            // masukan data ke data base\
            DB::table('produks')->insert($produks);
    }
}
