<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;

class eventController extends Controller
{
    public function index(){
        
        $events = DB::table('events')->orderBy('id','DESC')->get();

        return view('event.index',compact('events'));
    }
    public function show($id){
        
        $event = DB::table('events')->where('id',$id)->first();

        return view('event.show',compact('event'));           
    }   
}
