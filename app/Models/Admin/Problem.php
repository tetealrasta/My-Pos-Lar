<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Problem extends Model
{
    protected $guarded = [];
    protected $table = 'problem';
    protected $fillable = ['id', 'Problem_Name'];
    protected $hidden = ['updated_at', 'created_at'];
}
