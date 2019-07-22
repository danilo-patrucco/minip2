<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

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
     * @return Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function profile()
    {

        $users = User::all();
        return view('profile',['users'=>$users]);
    }
    public function contact()
    {
        return view('contact');
    }
    function store (Request $request)
    {
        /*$name = $request->name;*/
        $name = $request['name'];
        return redirect()->route('thanks',['name'=>$name]);
    }
    function thanks ($name){

        //return view('thankyou')->with(compact('name'));
        $users = User::all();
        return view('thankyou',['users'=>$users]);
    }
}
