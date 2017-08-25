<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    protected $fillable = ['name'];

    public function Part(){
    	return $this->belongsTo('App\Part');
    }

    public function User_Exercise(){
    	return $this->hasMany('App\User_Exercise');
    }
}
