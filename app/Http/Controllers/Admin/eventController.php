<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;
use Image;

class eventController extends Controller
{
    public function index(){

        $events = DB::table('events')->get();

        return view('admin.event.index',compact('events')); 
    }

    public function create(){

        
        return view('admin.event.create'); 
    }

    public function store(Request $request){

        $data = array();
        $data['event_title'] = $request->event_title;
        $data['event_description'] = $request->event_description;
        $data['event_link'] = $request->event_link;

        date_default_timezone_set("Asia/Dhaka");

        $day = date("d");
        $month = date("M");
        $year = date("Y");

        $data['time'] = date("h:i:sa"); 
        $data['date'] = $day.'-'.$month.'-'.$year; 

        $event_picture  = $request->event_picture; 

        if($event_picture){ 
            $image_name= hexdec(uniqid()).'.'.$event_picture->getClientOriginalExtension();
                Image::make($event_picture)->resize(300,300)->save('public/media/event/'.$image_name);
                $data['event_picture']='public/media/event/'.$image_name;
        }

        $insert = DB::table('events')->insert($data);

        if($insert){
            $notification=array(
                'messege'=>'Added Successfully !',
                'alert-type'=>'info'
                 );
        }else{
            $notification=array(
                'messege'=>'Something wrong !',
                'alert-type'=>'warning'
                 );
        }

        return Redirect()->route('admin.index.event')->with($notification);  
    }

    public function view($id){ 

        $data = DB::table('events')->where('id',$id)->first();

        return view('admin.event.view',compact('data'));
    }


    public function edit($id){

        $data = DB::table('events')->where('id',$id)->first();

        return view('admin.event.edit',compact('data'));
    }

    public function update(Request $request){

        $data = array();
        $data['event_title'] = $request->event_title;
        $data['event_description'] = $request->event_description;
        $data['event_link'] = $request->event_link;

        $event_picture  = $request->event_picture; 

        $old_event_picture  = $request->old_event_picture; 

        if($event_picture){ 
            $image_name= hexdec(uniqid()).'.'.$event_picture->getClientOriginalExtension();
                Image::make($event_picture)->resize(300,300)->save('public/media/event/'.$image_name);
                $data['event_picture']='public/media/event/'.$image_name;

                if($old_event_picture){
                    unlink($request->old_event_picture);
                }
        }

        $update = DB::table('events')->update($data);

        if($update){
            $notification=array(
                'messege'=>'Update Successfully !',
                'alert-type'=>'info'
                 );
        }else{
            $notification=array(
                'messege'=>'Something wrong !',
                'alert-type'=>'warning'
                 );
        }

        return Redirect()->route('admin.index.event')->with($notification);  
    }
    
    public function delete($id){

        $data = DB::table('events')->where('id',$id)->first();

        if ($data->event_picture) {
            unlink($data->event_picture);
        }

        $delete = DB::table('events')->where('id',$id)->delete();

        if($delete){
            $notification=array(
                'messege'=>'Deleted Successfully !',
                'alert-type'=>'error'
                 );
        }else{
            $notification=array(
                'messege'=>'Something wrong !',
                'alert-type'=>'warning'
                 );
        }

        return Redirect()->back()->with($notification); 
    }
}
