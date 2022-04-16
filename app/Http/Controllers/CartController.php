<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\shipping;

class CartController extends Controller
{
     /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        $populer = Produk::inRandomOrder()->limit(4)->get();
        $terkait = Produk::inRandomOrder()->limit(4)->get();
        
        return view('cart' , compact('populer' , 'terkait'));
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function addToCart(Request $request)
    {   
        $id = $request->get('id');
        $qty = $request->get('qty');
        $product = Produk::findOrFail($id);
        $harga = $product->price;
        
        if(count($harga) > 1 ){

            $h_dt = $product->price->where('qty' , '<=' , $qty)->sortBy('qty')->last();
    
            $harga_j = $h_dt['price'];
            

        }else{
           
            $harga_j = $harga[0]['price'];

        }

        $cart = session()->get('cart', []);
  
        if(isset($cart[$id])) {
            $cart[$id]['qty']++;
        } else {
            $img = $product->image[0];
            $cart[$id] = [
                "nama" => $product->title,
                "qty" =>  $qty,
                "harga" => $harga_j,
                "image" => $img->img
            ];
        }
          
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["qty"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }

    public function checkout(){
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
        
        return view('checkout' , compact('populer' , 'shipping' , 'terkait' ,'shipping_now'));
    }
}
