<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrandProduk extends Model
{
    use HasFactory;
    protected $table = "brand_produk";
    protected $guarded = ['id'];
}
