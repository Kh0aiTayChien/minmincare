<?php

namespace App\Http\Controllers\advertise;

use App\Http\Controllers\Controller;

class advertise extends Controller
{
    public function index()
    {
        return view('pages.advertise.index');
    }
}
