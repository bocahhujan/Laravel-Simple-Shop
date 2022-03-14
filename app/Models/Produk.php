<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produk extends Model
{
    use SoftDeletes;
    protected $guarded = ['id'];

    function kategori(){
        return $this->belongsToMany( Kategori::class , 'kategori_produk', 'produk_id', 'kategori_id');
    }

    function brand(){
        return $this->belongsToMany( Brand::class , 'brand_produk', 'produk_id', 'brand_id');
    }

    function price(){
        return $this->hasMany(PriceProduk::class ,'produk_id' , 'id');
    }

    function image(){
        return $this->hasMany(ImageProduk::class ,'produk_id' , 'id');
    }
}
