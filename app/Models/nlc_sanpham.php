<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nlc_sanpham extends Model
{
    use HasFactory;
    protected $table="nlc_sanpham";
    protected $fillable = ['nlcsanpham', 'nlctensanpham', 'nlchinhanh','nlcsoluong','nlcdongia','nlcmaloai','nlctrangthai'];
}

