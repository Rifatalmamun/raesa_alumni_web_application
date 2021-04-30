<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class noticeController extends Controller
{
    public function index(){
        
        $notices = DB::table('notices')->orderBy('id','DESC')->get();

        return view('notice.index',compact('notices'));
    }
    public function show($id){
        
        $notice = DB::table('notices')->where('id',$id)->first();

        return view('notice.show',compact('notice'));           
    }  
}
