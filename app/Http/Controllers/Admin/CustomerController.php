<?php

namespace App\Http\Controllers\Admin;

use App\Exports\CustomerExport;
use App\Exports\CustomerTimeExport;
use App\Http\Controllers\Controller;
use App\Imports\CustomerImport;
use App\Models\Customer;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Yajra\DataTables\Facades\DataTables;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Customer::select('*')->orderBy('id', 'DESC');
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {

                    $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';

                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.customer.index');
    }

    public function custmoer_time_data(Request $request)
    {

    
        if ($request->ajax()) {
            $data = Customer::select('*')->orderBy('id', 'DESC')->whereData(date('Y-m-d'))->where('time',date('H'));
            return DataTables::of($data)

                ->addIndexColumn()
                ->addColumn('action', function ($row) {

                    $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';

                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.customer.time_data');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if ($request->ajax()) {
            $data = Customer::select('*')->orderBy('id', 'DESC')->whereData(date('Y-m-d'));
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {

                    $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';

                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.customer.create');
    }


    public function upload_custmoer()
    {
        return view('admin.customer.timecustomer');
    }


    public function downloadExel(Request $request)
    {
        return Excel::download(new CustomerExport($request->day), 'Customer.xlsx');
    }


    public function downloadExelTime()
    {
        return Excel::download(new CustomerTimeExport(date('H')), 'CustomerTime.xlsx');
    }
    
    public function updated(Request $request)
    {
        $file = $request->file('filename');
        Excel::queueImport(new CustomerImport(), $file);
        return redirect()->back();
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
