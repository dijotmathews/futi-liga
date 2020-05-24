<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pool;

class PoolController extends Controller
{
    //
    public function get_pools()
    {
        $pools = Pool::All();
        return view('pool',compact('pools'));
    }
}
