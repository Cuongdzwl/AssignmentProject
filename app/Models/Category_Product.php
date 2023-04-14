<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category_Product extends Model
{   
    use HasFactory;
    protected $table = 'category_product';
    protected $fillable = ['cat_ID','product_ID'];
    public function category(){
        return $this->belongsToMany(Category::class,'category_product');
    }
    public function products(){
        return $this->belongsToMany(Product::class,'category_product');
    }
}
