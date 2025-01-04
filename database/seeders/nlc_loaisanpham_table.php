<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class nlc_loaisanpham_table extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        DB::table('nlc_loaisanpham')->insert([
            'nlcmaloai'=>'L001',
            'nlctenloai'=>'giay adidas',
            'nlctrangthai'=>0
        ]);
        DB::table('nlc_loaisanpham')->insert([
            'nlcmaloai'=>'A002',
            'nlctenloai'=>'giay nike',
            'nlctrangthai'=>0
        ]);
        DB::table('nlc_loaisanpham')->insert([
            'nlcmaloai'=>'A003',
            'nlctenloai'=>'MLB',
            'nlctrangthai'=>0
        ]);
        DB::table('nlc_loaisanpham')->insert([
            'nlcmaloai'=>'A004',
            'nlctenloai'=>'giay puma',
            'nlctrangthai'=>0
        ]);
    }
}
