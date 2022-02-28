<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\School;
use App\Models\Favorite;
use App\Models\Reserve;
use Illuminate\Support\Facades\Auth;

class ReserveController extends Controller
{
    public function deleteInsert(Request $request){
        $name=request('name');
        $school=School::where('name','=',$name)->first();
        $user= Auth::user();
        Reserve::where('user_id',Auth::id())->where('school_id',$school->id)->delete();
        $reserve=new Reserve();
        $reserve->user_id=Auth::id();
        $reserve->school_id=$school->id;
        $reserve->datetime=$request->datetime;
        $reserve->save();
        $items=School::where('name','=',$name)->first();
        return view('record',['user'=>$user,'reserve'=>$reserve,'name'=>$name,'items'=>$items]);

    }
}
