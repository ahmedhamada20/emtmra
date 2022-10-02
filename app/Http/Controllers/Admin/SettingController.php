<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Seo;
use App\Models\Setting;
use Illuminate\Http\Request;
use function PHPUnit\Framework\isEmpty;

class SettingController extends Controller
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

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

        // dd($request->all());
        $pageId = Setting::findorfail($request->id);


        if ($pageId->page_id != null) {
            if ($request->file('photo_navbar')) {
                $file = $request->file('photo_navbar');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('admin/assets/setting'), $filename);
            }


            Setting::updateOrCreate([
                'id' => $request->id,
            ], [
                'name_site' => $request->name_site,
                'notes' => $request->notes,
                'phone' => $request->phone,
                'facebook' => $request->facebook,
                'url' => $request->url,
                'photo_navbar' => $filename,
            ]);
        } else {
            if ($request->file('photo_navbar')) {
                $file = $request->file('photo_navbar');
                $filenamePage = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('admin/assets/setting'), $filenamePage);
            }

            if ($request->file('photo_cover')) {
                $file = $request->file('photo_cover');
                $filenamephotoCover = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('admin/assets/setting'), $filenamephotoCover);
            }
            if ($request->file('photo_site')) {
                $file = $request->file('photo_site');
                $filenamephotoSite = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('admin/assets/setting'), $filenamephotoSite);
            }


            Setting::updateOrCreate([
                'id' => $request->id,
            ], [
                'name_site' =>['ar' =>  $request->name_site,'en' =>  $request->name_site_en],
                'notes' => $request->notes,
                'phone' => $request->phone,
                'facebook' => $request->facebook,
                'title' => ['ar'=> $request->title , 'en'=>$request->title_en],
                'url' => $request->url,
                'photo_navbar' => $filenamePage ?? $pageId->photo_navbar,
                'photo_cover' => $filenamephotoCover ?? $pageId->photo_cover,
                'photo_site' => $filenamephotoSite ?? $pageId->photo_site,
            ]);


           
            Seo::updateOrCreate([
                'seotable_type' => 'App\Models\Setting',
                'seotable_id' => $request->id,

            ], [
                'notes' => $request->seo,
                'seotable_type' => 'App\Models\Setting',
                'seotable_id' => $request->id,
            ]);

            return redirect()->back()->withMessage('تم التعديل  بنجاح', 'my msg');
        }
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
