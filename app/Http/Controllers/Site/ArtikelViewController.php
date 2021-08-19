<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Artikel;
use App\Models\menu;
use App\Models\Kategori;
use App\Models\Komentar;

class ArtikelViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikel = Artikel::paginate(6); 
        $artikelrandom = Artikel::limit(1)->inRandomOrder()->get();   
        $kategori = Kategori::all();

        return view('site.artikel.index', compact('kategori', 'artikel','artikelrandom'));
    }

   
    public function show($artikel_id)
    {
        $kategori = Kategori::all();
        $komentar = Komentar::where('artikel_id', $artikel_id)->get();

        $artikel = Artikel::where('artikel.id', $artikel_id)->first();
                
        
        return view('site.artikel.show', compact('artikel', 'kategori', 'komentar'));
    }

    
    public function artikel_kategori($kategori_id)
    {     
        $kategori = Kategori::all();
        $artikelrandom = Artikel::limit(1)->inRandomOrder()->get();

        $artikelmenu =  Artikel::where('kategori_id', $kategori_id)->paginate(6);
                

        return view('site.artikel.artikel_menu', compact('artikelmenu', 'kategori', 'artikelrandom'));
        
    }



    public function komentar(Request $request, $artikel_id)
    {
        DB::table('komentar')->insert([
            'artikel_id'=>$artikel_id,
            'nama' => $request->nama,
            'email' => $request->email,
            'komentar' => $request->komentar,
            'created_at'=> date('Y-m-d H:i:s')
        ]);

        return redirect('/artikel_v/detail/'. $artikel_id);
    }
}
