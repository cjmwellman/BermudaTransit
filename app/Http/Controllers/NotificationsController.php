<?php

namespace App\Http\Controllers;

use App\Notification;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Request\NotifyRequest;

use App\Http\Controllers\Controller;

use Carbon\Carbon;

class NotificationsController extends Controller
{



  /**
   *Show log in page when try to create if not signed in
   *
   *
   *
   */

  public function __construct()
  {
    //$this->middleware('auth',['only' => 'create']);
  }

  public function index()
  {
    //get authenticated user
    //return \Auth::user();


    //return 'get all new info';
    $notifications = Notification::all();
    //return $notifications;

    //Get the latest added and put at the top
    //$notifications = Notification::latest('date')->notified()->get();



    return view('notifies.index', compact('notifications'));
    //return view('notifies.index');


  }



  /**
   *Show a single notification
   *
   *@param Notification $notification
   *return Response
   */

  public function show(Notification $notification)
  {

    //capture an identifier id and show in web page
    //return ($id);


    //capture an identifier id of item in db and show in web page
    //$notification = Notification::findorFail($id);

    //display null on page if id not known else return descript of object
    //dd($notification->date->addDays(1)->diffForHumans());


    //return $notification;
    return view('notifies.show',compact('notification'));
  }


  public function create()
  {
    // if (Auth::guest())
    // {
    //   return redirect('notifies');
    // }
    return view('notifies.create');
  }



  //store a notification
  public function store(Requests\NotifyRequest $request)
  {
    //how to fetch all input and fetch each individual
    //Notification::create($request->all());

      //$input = Request::all();
      //$input = Request::get('title');
      //$input['date'] = ('date');


      //Store the form created
      //Notification::create($input);

      //Using auth
      //$notification = new Notification($request->all());
      //Auth::user()->articles()->save($article);

      //session()->flash('flash_message', 'Your notification has been saved');
      //session()->flash('flash_message_important', 'true');

      //validation
      //Inline to make cleaner
      Notification::create($request->all());

      flash('Notification is created');

      return redirect('notifies');
      //return $input;

  }




  /**
  *Edit an existing notification
  *
  *@param Notification $id
  *@return Response
  *
  */

  public function edit(Notification $notification)
  {
    //return 'new edit page';

    //$notification = Notification::findorFail($id);

    return view('notifies.edit', compact('notification'));
  }






  /**
  *Update a notification
  *
  *@param Notification $notification
  *@param NotificationRequest $id
  *@return Response
  */

  public function update(Notification $notification, NotificationRequest $request)
  {
    $notification = Notification::findorFail($id);

    $notification->update($request->all());

    return redirect('notifies');
  }

}
