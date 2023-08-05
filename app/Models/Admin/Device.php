<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{



    protected $table = 'device';
    protected $guarded = [];
    protected $fillable = ['id', 'Dev_Parcode', 'Dev_Name', 'Dev_comp', 'Dev_Cat', 'Dev_Unit', 'Dev_Pic', 'Dev_Status', 'Dev_Mo'];
    protected $hidden = ['updated_at', 'created_at'];

    public function blags()
    {

        return $this->belongsTo(Blag::class,'Device_id');
    }
}
