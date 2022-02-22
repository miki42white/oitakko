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

    public function showdetail(Request $request){
        $name=request('name');
        $items=School::where('name','=',$name)->first();
        $favorite=Favorite::where('school_id',$items->id)->where('user_id',auth()->user()->id)->first();
        $user=Auth::user();
        return view ('detail',['items'=>$items,'favorite'=>$favorite,'user'=>$user]);
    }

}
