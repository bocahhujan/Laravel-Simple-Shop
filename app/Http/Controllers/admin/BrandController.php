<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brand = Brand::all();
        return view('admin.produk.brand' , ['brand' => $brand]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        ]);
        
        
        $kategori = new Brand();
        $kategori->title = $request->get('title');
        $kategori->description = $request->get('desc');
        $kategori->url = Str::slug($request->get('title'));
        $kategori->save();

        return redirect()->route('admin.produk.brand')->with( 'message' ,'Data berhasil di simpan' );
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
        $brand = Brand::all();
        $brand_d = Brand::find($id);
        return view('admin.produk.brandedit' , ['brand' => $brand , 'detail' => $brand_d]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required',
            'title' => 'required',
        ]);
        
        
        $kategori = Brand::find($request->get('id'));
        $kategori->title = $request->get('title');
        $kategori->description = $request->get('desc');
        $kategori->url = Str::slug($request->get('title'));
        $kategori->save();

        return redirect()->route('admin.produk.brand')->with( 'message' ,'Data berhasil di simpan' );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $l= Brand::where('id', $id)->delete();
        return redirect()->route('admin.produk.brand')->with( 'message' ,'Data berhasil di Hapus' );
    }
}
