<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use DB;
use Image;

class GeekController extends Controller
{
    public function showGeekAddForm(){

        $geekcategory = DB::table('geekcategories')->get();
        return view('Geek Pages.form',compact('geekcategory'));                  
    }

    public function storeGeek(Request $request){

    // validation 
         $validatedData = $request->validate([
            'title' => 'required|min:5|max:70',
            'price' => 'required|min:1|max:25',
            'description' => 'required|min:10|max:1550',
            'delivery_time' => 'required|min:1|max:20',
            'geek_picture' => 'required',
        ]);

        $data = array();

        $data['title'] = $request->title;
        $data['price'] = $request->price;
        $data['user_id'] = Auth::user()->id;
        $data['geekcategory_id'] = $request->geekcategory_id;
        $data['description'] = $request->description;
        $data['delivery_time'] = $request->delivery_time;
        $data['delevery_zone'] = $request->delevery_zone;
        $data['revision'] = $request->revision;
        $data['emergency_price'] = $request->emergency_price;

        $data['status'] = 'on';

        $geek_picture  = $request->geek_picture;


        if($geek_picture){ 

            $image_name= hexdec(uniqid()).'.'.$geek_picture->getClientOriginalExtension();
                Image::make($geek_picture)->resize(300,300)->save('public/media/geek_picture/'.$image_name);
                $data['geek_picture']='public/media/geek_picture/'.$image_name;
        }

        $insert = DB::table('geeks')->insert($data);

       return redirect()->route('home'); 

    }

    public function showGeekEditForm($id){


        $geek = DB::table('geeks')->where('id',$id)->first();
        $geekcategory = DB::table('geekcategories')->get();

        //return response()->json($geek);

        return view('Geek Pages.edit',compact('geek','geekcategory')); 
    }

    public function viewGeek($id){

        $data = DB::table('geeks')->where('geeks.id',$id)
            ->join('geekcategories','geeks.geekcategory_id','geekcategories.id')
            ->join('users','geeks.user_id','users.id')
            ->select('geeks.*','users.name','users.username','users.verify','geekcategories.category_name')
            ->first(); 
        //return Auth::id(); 
            return view('Geek Pages.view',compact('data')); 
    }

    public function updateUserGeek(Request $request){

        // validation 
        $validatedData = $request->validate([
            'title' => 'required|min:5|max:70',
            'price' => 'required|min:1|max:25',
            'description' => 'required|min:20|max:1550',
            'delivery_time' => 'required|min:1|max:20',
        ]);

        $data = array();

        $data['id']=$request->update_user_id;
        $id = $data['id'];

        $data['title'] = $request->title;
        $data['price'] = $request->price;
        $data['user_id'] = Auth::user()->id;
        $data['geekcategory_id'] = $request->geekcategory_id;
        $data['description'] = $request->description;
        $data['delivery_time'] = $request->delivery_time;
        $data['delevery_zone'] = $request->delevery_zone;
        $data['revision'] = $request->revision;
        $data['emergency_price'] = $request->emergency_price;

        $data['status'] = 'on';

        $geek_picture  = $request->geek_picture;
        $old_geek_picture = $request->old_geek_picture;

        if($geek_picture){ 

            if($old_geek_picture){
                unlink($request->old_geek_picture);
            }

            $image_name= hexdec(uniqid()).'.'.$geek_picture->getClientOriginalExtension();
                Image::make($geek_picture)->resize(300,300)->save('public/media/geek_picture/'.$image_name);
                $data['geek_picture']='public/media/geek_picture/'.$image_name;
        }

        $update = DB::table('geeks')->where('id',$id)->update($data); 

        if($update){
            $notification=array(
                'messege'=>'Your Geek Updated Successfully !',
                'alert-type'=>'success'
                 );
        }else{
            $notification=array(
                'messege'=>'Nothing to Updated !',
                'alert-type'=>'warning'
                 );
        }

        return Redirect()->route('home')->with($notification); 

    }
}
