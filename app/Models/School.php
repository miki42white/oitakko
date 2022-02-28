<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;

    protected $table = 'schools';

    protected $fillable=[
        'name',
        'address',
        'phonenumber',
        'url'
    ];

    protected $casts=[
        'lat'=>'double',
        'lng'=>'double'
    ];

    public function user(){
        return $this->hasOne('App\Models\User');
    }

    public function favorite(){
        return $this->hasOne('App\Models\Favorite');
    }
    public function reserves(){
        return $this->hasMany('App\Models\Reserve');
    }

}
