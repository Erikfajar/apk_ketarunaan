<?php

namespace App\Exports;

use App\Models\Tingkat3;
use Maatwebsite\Excel\Concerns\FromCollection;

class Tingkat3Export implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Tingkat3::all();
    }
}
