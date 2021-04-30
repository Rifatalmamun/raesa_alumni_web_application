<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Model\GeekCategory;
use DB;
use Response;
use Image;

class GeekCategoryController extends Controller
{
    public function showAllGeekCategory(){

         $data = DB::table('geekcategories')->get(); 

        //  return response()->json($data);
         
         return view('admin.all_geek_category',compact('data'));    
    }
    public function storeGeekCategory(Request $request){ 


         // validation 
         $validatedData = $request->validate([
            'category_name' => 'required|unique:geekcategories|min:2|max:25',
        ]);

        $data = array();

        $data['category_name'] = $request->category_name;

        $category_pic  = $request->category_pic;


        if($category_pic){ 

            $image_name= hexdec(uniqid()).'.'.$category_pic->getClientOriginalExtension();
                Image::make($category_pic)->resize(300,300)->save('public/media/category_picture/'.$image_name);
                $data['category_pic']='public/media/category_picture/'.$image_name;
        }


        DB::table('geekcategories')->insert($data); 

       return redirect()->route('admin.show.all.geekcategory'); 

    }

    public function editGeekCategory($id){

        $geekcategory=DB::table('geekcategories')->where('id',$id)->first();
        return response()->json($geekcategory);
    }

    public function updateGeekCategory(Request $request){

 
        $data = array();
        $category_id = $request->category_id;
        $data['category_name'] = $request->category_name;

        $category_pic  = $request->category_pic;


        if($category_pic){ 

            $image_name= hexdec(uniqid()).'.'.$category_pic->getClientOriginalExtension();
                Image::make($category_pic)->resize(300,300)->save('public/media/category_picture/'.$image_name);
                $data['category_pic']='public/media/category_picture/'.$image_name;

            $update = DB::table('geekcategories')->where('id',$category_id)->update($data);
        }else{
            $update = DB::table('geekcategories')->where('id',$category_id)->update(['category_name'=>$request->category_name]);
        }
        
        if($update){
            $notification=array(
                'messege'=>'Successfully update Geek Category !',
                'alert-type'=>'success'
                 );
        }else{
            $notification=array(
                'messege'=>'Not updated Geek Category !',
                'alert-type'=>'warning'
                 );
        }

         return Redirect()->back()->with($notification); 
    }
    public function deleteGeekCategory($id){

         $delete = DB::table('geekcategories')->where('id',$id)->delete();
        
            $notification=array(
                'messege'=>'Geek Category Deleted Successfully !',
                'alert-type'=>'success'
                 );
                                                                      
        return Redirect()->back()->with($notification); 
    }
}
