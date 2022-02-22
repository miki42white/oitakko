<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;
use App\Models\Favorite;
use Illuminate\Support\Facades\Auth;



class FavoriteController extends Controller
{
    public function favorite(Request $request){
        $name=request('name');
        $school=School::where('name','=',$name)->first();
        $favorite = new Favorite;
        $favorite->school_id =$school->id;
        $favorite->user_id = Auth::user()->id;
        $favorite->save();
        $favorite=Favorite::where('user_id',Auth::id())->get();
        $items=School::where('name','=',$name)->first();
        $user=Auth::user();

        return view('detail',['items'=>$items,'favorite'=>$favorite,'user'=>$user]);
    }

    public function unfavorite(Request $request){
        $name=request('name');
        $school=School::where('name','=',$name)->first();
        $favorite=Favorite::where('user_id',Auth::id())->where('school_id',$school->id)->delete();
        $favorite=Favorite::where('user_id',Auth::id())->where('school_id',$school->id)->first();
        $items=School::where('name','=',$name)->first();
        $user=Auth::user();
        return view('detail',['items'=>$items,'favorite'=>$favorite,'user'=>$user]);
    }
}
