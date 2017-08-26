<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    protected $fillable = [
        'name'
    ];

    public function exercise(){
    	return $this->hasMany('App\Exercise');
    }
}
