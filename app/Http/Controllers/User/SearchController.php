<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use DB;
use Image;

class SearchController extends Controller
{
    public function searchGeek(Request $request){


        $search_key = $request->search_key;

        //return $search_key;

        $geeksCollection=DB::table('geeks')
                                 ->join('geekcategories','geeks.geekcategory_id','geekcategories.id')
                                 ->select('geeks.*','geekcategories.category_name')
                                ->where('geekcategories.category_name','LIKE', "%{$search_key}%")->get();
                                
        $geeksCategory = DB::table('geekcategories')->get();

        $resultCount=DB::table('geeks')
                                 ->join('geekcategories','geeks.geekcategory_id','geekcategories.id')
                                 ->select('geeks.*','geekcategories.category_name')
                                 ->where('geekcategories.category_name','LIKE', "%{$search_key}%")->count();

        return view('search_result',compact('geeksCollection','geeksCategory','resultCount'));
    }

    public function searchGeekByCategory($id){

        $geeksCollection=DB::table('geeks')
                                 ->join('geekcategories','geeks.geekcategory_id','geekcategories.id')
                                 ->select('geeks.*','geekcategories.category_name')
                                ->where('geekcategories.id',$id)->get();
                                
        $geeksCategory = DB::table('geekcategories')->get();

        $resultCount=DB::table('geeks')
                                 ->join('geekcategories','geeks.geekcategory_id','geekcategories.id')
                                 ->select('geeks.*','geekcategories.category_name')
                                ->where('geekcategories.id',$id)->count();

        return view('search_result',compact('geeksCollection','geeksCategory','resultCount'));
    }
}
