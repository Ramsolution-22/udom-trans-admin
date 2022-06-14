<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rider;
use App\Models\Driver;
use App\Models\Cab;
use App\Models\Scheduled_trip;
use DB;


class PagesController extends Controller
 {
    //   riders function
    public function riders(){
        $riders = Rider::get();
        return view('layouts.riders.riders',compact('riders'));
    }
    public function addRiders(){
        return view('layouts.riders.addRiders');
    }

    public function deleteRider(Request $request, $id){
        $rider = Rider::findOrFail($id);
        $rider->delete();
        return redirect('/riders')->with('success','Rider have been deleted successfully!');
    }
    public function rider_status($id){
        $riderStatus = Rider::select('status')->where('id', $id)->first();
        if($riderStatus->status == 1){
            $status = 0;
        } else{
            $status = 1;
        }
        Rider::where('id', $id)->update(['status'=>$status]);
        return redirect()->back()->with('success', 'Rider status updated successfully!');
    }

    // driver function
    public function drivers(){
        $drivers = Driver::get();
        return view('layouts.drivers.drivers', compact('drivers'));
    }
    // Driver Statement
    public function driver_statement($id){
        $driver = Driver::findOrFail($id);
        $trips = Scheduled_trip::where('driver_id', $id)->count();
        $cancelled_trips =Scheduled_trip::where(['driver_id'=>$id,'status'=>'0'])->count();
        $completed_trips =Scheduled_trip::where(['driver_id'=>$id,'status'=>'1'])->count();
        $scheduled_trips = Scheduled_trip::where(['driver_id'=> $id,'status'=>'2'])->count();
        $allTrips = Scheduled_trip::where('driver_id', $id)->get();
        return view('layouts.drivers.driver-statement',compact('driver','trips','scheduled_trips','cancelled_trips','completed_trips','allTrips'));
    }


    public function _unApproved(){
        return view('layouts.drivers.un-approved-driver');
    }

    public function deleteDriver(Request $request, $id){
        $driver = Driver::findOrFail($id);
        $driver->delete();
        return redirect('/drivers')->with('success', 'Driver Deleted Successfully!');

    }




    // driver status
    public function driverStatus($id){
        $driverStatus = Driver::select('status')->where('id',$id)->first();
        if($driverStatus->status == 1){
            $status = 0;
        }
         else{
        $status = 1;
        }
        Driver::where('id',$id)->update(['status'=>$status]);
        return redirect()->back()->with('success','Driver status updated successfully! ');
    }








    // vehicle functions
    public function vehicles(){
        $cabs = Cab::paginate(10);
        return view('layouts.vehicles.vehicles',compact('cabs'));
    }
}