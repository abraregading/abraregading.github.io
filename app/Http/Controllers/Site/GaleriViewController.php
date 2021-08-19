<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Menu;
use App\Models\Galeri;
use App\Models\Kategori;

class GaleriViewController extends Controller
{
    public function index()
    {
        $menu = Menu::all();

        $galeri = DB::table('galeri')
                ->join('kategori', 'kategori.id', '=', 'galeri.kategori_id')
                ->select('galeri.*', 'kategori.kt')
                ->get();

        $kategori = Kategori::all();
        return view('site.galeri.index', compact('kategori', 'galeri','menu'));
    }

    public function show($id)
    {
        $kategori = Kategori::all();

        $porpolio = DB::table('galeri')
                ->join('kategori', 'kategori.id', '=', 'galeri.kategori_id')
                ->select('galeri.*', 'kategori.kt')
                ->where('galeri.id', $id)->first();

        return view('site.galeri.show', compact('galeri', 'kategori'));
    }
}
