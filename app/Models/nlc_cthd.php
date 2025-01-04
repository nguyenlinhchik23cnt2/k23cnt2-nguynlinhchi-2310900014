<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nlc_cthd extends Model
{
    use HasFactory;
    protected $table = 'nlc_ct_hoadon';

    protected $fillable = [
        'nlchoadonid' => '1',
                    'nlcsanphamid',
                    'nlcsoluongmua', 
                    'nlcdongiamua' ,
                    'nlcthanhtien' ,
                    'nlctrangthai',
    ];

    public function hoadon()
    {
        return $this->belongsTo(nlchoadon::class, 'nlcmahoadon', 'nlcmahoadon');
    }

    public function sanPham()
    {
        return $this->belongsTo(nlcsanpham::class, 'nlcsanpham', 'nlcsanpham');
    }
}
