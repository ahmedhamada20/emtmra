<?php

namespace App\Imports;

use App\Models\Client;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ClientImport implements ToCollection, WithChunkReading, ShouldQueue, WithHeadingRow
{

    use Exportable;

    private $clinet;

    public function __construct(int $page_id)
    {
        $this->page_id = $page_id;
        $this->clinet = DB::table('clients')->where('page_id', $this->page_id)->select(['id', 'phone', 'duplicate'])->get();

    }

    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            $duplicate = $this->clinet->where('phone', $row['phone'])->first();

            if ($duplicate) {
                DB::table('clients')->where('id', $duplicate->id)->update([
                    'duplicate' => $duplicate->duplicate + 1,
                ]);


            } else {
                $newCutomer = new Client();
                $newCutomer->name = $row['name'] ?? null;
                $newCutomer->email = $row['email'] ?? null;
                $newCutomer->phone = $row['phone'] ?? null;
                $newCutomer->code = $row['code'] ?? null;
                $newCutomer->sloppy = $row['sloppy'] ?? null;
                $newCutomer->jops = $row['jops'] ?? null;
                $newCutomer->type = $row['type'] ?? null;
                $newCutomer->data = date('Y-m-d');
                $newCutomer->time = date('H');
                $newCutomer->page_id = $this->page_id;
                $newCutomer->save();
            }

        }
    }

    public function chunkSize(): int
    {
        return 200;
    }
}
