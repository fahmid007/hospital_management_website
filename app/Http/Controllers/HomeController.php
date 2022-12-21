<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function redirect(){
        if(Auth::Id()){
            if(Auth::user()->userType=='0'){
                return View('user.home');
            }else{
                return View('admin.home');
            }

        }else{
            // return redirect()->back();
            return view('welcome');
        }
    }

    public function index(){
        return view('user.home');
    }
}
