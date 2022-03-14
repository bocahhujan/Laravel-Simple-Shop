<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Produk;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $produk = Produk::all();
        $populer = Produk::inRandomOrder()->limit(8)->get();
        $brand = Brand::find(3);
        $brand_2 = Brand::find(4);
        $brand_bjs = $brand->produk->random(3);
        //$brand_aura = $brand_2->produk->random(3);
        $brand_aura = [];
        $data = [
                    'produk' => $produk , 
                    'populer' => $populer ,
                    'brand_bjs' => $brand_bjs ,
                    'brand_aura' => $brand_aura ,
                ];
        //dd($data);
        return view('home' , $data);
    }
}
