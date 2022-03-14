<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        
        $produk = Produk::all();
        return view('produk.list' , ['produk' => $produk]);
    }

    public function detail($url){
        $produk = Produk::where('url' , '=' , $url)->first();
        $populer = Produk::inRandomOrder()->limit(4)->get();
        $terkait = Produk::inRandomOrder()->limit(4)->get();
        return view('produk.detail' , ['produk' => $produk , 'populer' => $populer , 'terkait' => $terkait ]);
    }
}
