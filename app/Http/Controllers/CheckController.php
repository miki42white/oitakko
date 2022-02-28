<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use App\Models\School;
use App\Models\Check;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CheckController extends Controller
{
    public function showcheck(Request $request,int $id){
        $school=School::find($id);
        $check=Check::where('school_id',$id)->where('user_id',auth()->user()->id)->first();
        $user=Auth::user();
        return view('check',['check'=>$check,'school'=>$school,'user'=>$user]);
    }

    public function create(Request $request,int $id){
        $school=School::find($id);
        $check=new Check();
        $check->user_id=Auth::user()->id;
        $check->school_id=$id;
        $check->institution=$request->institution;
        $check->playground=$request->playground;
        $check->teachers=$request->teachers;
        $check->lunch=$request->lunch;
        $check->snack=$request->snack;
        $check->save();
        $check=Check::where('user_id',Auth::id())->where('school_id',$id)->first();
        $user= Auth::user();
        return view('check',['check'=>$check,'school'=>$school,'user'=>$user]);
    }

    public function update(Request $request,int $id){
        $school=School::find($id);
        Check::where('user_id',Auth::id())->where('school_id',$id)->update(['institution'=>$request->institution,'playground'=>$request->playground,
        'teachers'=>$request->teachers,
        'lunch'=>$request->lunch,
        'snack'=>$request->snack
        ]);
        $check=Check::where('user_id',Auth::id())->where('school_id',$id)->first();
        $user= Auth::user();
        return view('check',['check'=>$check,'school'=>$school,'user'=>$user]);

    }
}
