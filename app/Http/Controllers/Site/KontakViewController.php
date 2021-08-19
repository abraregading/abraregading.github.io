<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Proyek;
use App\Models\Kategori;

class KontakViewController extends Controller
{
    public function index()
    {
       
        return view('site.kontak.index');
    }

    
}
