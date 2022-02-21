<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function addView(){

        return view('admin.add_doctor');
    }

    public function upload(Request $request){

        $doctor = new Doctor();

        $image = $request->file;
        $imageName = time().'.'.$image->getClientoriginalExtension();
        $request->file->move('doctorimage',$imageName);
        $doctor->image=$imageName;

        $doctor->name = $request->name;
        $doctor->phone = $request->phone;
        $doctor->speciality = $request->speciality;
        $doctor->room = $request->room;
        $doctor->save();
        return redirect()->back()->with('message','Doctor Added Successfully');

    }

    public function showAppointment(){
        $data = Appointment::all();
        return view('admin.show_appointment',compact('data'));
    }

    
    public function approved($id){
            $data = Appointment::find($id);
            $data->status='approved';
            $data->save();

            return redirect()->back();
    }

    public function canceled($id){
        $data = Appointment::find($id);
        $data->status='canceled';
        $data->save();

        return redirect()->back();

    }   

    public function showDoctor(){
        $data = Doctor::all();
        return view('admin.show_doctor',compact('data'));
    }

    public function deleteDoctor($id){
        $data = Doctor::find($id);
        $data->delete();
        return redirect()->back();

    }

    public function updateDoctor($id){
        $data = Doctor::find($id);
        return view('admin.update_doctor',compact('data'));
    }

    public function editDoctor(Request $request , $id){
        $doctor = Doctor::find($id);
        $doctor->name = $request->name;
        $doctor->phone = $request->phone;
        $doctor->speciality = $request->speciality;
        $doctor->room = $request->room;
        $image = $request->file;
        if($image){
        $imageName = time().'.'.$image->getClientoriginalExtension();
        $request->file->move('doctorimage',$imageName);
        $doctor->image = $imageName;
        } 
        $doctor->save(); 
        return redirect()->back()->with('message','Doctor Updated Successfully!');

    }

    
}
