<?php

namespace App\Models\Admin;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Admin extends Authenticatable
{
    protected $garded = [];
    protected $fillable = ['id',    'Ad_Name',    'Ad_Email',    'Ad_Password'];
    protected $hidden = ['updated_at', 'created_at'];
}
