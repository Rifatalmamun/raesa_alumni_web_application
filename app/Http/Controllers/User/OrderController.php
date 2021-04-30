<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use DB;
use Image;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showOrderPlaceForm($id){

        $orderGeek = DB::table('geeks')->where('id',$id)->first();

        return view('user_order_place_form',compact('orderGeek'));
    }


    public function orderPlace( Request $request){

        $user_id = Auth::user()->id;
        
        $data=array();
        $data['geek_id']=$request->geek_id;
        $geek_id = $data['geek_id']; 

        
            $click_geek_info = DB::table('geeks')->where('id',$geek_id)->first();


        $seller_id = $click_geek_info->user_id;

                $d_time = $click_geek_info->delivery_time; 
                $d_zone = $click_geek_info->delevery_zone; 

        $delivery_time = $d_time.' '.$d_zone;
        $paying_amount = $click_geek_info->price;           

        $vat = '20';
        $year = date("Y");
        $month = date("M");
        $day = date("d");

        $data = array();

        $data['user_id'] = $user_id;
        $data['seller_id'] = $seller_id;
        $data['geek_id'] = $geek_id;
        $data['delivery_time'] = $delivery_time;
        $data['paying_amount'] = $paying_amount;

        $data['vat'] = $vat;

        $data['day'] = $day;
        $data['month'] = $month;
        $data['year'] = $year;

        $order = DB::table('orders')->insert($data);

        if($order){
            $notification=array(
                'messege'=>'Your Order Place Successfully !',
                'alert-type'=>'info'
                 );
                 return Redirect()->route('user.view.all.order')->with($notification);
        }else{
            $notification=array(
                'messege'=>'Order not sent !',
                'alert-type'=>'warning'
                 );
                 return Redirect()->route('user.view.all.order')->with($notification);
        }
    }

    public function myAllOrder(){

        $asBuyer = DB::table('orders')->where('user_id',Auth::user()->id)->get();
        $asSeller = DB::table('orders')->where('seller_id',Auth::user()->id)->get();

        return view('my_order',compact('asBuyer','asSeller'));
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
        
        //return response()->json($data);

        return view('single_order',compact('data','buyer','seller')); 


    }

    public function acceptOrderBySeller($id){

     $accept = DB::table('orders')->where('id',$id)->update(['accepted_by_seller'=>'1','cancle'=>'0','cancle_message'=>'']);

        if($accept){
            $notification=array(
                'messege'=>'Order Accepted Successfully !',
                'alert-type'=>'info'
                 );
                 return Redirect()->back()->with($notification); 
        }else{
            $notification=array(
                'messege'=>'Order not Accepted !',
                'alert-type'=>'warning'
                 );
                 return Redirect()->back()->with($notification); 
        }
    }
    public function showOrderCancleEditForm($id){

        $data = DB::table('orders')->where('id',$id)->first();

        return view('order_cancle',compact('data'));

        // $user_id = Auth::user()->id;
        

        // $order_id = $data['order_id']; 

        // return $order_id;

        // $cancle = DB::table('orders')->where('id', $order_id)->update(['accepted_by_seller'=>'0','cancle'=>'1','cancle_message'=>$request->cancle_message]);

        // if($cancle){
        //     $notification=array(
        //         'messege'=>'Order Cancle Request Sent Successfully !',
        //         'alert-type'=>'info'
        //          );
        //          return Redirect()->back()->with($notification); 
        // }else{
        //     $notification=array(
        //         'messege'=>'Order Cancle Request not Sent !',
        //         'alert-type'=>'warning'
        //          );
        //          return Redirect()->back()->with($notification); 
        // }


    }

    public function cancleRequest(Request $request){

        $data = array();
        $data['order_id'] = $request->order_id;
        $data['cancle_message'] = $request->cancle_message;

        $o_id = $data['order_id'];


        $cancle = DB::table('orders')->where('id', $o_id)->update(['accepted_by_seller'=>'0','cancle'=>'1','cancle_message'=>$request->cancle_message]);

        if($cancle){
            $notification=array(
                'messege'=>'Order Cancle Request Sent Successfully !',
                'alert-type'=>'info'
                 );
                 return Redirect()->route('user.view.all.order')->with($notification);
        }else{
            $notification=array(
                'messege'=>'Order Cancle Request not Sent !',
                'alert-type'=>'warning'
                 );
                 return Redirect()->route('user.view.all.order')->with($notification);
        }

    }
}
