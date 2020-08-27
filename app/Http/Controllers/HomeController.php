<?php

namespace App\Http\Controllers;

use App\DeviceInfoHistory;
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
        $devicesInfoHistoryArray = DeviceInfoHistory::all();
        return view('home',compact('devicesInfoHistoryArray'));
    }
}
