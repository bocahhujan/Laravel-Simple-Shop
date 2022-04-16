<?php

namespace App\Http\Controllers;

use App\Models\shipping;
use Illuminate\Http\Request;

class ShippingController extends Controller
{
    public function json($id){
        $sp = shipping::find($id);
        session(['shipping_id' => $id]);
        return response()->json($sp);
    }
}
