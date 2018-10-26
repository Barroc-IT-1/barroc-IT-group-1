<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    public function Customer()
    {
        return $this->hasOne('App\Customer');
    }
}
