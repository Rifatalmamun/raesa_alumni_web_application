<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Image;
use DB;

class UserController extends Controller
{
    public function index(){

        $data = DB::table('users')->get();

        return view('admin.ex_student.index',compact('data')); 
    }

    public function create(){

        $district = DB::table('cities')->get();

        return view('admin.ex_student.create',compact('district'));
    }

    public function store(Request $request){

        $data=array();

    	$data['name']=$request->name;
        
        $data['batch']=$request->batch;
    	$data['phone']=$request->phone;
        $data['email']=$request->email;
    	$data['address']=$request->address;
        $data['occupation']=$request->occupation;

    	$data['district']=$request->district;
    	$data['institute']=null;
    	$data['birthday']=null;
    	$data['gender']=$request->gender; 

    	$data['password']=Hash::make($request->password);

        $avatar  = $request->avatar; 

        if($avatar){ 
            $image_name= hexdec(uniqid()).'.'.$avatar->getClientOriginalExtension();
                Image::make($avatar)->resize(300,300)->save('public/media/ex_student/'.$image_name);
                $data['avatar']='public/media/ex_student/'.$image_name;
        }

        $insert = DB::table('users')->insert($data);

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

        return Redirect()->route('admin.index.ex.student')->with($notification); 
    }


    public function view($id){

        $data = DB::table('users')->where('id',$id)->first();

        return view('admin.ex_student.view',compact('data'));
    }


    public function edit($id){

        $data = DB::table('users')->where('id',$id)->first();
        $district = DB::table('cities')->get();

        return view('admin.ex_student.edit',compact('data','district'));
    }

    public function update(Request $request){


        $data=array();

        $data['id']=$request->id;
        $id = $data['id'];

    	$data['name']=$request->name;
        
        $data['batch']=$request->batch;
    	$data['phone']=$request->phone;
        $data['email']=$request->email;
    	$data['address']=$request->address;
        $data['occupation']=$request->occupation;

    	$data['district']=$request->district;

    	$data['gender']=$request->gender; 
    	
        $old_avatar  = $request->old_avatar;
        $avatar  = $request->avatar; 

        if($avatar){ 

            if($old_avatar){
                unlink($request->old_avatar);
            }
            $image_name= hexdec(uniqid()).'.'.$avatar->getClientOriginalExtension();
                Image::make($avatar)->resize(230,300)->save('public/media/ex_student/'.$image_name);
                $data['avatar']='public/media/ex_student/'.$image_name;
        }

        $update = DB::table('users')->where('id',$id)->update($data);

        if($update){
            $notification=array(
                'messege'=>'Updated Successfully !',
                'alert-type'=>'success'
                 );
        }else{
            $notification=array(
                'messege'=>'No Change !',
                'alert-type'=>'warning'
                 );
        }

        return Redirect()->back()->with($notification); 
    }

    public function delete($id){

        $data = DB::table('users')->where('id',$id)->first();

        if ($data->avatar) {
            unlink($data->avatar);
        }

        $delete = DB::table('users')->where('id',$id)->delete();

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









    public function showVerifyRequest(){

        $data = DB::table('verifications')
            ->join('users','verifications.user_id','users.id')->where('users.verify',0)
            ->select('verifications.*','users.verify')
            ->get();

        return view('admin.verify_request_user',compact('data')); 

    }

    public function showVerifiedUser(){

        

        $data = DB::table('verifications')
            ->join('users','verifications.user_id','users.id')->where('users.verify',1)
            ->select('verifications.*','users.verify')
            ->get();
        //return response()->json($data);
        return view('admin.verify_request_user',compact('data')); 

    }

    public function showBlockUser(){

        $data = DB::table('users')->where('block',1)->get();

        return view('admin.all_user',compact('data')); 
    }



    public function viewSingleVerifyRequest($id){



        $data = DB::table('verifications')->where('verifications.id',$id)
            ->join('users','verifications.user_id','users.id')
            ->select('verifications.*','users.*')
            ->first();
        
        return view('admin.view_verify_request',compact('data'));
    }





    public function unblockUser($id){

        $update = DB::table('users')->where('id',$id)->update(['block'=>0]); 
        return redirect()->back();
    }

    public function blockUser($id){

        $update = DB::table('users')->where('id',$id)->update(['block'=>1]); 
        return redirect()->back();
    }

    public function unverifyUser($id){

        $update = DB::table('users')->where('id',$id)->update(['verify'=>0]); 
        return redirect()->back();
    }

    public function verifyUser($id){

        $update = DB::table('users')->where('id',$id)->update(['verify'=>1]); 
        return redirect()->back();
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
