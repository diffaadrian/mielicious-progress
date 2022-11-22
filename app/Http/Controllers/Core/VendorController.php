<?php

namespace App\Http\Controllers\Core;

use App\Http\Controllers\Controller;
use App\Models\Vendor;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $vendors = new Vendor();
        $vendors = $vendors->get();
        return view("pages.vendor.index", ['vendors' => $vendors]);
    }

    public function create()
    {
        return view("pages.vendor.create");
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'kota' => 'required',
            'alamat' => 'required',
            'tlp' => 'required',
        ]);

        $vendor = new Vendor();
        $vendor->name = $request->name;
        $vendor->kota = $request->kota;
        $vendor->alamat = $request->alamat;
        $vendor->email = $request->email;
        $vendor->tlp = $request->tlp;
        $vendor->save();
        return redirect()->route('vendor.index')->with('message', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $vendor = Vendor::find($id);
        return view('pages.vendor.edit', ['vendor' => $vendor]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'kota' => 'required',
            'alamat' => 'required',
            'tlp' => 'required',
        ]);

        $vendor = Vendor::find($id);
        $vendor->name = isset($request->name) ? $request->name : $vendor->name;
        $vendor->kota = isset($request->kota) ? $request->kota : $vendor->kota;
        $vendor->alamat = isset($request->alamat) ? $request->alamat : $vendor->alamat;
        $vendor->email = isset($request->email) ? $request->email : $vendor->email;
        $vendor->tlp = isset($request->tlp) ? $request->tlp : $vendor->tlp;
        $vendor->save();
        return redirect()->route('vendor.index')->with('message', 'Data berhasil diubah');
    }

    public function delete($id)
    {
        $vendor = Vendor::find($id);
        $vendor->delete();
        return redirect()->route('vendor.index')->with('message', 'Data berhasil dihapus');
    }
}