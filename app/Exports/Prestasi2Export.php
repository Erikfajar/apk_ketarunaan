<?php

namespace App\Exports;

use App\Models\Prestasi2;
use Maatwebsite\Excel\Concerns\FromCollection;

class Prestasi2Export implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Prestasi2::all();
    }
}
