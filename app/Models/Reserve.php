<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    use HasFactory;
    protected $table='reserves';

    protected $fillable=[
        'user_id','school_id'
    ];


    public function reserve(){
        return $this->belongsTo('App\Models\Favorite');
    }
    public function school(){
        return $this->belongsTo('App\Models\School');
    }

}