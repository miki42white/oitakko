<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;
use App\Models\Favorite;
use App\Models\Reserve;
use Illuminate\Support\Facades\Auth;

class MypageController extends Controller
{
    public function show(){


        $items=Favorite::with('school')->where('user_id',Auth::id())->get();
        $reserves=Reserve::with('school')->where('user_id',Auth::id())->get();
        $user=Auth::user();
        return view ('mypage',['items'=>$items,'user'=>$user,'reserves'=>$reserves]);
    }

    public function record(Request $request){
        $name=request('name');
        $items=School::where('name','=',$name)->first();
        $favorite=Favorite::where('user_id',Auth::id())->where('school_id',$items->id)->first();
        $reserve=Reserve::where('user_id',Auth::id())->where('school_id',$items->id)->first();
        $user=Auth::user();
        return view ('record',['items'=>$items,'favorite'=>$favorite,'name'=>$name,'reserve'=>$reserve,'user'=>$user]);
}
}
