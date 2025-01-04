<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nlc_hoadon extends Model
{
    protected $table = 'nlc_hoadon';

    protected $fillable = [
        'nlcmahoadon',
        'makhachhang',
        'nlcngayhoadon',
        'nlchotenkhachhang',
        'nlcemail',
        'nlcdienthoai',
        'nlcdiachi',
        'nlctongtrigia',
        'nlctrangthai',

    ];
        

    public function khachhang()
    {
        return $this->belongsTo(nlc_khachhang::class, 'nlcmakhachhang', 'nlcmakhachhang');
    }
}
