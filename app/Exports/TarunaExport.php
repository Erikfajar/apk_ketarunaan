<?php

namespace App\Exports;

use App\Models\Taruna;
use Maatwebsite\Excel\Concerns\FromCollection;

class TarunaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Taruna::all();
    }
}
