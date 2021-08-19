<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Porfolio;
use App\Models\Kategori;
use Illuminate\Http\Request;

class PorfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $porfolio = Porfolio::all();
        
        return view('admin.site.porfolio.index', compact('porfolio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
        $porfolio = Porfolio::all();
        return view('admin.site.porfolio.create', compact('kategori', 'porfolio'));
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
            $data['judul'] = $request->judul;
            $data['gambar'] = $request->gambar;

            $data['gambar'] = $file->getClientOriginalName(); 
        }else{
            $data['kategori_id'] = $request->kategori_id;
            $data['judul'] = $request->judul;
            $data['gambar'] = $request->gambar;

        }

        
        DB::table('galeri')->insert($data);

        return redirect('/galeri')->with('pesan', 'Data sudah berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function show(Galeri $galeri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function edit(Galeri $galeri)
    {
        $kategori = Kategori::all();

        return view('admin.site.galeri.edit', compact('kategori', 'galeri'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Galeri $galeri)
    {
        $file = $request->file('gambar');
        $data = array();

        if($file){
            $destinationPath = 'gambar';
            $file->move($destinationPath,$file->getClientOriginalName());
            
            $data['kategori_id'] = $request->kategori_id;
            $data['judul'] = $request->judul;
            $data['gambar'] = $request->gambar;

            $data['gambar'] = $file->getClientOriginalName(); 
        }else{
            $data['kategori_id'] = $request->kategori_id;
            $data['judul'] = $request->judul;

        }

        
        DB::table('galeri')->where('id', $galeri->id)->update($data);

        return redirect('/galeri')->with('pesan', 'Data sudah berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function destroy(Galeri $galeri)
    {
        Galeri::destroy('id', $galeri->id);

        return redirect('/galeri')->with('pesan', 'Data sudah berhasil Dihapus');

    }
}
