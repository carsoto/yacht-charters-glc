<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::user()->hasRole('administrator')) {
            return redirect()->route('admin.reports');
        }

        else if(Auth::user()->hasRole('broker')) {
            return view('broker.index');
        }
        
        else if(Auth::user()->hasRole('client')) {
            return view('client.index');
        }

        else {
            return view('welcome');
        }
    }
}
