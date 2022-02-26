<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Favorite extends Model
{
    use HasFactory;

    protected $table = 'favorites';

    protected $fillable = [
        'user_id','school_id'
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function school(){
        return $this->belongsTo('App\Models\School');
    }

    public function check(){
        return $this->hasOne('App\Models\Check');
    }

    public function memo(){
        return $this->hasOne('App\Models\Memo');
    }

    public function reserve(){
        return $this->hasOne('App\Models\Reserve');
    }

}
