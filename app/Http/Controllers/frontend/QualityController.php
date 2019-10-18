<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class QualityController extends Controller
{
    public function index()
    {
        $initial = DB::table('settings')->where('id','=',1)->first();
        $quality = DB::table('page_quality')->orderByDesc('id')->take(6)->get();
        return view('themes.frontend.qualitystandard',['initial'=>$initial,'quality'=>$quality]);
    }

    public function qualitydesc($id)
    {
        $quality = DB::table('page_quality')->where('id','=',$id)->first();
        $initial = DB::table('settings')->where('id','=',1)->first();
        return view('themes.frontend.quality_desc',['initial'=>$initial,'description'=>$quality]);
    }
    public function morequality()
    {
        $initial = DB::table('settings')->where('id','=',1)->first();
        $quality = DB::table('page_quality')->orderByDesc('id')->get();
        return view('themes.frontend.qualitystandard',['initial'=>$initial,'quality'=>$quality]);
    }
}
