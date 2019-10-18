<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

use Auth;
use Illuminate\Support\Facades\DB;
use File;
use Session;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $initial = DB::table('settings')->where('id',1)->first();
        //slider
        //dd('Testing Home Page Record');
        //what we do start
        $whatwedo = DB::table('donatation_pages')
                ->offset(0)
                ->limit(8)
                ->orderBy('sorting', 'ASC')
                ->get();
        //what we do end
        //project start
        $project = array();
        $project['project_1'] = DB::table('pages_projects')
                ->where('type',1)
                ->limit(2)
                ->orderByRaw("RAND()")
                ->get();
        $project['project_2'] = DB::table('pages_projects')
                ->where('type',1)
                ->limit(2)
                ->orderByRaw("RAND()")
                ->get();                
        $project['project_3'] = DB::table('pages_projects')
                ->where('type',1)
                ->limit(2)
                ->orderByRaw("RAND()")
                ->get();                                
        $project['news'] = DB::table('pages_projects')
                ->where('type',2)
                ->limit(6)
                ->orderBy('id', 'DESC')
                ->get();
        $settings = DB::table('settings')
            ->limit(3)
            ->orderByRaw("RAND()")
            ->get();
        //project start
        $donationLabel = 'donationLabel';
        $project['donnationtype']= DB::table('donatation_pages')
            ->limit(4)
            ->orderByDesc(DB::raw('RAND()'))
            ->get();

          
        //$whatwedo = DB::table('settings')->where('id',1)->get();
        
        return view('themes.frontend.index',['initial'=>$initial,'whatwedo'=>$whatwedo,'project'=>$project,'donationLabel'=>$donationLabel,'settings'=>$settings]);
        //return view('home');
    }

    public function readmore($slug)
    {
        $initial = DB::table('settings')->where('id',1)->first();
       $readmore= DB::table('slider')->where('slug','=',$slug)->first();
        return view('themes.frontend.sliderread',['readmore'=>$readmore,'initial'=>$initial]);
    }

    public function comingsoon()
    {
        $initial = DB::table('settings')->where('id',1)->first();
        return view('themes.frontend.comming_soon',['initial'=>$initial]);
    }
}
