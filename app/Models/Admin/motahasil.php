<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class motahasil extends Model
{
    protected $guarded = [];
    protected $table = 'motahasil';
    protected $fillable = [
        'Mo_Name', 'Mo_Phone', 'Mo_Email', 'Mo_Address', 'unit_id','updated_at','created_at'
    ];
    protected $hidden = ['updated_at', 'created_at'];


    public function unite()
    {

        return $this->belongsTo(unit::class);
        // return $this->hasMany(unit::class);
    }
}
