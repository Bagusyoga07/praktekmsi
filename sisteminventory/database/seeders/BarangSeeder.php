<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barang')->insert([
            'nama' => 'Kabel HDMI',
            'jenis' => 'Kabel' ,
            'jumlah' => '20' ,
        ]);
    }
}
