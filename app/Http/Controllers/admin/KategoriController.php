<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = Kategori::all();
        return view('admin.produk.kategori' , ['kategori' => $kategori]);
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
            'peren' => 'required'
        ]);
        
        
        $kategori = new Kategori();
        $kategori->title = $request->get('title');
        $kategori->peren = $request->get('peren');
        $kategori->description = $request->get('desc');
        $kategori->url = Str::slug($request->get('title'));
        $kategori->save();

        return redirect()->route('admin.produk.kategori')->with( 'message' ,'Data berhasil di simpan' );
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
        $kategori = Kategori::all();
        $kategori_d = Kategori::find($id);
        return view('admin.produk.kategoriedit' , ['kategori' => $kategori , 'detail' => $kategori_d ]);
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
            'peren' => 'required'
        ]);
        
        
        $kategori = Kategori::find($request->get('id'));
        $kategori->title = $request->get('title');
        $kategori->peren = $request->get('peren');
        $kategori->description = $request->get('desc');
        $kategori->url = Str::slug($request->get('title'));
        $kategori->save();

        return redirect()->route('admin.produk.kategori')->with( 'message' ,'Data berhasil di Ubah' );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $l= Kategori::find($id);
      $l->delete();
      return redirect()->route('admin.produk.kategori')->with( 'message' ,'Data berhasil di Hapus' );

    }
}
