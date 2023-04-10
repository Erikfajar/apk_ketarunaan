<?php

namespace App\Exports;

use App\Models\Prestasi3;
use Maatwebsite\Excel\Concerns\FromCollection;

class Prestasi3Export implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Prestasi3::all();
    }
}
