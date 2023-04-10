<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tingkat extends Model
{
    protected $table = "tingkat";
    protected $primaryKey = "id";
    protected $fillable = [
        'id' , 'tingkat',
    ];
    public function taruna()
    {
        return $this->hasMany(Taruna::class);
    }
    public function tingkat2()
    {
        return $this->hasMany(tingkat2::class);
    }
    public function tingkat3()
    {
        return $this->hasMany(tingkat3::class);
    }
    public function prestasi()
    {
        return $this->hasMany(Prestasi::class);
    }
    public function prestasi2()
    {
        return $this->hasMany(Prestasi2::class);
    }
    public function prestasi3()
    {
        return $this->hasMany(Prestasi3::class);
    }
}
