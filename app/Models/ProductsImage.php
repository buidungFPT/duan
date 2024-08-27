<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductsImage extends Model
{
    use HasFactory;
    protected $table = 'products_image';
    protected $fillable = [
        'products_id', 
        'image_url', 
        'image_type'
       
        
    ];
    public function product(){
        return $this->belongsTo(Products::class, 'products_id','id');  // belongsTo relationship with products table on products_id field  // Product is the name of the model we are referencing.  // products_id is the foreign key in the products_image table.  // products is the name of the foreign key in the products table.  // 'products_id' is the name of the local key in the products_image table.
    }
}
