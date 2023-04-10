<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggaran extends Model
{
    protected $table = "pelanggaran";
    protected $primaryKey = "id";
    protected $fillable = [
        'id' ,'nama','detail','tgl','gambar',
    ];
}
