<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class phone extends Model
{
    protected $table = 'phone';
    protected $guarded = [];
    protected $fillable = ['id', 'code', 'phone', 'user_id'];
    // protected $hidden = ['updated_at', 'created_at'];

    
    public function user()
    {

        return $this->belongsTo('App\Models\Admin\user', 'id');
    }
}
