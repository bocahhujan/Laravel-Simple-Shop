<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{
    use SoftDeletes;
    protected $guarded = ['id'];

    function produk(){
        return $this->belongsToMany( Produk::class , 'brand_produk', 'brand_id', 'produk_id');
    }
}
