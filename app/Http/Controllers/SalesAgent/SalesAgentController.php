<?php

namespace App\Http\Controllers\SalesAgent;

use App\Http\Controllers\Controller;

class SalesAgentController extends Controller
{
    public function index()
    {
        return view('pages.dai-ly.index');
    }
}
