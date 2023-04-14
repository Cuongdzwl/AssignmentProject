<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\USer;

class Cart extends Model
{
    use HasFactory;

    protected $table = 'carts';
    protected $fillable = 'user_ID';

    public function products()
    {
        return $this->belongsToMany(Product::class, 'cart_product')->withTimestamps()->withPivot('quatity', 'price', 'img');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
