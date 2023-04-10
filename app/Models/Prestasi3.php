<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestasi3 extends Model
{
    protected $table = "prestasi3";
    protected $primaryKey = "id";
    protected $fillable = [
        'id' ,'nit','nama','tingkat', 'jurusan', 'lomba','juara','tgl','gambar',
    ];

    public function tingkat()
    {
       return $this->belongsTo(Tingkat::class);
    }
}
