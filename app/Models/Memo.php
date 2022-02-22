<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Memo extends Model
{
    use HasFactory;

    protected $table='memos';

    protected $fillable=[
        'user_id','school_id'
    ];


    public function check(){
        return $this->belongsTo('App\Models\Favorite');
    }
}
