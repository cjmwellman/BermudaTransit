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

  public function show(Alert $alert)
  {
    // $alert = Alert::find($id);


    //capture an identifier id and show in web page
    //return ($id);


    //capture an identifier id of item in db and show in web page
    //$alert = Alert::findorFail($id);

    // return $alert;
    return view('alerts.show',compact('alert'));
  }

  public function create()
  {
    // if (Auth::guest())
    // {
    //   return redirect('notifies');
    // }
    //return view('alerts.create');
    return view('alerts.create', compact('alerts'));
  }

  public function edit(Alert $alert)
  {
    //return 'new edit page';

    //$alert = Alert::findorFail($id);

    return view('alerts.edit', compact('alert'));
  }



}
