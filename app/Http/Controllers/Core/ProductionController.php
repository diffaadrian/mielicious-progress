<?php

namespace App\Http\Controllers\Core;

use App\Http\Controllers\Controller;
use App\Models\Production;
use Illuminate\Http\Request;

class ProductionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $productions = new Production();
        $productions = $productions->get();
        return view("pages.production.index", ['productions' => $productions]);
    }

    public function create()
    {
        return view("pages.production.create");
    }

    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required',
            'order_code' => 'required',
            'name' => 'required',
            'qty' => 'required',
            'tterigu' => 'required',
            'ttapioka' => 'required',
            'garam' => 'required',
            'telur' => 'required',
            'sawi' => 'required',
        ]);

        $production = new Production();
        $production->code = $request->code;
        $production->order_code = $request->order_code;
        $production->name = $request->name;
        $production->qty = $request->qty;
        $production->tterigu = $request->tterigu;
        $production->ttapioka = $request->ttapioka;
        $production->garam = $request->garam;
        $production->telur = $request->telur;
        $production->sawi = $request->sawi;
        $production->save();
        return redirect()->route('production.index')->with('message', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $production = Production::find($id);
        return view('pages.production.edit', ['production' => $production]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            // 'code' => 'required',
            'order_code' => 'required',
            'name' => 'required',
            'qty' => 'required',
            'tterigu' => 'required',
            'ttapioka' => 'required',
            'garam' => 'required',
            'telur' => 'required',
            'sawi' => 'required',
        ]);

        $production = Production::find($id);
        $production->code = isset($request->code) ? $request->code : $production->code;
        $production->order_code = isset($request->order_code) ? $request->order_code : $production->order_code;
        $production->name = isset($request->name) ? $request->name : $production->name;
        $production->qty = isset($request->qty) ? $request->qty : $production->qty;
        $production->tterigu = isset($request->tterigu) ? $request->tterigu : $production->tterigu;
        $production->ttapioka = isset($request->ttapioka) ? $request->ttapioka : $production->ttapioka;
        $production->garam = isset($request->garam) ? $request->garam : $production->garam;
        $production->telur = isset($request->telur) ? $request->telur : $production->telur;
        $production->sawi = isset($request->sawi) ? $request->sawi : $production->sawi;
        $production->save();
        return redirect()->route('production.index')->with('message', 'Data berhasil diubah');
    }

    public function delete($id)
    {
        $production = Production::find($id);
        $production->delete();
        return redirect()->route('production.index')->with('message', 'Data berhasil dihapus');
    }
}
