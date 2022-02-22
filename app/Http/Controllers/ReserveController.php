<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\School;
use App\Models\Favorite;
use App\Models\Reserve;
use Illuminate\Support\Facades\Auth;

class ReserveController extends Controller
{
    public function reserve(Request $request){
        $name=request('name');
        $school=School::where('name','=',$name)->first();
        $reserve=new Reserve();
        $reserve->user_id=Auth::user()->id;
        $reserve->school_id=$school->id;
        $reserve->datetime=$request->reserve;
        $reserve->save();
        $reserve=Reserve::where('user_id',Auth::id())->where('school_id',$school->id)->first();
        $user= Auth::user();
        $items=Favorite::where('user_id',Auth::id())->get();
        return view ('record',['user'=>$user,'reserve'=>$reserve,'name'=>$name,'items'=>$items]);
}
}
