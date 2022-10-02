<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Section1Controller extends Controller
{
    protected $data = [
        'folder' => 'admin.',
        'Models' => 'App\Models\SectionOne',
        'route' => 'admin/SectionOne',
        'folderBlade' => 'SectionOne',
        'folderImage' => 'SectionOne',
        'fileName' => 'test'
    ];


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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $this->data['Models']::create([
            'title' => ['ar' => $request->title ,'en' => $request->title_en],
            'notes' =>['ar'=> $request->notes,'en'=> $request->notes_en],
        ]);

        return redirect()->back()->withMessage('تم الحفظ  بنجاح', 'my msg');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $this->data['Models']::findorfail($id);


        $data->update([
            'title' => ['ar' => $request->title ,'en' => $request->title_en],
            'notes' =>['ar'=> $request->notes,'en'=> $request->notes_en],
        ]);

        return redirect()->back()->withMessage('تم التعديل  بنجاح', 'my msg');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = $this->data['Models']::findorfail($id);
        $data->delete();
        return redirect()->back()->withMessage('تم الحذف  بنجاح', 'my msg');
    }
}
