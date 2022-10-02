<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Section6Controller extends Controller
{
    protected $data = [
        'folder' => 'admin.',
        'Models' => 'App\Models\SectionSix',
        'route' => 'admin/SectionSix',
        'folderBlade' => 'SectionSix',
        'folderImage' => 'SectionSix',
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
        if($request->file('photo')){
            $file= $request->file('photo');
            $filenamePage= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('admin/assets/section6'), $filenamePage);
        }

        $this->data['Models']::create([
            'title' => ['ar' => $request->title ,'en' => $request->title_en],
       
           
            'photo' => $filenamePage,
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
        if($request->file('photo')){
            $file= $request->file('photo');
            $filenamePage= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('admin/assets/section6'), $filenamePage);
        }

        $data->update([
            'title' => ['ar' => $request->title ,'en' => $request->title_en],
      
            'photo' => $filenamePage ?? $data->photo,
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
