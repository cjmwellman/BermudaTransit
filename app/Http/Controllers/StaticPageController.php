<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alert;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class StaticPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('staticpages.index');
    }


    public function home()
    {

      return view('staticpages.home');

    }

    public function busSchedule()
    {

      return view('staticpages.busSchedule');

    }

    public function busFare()
    {

      return view('staticpages.busFare');

    }

    public function howToride()
    {
      return view('staticpages.howToride');
    }

    public function contact()
    {

      return view('staticpages.contact');

    }

    public function about()
    {

      return view('staticpages.about');

    }


}
