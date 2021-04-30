<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;
use Image;

class noticeController extends Controller
{
    public function index(){

        $notices = DB::table('notices')->get();

        return view('admin.notice.index',compact('notices')); 
    }

    public function create(){

        
        return view('admin.notice.create'); 
    }

    public function store(Request $request){

        $data = array();
        $data['notice_title'] = $request->notice_title;
        $data['notice_description'] = $request->notice_description;
        $data['notice_link'] = $request->notice_link;

        date_default_timezone_set("Asia/Dhaka");

        $day = date("d");
        $month = date("M");
        $year = date("Y");

        $data['time'] = date("h:i:sa"); 
        $data['date'] = $day.'-'.$month.'-'.$year; 

        $notice_picture  = $request->notice_picture; 

        if($notice_picture){ 
            $image_name= hexdec(uniqid()).'.'.$notice_picture->getClientOriginalExtension();
                Image::make($notice_picture)->resize(300,300)->save('public/media/notice/'.$image_name);
                $data['notice_picture']='public/media/notice/'.$image_name;
        }

        $insert = DB::table('notices')->insert($data);

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

        return Redirect()->route('admin.index.notice')->with($notification);  
    }

    public function view($id){ 

        $data = DB::table('notices')->where('id',$id)->first();

        return view('admin.notice.view',compact('data'));
    }


    public function edit($id){

        $data = DB::table('notices')->where('id',$id)->first();

        return view('admin.notice.edit',compact('data'));
    }

    public function update(Request $request){

        $data = array();
        $data['notice_title'] = $request->notice_title;
        $data['notice_description'] = $request->notice_description;
        $data['notice_link'] = $request->notice_link;

        $notice_picture  = $request->notice_picture; 

        $old_notice_picture  = $request->old_notice_picture; 

        if($notice_picture){ 
            $image_name= hexdec(uniqid()).'.'.$notice_picture->getClientOriginalExtension();
                Image::make($notice_picture)->resize(300,300)->save('public/media/notice/'.$image_name);
                $data['notice_picture']='public/media/notice/'.$image_name;

                if($old_notice_picture){
                    unlink($request->old_notice_picture);
                }
        }

        $update = DB::table('notices')->update($data);

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

        return Redirect()->route('admin.index.notice')->with($notification);  
    }
    
    public function delete($id){

        $data = DB::table('notices')->where('id',$id)->first();

        if ($data->notice_picture) {
            unlink($data->notice_picture);
        }

        $delete = DB::table('notices')->where('id',$id)->delete();

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
