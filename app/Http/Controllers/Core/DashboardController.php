<?php

namespace App\Http\Controllers\Core;

use App\Http\Controllers\Controller;
use App\Models\Material;
use App\Models\Product;
use App\Models\Production;
use App\Models\Bom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        // $name = $request->session()->get('name');
        // $name = Auth::user()->id;
        $name = Auth::user()->name;
        $products = Product::count();
        $materials = Material::count();
        $productions = Production::count();
        $boms = Bom::count();
        $data = ['materials' => $materials, 'products' => $products, 'productions' => $productions, 'boms' => $boms];
        // dd($data);
        return view('home')->with('data', $data);
    }
}