<?php

namespace App\Exports;

use App\Models\Recibo;
use Maatwebsite\Excel\Concerns\FromCollection;

class ReciboExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Recibo::all();
    }
}

