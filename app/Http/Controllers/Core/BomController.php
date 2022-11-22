<?php

namespace App\Http\Controllers\Core;

use App\Http\Controllers\Controller;
use App\Models\Bom;
use Illuminate\Http\Request;

class BomController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $boms = new Bom();
        $boms = $boms->get();
        return view("pages.bom.index", ['boms' => $boms]);
    }

    public function create()
    {
        return view("pages.bom.create");
    }

    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required',
            'name' => 'required',
            'tterigu' => 'required',
            'ttapioka' => 'required',
            'garam' => 'required',
            'telur' => 'required',
            'sawi' => 'required',
            'price' => 'required',
        ]);

        $bom = new Bom();
        $bom->code = $request->code;
        $bom->name = $request->name;
        $bom->tterigu = $request->tterigu;
        $bom->ttapioka = $request->ttapioka;
        $bom->garam = $request->garam;
        $bom->telur = $request->telur;
        $bom->sawi = $request->sawi;
        $bom->price = $request->price;
        $bom->save();
        return redirect()->route('bom.index')->with('message', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $bom = Bom::find($id);
        return view('pages.bom.edit', ['bom' => $bom]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            // 'code' => 'required',
            'name' => 'required',
            'tterigu' => 'required',
            'ttapioka' => 'required',
            'garam' => 'required',
            'telur' => 'required',
            'sawi' => 'required',
            'price' => 'required',
        ]);

        $bom = Bom::find($id);
        $bom->code = isset($request->code) ? $request->code : $bom->code;
        $bom->name = isset($request->name) ? $request->name : $bom->name;
        $bom->tterigu = isset($request->tterigu) ? $request->tterigu : $bom->tterigu;
        $bom->ttapioka = isset($request->ttapioka) ? $request->ttapioka : $bom->ttapioka;
        $bom->garam = isset($request->garam) ? $request->garam : $bom->garam;
        $bom->telur = isset($request->telur) ? $request->telur : $bom->telur;
        $bom->sawi = isset($request->sawi) ? $request->sawi : $bom->sawi;
        $bom->price = isset($request->price) ? $request->price : $bom->price;
        $bom->save();
        return redirect()->route('bom.index')->with('message', 'Data berhasil diubah');
    }

    public function delete($id)
    {
        $bom = Bom::find($id);
        $bom->delete();
        return redirect()->route('bom.index')->with('message', 'Data berhasil dihapus');
    }
}
