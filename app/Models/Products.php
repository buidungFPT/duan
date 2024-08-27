<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Products extends Model
{
    use HasFactory;
    protected $table = 'products';
    public $primaryKey ='id';

    protected $fillable = ['name', 'price','image', 'description','category_id'];
    public function category() :belongsTo{
        return $this->belongsTo(category::class);
   }
   public function ProductsImage(){
    return $this->hasMany(ProductsImage::class);

   }
   public function cardDetails(){
    return $this->hasMany(CartDetail::class,'products_id');

   }
}
