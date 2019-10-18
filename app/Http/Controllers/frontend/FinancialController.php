<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class FinancialController extends Controller
{
    public function index()
    {
        $initial = DB::table('settings')->where('id', '=', 1)->first();
        $finance = DB::table('page_fin')->get();

        return view('themes.frontend.finance', ['initial' => $initial, 'finance' =>$finance]);
    }
}
