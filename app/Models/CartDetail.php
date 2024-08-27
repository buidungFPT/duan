<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartDetail extends Model
{
    use HasFactory;
    protected $table =' cart_detail';
    protected $fillable = ['card_id', 'products_id', 'quantity'];
    public function cart(){
        return $this->belongsTo(Cart::class,'card_id','id');
    }
    public function product(){
        return $this->belongsTo(Products::class,'products_id','id');
    }
}
