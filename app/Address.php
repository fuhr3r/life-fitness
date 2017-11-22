<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'street', 'city', 'neighborhood', 'home_number', 'state'
    ];

    public function user(){
        return $this->hasOne('App\User');
    }

}
