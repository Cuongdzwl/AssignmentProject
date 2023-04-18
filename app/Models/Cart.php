<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\User;

class Cart extends Model
{
    use HasFactory;

    protected $table = 'carts';
    protected $fillable = ['user_ID'];


    public function products()
    {
        return $this->belongsToMany(Product::class, 'cart_product')->withTimestamps()->withPivot('quantity');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
