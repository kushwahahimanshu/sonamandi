<?php

namespace App\Exports;

use App\Directory;
use Maatwebsite\Excel\Concerns\FromCollection;

class DirectoryExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Directory::all();
    }
}
