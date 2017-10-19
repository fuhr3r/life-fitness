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

    public function users(){
    	return $this->belongsToMany('App\User', 'user_exercise')
            ->withPivot('serie', 'repetitions', 'weight', 'day');
    }
}
