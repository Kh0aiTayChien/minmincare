<?php

namespace App\Http\Controllers\NgaMin;

use App\Http\Controllers\Controller;

class NgaMinController extends Controller
{
    public function index()
    {
        return view('pages.nga-min.index');
    }
}
