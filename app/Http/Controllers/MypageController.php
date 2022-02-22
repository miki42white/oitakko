<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;
use App\Models\Favorite;
use Illuminate\Support\Facades\Auth;

class MypageController extends Controller
{
    public function show(){
        $items=Favorite::where('user_id',Auth::id())->get();
        
        foreach($items as $item){
            $names=School::where('id',$item->school_id)->get();
        }
        $user=Auth::user();
        return view ('mypage',['names'=>$names,'user'=>$user]);
    }

    public function record(Request $request){
        $name=request('name');
        $items=School::where('name','=',$name)->first();
        $favorite=Favorite::where('user_id',Auth::id())->where('school_id',$items->id)->first();
        $user=Auth::user();
        return view ('record',['items'=>$items,'favorite'=>$favorite,'name'=>$name,'user'=>$user]);
}
}
