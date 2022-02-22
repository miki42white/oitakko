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


    public function check(){
        return $this->belongsTo('App\Models\Favorite');
}
}