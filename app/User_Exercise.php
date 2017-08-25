<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_Exercise extends Model
{
    protected $fillable = [
        'serie', 'repetions', 'weight', 'day'
    ];

    public function User(){
    	return $this->belongsTo('App\User');
    }

    public function Exercise(){
    	return $this->belongsTo('App\Exercise');
    }
}
