<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\City;
use DB;
use Response;

class CityController extends Controller
{
    public function showAllCity(){

        $data = City::all();
        return view('admin.all_city',compact('data'));    
    }
    public function storeCity(Request $request){


         // validation 
         $validatedData = $request->validate([
            'city_name' => 'required|unique:cities|min:2|max:25',
        ]);

        $data = array();

        $data['city_name'] = $request->city_name;

        DB::table('cities')->insert($data); 

       return redirect()->route('admin.show.all.city'); 

    }

    public function editCity($id){

        $product=DB::table('cities')->where('id',$id)->first();

            // return response::json(array(
            // 'product' => $product,
    
            // ));
        return response()->json($product);
    }

    public function updateCity(Request $request){

        $data = array();

        $city_id = $request->city_id;
        $data['city_name'] = $request->city_name;

        $update = DB::table('cities')->where('id',$city_id)->update($data);

        if($update){
            $notification=array(
                'messege'=>'Successfully update city !',
                'alert-type'=>'success'
                 );
        }else{
            $notification=array(
                'messege'=>'Not updated city !',
                'alert-type'=>'warning'
                 );
        }

        return Redirect()->back()->with($notification); 
    }
    public function deleteCity($id){

        $delete = DB::table('cities')->where('id',$id)->delete();
        
            $notification=array(
                'messege'=>'City Deleted Successfully !',
                'alert-type'=>'success'
                 );
    
        return Redirect()->back()->with($notification); 
    }
}
