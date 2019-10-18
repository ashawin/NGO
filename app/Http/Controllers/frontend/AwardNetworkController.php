<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AwardNetworkController extends Controller
{
  public function index()
  {
      $initial = DB::table('settings')->where('id','=',1)->first();
      $pageawardgallery = DB::table('page_awards_gallery')->get();
      $awardnetwork= DB::table('page_awards_networks')->first();
      return view('themes.frontend.awardnetword',['awardnetwork'=>$awardnetwork,'initial'=>$initial,'awardslider'=>$pageawardgallery]);
  }

}
