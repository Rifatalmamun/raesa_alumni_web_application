<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use Auth;
use DB;
use Image;
class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showUserProfile(){

    
        
        $id = Auth::user()->id;

        $data = DB::table('users')->where('id',$id)->first(); 

        return view('user_profile_page',compact('data'));
    }
    public function showProfileEditForm(){

        $id = Auth::user()->id;
        $data = DB::table('users')->where('id',$id)->first();
        $city_data = DB::table('cities')->get();

        return view('user_edit_profile_page',compact('data','city_data'));
    }

    public function updateUserProfile(Request $request){

        $id = $request->id;

        $data=array();

    	$data['name']=$request->name;
        $data['batch']=$request->batch;
    	$data['phone']=$request->phone;
    	$data['address']=$request->address;
    	$data['district']=$request->district;
    	$data['occupation']=$request->occupation;

    	$data['gender']=$request->gender;
    	

        $old_avatar  = $request->old_avatar;
        $avatar  = $request->avatar;


        if($avatar){ 

            if($old_avatar){
                unlink($request->old_avatar);
            }
            $image_name= hexdec(uniqid()).'.'.$avatar->getClientOriginalExtension();
                Image::make($avatar)->resize(238,250)->save('public/media/ex_student/'.$image_name);
                $data['avatar']='public/media/ex_student/'.$image_name;
        }

        $update = DB::table('users')->where('id',$id)->update($data);


        if($update){
            $notification=array(
                'messege'=>'Profile Updated Successfully !',
                'alert-type'=>'success'
                 );
            return Redirect()->route('home')->with($notification); 
        }else{
            $notification=array(
                'messege'=>'Profile data reamin same !',
                'alert-type'=>'success'
                 );
            return Redirect()->route('home')->with($notification);   
        }
 
    }



    public function showPasswordChangeForm(){

        return view('password_change_form');
    }

    public function changeUserPassword(Request $request){


      $password=Auth::user()->password;
      $oldpass=$request->oldpass;
      $newpass=$request->password;
      $confirm=$request->password_confirmation;

      if (Hash::check($oldpass,$password)) {
           if ($newpass === $confirm) {
                      if(strlen($newpass)<8){
                        $notification=array(
                            'messege'=>'Password length must be greater or equeal 8',
                            'alert-type'=>'error'
                             );
                             return Redirect()->back()->with($notification);
                      }else{
                        $user=User::find(Auth::id());
                        $user->password=Hash::make($request->password);
                        $user->save();
                        Auth::logout();  
                        $notification=array(
                          'messege'=>'Password Changed Successfully ! Now Login with Your New Password',
                          'alert-type'=>'success'
                           );
                         return Redirect()->route('login')->with($notification); 
                        }
                      
                 }else{
                     $notification=array(
                        'messege'=>'New password and Confirm Password not matched!',
                        'alert-type'=>'error'
                         );
                       return Redirect()->back()->with($notification);
                    }     
            }else{
                    $notification=array(
                            'messege'=>'Old Password not matched!',
                            'alert-type'=>'error'
                            );
                        return Redirect()->back()->with($notification);
                }
    }





}
