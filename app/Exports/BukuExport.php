<?php

namespace App\Exports;

use App\Buku;
use App\Models\Buku as ModelsBuku;
use App\Models\Jenis_Buku;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;

class BukuExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $buku = ModelsBuku::all();
        $buku = DB::table('Buku')->join('Jenis_Buku', 'jenis_buku.id', '=', 'buku.id') ->get(); //Join Judul buku dengan Nama Kategori
        return $buku;
    }
}