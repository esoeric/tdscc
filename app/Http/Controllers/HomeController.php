<?php

namespace App\Http\Controllers;
use Auth;
use App\Http\Requests;
use Illuminate\Http\Request;
use Bouncer;


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
     * @return Response
     */
    public function index()
    {
        $user_id = Auth::user()->id;
        $user = Auth::user();
        if($user_id == 1 && Bouncer::is($user)->notA('admin')){
            Bouncer::assign('admin')->to($user);
            Bouncer::allow('admin')->to('edit-projects');
            Bouncer::allow('employee')->to('view-projects');
            Bouncer::allow('client')->to('view-my-projects');
            Bouncer::allow('vendor')->to('view-my-projects');
        }    
        
        return view('home', ['user_id' => $user_id]);
        
    }
}
