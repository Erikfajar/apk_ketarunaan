<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catatan extends Model
{
    protected $table = "catatan";
    protected $primaryKey = "id";
    protected $fillable = [
        'id' ,'tgl','jam','kegiatan',
    ];
}