<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Driver;
use App\Models\Rider;
use App\Models\Cab;
use App\Models\User;
use App\Models\Scheduled_trip;





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
        $drivers= Driver::count();
        $riders = Rider::count();
        $cabs = Cab::count();
        $users = User::count();
        $allTrips= Scheduled_trip::count();
        $cancelled_trips = Scheduled_trip::where('status', '0')->count();
        $scheduled_trips = Scheduled_trip::where('status', '2')->count();
        $completed_trips = Scheduled_trip::where('status', '1')->count();
        $trips = Scheduled_trip::take(10)->get();
        return view('home', compact('drivers','riders','cabs','users','allTrips','cancelled_trips','scheduled_trips','completed_trips','trips'));
    }

}