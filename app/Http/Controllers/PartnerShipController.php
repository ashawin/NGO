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


class PartnerShipController extends Controller
{
    public function manage(Request $request){
        $user = Auth::user();
        if(@$user->id){
            $ships = DB::table('ship')->get();
            return view('themes.backend.partners.manage',['ships'=>$ships]);
        } else {
            return view('themes.backend.login');    
        }
    }
    public function add(Request $request){
        $user = Auth::user();
        if(@$user->id){
            return view('themes.backend.partners.add');
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
                'type' => 'required'
            ]);
            //validation end
            $sql = "INSERT INTO `ship` (`id`, `title`, `description`, `group`, `status`, `created_at`, `updated_at`) VALUES (NULL, '".$request->title."', '".$request->description."', '".$request->type."', 1, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);";
            DB::statement($sql);    
            Session::flash('flash_message', 'Successfully '.$request->type.' Page Added!');        
            return view('themes.backend.partners.add');
        } else {
            return view('themes.backend.login');    
        }
    }      
    public function edit(Request $request){
        $user = Auth::user();
        if(@$user->id){
            $pId = $request->pId;
            $ships = DB::table('ship')->where('id',$pId)->first();
            return view('themes.backend.partners.edit',['ships'=>$ships]);
        } else {
            return view('themes.backend.login');    
        }
    }
    public function update(Request $request){
        $user = Auth::user();
        if(@$user->id){
            $pId = $request->pId;
            //update start
            $sql_Update = "UPDATE `ship` SET `title` = '".$request->title."',`description` = '".$request->description."',`group` = '".$request->type."' WHERE `ship`.`id` = ".$pId.";";
            DB::statement($sql_Update);
            //update end
            Session::flash('flash_message', 'Successfully '.$request->type.' Page Updated!');        
            $ships = DB::table('ship')->where('id',$pId)->first();
            return view('themes.backend.partners.edit',['ships'=>$ships]);
        } else {
            return view('themes.backend.login');    
        }
    }    
    
    public function delete(Request $request){
        $user = Auth::user();
        if(@$user->id){
            $pId = $request->pId;
            if($pId){
                $sqlDelete = "DELETE FROM ship where id='".$pId."'";
                DB::statement($sqlDelete);
                Session::flash('flash_message', 'Successfully '.$request->type.' Page Deleted!');    
            }
            return redirect('/eficor/administrator/cms/partner-inter');
        } else {
            return view('themes.backend.login');    
        }
    }    
}
