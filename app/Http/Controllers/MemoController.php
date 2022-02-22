<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favorite;
use App\Models\School;
use App\Models\Memo;
use Illuminate\Support\Facades\Auth;

class MemoController extends Controller
{
    public function showmemo(Request $request){
        $name=request('name');
        $school=School::where('name','=',$name)->first();
        $memo=Memo::where('school_id',$school->id)->where('user_id',auth()->user()->id)->first();
        $user=Auth::user();
        return view('memo',['memo'=>$memo,'name'=>$name,'school'=>$school,'user'=>$user]);
    }

    public function create(Request $request){
        $name=request('name');
        $school=School::where('name','=',$name)->first();
        $memo=new Memo();
        $memo->user_id=Auth::user()->id;
        $memo->school_id=$school->id;
        $memo->memo=$request->memo;
        $memo->save();
        $memo=Memo::where('user_id',Auth::id())->where('school_id',$school->id)->first();
        $user= Auth::user();

        return view('memo',['memo'=>$memo,'name'=>$name,'school'=>$school,'user'=>$user]);
    }

    public function update(Request $request)
    {
        $name=request('name');
        $school=School::where('name','=',$name)->first();
        $user= Auth::user();
        $memo=Memo::where('user_id',Auth::id())->where('school_id',$school->id)->delete();
        $memo->memo=$request->memo;
        $memo->save();
        $memo=Memo::where('user_id',Auth::id())->where('school_id',$school->id)->first();
        return view('memo',['memo'=>$memo,'name'=>$name,'user'=>$user]);
    }
}
