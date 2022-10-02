<?php

namespace App\Exports;


use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Style\Color;

class CustomerExport implements FromCollection, WithStyles
{
    use Exportable;

    public function __construct($day)
    {
        $this->day = $day;
    }

    public function styles(Worksheet $sheet)
    {
        $sheet->getStyle('I')->getFont()->setBold(true)->getColor();
    }

    public function collection()
    {
        return DB::table('customers')->orderByDesc('id')->where('data', $this->day)->select('name', 'email', 'phone', 'code', 'sloppy', 'jops', 'type', 'data', 'duplicate')->get();
    }
}
