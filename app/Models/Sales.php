<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    protected $fillable = [
        'role_id','fname','lname','address','contact', 'email', 'password',
    ];
}
