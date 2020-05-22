<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    //

    protected $fillable =  ['name', 'won', 'loss', 'draw', 'point', 'coach'];
    
    public function players()
    {
        return $this->hasMany('App\Models\Player');
    }
}
