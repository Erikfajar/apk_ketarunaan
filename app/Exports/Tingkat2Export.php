<?php

namespace App\Exports;

use App\Models\Tingkat2;
use Maatwebsite\Excel\Concerns\FromCollection;

class Tingkat2Export implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Tingkat2::all();
    }
}
