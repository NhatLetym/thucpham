<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sanpham extends Model
{
    use HasFactory;
    protected $table = 'san_pham';
    public function loaisp()
    {
        return $this->belongsTo(loaisanpham::class, 'id_loai_sp');
    }
}
