<?php

namespace App\Http\Controllers\frontend;

use App\Mail\ContactUs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class TeamController extends Controller
{
   public function index()
   {
       $initial = DB::table('settings')->where('id','=',1)->first();
       $groups['group_1'] = DB::table('page_team')->where('group','=',1)->get();
       $groups['group_2'] = DB::table('page_team')->where('group','=',2)->get();
       $groups['group_3'] = DB::table('page_team')->where('group','=',3)->get();
       return view('themes.frontend.team',['initial'=>$initial,'groups'=>$groups]);
   }


   public function team_details($id)
   {
       $initial = DB::table('settings')->where('id','=',1)->first();
      $team_description= DB::table('page_team')->where('id','=',$id)->first();
       return view('themes.frontend.team_description',['initial'=>$initial,'description'=>$team_description]);
   }
    public function teamquickcontact(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message'=>'required'

        ]);
        if($request->phone)
        {
            $phone=$request->phone;
        }
        else
        {
            $phone=null;
        }
        $objDemo = new \stdClass();
        $objDemo->name = $request->name;
        $objDemo->email = $request->email;
        $objDemo->subject = $request->subject;
        $objDemo->message = $request->message;
        $objDemo->mobile = $phone;

        $SES = Mail::to('ashwin25021995@gmail.com')->send(new ContactUs($objDemo));

        $data=array('name'=>$request->name,'email'=>$request->email,'subject'=>$request->subject,'message'=>$request->message,'created_at'=>date('y-m-d'),'updated_at'=>date('y-m-d'),'mobile'=>$phone);
        DB::table('contact')->insert($data);
        session()->flash('msg',"Contact Successfully Send Thankyou! ");
        return redirect()->route('thankyou');
    }

    public function get_all_volunteers()
    {
        $volunteers=DB::table('volunteeers')->get();
        $initial = DB::table('settings')->where('id','=',1)->first();
        return view('themes.frontend.volunteers',['initial'=>$initial,'volunteer'=>$volunteers]);
    }

}
