<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Alert;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AlertsController extends Controller
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */

  public function index()
  {
    $alerts = Alert::all();
    //return $alerts;

    ///

    //return view ('alerts.index')->with('alerts', $alerts);
    return view('alerts.index', compact('alerts'));
    //return 'get all alerts';
  }


  public function show($id)
  {
    $alert = Alert::find($id);
    return $alert;
  }













}
