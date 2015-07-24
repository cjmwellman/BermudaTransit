<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
  /**
  * Get the notifications associated with the given tag
  *
  * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
  *
  *
  */


    public function notifications()
    {
      return $this->belongsToMany('App\Notification');
    }



}
