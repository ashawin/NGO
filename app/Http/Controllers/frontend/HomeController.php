<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function index()
    {
        $donationtype = DB::table('donatation_pages')->get();
        return view('themes.frontend.index', ['donationtype' => $donationtype]);
    }

    public function whatwedo()
    {
        $initial = DB::table('settings')->where('id', '=', 1)->first();
        $wherework = DB::table('donatation_pages')->get();
        $whatwedo = DB::table('page_where_we_work')->get();
        return view('themes.frontend.what_we_do', ['wherewework' => $wherework, 'initial' => $initial, 'whatwedo' => $whatwedo]);
    }

    public function whatwedodetails($slug)
    {

        $initial = DB::table('settings')->where('id', '=', 1)->first();
        $wherework = DB::table('donatation_pages')->where('slug', '=', $slug)->first();
        return view('themes.frontend.donation_pages', ['wherewework' => $wherework, 'initial' => $initial]);

    }

    public function getcontact()
    {
        $initial = DB::table('settings')->where('id', '=', 1)->first();
        return view('themes.frontend.contact',['initial'=>$initial]);
    }


    public function savecontact(Request $request)
    {
        $name=$request->name;
        $email=$request->email;
        $subject=$request->subject;
        $message=$request->message;
        $mobile=$request->mobile;

        $data=array('name'=>$name,'email'=>$email,'mobile'=>$mobile,'subject'=>$subject,'message'=>$message,'created_at'=>date('y-m-d'),'updated_at'=>date('y-m-d'));
        DB::table('contact')->insert($data);

        session()->flash('msg',"Successfully message send");

        return redirect()->route('getcontact');
    }

}
