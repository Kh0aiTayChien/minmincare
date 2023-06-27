<?php

namespace App\Http\Controllers\KnowledgeController;

use App\Http\Controllers\Controller;

class KnowledgeController extends Controller
{
    public function index()
    {
        return view('pages.kien-thuc.index');
    }
}
