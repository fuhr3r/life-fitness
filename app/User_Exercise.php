<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_Exercise extends Model
{
    protected $table = 'user_exercise';
    public $timestamps = false;

    protected $fillable = [
        'serie', 'repetions', 'weight', 'day'
    ];

    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function exercise(){
    	return $this->belongsTo('App\Exercise');
    }

    public function day(){
        return $this->belongsTo('App\Day');
    }
}
