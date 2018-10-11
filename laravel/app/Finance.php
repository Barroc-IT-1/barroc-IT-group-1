<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Finance extends Model
{
    // In case the table name is incorrect.
    protected $table = 'finance';
    public function Customer()
    {
        return $this->hasOne('App\Customer');
    }
}
