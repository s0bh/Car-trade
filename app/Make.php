<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Make extends Model
{
  protected $table = 'request';

  public function customer()
  {
    return $this->belongsTo('App\User','user_id');
  }
}
