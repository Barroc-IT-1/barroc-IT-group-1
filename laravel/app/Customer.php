<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function sales()
    {
        return $this->hasOne('App\Sales');
    }
    public function development()
    {
        return $this->hasOne('App\Development');
    }
    public function finance()
    {
        return $this->hasOne('App\Finance');
    }
    public function users()
    {
        return $this->hasOne('App\Users');
    }
}
