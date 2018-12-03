<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Project;
use App\Task;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/home');
    }
    public function tasks(Request $Request){

        // dd($projectid);
        $users =  User::where('id',Auth::user()->id)->get();
      
        // ->get()  will return a collection
        $task_list = Task::where('user_id',Auth::user()->id)->get();
        return view('/employess')->with('users', $users) 
                                ->with('task_list', $task_list) ;
    
    }
}
