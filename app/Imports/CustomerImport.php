<?php

namespace App\Imports;

use App\Models\Customer;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CustomerImport implements ToCollection, WithChunkReading, ShouldQueue, WithHeadingRow
{

    private $dataCustmer;



    public function __construct()
    {
        $this->dataCustmer = Customer::select('*')->get();
    }

    public function collection(Collection  $rows)
    {
        foreach ($rows as $row) {

            $duplicate = $this->dataCustmer->where('phone', $row['phone'])->first();


            if ($duplicate) {
                $update = $this->dataCustmer->findorfail($duplicate->id);
                $update->duplicate = $duplicate->duplicate + 1;
                $update->save();
            } else {
                $newCutomer = new Customer();
                $newCutomer->name = $row['name'] ?? null;
                $newCutomer->email = $row['email'] ?? null;
                $newCutomer->phone = $row['phone'] ?? null;
                $newCutomer->code = $row['code'] ?? null;
                $newCutomer->sloppy = $row['sloppy'] ?? null;
                $newCutomer->jops = $row['jops'] ?? null;
                $newCutomer->type = $row['type'] ?? null;
                $newCutomer->data = date('Y-m-d');
                $newCutomer->time = date('H');
                $newCutomer->save();
            }
        }
    }

    public function batchSize(): int
    {
        return 100;
    }

    public function chunkSize(): int
    {
        return 100;
    }
}
