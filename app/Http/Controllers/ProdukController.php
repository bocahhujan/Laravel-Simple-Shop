<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\shipping;
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
        $shipping = shipping::all();
        //dd(session()->has('shipping_id'));
        if(session()->has('shipping_id')){
            $shipping_now = shipping::find(session()->get('shipping_id'));
            //dd($shipping_now);
        }else{
            $shipping_now = shipping::find(1);
        }
        
        return view('produk.detail' , ['produk' => $produk , 'populer' => $populer , 'terkait' => $terkait , 'shipping' => $shipping  , 'shipping_now' => $shipping_now ]);
    }
}
