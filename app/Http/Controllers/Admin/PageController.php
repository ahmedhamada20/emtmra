<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Photo;
use App\Models\Seo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
    protected $data = [
        'folder' => 'admin.',
        'Models' => 'App\Models\Page',
        'route' => 'admin/pages',
        'folderBlade' => 'pages',
        'folderImage' => 'pages',
        'fileName' => 'test'
    ];


    public function index()
    {
        $data = [
            'data' => $this->data['Models']::with(['photo', 'seo'])->paginate(10),
        ];
        return view($this->data['folder'] . $this->data['folderBlade'] . '.index', $data);
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

        DB::beginTransaction();

        try {


            $data = $this->data['Models']::create([
                'name_page' => $request->name_page,
                'notes' => $request->notes,
            ]);

            if ($file = $request->file('cover')) {
                $file_name = $file->getClientOriginalName();
                $file_name_Extension = $request->file('cover')->getClientOriginalExtension();
                $file_to_store = time() . '_' . explode('.', $file_name)[0] . '_.' . $file_name_Extension;

                if ($file->move('admin/pictures/' . $this->data['folderBlade'] . '/' . $data->id, $file_to_store)) {
                    Photo::updateOrCreate([
                        'phototable_id' => $data->id,
                        'phototable_type' => $this->data['Models'],
                    ], [
                        'Filename' => $file_to_store,
                        'phototable_id' => $data->id,
                        'phototable_type' => $this->data['Models'],
                    ]);
                }
            }


            Seo::updateOrCreate([
                'seotable_type' => $this->data['Models'],
                'seotable_id' => $data->id,
            ], [
                'notes' => $request->seo_notes,
                'seotable_type' => $this->data['Models'],
                'seotable_id' => $data->id,
            ]);

            DB::commit();

            return redirect($this->data['route'])->withMessage('تم الحفظ بنجاح', 'my msg');

        } catch (\Exception $exception) {
            DB::rollback();
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
     * @return \Illuminate\Http\Response;
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

        DB::beginTransaction();
        try {

            $data = $this->data['Models']::findorfail($request->id);
            $data->update([
                'name_page' => $request->name_page,
                'notes' => $request->notes ?? $data->notes,
            ]);

            // Update One Photo
            if ($file = $request->file('cover')) {
                File::delete(public_path('admin/pictures/' . $this->data['folderImage'] . '/' . $request->id . '/' . $request->oldfile));
                $file_name = $file->getClientOriginalName();
                $file_name_Extension = $request->file('cover')->getClientOriginalExtension();
                $file_to_store = time() . '_' . explode('.', $file_name)[0] . '_.' . $file_name_Extension;
                if ($file->move('admin/pictures/' . $this->data['folderImage'] . '/' . $request->id, $file_to_store)) {
                    Photo::updateOrCreate([
                        'phototable_id' => $data->id,
                        'phototable_type' => $this->data['Models'],
                    ], [
                        'Filename' => $file_to_store,
                        'phototable_id' => $data->id,
                        'phototable_type' => $this->data['Models'],
                    ]);
                }
            }

            Seo::updateOrCreate([
                'seotable_type' => $this->data['Models'],
                'seotable_id' => $data->id,
            ], [
                'notes' => $request->seo_notes ?? $data->message->notes,
                'seotable_type' => $this->data['Models'],
                'seotable_id' => $data->id,
            ]);
            DB::commit();

            return redirect()->back()->withMessage('تم التعديل بنجاح', 'my msg');
        } catch (\Exception $exception) {
            DB::rollback();
            return redirect()->back();
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        try {
            $this->data['Models']::destroy($request->id);
            if ($request->oldfile) {
                Storage::disk('public_download')->deleteDirectory($this->data['folderImage'] . '/' . $request->id);
                Photo::where('phototable_id', $request->id)->where('phototable_type', $this->data['Models'])->delete();
            }

            if ($request->oldSeo) {
                Seo::where('seotable_type', $this->data['Models'])->where('seotable_id', $request->id)->delete();
            }

            return redirect($this->data['route'])->withMessage('تم الحذف بنجاح', 'my msg');
        } catch (\Exception $exception) {
            DB::rollback();
            return redirect()->back();
        }
    }
}
