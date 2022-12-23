<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class AdminController extends Controller
{
    public function addView(){
        return view('admin.subPages.doctor.add_doctor');
    }

    public function upload_doctor(Request $request){
        $doctors = new doctor;

        // $image = $request->file;
        // $ext = $image->getClientOriginalExtension();
        // $imageName = time().'.'.$ext;
        // $request->file->move('doctorImage',$imageName);
        // $request->img=$imageName;

        $doctors->fname=$request->fname;
        $doctors->lname=$request->lname;
        $doctors->email=$request->email;
        $doctors->phone_no=$request->phone_no;
        $doctors->speciality=$request->speciality;
        $doctors->room_no=$request->room_no;

        $doctors->save();

        // return redirect()->back();
        return view('admin.subPages.doctor.add_doctor');

        // print_r($request->all());
    }
}
