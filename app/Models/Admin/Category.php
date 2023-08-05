<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];
    protected $fillable = ['id', 'Cat_Name', 'Cat_Status',];
    protected $hidden = ['updated_at', 'created_at'];
    protected $table = 'category';


    public function blag_Cat()
    {
        // return $this->belongsTo(blag::class,'category_id');
        return $this->hasMany(blag::class,'category_id');

    }
}
