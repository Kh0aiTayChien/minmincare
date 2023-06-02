<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Revolution\Google\Sheets\Facades\Sheets;
use Google\Service\Exception;
use Illuminate\Support\Carbon;

class SendController extends Controller
{
    public function index(Request $request)
    {
        Sheets::spreadsheet(config('sheet.spreadsheet_id'));
        $rows = [$request->name, $request->phone, $request->email, $request->invest, $request->care];

        $rows = array($rows);
            Sheets::sheet('chien')->append($rows);
    }
}
