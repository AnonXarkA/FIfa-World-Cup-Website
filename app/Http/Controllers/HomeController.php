<?php

namespace App\Http\Controllers;

use App\Models\User;
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
        $data['users2'] = User::where('id', 4)->get();
        return view('home',$data);
    }

    public function show()
    {
        // return view('demo');
        return "AA";
    }
}
