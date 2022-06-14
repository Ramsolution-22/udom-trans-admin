<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Validate;
use App\Http\Requests\UpdateUser;

use App\Models\User;
class UserController extends Controller
{
    // function to show all users from the database
    public function showUsers(){
        $users = User::get();
        return view('layouts.admin.admin', compact('users'));
    }
    public function createUsers(){

        return view('layouts.admin.create-user');
    }
    // function to add a new user
    public function saveUser(Validate $request){
        $user = new User;
        $user->name = $request->adminName;
        $user->email = $request->email;
        $user->password = hash::make($request->password);
        $user->save();
        return redirect('/admin')->with('success','User have been added successfully.');



    }
//  function to edit user
    public function editUser($id){
        $user = User::findOrFail($id);
        return view('layouts.admin.edit', compact('user'));
    }

    // function to edit user
    public function updateUser(UpdateUser $request, $id){

        $user =  User::findOrFail($id);
        $user->name = $request->adminName;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return redirect('/admin')->with('success','Admin have been added successfully.');



    }
    // function to delete user
    public function deleteuser(Request $request, $id){
        $user = User::findOrFail($id);
        $user->delete();
        return redirect('/admin')->with('success', 'Admin hava been delete successfully!');
    }

    // Update user status
    public function userStatus($id){
        $userStatus = User:: select('status')->where('id', $id)->first();
        if($userStatus->status == 1){
            $status = 0;
        } else{
            $status = 1;
        }
        User::where('id', $id)->update(['status'=>$status]);
        return redirect()->back()->with('success', 'Admin status changed successfully');

    }



}