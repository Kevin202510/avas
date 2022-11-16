<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Roles;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'role_id','fname','lname','address','contact', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $appends = [
        'fullName',
        'roleName',
    ];

    public function getFullNameAttribute()
        {
            $fn=$this->fname.' '.$this->lname;
            return  strtoupper($fn);
        }

        public function getRoleNameAttribute()
        { 
            if($this->role){
                return $this->role->display_name;
            }
        }

        public function role(){return $this->belongsTo(Roles::class);}
}
