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
    public function scopeSearch($q)
    {
        return empty(request()->search) ? $q : $q->where('name', 'like', '%'.request()->search.'%');
    }
}
