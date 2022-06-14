<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Trip;
use App\Models\Scheduled_trip;
use App\Models\Multitrip;
use App\Models\Driver;


class TripsController extends Controller
{

    // trips function
    public function trips(){
       $trips = Scheduled_trip::paginate(10);
        return view('layouts.trips.trips', compact('trips'));
    }
    public function _scheduled(){
        $scheduled_trips = Scheduled_trip::where('status','2' )->paginate(10);
        return view('layouts.trips.scheduled-trips', compact('scheduled_trips'));
    }
    public function _completed(){
        $completed_trips = Scheduled_trip::where('status','1')->paginate(10);
        return view('layouts.trips.completed-trips',compact('completed_trips'));
    }
    public function _cancelled(){
        $cancelled_trips = Scheduled_trip::where('status', '0')->paginate(10);
        return view('layouts.trips.cancelled-trips',compact('cancelled_trips'));
    }
    public function trip_status($id){
        $trip = Scheduled_trip::findOrFail($id);
        return view('layouts.trips.trip-status',compact('trip'));
    }
    public function _history($id){
        $driver =Driver::findOrFail($id);
        $trips = Scheduled_trip::where(['driver_id'=>$id])->get();
        return view('layouts.trips.trip-history', compact('trips','driver'));
    }

}