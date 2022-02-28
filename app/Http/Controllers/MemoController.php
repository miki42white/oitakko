<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favorite;
use App\Models\School;
use App\Models\Memo;
use Illuminate\Support\Facades\Auth;

class MemoController extends Controller
{
    public function showmemo(Request $request,int $id){
        $school=School::find($id);
        $memo=Memo::where('school_id',$id)->where('user_id',auth()->user()->id)->first();
        $user=Auth::user();
        return view('memo',['memo'=>$memo,'school'=>$school,'user'=>$user]);
    }


    public function deleteInsert(Request $request,int $id)
    {
        $school=School::find($id);
        $user= Auth::user();
        Memo::where('user_id',Auth::id())->where('school_id',$id)->delete();
        $memo=new Memo();
        $memo->user_id=Auth::id();
        $memo->school_id=$id;
        $memo->memo=$request->memo;
        $memo->save();
        return view('memo',['memo'=>$memo,'user'=>$user,'school'=>$school]);
    }
}
