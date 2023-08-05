<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Super_Visor extends Model
{
    protected $guarded = [];
    protected $fillable = ['Local_Id', 'Local_Name'];
    protected $hidden = ['updated_at', 'created_at'];

    protected $table ='unit';

}
