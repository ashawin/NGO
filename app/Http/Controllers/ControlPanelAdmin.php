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


class ControlPanelAdmin extends Controller
{
    //login  
    public function login(Request $request){
    	$user = Auth::user();
    	if(@$user->id){
			return view('themes.backend.login');
    	} else {
    		return view('themes.backend.login');	
    	}
		
    }
    public function loginCheck(Request $request){
    	$email = $request->eficor_email;
    	$password = $request->eficor_password;
    	$validatedData = $request->validate([ 
            'eficor_email' => 'required',
            'eficor_password' => 'required',
        ]);
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            $user = Auth::user();
            return redirect('/eficor/administrator/dashboard');
		} else {
			return redirect()->back()->withInput()->with('flash_message_error', 'Please Check your Email / Password');
		}
    }   
    public function dashboard(Request $request){
		$user = Auth::user();
    	if(@$user->id){
			//return view('themes.backend.login');
			return view('themes.backend.dashboard');	
    	} else {
    		return view('themes.backend.login');	
    	}
    }
    public function addNewSlider(Request $request){
		$user = Auth::user();
    	if(@$user->id){
			//return view('themes.backend.login');
			return view('themes.backend.add-slider');	
			echo "DASHBOARD";
    	} else {
    		return view('themes.backend.login');	
    	}
    }   
    public function saveNewSlider(Request $request){
		$user = Auth::user();
    	if(@$user->id){
    		$validatedData = $request->validate([ 
	            'image' => 'required',
	            'title' => 'required',
	            'description'=>'required',
	            'link'=>'required',
	            'status'=>'required'
        	]);
        	if(Input::file('image')) {
	            $image = $request->file('image');
	            $imagephoto_filename = time().'-slider.'.$image->getClientOriginalExtension();
	            $destinationPath = public_path('/uploads/slider');
	            $image->move($destinationPath, $imagephoto_filename);
	        } else {
	            $imagephoto_filename = false;
	        }
	        $sql = "INSERT INTO `slider` (`id`, `title`, `image`, `description`, `link`, `status`, `created_at`, 'slug') VALUES (NULL, '".$request->title."', '".$imagephoto_filename."', '".$request->description."', '".$request->link."', '".$request->status."', CURRENT_TIMESTAMP,'".str_slug($request->title)."');";
	        DB::statement($sql);
	        Session::flash('flash_message', 'Successfully Slider Added !');
			return view('themes.backend.add-slider');	
    	} else {
    		return view('themes.backend.login');	
    	}
    }       
    public function manageSlider(Request $request){
		$user = Auth::user();
    	if(@$user->id){
			$sliders = DB::table('slider')->get();
			return view('themes.backend.manage-slider',['sliders'=>$sliders]);
    	} else {
    		return view('themes.backend.login');	
    	}
    }
    public function editSlider(Request $request){
    	$user = Auth::user();
    	if(@$user->id){
    		$id = $request->id;
    		if($id){
    			$singleSlider = DB::table('slider')->where('id',$id)->first();
				return view('themes.backend.edit-slider',['singleSlider'=>$singleSlider]);	
			} else {
				return "404 PAGE NOT FOUND!";
			}
			
    	} else {
    		return view('themes.backend.login');	
    	}
    }
    public function saveEditSlider(Request $request){
    	$user = Auth::user();
    	if(@$user->id){
    		$id = $request->id;
    		if($id){
    			//update the slider start
    			if(Input::file('image')) {
	            $image = $request->file('image');
	            $imagephoto_filename = time().'-slider.'.$image->getClientOriginalExtension();
	            $destinationPath = public_path('/uploads/slider');
	            $image->move($destinationPath, $imagephoto_filename);
	            DB::table('slider')->where('id', $id)->update(['image' => $imagephoto_filename]);
	        } else {
	            $imagephoto_filename = false;
	        }
    			DB::table('slider')->where('id', $id)->update(['title' => $request->title,'description' => $request->description,'link' => $request->link,'status' => $request->status,'slug'=>str_slug($request->title)]);
    			//update the slider end
    			Session::flash('flash_message', 'Successfully Slider Updated !');
    			$singleSlider = DB::table('slider')->where('id',$id)->first();
				return view('themes.backend.edit-slider',['singleSlider'=>$singleSlider]);	
			} else {
				return "404 PAGE NOT FOUND!";
			}
			
    	} else {
    		return view('themes.backend.login');	
    	}
    }
    public function deleteSlider(Request $request){
		$user = Auth::user();
    	if(@$user->id){
    		$id = $request->id;
    		if($id){
    			//delete start
    			$sql = "DELETE FROM `slider` WHERE `slider`.`id` = $id";
    			DB::statement($sql);
    			Session::flash('flash_message_error', 'Successfully Slider Deleted !');
    			return redirect('/eficor/administrator/slider/manage-slider');
    			//delete end 
    		}
    	} else {
			return view('themes.backend.login');	
		}

    }
          
    public function logout(Request $request){
    	Auth::logout();
    	return redirect('/eficor/administrator/login');
    }
}
