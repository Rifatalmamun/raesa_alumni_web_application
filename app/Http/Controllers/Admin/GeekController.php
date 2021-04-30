<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Model\Geek;
use DB;
use Response;

class GeekController extends Controller
{
    public function showAllGeek(){

    $data = DB::table('geeks')
    ->join('users','geeks.user_id','users.id')
    ->join('geekcategories','geeks.geekcategory_id','geekcategories.id')
    ->select('geeks.*','users.name','geekcategories.category_name')
    ->get();

        return view('admin.all_geek',compact('data'));    
   }

   public function showSuspendedGeek(){

    $data = DB::table('geeks')->where('status','off') 
                ->join('users','geeks.user_id','users.id')
                ->join('geekcategories','geeks.geekcategory_id','geekcategories.id')
                ->select('geeks.*','users.name','geekcategories.category_name')
                ->get();

        return view('admin.all_geek',compact('data'));  
   }

   public function viewSingleGeek($id){

    $data = DB::table('geeks')->where('geeks.id',$id)
    ->join('users','geeks.user_id','users.id')
    ->join('geekcategories','geeks.geekcategory_id','geekcategories.id')
    ->select('geeks.*','users.name','geekcategories.category_name')
    ->first();

        return view('admin.view_geek',compact('data')); 
   }

   public function editGeek($id){


   }

   public function updateGeek(Request $request){


    //    $data = array();
    //    $category_id = $request->category_id;
    //    $data['category_name'] = $request->category_name;

    //    $update = DB::table('geeks')->where('id',$category_id)->update($data);

    //    if($update){
    //        $notification=array(
    //            'messege'=>'Successfully update Geek !',
    //            'alert-type'=>'success'
    //             );
    //    }else{
    //        $notification=array(
    //            'messege'=>'Not updated Geek !',
    //            'alert-type'=>'warning'
    //             );
    //    }

    //     return Redirect()->back()->with($notification); 
   }
   public function blockGeek($id){
    
    $blockgeek = DB::table('geeks')->where('id',$id)->update(['status'=>'off']); 

        if($blockgeek){
            $notification=array(
                'messege'=>'This Geek Block Successfully!',
                'alert-type'=>'success'
                 );
        }else{
            $notification=array(
                'messege'=>'Geek Not Block!',
                'alert-type'=>'warning'
                 );
        }
        return redirect()->back()->with($notification);
   }

   public function unblockGeek($id){

    $unblockgeek = DB::table('geeks')->where('id',$id)->update(['status'=>'on']); 
    
    if($unblockgeek){
        $notification=array(
            'messege'=>'This Geek UnBlock Successfully!',
            'alert-type'=>'success'
             );
    }else{
        $notification=array(
            'messege'=>'Geek Not UnBlock!',
            'alert-type'=>'warning'
             );
    }
    return redirect()->back()->with($notification);

    }


   public function deleteGeek($id){

        $delete = DB::table('geeks')->where('id',$id)->delete();
       
           $notification=array(
               'messege'=>'Geek Deleted Successfully !',
               'alert-type'=>'success'
                );
                                                                     
       return Redirect()->back()->with($notification); 
   }

   public function showGeek($id){

    $showGeek = DB::table('geeks')->where('id',$id)->update(['show_home'=>'1']); 
    
    if($showGeek){
        $notification=array(
            'messege'=>'This Geek show Successfully!',
            'alert-type'=>'success'
             );
    }else{
        $notification=array(
            'messege'=>'Geek Not show!',
            'alert-type'=>'warning'
             );
    }
    return redirect()->back()->with($notification);

    }

    public function hideGeek($id){

        $hideGeek = DB::table('geeks')->where('id',$id)->update(['show_home'=>'0']); 
        
        if($hideGeek){
            $notification=array(
                'messege'=>'This Geek hide Successfully!',
                'alert-type'=>'success'
                 );
        }else{
            $notification=array(
                'messege'=>'Geek Not hide!',
                'alert-type'=>'warning'
                 );
        }
        return redirect()->back()->with($notification);
    
    }
}
