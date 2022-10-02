<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class FormController extends Controller
{
    protected $data = [
        'folder' => 'admin.',
        'Models' => 'App\Models\information',
        'route' => 'admin/information',
        'folderBlade' => 'information',
        'folderImage' => 'information',
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

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $data = $this->data['Models']::create([
                'labale' => $request->labale,
                'type_input' => $request->type_input,
                'required_input' => $request->required_input,
                'page_id' => $request->page_id,
            ]);

            return redirect()->back()->withMessage('تم الحفظ بنجاح', 'my msg');
        } catch (\Exception $exception) {
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
        $data = [
            'data' => $this->data['Models']::where('page_id', $id)->with(['page'])->paginate(50),
            'pageId' => Page::findorfail($id),
        ];
        return view($this->data['folder'] . $this->data['folderBlade'] . '.index', $data);
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
        try {
            $data = $this->data['Models']::findorfail($request->id);
            $data->update([
                    'labale' => $request->labale,
                    'type_input' => $request->type_input,
                    'required_input' => $request->required_input,
                    'page_id' => $request->page_id,
                ]);

            return redirect()->back()->withMessage('تم التعديل بنجاح', 'my msg');
        } catch (\Exception $exception) {
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
        $this->data['Models']::destroy($request->id);
        return redirect()->back()->withMessage('تم الحذف بنجاح', 'my msg');

    }
}
