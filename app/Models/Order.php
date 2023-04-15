<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\User;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $fillable = ['user_ID','total','status'];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'order_product')->withTimestamps()->withPivot('quatity', 'price');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
