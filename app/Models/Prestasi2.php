<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestasi2 extends Model
{
    protected $table = "prestasi2";
    protected $primaryKey = "id";
    protected $fillable = [
        'id' ,'nit','nama','tingkat_id', 'jurusan','lomba','juara','tgl','gambar',
    ];

    // public function tingkat()
    // {
    //    return $this->belongsTo(Tingkat::class);
    // }
}
