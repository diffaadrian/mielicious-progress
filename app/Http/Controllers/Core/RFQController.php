<?php

namespace App\Http\Controllers\Core;

use App\Http\Controllers\Controller;
use App\Models\RFQ;
use App\Models\Vendor;
use Illuminate\Http\Request;

class RFQController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $rfqs = new RFQ();
        $rfqs = $rfqs->leftJoin('vendors', 'vendors.id', '=', 'r_f_q_s.vendor_id');
        $rfqs = $rfqs->select('r_f_q_s.*', 'vendors.name as vendor_name');
        $rfqs = $rfqs->get();
        return view("pages.rfq.index", ['rfqs' => $rfqs]);
    }

    public function create()
    {
        $vendor = Vendor::all();
        return view("pages.rfq.create")->with(['vendor' => $vendor]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'referensi' => 'required',
            'tanggal_order' => 'required',
            'qty' => 'required',
        ]);

        $rfq = new RFQ();
        $rfq->vendor_id = $request->vendor_id; // nama vendor
        $rfq->referensi = $request->referensi;
        $rfq->tanggal_order = $request->tanggal_order;
        $rfq->qty = $request->qty;
        $rfq->harga = $request->harga;
        // $rfq->vendor_id = $request->vendor_id; // harga vendor
        $rfq->total = $request->total;
        $rfq->save();
        return redirect()->route('rfq.index')->with('message', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $rfq = RFQ::find($id);
        $vendor = Vendor::all();
        return view('pages.rfq.edit', ['rfq' => $rfq, 'vendor' => $vendor]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'referensi' => 'required',
            'tanggal_order' => 'required',
            'qty' => 'required',
        ]);

        $rfq = RFQ::find($id);
        $rfq->vendor_id = isset($request->vendor_id) ? $request->vendor_id : $rfq->vendor_id;
        $rfq->referensi = isset($request->referensi) ? $request->referensi : $rfq->referensi;
        $rfq->tanggal_order = isset($request->tanggal_order) ? $request->tanggal_order : $rfq->tanggal_order;
        $rfq->qty = isset($request->qty) ? $request->qty : $rfq->qty;
        $rfq->harga = isset($request->harga) ? $request->harga : $rfq->harga;
        $rfq->total = isset($request->total) ? $request->total : $rfq->total;
        $rfq->save();
        return redirect()->route('rfq.index')->with('message', 'Data berhasil diubah');
    }

    public function delete($id)
    {
        $rfq = RFQ::find($id);
        $rfq->delete();
        return redirect()->route('rfq.index')->with('message', 'Data berhasil dihapus');
    }
}