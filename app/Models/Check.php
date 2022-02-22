<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Check extends Model
{
    use HasFactory;

    protected $table='checks';

    protected $fillable=[
        'user_id','school_id'
    ];


    public function check(){
        return $this->belongsTo('App\Models\Favorite');
    }
}
