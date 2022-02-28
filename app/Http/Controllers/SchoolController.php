<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;
use App\Models\Favorite;
use Illuminate\Support\Facades\Auth;

class SchoolController extends Controller
{
    public function show(School $school){
        $items=School::all();
        $user=Auth::user();
        return view('welcome',['items'=>$items,'user'=>$user]);
    }

    public function showdetail(Request $request,int $id){
        $items=School::find($id);
        $favorite=null;
        if(auth()->check()){
            $favorite=Favorite::where('school_id',$id)->where('user_id',auth()->user()->id)->first();
        }
        $user=Auth::user();
        return view ('detail',['items'=>$items,'favorite'=>$favorite,'user'=>$user]);
    }

}
