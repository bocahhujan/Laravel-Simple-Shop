<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\BrandProduk;
use App\Models\ImageProduk;
use App\Models\Kategori;
use App\Models\KategoriProduk;
use App\Models\PriceProduk;
use App\Models\Produk;
use App\Models\ShippingProduk;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = Produk::all();
        //dd($produk);
        return view('admin.produk.list', [ 'produk' => $produk ]);
    }


    public function search(Request $request)
    {
        $validated = $request->validate([
            'search' => 'required',
        ]);
        $produk = Produk::where('title' , 'LIKE' , "%{$request->get('search')}%")->get();
        //dd($produk);
        return view('admin.produk.list', [ 'produk' => $produk ]);
    }

    public function upload(Request $request){
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
          ]);

          if ($request->file('file')) {
              $imagePath = $request->file('file');
              $imageName = time().'-'. $imagePath->getClientOriginalName();
  
              $path = $request->file('file')->move(public_path('assets/uploads'), $imageName);
          }
  

          return response()->json('assets/uploads/'.$imageName);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
        $brand =  Brand::all();
        return view('admin.produk.add', ['kategori' => $kategori , 'brand' => $brand ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $validated = $request->validate([
            'title' => 'required',
            'sort' => 'required' ,
            'desc' => 'required' ,
            'price' => 'required' ,
            'qty' => 'required' ,
            'weight' => 'required' ,
            'd_length' => 'required' ,
            'd_width' => 'required' ,
            'd_height' => 'required' ,
            'kategori' => 'required' ,
            'brand' => 'required' ,
            'image_primer' => 'required' ,
        ]);

        $produk = new Produk();
        $produk->title = $request->get('title');
        $produk->summary = $request->get('sort');
        $produk->description = $request->get('desc');
        $produk->url = Str::slug($request->get('title'));
        $produk->save();

        $pr_id = $produk->id;

        $kat = $request->get('kategori');
        //dd($kat);
        if(is_array($kat)){
            foreach($kat as $k){
                $ktp = new KategoriProduk();
                $ktp->produk_id = $pr_id;
                $ktp->kategori_id = $k;
                $ktp->save();
            }
        }else{
            $ktp = new KategoriProduk();
            $ktp->produk_id = $pr_id;
            $ktp->kategori_id = $kat;
            $ktp->save();
        }

        $brand = $request->get('brand');
        
        $bp = new BrandProduk();
        $bp->produk_id = $pr_id;
        $bp->brand_id = $brand;
        $bp->save();
        

        $harga = $request->get('price');
        $qty_h = $request->get('qty');
        $qth_h_n = 0;

        foreach($harga as $hp ){
            $hpq = new PriceProduk();
            $hpq->produk_id = $pr_id;
            $hpq->price = $hp;
            $hpq->qty = $qty_h[$qth_h_n];
            $hpq->save();

            $qth_h_n++;
        }


        $kir = new ShippingProduk();
        $kir->produk_id = $pr_id;
        $kir->weight = $request->get('weight');
        $kir->d_length = $request->get('d_length');
        $kir->d_width = $request->get('d_width');
        $kir->d_height = $request->get('d_height');
        $kir->save();

        $img = new ImageProduk();
        $img->produk_id =  $pr_id;
        $img->img =  $request->get('image_primer');
        $img->type = "primary";
        $img->save();

        if($request->get('galery')){
            $img_g = $request->get('galery');
            foreach($img_g as $ig){
                $img = new ImageProduk();
                $img->produk_id =  $pr_id;
                $img->img =  $ig;
                $img->type = "galery";
                $img->save();
            }
        }


        return redirect()->route('admin.produk')->with( 'message' ,'Data berhasil di simpan' );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produk = Produk::find($id);
        $kategori = Kategori::all();
        $brand =  Brand::all();
        return view('admin.produk.edit', [ 'produk' => $produk , 'kategori' => $kategori , 'brand' => $brand ]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $l= Produk::find($id);
        $l->delete();
        return redirect()->route('admin.produk')->with( 'message' ,'Data berhasil di Hapus' );
    }
}
