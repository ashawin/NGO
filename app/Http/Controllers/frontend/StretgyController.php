<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class StretgyController extends Controller
{
   public function index()
   {
       $initial = DB::table('settings')->where('id',1)->first();
       $strategy = DB::table('page_strategy')->where('id',1)->first();
       return view('themes.frontend.straetgy',['initial'=>$initial,'stretegy'=>$strategy]);
   }
}
