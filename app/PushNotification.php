<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PushNotification extends Model
{
  protected $fillable = array('user_id','pushKey','device_type');
  public function details(){
    return $this->belongsTo('User');
  }
}
