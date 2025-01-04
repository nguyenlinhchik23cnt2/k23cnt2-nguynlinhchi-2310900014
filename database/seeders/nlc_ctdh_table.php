<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class nlc_ctdh_table extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('nlc_ct_hoadon')->insert([
            [
                'nlchoadonid' => '1',
                'nlcsanphamid' => '1',
                'nlcsoluongmua' => 1,
                'nlcdongiamua' => 100000,
                'nlcthanhtien' => 100000,
                'nlctrangthai' => true,
            ],
            [
                'nlchoadonid' => '2',
                'nlcsanphamid' => '2',
                'nlcsoluongmua' => 1,
                'nlcdongiamua' => 100000,
                'nlcthanhtien' => 100000,
                'nlctrangthai' => true,
            ],
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
