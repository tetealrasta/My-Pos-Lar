<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    protected $table = 'users';
    protected $guarded = [];
    protected $fillable = [ 'id', 'name', 'email', 'email_verified_at', 'password', 'Photo', 'remember_token',];
    // protected $hidden = ['updated_at', 'created_at'];


    public function phone()
    {

       return $this->hasOne('App\Models\Admin\phone');
    }
}
