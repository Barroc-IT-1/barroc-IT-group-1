<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Development extends Model
{
    protected $table = 'developments';
    public function Customer()
    {
        return $this->hasOne('App\Customer');
    }
}
