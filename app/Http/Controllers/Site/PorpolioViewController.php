<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Porfolio;
use App\Models\Kategori;

class PorpolioViewController extends Controller
{
    public function index()
    {
        
        return view('site.porfolio.index');
    }

    public function show($id)
    {
        $kategori = Kategori::all();

        $porpolio = DB::table('porpolio')
                ->join('kategori', 'kategori.id', '=', 'porpolio.kategori_id')
                ->select('porpolio.*', 'kategori.kt')
                ->where('porpolio.id', $id)->first();

        return view('site.porpolio.show', compact('porpolio', 'kategori'));
    }
}
