<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tingkat2 extends Model
{
    protected $table = "tingkat2";
    protected $primaryKey = "id";
    protected $fillable = [
        'id' ,'nit','nama', 'tingkat','jurusan','alasan','gambar', 'tgl',
    ];
    // public function tingkat()
    // {
    //    return $this->belongsTo(Tingkat::class);
    // }
}
