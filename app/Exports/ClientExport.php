<?php

namespace App\Exports;

use App\Models\Client;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;

class ClientExport implements FromCollection
{
    use Exportable;

    public function __construct($day , $id)
    {
        $this->day = $day;
        $this->id = $id;
    }


    public function collection()
    {
        return DB::table('clients')->orderByDesc('id')->where('page_id',$this->id)->where('data', $this->day)->select('name', 'email', 'phone', 'code', 'data', 'duplicate')->get();
    }


}
