<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Categories;

class Products extends Model
{
    protected $fillable = [
        'category_id','code','name','description','price','status',
    ];

    protected $appends = [
        'categoryName',
        'statusName',
    ];

    public function getStatusNameAttribute()
    {
        $statusname = "Available";
        if($this->status==0){
            $statusname = "Not Available";
        }
        
        return $statusname;
    }

    public function getCategoryNameAttribute()
    { 
        if($this->category){
            return $this->category->name;
        }
    }

    public function category(){return $this->belongsTo(Categories::class);}
}
