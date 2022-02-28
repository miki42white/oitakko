<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;
use App\Models\Favorite;
use Illuminate\Support\Facades\Auth;



class FavoriteController extends Controller
{
    public function favorite(Request $request, int $id){
        $favorite = new Favorite;
        $favorite->school_id =$id;
        $favorite->user_id = Auth::user()->id;
        $favorite->save();
        $favorite=Favorite::where('user_id',Auth::id())->get();
        $items=School::find($id);
        $user=Auth::user();
        return view('detail',['items'=>$items,'favorite'=>$favorite,'user'=>$user]);
    }

    public function unfavorite(Request $request, int $id){
        $favorite=Favorite::where('user_id',Auth::id())->where('school_id',$id)->delete();
        $items=School::find($id);
        $user=Auth::user();
        return view('detail',['items'=>$items,'favorite'=>null,'user'=>$user]);
    }
}
