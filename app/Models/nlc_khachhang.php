<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nlc_khachhang extends Model
{
    protected $table = 'nlc_khachhang';

    protected $fillable = [
        'nlcmakhachhang',
        'nlctenkhachhang',
        'nlcemail',
        'nlcmatkhau',
        'dienthoai',
        'nlcdiachi',
        'nlcngaydangky',
        'nlctrangthai',
    ];

    

    // Mutator to hash password before saving
    public function setnlcmakhauAttribute($value)
    {
        $this->attributes['nlcmatkhau'] = bcrypt($value);
    }
}
