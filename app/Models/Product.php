<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'p_name',
        'p_desc',
        'p_price',
        'slug',
    ];

    public function productCategory()
    {
        return $this->belongsTo('App\Models\ProductCategory','category_id');
    }

    public function productImages()
    {
        return $this->hasMany('App\Models\ProductImage');
    }
}
