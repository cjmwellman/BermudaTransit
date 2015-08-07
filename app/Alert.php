<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alert extends Model
{
    protected $fillable = [
      'title',
      'body',
      'post_at'
    ];
}
