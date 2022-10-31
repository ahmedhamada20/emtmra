<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Section2Controller extends Controller
{
    protected $data = [
        'folder' => 'admin.',
        'Models' => 'App\Models\SectionTwo',
        'route' => 'admin/SectionTwo',
        'folderBlade' => 'SectionTwo',
        'folderImage' => 'SectionTwo',
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
        if($request->file('cover_photo')){
            $file= $request->file('cover_photo');
            $filenamePage= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('admin/assets/section2'), $filenamePage);
        }

        $data = $this->data['Models']::create([
            'title' => ['ar' => $request->title ,'en' => $request->title_en],
            'notes' =>['ar'=> $request->notes,'en'=> $request->notes_en],
            'cover_photo' => $filenamePage,
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
        if($request->file('cover_photo')){
            $file= $request->file('cover_photo');
            $filenamePage= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('admin/assets/section2'), $filenamePage);
        }

        $data->update([
            'title' => ['ar' => $request->title ,'en' => $request->title_en],
            'notes' =>['ar'=> $request->notes,'en'=> $request->notes_en],
            'cover_photo' => $filenamePage?? $data->cover_photo , 
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
