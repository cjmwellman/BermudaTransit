<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Notification extends Model
{
    public static $notification = ['title','info','date'];

    protected $fillable = [ 'title', 'info', 'date' ];

    public function scopeNotified($query)
    {
      $query->where('date', '<=', Carbon::now());
    }

    //set notify attribute
    public function setNotifyAtAttribute($date)
    {
      $this->attributes['date'] = Carbon::parse($date);
    }

    /**
     * An article is owned by a user
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {

      return $this->belongsTo('App\User'); // needs user_id column

    }

    public function tags()
    {
      return $this->belongsToMany('App\Tag')->withTimestamps();
    }

}
