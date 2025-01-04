<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class nlc_quantri_table extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nlcmatkhau=md5("123456@");
        DB::table('nlc_quantri')->insert([
            'nlctaikhoan'=>"linhchi01@gmail.com",
            'nlcmatkhau'=>" $nlcmatkhau",
            'nlctrangthai'=>0
        ]);
        DB::table('nlc_quantri')->insert([
            'nlctaikhoan'=>"0123456@gmail.com",
            'nlcmatkhau'=>" $nlcmatkhau",
            'nlctrangthai'=>0
        ]);
    }
}
