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


        $items=Favorite::with(['school','school.reserves'=>function($query){
            $query->where('user_id',Auth::id());
        }])->where('user_id',Auth::id())->get();
        $user=Auth::user();
        return view ('mypage',['items'=>$items,'user'=>$user]);
    }

    public function record(Request $request,int $id){
        $items=School::find($id);
        $favorite=Favorite::where('user_id',Auth::id())->where('school_id',$id)->first();
        $reserve=Reserve::where('user_id',Auth::id())->where('school_id',$id)->first();
        $user=Auth::user();
        return view ('record',['items'=>$items,'favorite'=>$favorite,'reserve'=>$reserve,'user'=>$user]);
}
}
