<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestasii extends Model
{
    protected $table = "prestasii";
    protected $primaryKey = "id";
    protected $fillable = [
        'id' ,'nama','detail','tgl','gambar',
    ];
}