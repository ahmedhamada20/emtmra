<?php

namespace App\Http\Controllers\Admin;

use App\Exports\ClientExport;
use App\Exports\CustomerExport;
use App\Http\Controllers\Controller;
use App\Imports\ClientImport;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class ClientController extends Controller
{
    protected $data = [
        'folder' => 'admin.',
        'Models' => 'App\Models\Client',
        'route' => 'admin/client',
        'folderBlade' => 'client',
        'folderImage' => 'client',
        'fileName' => 'test'
    ];


    public function show($id)
    {
        $data = [
            'data' => DB::table('clients')->orderByDesc('id')->where('page_id', $id)->paginate(20),
            'page' => Page::findorfail($id),
            'days' => DB::table('clients')->orderByDesc('id')->where('page_id', $id)->where('data', date('Y-m-d'))->paginate(20),
            'times' => DB::table('clients')->orderByDesc('id')->where('page_id', $id)->where('time', date('H'))->paginate(20),
        ];
        return view($this->data['folder'] . $this->data['folderBlade'] . '.index', $data);
    }

    public function clientUpload(Request $request)
    {
        $file = $request->file('filename');
        Excel::queueImport(new ClientImport($request->page_id), $file);
        return redirect()->back();
    }

    public function clientDownload(Request $request)
    {
        return Excel::download(new ClientExport($request->day,$request->page_id), 'client.xlsx');
    }
}
