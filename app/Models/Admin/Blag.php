<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Blag extends Model
{
  protected $table = 'blags';
  protected $guard = [];
  protected $fillable = ['id', 'Blag_Number', 'category_id', 'Device_id', 'Type_Of_Error', 'unit_id', 'device_status_id', 'company_id', 'user_id', 'mo_id'];
  protected $hidden = ['updated_at', 'created_at'];

  public function Devicess()
  {
    return $this->hasOne(Device::class, 'Device_id');
  }

  public function categoryy()
  {

    return $this->belongsTo(Category::class, 'category_id');
  }


  public function Type_Of_Error()
  {

    return $this->belongsTo(Problem::class);
  }
  public function unit_id()
  {

    return $this->belongsTo(unit::class);
  }
  public function device_status_id()
  {

    return $this->belongsTo(Device::class);
  }
  public function company_id()
  {

    return $this->belongsTo(company::class);
  }
  public function user_id()
  {

    return $this->belongsTo(user::class);
  }
  public function mo_id()
  {

    return $this->belongsTo(motahasil::class);
  }
}
//ufi,legace,mpr,gpt