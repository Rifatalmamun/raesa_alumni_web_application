<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Image;
use DB;

class SettingController extends Controller
{
    public function generalSetting(){
        $data = DB::table('generalsettings')->where('id',1)->first();

        return view('admin.general_setting',compact('data')); 
    }

    public function updateGeneralSetting(Request $request){

        $data=array();

        $data['site_name'] = $request->site_name;
        $data['site_title'] = $request->site_title; 
        $data['site_url'] = $request->site_url; 
        $data['currency'] = $request->currency; 
        $data['site_language'] = $request->site_language; 
        $data['captca'] = $request->captca; 
        $data['time_zone'] = $request->time_zone; 
        $data['fist_color'] = $request->fist_color;

        $site_logo =     $request->site_logo;
        $old_site_logo = $request->old_site_logo;

        if($site_logo){
            
            if($old_site_logo){
                unlink($request->old_site_logo);
            }
            $image_name= hexdec(uniqid()).'.'.$site_logo->getClientOriginalExtension();
                Image::make($site_logo)->save('public/media/site logo/'.$image_name);
                $data['site_logo']='public/media/site logo/'.$image_name; 

        }else{
            $data['site_logo'] = $request->old_site_logo;
        }


        $update = DB::table('generalsettings')->update($data);  

        if($update){
            $notification=array(
                'messege'=>'Setting Updated Successfully !',
                'alert-type'=>'success'
                );
        }else{
            $notification=array(
                'messege'=>'Nothing Updated !',
                'alert-type'=>'warning'
                );
        }
        return redirect()->back()->with($notification);                   

    }

    public function geekSetting(){
        $data = DB::table('geeksettings')->where('id',1)->first();
        $curr = DB::table('generalsettings')->where('id',1)->first();

        $currency = $curr->currency;

        return view('admin.geek_setting',compact('data','currency')); 
    }

    public function updateGeekSetting(Request $request){

        $data=array();

        $data['fee_type'] = $request->fee_type;
        $data['fee'] = $request->fee; 
        $data['auto_approval'] = $request->auto_approval; 
        $data['featured_fee'] = $request->featured_fee; 

        if($request->fee_type=='free'){
            $data['fee'] = '0'; 
        }

        $update = DB::table('geeksettings')->update($data);  

        if($update){
            $notification=array(
                'messege'=>'Bee Updated Successfully !',
                'alert-type'=>'success'
                );
        }else{
            $notification=array(
                'messege'=>'Nothing Updated !',
                'alert-type'=>'warning'
                );
        }
        return redirect()->back()->with($notification);

    }

    public function colorSetting(){
        $data = DB::table('colors')->where('id',1)->first();

        return view('admin.color_setting',compact('data'));  
    }

    public function updateColorSetting(Request $request){
        
        $data = array();

        $data['site_name'] = $request->site_name;
        $data['menu_bg'] = $request->menu_bg;
        $data['menu_item_tx'] = $request->menu_item_tx;

        $data['first_slider_bg'] = $request->first_slider_bg;
        $data['second_slider_bg'] = $request->second_slider_bg;
        $data['third_slider_bg'] = $request->third_slider_bg;

        $data['first_slider_tx'] = $request->first_slider_tx;
        $data['second_slider_tx'] = $request->second_slider_tx;
        $data['third_slider_tx'] = $request->third_slider_tx;

        $data['first_section_bg'] = $request->first_section_bg;
        $data['search_btn_bg'] = $request->search_btn_bg;
        $data['search_btn_tx'] = $request->search_btn_tx;

        $data['category_section_bg'] = $request->category_section_bg;
        $data['category_box_bg'] = $request->category_box_bg;
        $data['category_section_tx'] = $request->category_section_tx;

        $data['geek_box_bg'] = $request->geek_box_bg;
        $data['geek_box_tx'] = $request->geek_box_tx;

        $data['best_section_bg'] = $request->best_section_bg;
        $data['new_section_bg'] = $request->new_section_bg;

        $data['btn_bg'] = $request->btn_bg;
        $data['btn_tx'] = $request->btn_tx;

        $data['about_section_bg'] = $request->about_section_bg;
        $data['about_box_bg'] = $request->about_box_bg;
        $data['about_box_ic'] = $request->about_box_ic;
        $data['about_box_tx'] = $request->about_box_tx;

        $data['footer_bg'] = $request->footer_bg; 
        $data['footer_tx'] = $request->footer_tx; 


        //return response()->json($data);

        $update = DB::table('colors')->update($data);  

        if($update){
            $notification=array(
                'messege'=>'Coors Updated Successfully !',
                'alert-type'=>'success'
                ); 
        }else{
            $notification=array(
                'messege'=>'Nothing Updated !',
                'alert-type'=>'warning'
                );
        }
        return redirect()->back()->with($notification);
    }
}
