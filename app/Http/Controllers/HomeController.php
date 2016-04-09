<?php

namespace App\Http\Controllers;

use App\Http\Requests;
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $this->middleware('auth');
        return view('home/index');
       // return view('home');
    }
    public function about()
    {
        // $this->middleware('auth');
        return view('home/about');
        // return view('home');
    }
    public function test()
    {
       echo 'test';
    }
}
