<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Route;
use App\WeekdayTime;
use App\SaturdayTime;
use App\SundayTime;


use App\Http\Requests;
use App\Http\Controllers\Controller;

class ScheduleController extends Controller
{
    public function schedule()
    {

      $routes = Route::all();


      return view('schedule', compact('routes'));


    }

    public function timetable($id)
    {

      $weekday = WeekdayTime::where('route_id',$id)->get();

      $saturday = SaturdayTime::where('route_id',$id)->get();

      $sunday = SundayTime::where('route_id',$id)->get();

      $route = Route::find($id);

      return view ('timetable', compact('route','weekday','saturday','sunday'));

    }





}
