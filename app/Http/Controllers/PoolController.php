<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PoolController extends Controller
{
    //
    public function get_pools()
    {
        $pool = Pool::All();
        return view('pool',compact('pool'));
    }
}
