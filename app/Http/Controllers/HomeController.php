<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\User;
use App\Models\Venue;
use Illuminate\Http\Request;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['users1'] = User::where('id', 1)->get();
        $data['users2'] = User::where('id', 2)->get();
        return view('home',$data);
    }

    public function show()
    {
        // return view('demo');
        return "AA";
    }

    public function group()
    
    {
        return view('group');
        
    }

    public function venue()
    {   
        $data['venues'] = Venue::all();
        return view('venue', $data)->with('no', 1);
        
        
    }



    public function match()
    {
        return view('match');
        
    }

    public function player($id)
    {
        $data['lists'] = Player::find($id);
        return view('singleplayer', $data);        
    }

    public function playersearch()
    {
        $data['players'] = Player::all();
        return view('playersearch', $data)->with('no', 1);
        
    }

    
}
