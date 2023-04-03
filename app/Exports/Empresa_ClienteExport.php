<?php

namespace App\Exports;

use App\Models\Empresa_Cliente;
use Maatwebsite\Excel\Concerns\FromCollection;

class Empresa_ClienteExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Empresa_Cliente::all();
    }
}