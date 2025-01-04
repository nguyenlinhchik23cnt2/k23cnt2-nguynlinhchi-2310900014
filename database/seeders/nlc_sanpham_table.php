<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class nlc_sanpham_table extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table("nlc_sanpham")->insert(
            [
                'nlcsanpham'=>"vp001",
                'nlctensanpham'=>"adidas stan smith ",
                'nlchinhanh'=>"imges/san-pham/vp001.jpg",
                'nlcsoluong'=>100,
                'nlcdongia'=>1000,
                'nlcmaloai'=>1,
                'nlctrangthai'=>0


            ]
        );
        
        DB::table("nlc_sanpham")->insert(
            [
                'nlcsanpham'=>"vp002",
                'nlctensanpham'=>"adida ultraboost ",
                'nlchinhanh'=>"imges/san-pham/vp002.jpg",
                'nlcsoluong'=>200,
                'nlcdongia'=>55000,
                'nlcmaloai'=>1,
                'nlctrangthai'=>0


            ]
        );
        DB::table("nlc_sanpham")->insert(
            [
                'nlcsanpham'=>"vp003",
                'nlctensanpham'=>"adidas supersatn",
                'nlchinhanh'=>"imges/san-pham/vp003.jpg",
                'nlcsoluong'=>150,
                'nlcdongia'=>25000,
                'nlcmaloai'=>1,
                'nlctrangthai'=>0


            ]
        );
        DB::table("nlc_sanpham")->insert(
            [
                'nlcsanpham'=>"vp004",
                'nlctensanpham'=>"air force 1 ",
                'nlchinhanh'=>"imges/san-pham/vp004.jpg",
                'nlcsoluong'=>300,
                'nlcdongia'=>79000,
                'nlcmaloai'=>1,
                'nlctrangthai'=>0


            ]
        );
        DB::table("nlc_sanpham")->insert(
            [
                'nlcsanpham'=>"pt005",
                'nlctensanpham'=>"  punk low ",
                'nlchinhanh'=>"imges/san-pham/vp005.jpg",
                'nlcsoluong'=>150,
                'nlcdongia'=>59000,
                'nlcmaloai'=>3,
                'nlctrangthai'=>0


            ]
        );
        DB::table("nlc_sanpham")->insert(
            [
                'nlcsanpham'=>"pt006",
                'nlctensanpham'=>"air max  ",
                'nlchinhanh'=>"imges/san-pham/vp006.jpg",
                'nlcsoluong'=>100,
                'nlcdongia'=>15000,
                'nlcmaloai'=>3,
                'nlctrangthai'=>0


            ]
        );
        DB::table("nlc_sanpham")->insert(
            [
                'nlcsanpham'=>"pt007",
                'nlctensanpham'=>"suede classic ",
                'nlchinhanh'=>"imges/san-pham/vp007.jpg",
                'nlcsoluong'=>200,
                'nlcdongia'=>29000,
                'nlcmaloai'=>3,
                'nlctrangthai'=>0


            ]
        );
        DB::table("nlc_sanpham")->insert(
            [
                'nlcsanpham'=>"pt008",
                'nlctensanpham'=>"puma fenty ",
                'nlchinhanh'=>"imges/san-pham/vp008.jpg",
                'nlcsoluong'=>300,
                'nlcdongia'=>19000,
                'nlcmaloai'=>3,
                'nlctrangthai'=>0


            ]
        );
        
    }
    
}
