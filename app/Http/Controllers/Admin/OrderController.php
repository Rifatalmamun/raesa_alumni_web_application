<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;
use Response;

class OrderController extends Controller
{
    

    public function showAllOrder(){

        $data = DB::table('orders')
        ->join('geeks','orders.geek_id','geeks.id') 
        ->join('users','orders.user_id','users.id')
        ->select('orders.*','geeks.delivery_time','geeks.delevery_zone','geeks.price','users.username')
        ->get(); 
        
        return view('order page.all',compact('data','sellers'));                      

    }

    public function showCancleOrder(){

        $data = DB::table('orders')->where('cancle','1')
        ->join('geeks','orders.geek_id','geeks.id') 
        ->join('users','orders.user_id','users.id')
        ->select('orders.*','geeks.delivery_time','geeks.delevery_zone','geeks.price','users.username')
        ->get(); 
        
        return view('order page.cancle_order',compact('data','sellers'));                      

    }

    public function viewSingleOrder($id){

        $data = DB::table('orders')->where('orders.id',$id)
            ->join('geeks','orders.geek_id','geeks.id') 
            ->join('users','orders.user_id','users.id')
            ->select('orders.*','geeks.title','geeks.geek_picture','geeks.delivery_time','geeks.delevery_zone','geeks.price','geeks.revision','geeks.emergency_price','users.username')
            ->first();                                                                                                 
            
            //return response()->json($data);  
            
        $buyer = DB::table('users')->where('id',$data->user_id)->first(); 
        $seller = DB::table('users')->where('id',$data->seller_id)->first(); 
        
        //return response()->json($seller);

        return view('order page.view',compact('data','buyer','seller'));              
    }

    public function blockOrder($id){
        
        $blockorder = DB::table('orders')->where('id',$id)->update(['status'=>'0']); 

        if($blockorder){
            $notification=array(
                'messege'=>'This Order Block Successfully!',
                'alert-type'=>'success'
                 );
        }else{
            $notification=array(
                'messege'=>'Order Not Block!',
                'alert-type'=>'warning'
                 );
        }
        return redirect()->back()->with($notification);
    }

    public function unblockOrder($id){
        
        $blockorder = DB::table('orders')->where('id',$id)->update(['status'=>'1']); 

        if($blockorder){
            $notification=array(
                'messege'=>'This Order UnBlock Successfully!',
                'alert-type'=>'success'
                 );
        }else{
            $notification=array(
                'messege'=>'Order Not UnBlock!',
                'alert-type'=>'warning'
                 );
        }
        return redirect()->back()->with($notification);
    }
}
