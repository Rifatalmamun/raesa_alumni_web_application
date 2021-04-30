<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Image;
class WelcomeController extends Controller
{
    public function showWelcomePage(){

        $events = DB::table('events')->take(3)->orderBy('id','DESC')->get();
        $notices = DB::table('notices')->take(3)->orderBy('id','DESC')->get();

        

        return view('welcome',compact('events','notices'));
    }

    public function aboutPage(){

        return view('about');
    }

    public function committeePage(){

        return view('committee');
    }

    public function exStudent(){
        return view('batch_menu');   
    }

    public function batch($batch){

        $student = DB::table('users')
                ->join('cities','cities.id','users.district')
                ->select('users.*','cities.city_name')
                ->where('users.batch',$batch)->get();

        return view('batch_student',compact('student','batch'));                  
    }
    public function message(){

        return view('mfc');

    }
}
