<?php

namespace App\Exports;

use App\Models\Fornecedor;
use Maatwebsite\Excel\Concerns\FromCollection;

class FornecedorExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Fornecedor::all();
    }
}