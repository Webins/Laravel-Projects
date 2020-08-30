<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    /*The listing belongs to a user */
    public function user(){
        return $this->belongsTo('App\User');
    }
}
