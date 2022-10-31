<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;


class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function pagesRegister(Request $request)
    {

        $eubacterialClients = DB::table('clients')->where('page_id',$request->page_id)->where('phone', $request->phone)->first();

        if ($eubacterialClients){
            $updateClient = Client::findorfail($eubacterialClients->id);
            $updateClient->update([
                'duplicate' => $eubacterialClients->duplicate + 1,
            ]);
            alert()->success('عمليه ناجحه', 'هل تم تسجيل البيانات من قبل وسيتم التواصل خلال الساعات القادمه');
            return redirect()->back();
        }else{
            Client::create([
                'name' => $request->name ?? null,
                'email' => $request->email ?? null,
                'phone' => $request->phone ?? null,
                'code' => $request->code ?? null,
                'sloppy' => $request->sloppy ?? null,
                'jops' => $request->jops ?? null,
                'type' => $request->type ?? null,
                'data' => date('Y-m-d'),
                'time' => date('H'),
                'duplicate' => $request->duplicate ?? null,
                'page_id' => $request->page_id,
            ]);

            alert()->success('عمليه ناجحه', 'تم تسجيل بيانات بنجاح');
            return redirect()->back();
        }


    }


    public function store(Request $request)
    {
        $eubacterial = DB::table('customers')->where('phone', $request->phone)->first();

        if ($eubacterial) {

            $update = Customer::findorfail($eubacterial->id);
            $update->update([
                'duplicate' => $eubacterial->duplicate + 1,
            ]);

            alert()->success('عمليه ناجحه', 'هل تم تسجيل البيانات من قبل وسيتم التواصل خلال الساعات القادمه');
            return redirect()->back();
        } else {
            Customer::create([
                'name' => $request->name ?? null,
                'email' => $request->email ?? null,
                'phone' => $request->phone ?? null,
                'code' => $request->country ?? null,
                'sloppy' => $request->sloppy ?? null,
                'jops' => $request->jops ?? null,
                'type' => $request->type ?? null,
                'data' => date('Y-m-d'),
                'time' => date('H'),
                'duplicate' => $request->duplicate ?? null,
            ]);

            alert()->success('عمليه ناجحه', 'تم تسجيل بيانات بنجاح');
            return redirect()->back();
        }


    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
