<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pool extends Model
{
    //
    protected $fillable =  ['name'];
    public function pools()
    {
        return $this->hasMany('App\Models\Team');
    }
}
