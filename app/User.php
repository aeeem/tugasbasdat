<?php

namespace Kepolisian;


use Kepolisian\Http\Middleware\Admin;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role_id','sedang_aktif',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];



    public function role(){
        return $this->belongsTo('Kepolisian\Role');
    }


    public function posts(){
        return $this->hasmany('Kepolisian\Post');
        }


    public function IsAdmin(){
       if( (($this->role->name == "administrator")||($this->role->name == "admin")) && $this->sedang_aktif == 1){


            return true;

        }


        return false;
}
}      
   



