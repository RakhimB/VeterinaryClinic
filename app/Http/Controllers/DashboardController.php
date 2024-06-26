<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Appointment;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function index(){
        if(Auth::id()){
            return redirect('dashboard');
        }
        else{
        $doctor=doctor::all();
        return view('user.home', compact('doctor'));
    }
    }

    public function appointment(Request $request){

        $data=new appointment;

        $data->name=$request->name;

        $data->email=$request->email;
        
        $data->date=$request->date;

        $data->phone=$request->phone;

        $data->message=$request->message;

        $data->doctor=$request->doctor;

        $data->status='In Progress';

        if(Auth::id()){

            $data->user_id=Auth::user()->id;
            $data->save();
            return redirect()->back()->with('message', 'Appointment Requested Seccessfully! We will contact with you soon.');
        }else{

            return redirect()->back()->with('errormessage', 'You can not request an appointment. Please login or register first!');
        }
        
    }

    public function myappointment(){
        if(Auth::id()){
            $userid=Auth::user()->id;
            $appoint=appointment::where('user_id', $userid)->get();
            return view('user.my_appointment', compact('appoint'));
        }
        else{
            return redirect()->back();
        }
        
    }

    public function cancel_appoint($id){
        $data=appointment::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Your Appointment Canceled Seccessfully!');
    }
}
