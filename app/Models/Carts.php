<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Products;
use App\Models\User;

class Carts extends Model
{
    protected $fillable = [
        'user_id','product_id','quantity',
    ];

    protected $appends = [
        'productName',
        'userName',
    ];

        public function getProductNameAttribute()
        { 
            if($this->product){
                return $this->product->name;
            }
        }

        public function getUserNameAttribute()
        { 
            if($this->user){
                return $this->user->fullName;
            }
        }

    public function user(){return $this->belongsTo(User::class);}
    public function product(){return $this->belongsTo(Products::class);}
}
