<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nlc_loaisanpham extends Model
{
    use HasFactory;
    protected $table="nlc_loaisanpham";
    protected $fillable = ['nlcmaloai', 'nlctenloai', 'nlctrangthai'];
}
