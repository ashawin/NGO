<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class HistoryController extends Controller
{
    public function index()
    {
        $initial = DB::table('settings')->where('id',1)->first();
        $history=DB::table('page_histroy')->where('id',1)->first();
        return view('themes.frontend.history',['initial'=>$initial,'history'=>$history]);
    }
}
