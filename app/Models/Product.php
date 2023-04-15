<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Order;
use App\Models\Cart;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $fillable = [
        'name','quantity','image', 'price', 'description'
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_product')->withTimestamps();
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_product')->withTimestamps()->withPivot('quatity', 'price');
    }
    public function carts()
    {
        return $this->belongsToMany(Cart::class, 'order_product')->withTimestamps()->withPivot('quatity', 'price', 'img');
    }
}
