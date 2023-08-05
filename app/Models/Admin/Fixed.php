<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Fixed extends Model
{
    protected $guarded = [];
    protected $fillable = ['Blag_Number', 'Dev_Type','Devv_id','Type_Of_Error', 'Unit_Id', 'Device_Status', 'company_id', 'user_id', 'mo_id'];
    protected $hidden = ['updated_at', 'created_at'];

    protected $table = 'device';
}
