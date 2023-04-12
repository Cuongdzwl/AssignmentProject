<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_Type extends Model
{
    use HasFactory;
    protected $fillable = [
        'type_ID',
        'type_name',
        'decs',
    ];

    public function users(){
        return $this->hasMany(User::class, 'type_ID');
    }
}
