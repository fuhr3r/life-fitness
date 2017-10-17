<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    public $timestamps = false;

    protected $fillable = ['name'];

    public function part(){
    	return $this->belongsTo('App\Part');
    }

    public function user_exercise(){
    	return $this->hasMany('App\User_Exercise');
    }
}
