<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_Exercise extends Model
{
    protected $fillable = [
        'serie', 'repetions', 'weight', 'day'
    ];

    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function exercise(){
    	return $this->belongsTo('App\Exercise');
    }
}
