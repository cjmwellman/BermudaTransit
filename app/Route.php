<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{

      public static $routes = [
        'day',
        'out_stgeorges',
        'out_hamilton'

      ];

      protected $fillable = [
        'day',
        'out_stgeorges',
        'out_hamilton'
      ];

      //functions to fetch notifys set before a date or after specific date
      public function scopeNotify($query)
      {
        // $query->where('notify_at', '<=', Carbon::now());
      }

      public function scopeUnnotify($query)
      {
        // $query->where('notify_at', '>=', Carbon::now());
      }



      public function setNotifyAtAttribute($date)
      {
        //$this->attributes[''] = Carbon::createFromFormat('d-m-y', $date);
      }


     //Database table used by the model.
     protected $table = 'routes';

}
