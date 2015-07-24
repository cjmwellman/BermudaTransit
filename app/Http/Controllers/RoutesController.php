<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Route;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;

class RoutesController extends Controller
{
    public function index()
    {
      //return 'get all bus routes';
      $routes = Route::all();

      //Get the latest added and put at the top
      //$routes = Route::latest('out_stgeorges')->out()->get();

      //return $routes;

      return view('busroutes.index', compact('routes'));
      //return view('busroutes.index');


    }

    public function show($id)
    {

      //capture an identifier id and show in web page
      //return ($id);

      //capture an identifier id of item in db and show in web page
      $route = Route::findorFail($id);

      //display null on page if id not known else return descript of object
      //dd($route->out_stgeorges->addDays(1)->diffForHumans());


      //return $route;
      return view('busroutes.show',compact('route'));
    }


    public function create()
    {
      return view('busroutes.create');
    }

    public function store(CreateNotifyRequest $request)
    {
      //how to fetch all input and fetch each individual

      //Route::create($request->all());

        $input = Request::all();
        //$input = Request::get('day');
        //$input['out_hamilton'] = ('outbound');
        Route::create(Request::all());

        //Route::create($input);

        return redirect('routes');

        return $input;

        //validation


    }

}
