<?php

namespace App\Http\Controllers\frontend;

use App\Mail\paymentmail;
use http\Env\Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class DonationController extends Controller
{


    public function getdonation()
    {

        $initial = DB::table('settings')->where('id', '=', 1)->first();
        return view('themes.frontend.donate',['initial'=>$initial]);
    }

    public function savedonation(Request $request)
    {

        if($request->via!=4) {
            $validatedData = $request->validate([
                'title' => 'required',
                'first_name' => 'required',
                'second_name' => 'required',
                'email' => 'required',
                'phone' => 'required|size:10',
                'city' => 'required',
                'state' => 'required',
                'address' => 'required',
                'pin' => 'required|size:6',
                'amount' => 'required',
                'donate_for' => 'required',
                'via'=>'required',
                'pan'=>'required',
                'country'=>'required'
            ]);
        }
        else
        {
            $validatedData = $request->validate([
                'title' => 'required',
                'first_name' => 'required',
                'second_name' => 'required',
                'email' => 'required',
                'phone' => 'required|size:10',
                'city' => 'required',
                'state' => 'required',
                'address' => 'required',
                'pin' => 'required|size:6',
                'amount' => 'required',
                'donate_for' => 'required',
                'via'=>'required',
                'country'=>'required'
            ]);
        }

      $title=$request->title;
      $first_name=$request->first_name;
      $second_name=$request->second_name;
      $email=$request->email;
      $phone=$request->phone;
      $land_phone=$request->land_phone;
      $address=$request->address;
      $city=$request->city;
      $state=$request->state;
      $country=$request->country;
      $pin=$request->pin;
      $amount=$request->amount;
      $donate_for=$request->donate_for;
      $dob=$request->dob;

      $data=array('first_name'=>$first_name,'title'=>$title,'second_name'=>$second_name,'email'=>$email,'mobile'=>$phone,'land_line'=>$land_phone,'address'=>$address,'city'=>$city,'state'=>$state,'country'=>$country,'dob'=>$dob,'donate_for'=>$donate_for,'pin'=>$pin,'amount'=>$amount,'created_at'=>date('H:i:s y-m-d'),'bank_name'=>$request->ba_name,'pan'=>$request->pan,'order_payment'=>$request->order_payment,
          'acc_no'=>$request->ac_no,'branch'=>$request->br_name,'payment_type'=>$request->via,'payment_status'=>0,'start_date'=>$request->Strt_from_date,'currency'=>$request->cr,'last_name'=>$request->last_name,'passport'=>$request->passport,'pass_exp_date'=>$request->exp_date);
     $id= DB::table('donation_details')->insertGetId($data);
      session()->flash('msg',"Detail Successfully added");
      if($request->via==2 || $request->via==3 || $request->via==4) {

         return redirect()->route('paythanky',['id'=>$id]);
      }
      else{
          $initial = DB::table('settings')->where('id', '=', 1)->first();
          return view('themes.frontend.pay_online',['initial'=>$initial,'amount'=>$request->amount,'cr'=>$request->cr,'order_id'=>$id]);
      }

    }

    public function paythanky($id)
    {
        //Mail::to('ashwin25021995@gmail.com')->send(new paymentmail());
        $data["mail_message"] = "Hello!";

        Mail::send('themes.frontend.payment_mail', $data, function($message)
        {
            $message
                ->to('mrashawini@gmail.com')
                ->from('ashwin25021995@gmail.com')

                ->subject('TEST');
        });
        $initial = DB::table('settings')->where('id', '=', 1)->first();
        $doner_details=DB::table('donation_details')->where('id','=',$id)->first();
        return view('themes.frontend.order_confirm',['initial'=>$initial,'details'=>$doner_details]);
    }



    public function payment_response(Request $request)
    {
        $initial = DB::table('settings')->where('id', '=', 1)->first();
        DB::table('donation_details')->where('id','=',$request->oid)->update(array('payment_status'=>1));
         $details=DB::table('donation_details')->where('id','=',$request->oid)->first();

        /// Mail::to('chaithrarakesh2013@gmail.com')->send(new paymentmail());
        return view('themes.frontend.payment_response',['initial'=>$initial,'status'=>$request->status,'details'=>$details,'transactionid'=>$request->ipgTransactionId]);
    }

}
