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


class DonationController extends Controller
{
    public function manage(Request $request){
        $user = Auth::user();
        if(@$user->id){
            $dpages = DB::table('donatation_pages')->get();
            return view('themes.backend.donation.manage',['dpages'=>$dpages]);
        } else {
            return view('themes.backend.login');    
        }
    }
    public function add(Request $request){
        $user = Auth::user();
        if(@$user->id){
            return view('themes.backend.donation.add');
        } else {
            return view('themes.backend.login');    
        }
    }
    public function save(Request $request){
        $user = Auth::user();
        if(@$user->id){
            //validation start
            $validatedData = $request->validate([ 
                'title' => 'required',
                'description' => 'required',
                'keywords' => 'required',
                'featureimage_1' => 'required',
                'featureimage_2' => 'required',
                'slider_image_1' => 'required',
                'slider_image_2' => 'required',
                'slider_image_3' => 'required',
                'leftcontent'=>'required',
                'rightcontent'=>'required',
                'video'=>'required',
                'sort'=>'required'
            ]);
            //validation end
            //file upload start
            if(Input::file('featureimage_1')) {
                $image = $request->file('featureimage_1');
                $featureimage_1 = time().'-pages.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads/pages');
                $image->move($destinationPath, $featureimage_1);
            } else {
                $featureimage_1 = false;
            }
            if(Input::file('featureimage_2')) {
                $image = $request->file('featureimage_2');
                $featureimage_2 = time().'-pages.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads/pages');
                $image->move($destinationPath, $featureimage_2);
            } else {
                $featureimage_2 = false;
            }            
            if(Input::file('slider_image_1')) {
                $image = $request->file('slider_image_1');
                $slider_image_1 = time().'-pages.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads/pages');
                $image->move($destinationPath, $slider_image_1);
            } else {
                $slider_image_1 = false;
            }
            if(Input::file('slider_image_2')) {
                $image = $request->file('slider_image_2');
                $slider_image_2 = time().'-pages.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads/pages');
                $image->move($destinationPath, $slider_image_2);
            } else {
                $slider_image_2 = false;
            }
            if(Input::file('slider_image_3')) {
                $image = $request->file('slider_image_3');
                $slider_image_3 = time().'-pages.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads/pages');
                $image->move($destinationPath, $slider_image_3);
            } else {
                $slider_image_3 = false;
            }            
            //file upload end featureimage_1
            $sql = "INSERT INTO `donatation_pages` (`id`, `title`, `description`, `keywords`, `feature_image_1`,`feature_image_2`,`image_1`,`image_2`,`image_3`,`left_content`,`right_content`,`youtube_video`,`sorting`, `created_at`, `updated_at`,'slug') VALUES (NULL, '".$request->title."', '".$request->description."', '".$request->keywords."','".$featureimage_1."','".$featureimage_2."','".$slider_image_1."','".$slider_image_2."','".$slider_image_3."','".$request->leftcontent."','".$request->rightcontent."','".$request->video."','".$request->sort."',CURRENT_TIMESTAMP, CURRENT_TIMESTAMP,'".str_slug($request->title)."');";
            DB::statement($sql);    
            Session::flash('flash_message', 'Successfully Page Added!');        
            return view('themes.backend.donation.add');
        } else {
            return view('themes.backend.login');    
        }
    }
    public function edit(Request $request){
        $user = Auth::user();
        if(@$user->id){
            $pId = $request->pId;
            $donationDetails = DB::table('donatation_pages')->where('id','=',$pId)->first();
            return view('themes.backend.donation.edit',['donationDetails'=>$donationDetails]);
        } else {
            return view('themes.backend.login');    
        }
    }
    public function update(Request $request){
        $user = Auth::user();
        if(@$user->id){
            $pId = $request->pId;
            //update image start
            if(Input::file('featureimage_1')) {
                $image = $request->file('featureimage_1');
                $featureimage_1 = time().'-pages.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads/pages');
                $image->move($destinationPath, $featureimage_1);
                $sqlf1 = "UPDATE `donatation_pages` SET `feature_image_1` = '".$featureimage_1."' WHERE `id` = ".$pId.";";
                DB::statement($sqlf1);
            }
            if(Input::file('featureimage_2')) {
                $image = $request->file('featureimage_2');
                $featureimage_2 = time().'-pages.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads/pages');
                $image->move($destinationPath, $featureimage_2);
                $sqlf2 = "UPDATE `donatation_pages` SET `feature_image_2` = '".$featureimage_2."' WHERE `id` = ".$pId.";";
                DB::statement($sqlf2);
            }            
            if(Input::file('slider_image_1')) {
                $image = $request->file('slider_image_1');
                $slider_image_1 = time().'-pages.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads/pages');
                $image->move($destinationPath, $slider_image_1);
                $sqli1 = "UPDATE `donatation_pages` SET `image_1` = '".$slider_image_1."' WHERE `id` = ".$pId.";";
                DB::statement($sqli1);                
            }
            if(Input::file('slider_image_2')) {
                $image = $request->file('slider_image_2');
                $slider_image_2 = time().'-pages.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads/pages');
                $image->move($destinationPath, $slider_image_2);
                $sqli2 = "UPDATE `donatation_pages` SET `image_2` = '".$slider_image_2."' WHERE `id` = ".$pId.";";
                DB::statement($sqli2);                
            }
            if(Input::file('slider_image_3')) {
                $image = $request->file('slider_image_3');
                $slider_image_3 = time().'-pages.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads/pages');
                $image->move($destinationPath, $slider_image_3);
                $sqli3 = "UPDATE `donatation_pages` SET `image_3` = '".$slider_image_3."' WHERE `id` = ".$pId.";";
                DB::statement($sqli3);                                
            }             
            //update image end
            //update start
            $sql_Update = "UPDATE `donatation_pages` SET `title` = '".$request->title."',`description` = '".$request->description."',`keywords` = '".$request->keywords."',`left_content`='".$request->leftcontent."',`right_content`='".$request->rightcontent."',`youtube_video`='".$request->video."',`sorting`='".$request->sort."',slug='".str_slug($request->title)."' WHERE `id` = ".$pId.";";
            DB::statement($sql_Update);
            //update end
            Session::flash('flash_message', 'Successfully Page Updated!');
            return redirect()->route('indexdonationedit',['id'=>$pId]);

        } else {
            return view('themes.backend.login');    
        }
    }    
    
    public function delete(Request $request){
        $user = Auth::user();
        if(@$user->id){
            $pId = $request->pId;
            if($pId){
                $sqlDelete = "DELETE FROM donatation_pages where id='".$pId."'";
                DB::statement($sqlDelete);
                Session::flash('flash_message', 'Successfully Page Deleted!');    
            }
            return redirect('/eficor/administrator/donation');
        } else {
            return view('themes.backend.login');    
        }
    }

    public function getdonaters()
    {
        $donation_details=DB::table('donation_details')->get();
        return view('themes.backend.donation.donater_list',['dpages'=>$donation_details]);
    }
}
