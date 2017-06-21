<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    public function user(){
        return $this->hasOne('App\User',"created_by", "id");
    }
}
