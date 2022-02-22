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

    public function use(){
        return $this->hasOne('App\Models\User');
    }

    public function favorite(){
        return $this->hasOne('App\Models\Favorite');
    }

}
