<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name'
    ];

    public function user_exercise(){
    	return $this->hasMany('App\User_Exercise');
    }
}
