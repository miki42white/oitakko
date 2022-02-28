<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\School;
use App\Models\Favorite;
use App\Models\Reserve;
use Illuminate\Support\Facades\Auth;

class ReserveController extends Controller
{
    public function deleteInsert(Request $request, int $id){
        $school=School::find($id);
        $user= Auth::user();
        Reserve::where('user_id',Auth::id())->where('school_id',$id)->delete();
        $reserve=new Reserve();
        $reserve->user_id=Auth::id();
        $reserve->school_id=$id;
        $reserve->datetime=$request->datetime;
        $reserve->save();
        return view('record',['user'=>$user,'reserve'=>$reserve,'items'=>$school]);

    }
}
