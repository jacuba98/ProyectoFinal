<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cobrador extends Model
{
    public function user()
    {
      return $this-belongTo('App\User', 'cobrador_id');
    }
}
