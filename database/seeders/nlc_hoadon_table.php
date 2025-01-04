<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class nlc_hoadon_table extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('nlc_hoadon')->insert([
            [
                'nlcmahoadon' => '1',
                'makhachhang' => '01',
                'nlcngayhoadon' => '2021-07-10',
                'nlchotenkhachhang'=>'nguyen van a',
                'nlcemail'=>'1234@nlc',
                'nlcdienthoai'=>'0366084921',
                'nlcdiachi'=>'so12 ngo12 ',
                'nlctongtrigia' => 100000,
                'nlctrangthai' => true,
            ],
            [
                'nlcmahoadon' => '2',
                'makhachhang' => '02',
                'nlcngayhoadon' => '2021-08-10',
                'nlchotenkhachhang'=>'nguyen van b',
                'nlcemail'=>'12345@nlc',
                'nlcdienthoai'=>'00366084921',
                'nlcdiachi'=>'so13 ngo12 ',
                'nlctongtrigia' => 110000,
                'nlctrangthai' => true,
            ],
        ]);
    }
}
