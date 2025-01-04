<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class nlc_khachhang_table extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('nlc_khachhang')->insert([
            'nlcmakhachhang' => '01',
            'nlctenkhachhang' => 'a',
            'nlcemail' => '1234@nlc',
            'nlcmatkhau' => '1234',
            'dienthoai'=>'0366084921',
            'nlcdiachi'=>'so 12 ngo 12',
            'nlcngaydangky'=>'2024-02-09',

            'nlctrangthai' => true,
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
