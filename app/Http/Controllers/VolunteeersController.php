<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

use Auth;
use DB;
use File;
use Session;
use Carbon\Carbon;


class VolunteeersController extends Controller
{  
   public function manage(Request $request){
    	$user = Auth::user();
    	if(@$user->id){
            $volunteeers = DB::table('volunteeers')->get();
			return view('themes.backend.volunteeers.manage',['volunteeers'=>$volunteeers]);
    	} else {
    		return view('themes.backend.login');	
    	}
    }
    public function add(Request $request){
        $user = Auth::user();
        if(@$user->id){
            return view('themes.backend.volunteeers.add');
        } else {
            return view('themes.backend.login');    
        }
    }
    public function save(Request $request){
        $user = Auth::user();
        if(@$user->id){
            $validatedData = $request->validate([ 
                'name' => 'required',
                'description' => 'required',
                'email' => 'required',
                'mobile' => 'required',
            ]);
            $name = $request->name;
            $description = $request->description;
            $email = $request->email;
            $mobile = $request->mobile;
            $sex = $request->sex;
            $branch = $request->branch;
            $msg = $request->msg;
            $date_of_Birth = $request->date_of_Birth;
            $facebook = $request->facebook;
            $google_Plus = $request->google_Plus;
            $twitter = $request->twitter;
            $instagram = $request->instagram;

            //Photo start
            if(Input::file('image')) {
                $image = $request->file('image');
                $photos = time().'-photos.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads/pages');
                $image->move($destinationPath, $photos);
            } else {
                $photos = false;
            }
            //Photo end
            //Resume start
            if(Input::file('resume')) {
                $image = $request->file('resume');
                $resume = time().'-resume.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads/pages');
                $image->move($destinationPath, $resume);
            } else {
                $resume = false;
            }
            //Resume end            

            //check already exist's
            $alreadyVolunteeers = DB::table('volunteeers')->where('mobile',$mobile)->first();
            if(empty($alreadyVolunteeers->id)){
                //insert start
                $sql = "INSERT INTO `volunteeers` (`id`, `name`, `description`, `image`, `email`, `mobile`, `sex`, `branch`, `msg`, `resume`,`fb`, `gplus`, `twitter`, `instagram`, `is_active`, `created_at`, `updated_at`) VALUES (NULL, '".$name."', '".$description."', '".$photos."', '".$email."', '".$mobile."', '".$sex."', '".$branch."', '".$msg."', '".$resume."', '".$facebook."', '".$google_Plus."', '".$twitter."', '".$instagram."', '1', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);";
                DB::statement($sql);
                Session::flash('flash_message', 'Successfully Volunteeer Added!');
                //insert end 
            } else {
                Session::flash('flash_message_error', 'Already Volunteeer Mobile Added!');
            }
            return view('themes.backend.volunteeers.add');
        } else {
            return view('themes.backend.login');    
        }
    }      
    public function edit(Request $request){
        $user = Auth::user();
        if(@$user->id){
            $volunteeerId = $request->vId;
            $editVolunteeers = DB::table('volunteeers')->where('id',$volunteeerId)->first();
            return view('themes.backend.volunteeers.edit',['editVolunteeers'=>$editVolunteeers]);
        } else {
            return view('themes.backend.login');    
        }
    }
    public function update(Request $request){
        $user = Auth::user();
        if(@$user->id){
            $volunteeerId = $request->vId;
            
            $name = $request->name;
            $description = $request->description;
            $email = $request->email;
            $mobile = $request->mobile;
            $sex = $request->sex;
            $branch = $request->branch;
            $msg = $request->msg;
            $date_of_Birth = $request->date_of_Birth;
            $facebook = $request->facebook;
            $google_Plus = $request->google_Plus;
            $twitter = $request->twitter;
            $instagram = $request->instagram;

            //Photo start
            if(Input::file('image')) {
                $image = $request->file('image');
                $photos = time().'-photos.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads/pages');
                $image->move($destinationPath, $photos);
            } else {
                $photos = false;
            }
            //Photo end
            //Resume start
            if(Input::file('resume')) {
                $image = $request->file('resume');
                $resume = time().'-resume.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads/pages');
                $image->move($destinationPath, $resume);
            } else {
                $resume = false;
            }
            //Resume end
            $sql_Update = "UPDATE `volunteeers` SET `name`='".$name."',`description` = '".$description."',`email`='".$email."',`sex`='".$sex."',`branch`='".$branch."',`msg`='".$msg."',`dob`='".$date_of_Birth."',`fb`='".$facebook."',`gplus`='".$google_Plus."',`twitter`='".$twitter."',`instagram`='".$instagram."' WHERE `volunteeers`.`id` = ".$volunteeerId.";";
            DB::statement($sql_Update);
            Session::flash('flash_message', 'Successfully Volunteeer Updated!');
            $editVolunteeers = DB::table('volunteeers')->where('id',$volunteeerId)->first();
            return view('themes.backend.volunteeers.edit',['editVolunteeers'=>$editVolunteeers]);
        } else {
            return view('themes.backend.login');    
        }
    }    
    public function delete(Request $request){
        $user = Auth::user();
        if(@$user->id){
            //delete start
            $vId = $request->vId;
            if($vId){
                Session::flash('flash_message', 'Successfully Volunteeer Deleted!');
                $sqlDelete = "DELETE FROM volunteeers where id=".$vId."";
                DB::statement($sqlDelete);
            }
            //delete end
            return redirect('/eficor/administrator/cms/volunteeers');
        } else {
            return view('themes.backend.login');    
        }
    }

    public function applied_volunteers()
    {
        DB::table('volunteeers')->get();
    }
}
