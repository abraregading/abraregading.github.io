<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Artikel;
use App\Models\Kategori;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikel = Artikel::with('kategori')->get();
        
        return view('admin.site.artikel.index', compact('artikel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = DB::table('kategori')->get();
        $menu = DB::table('menu')->get();

        return view('admin.site.artikel.create', compact('kategori', 'menu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('gambar');
        $data = array();

        if($file){
            $destinationPath = 'gambar';
            $file->move($destinationPath,$file->getClientOriginalName());
            
            $data['kategori_id'] = $request->kategori_id;
            $data['user_id'] = \Auth::user()->id;
            $data['judul'] = $request->judul;
            $data['isi1'] = $request->isi1;
            $data['isi2'] = $request->isi2;
            $data['isi3'] = $request->isi3;
            $data['quote'] = $request->quote;
            $data['created_at'] = date('Y-m-d H:i:s');
            $data['updated_at'] = date('Y-m-d H:i:s');

            $data['gambar'] = $file->getClientOriginalName(); 
        }else{
            $data['kategori_id'] = $request->kategori_id;
            $data['user_id'] = \Auth::user()->id;
            $data['judul'] = $request->judul;
            $data['isi1'] = $request->isi1;
            $data['isi2'] = $request->isi2;
            $data['isi3'] = $request->isi3;
            $data['quote'] = $request->quote;
            $data['created_at'] = date('Y-m-d H:i:s');
            $data['updated_at'] = date('Y-m-d H:i:s');

        }

        
        DB::table('artikel')->insert($data);

        return redirect('/artikel')->with('pesan', 'Data sudah berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function show(Artikel $artikel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function edit(Artikel $artikel)
    {
        $menu = DB::table('menu')->get();
        $kategori = DB::table('kategori')->get();

        return view('admin.site.artikel.edit', compact('kategori', 'artikel', 'menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artikel $artikel)
    {
        $file = $request->file('gambar');
        $data = array();

        if($file){
            $destinationPath = 'gambar';
            $file->move($destinationPath,$file->getClientOriginalName());
            
            $data['kategori_id'] = $request->kategori_id;
            $data['user_id'] = \Auth::user()->id;
            $data['judul'] = $request->judul;
            $data['isi1'] = $request->isi1;
            $data['isi2'] = $request->isi2;
            $data['isi3'] = $request->isi3;
            $data['quote'] = $request->quote;
            $data['updated_at'] = date('Y-m-d H:i:s');

            $data['gambar'] = $file->getClientOriginalName(); 
        }else{
            $data['kategori_id'] = $request->kategori_id;
            $data['judul'] = $request->judul;
            $data['isi1'] = $request->isi1;
            $data['isi2'] = $request->isi2;
            $data['isi3'] = $request->isi3;
            $data['quote'] = $request->quote;
            $data['updated_at'] = date('Y-m-d H:i:s');


        }

        
        DB::table('artikel')->where('id', $artikel->id)->update($data);

        return redirect('/artikel')->with('pesan', 'Data sudah berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artikel $artikel)
    {
        Artikel::destroy('id', $artikel->id);

        return redirect('/artikel')->with('pesan', 'Data sudah berhasil Dihapus');
    }
}
