<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

use Auth;
use DB;
use File;
use Session;
use Carbon\Carbon;


class ProjectController extends Controller
{
    public function manage(Request $request)
    {
        $user = Auth::user();
        if (@$user->id) {
            $dpages = DB::table('pages_projects')->get();
            return view('themes.backend.projects.manage', ['dpages' => $dpages]);
        } else {
            return view('themes.backend.login');
        }
    }

    public function add(Request $request)
    {
        $user = Auth::user();
        if (@$user->id) {
            return view('themes.backend.projects.add');
        } else {
            return view('themes.backend.login');
        }
    }

    public function save(Request $request)
    {
        $user = Auth::user();
        if (@$user->id) {
            //validation start
            $validatedData = $request->validate([
                'title' => 'required',
                'short_description' => 'required',
                'description' => 'required',
                'image' => 'required',
                'category' => 'required',
                'author' => 'required',
                'type' => 'required'
            ]);
            //validation end
            //file upload start
            $slug = Str::slug($request->title, '-');
            if (Input::file('image')) {
                $image = $request->file('image');
                $featureimage_1 = time() . '-pages.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads/pages');
                $image->move($destinationPath, $featureimage_1);
            } else {
                $featureimage_1 = false;
            }
            //file upload end featureimage_1

            $sql = "INSERT INTO `pages_projects` (`id`, `title`, `slug`, `short_description`, `description`, `image`, `category`, `author`, `type`, `created_at`, `updated_at`) VALUES (NULL, '" . $request->title . "', '" . $slug . "', '" . $request->short_description . "', '" . $request->description . "', '" . $featureimage_1 . "', '" . $request->category . "', '" . $request->author . "', '" . $request->type . "', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);";
            DB::statement($sql);
            Session::flash('flash_message', 'Successfully Page Added!');
            return view('themes.backend.projects.add');
        } else {
            return view('themes.backend.login');
        }
    }

    public function edit(Request $request)
    {
        $user = Auth::user();
        if (@$user->id) {
            $pId = $request->pId;
            $donationDetails = DB::table('pages_projects')->where('id', $pId)->first();
            return view('themes.backend.projects.edit', ['donationDetails' => $donationDetails]);
        } else {
            return view('themes.backend.login');
        }
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        if (@$user->id) {
            $pId = $request->pId;
            //update image start
            if (Input::file('featureimage_1')) {
                $image = $request->file('featureimage_1');
                $featureimage_1 = time() . '-pages.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads/pages');
                $image->move($destinationPath, $featureimage_1);
                $sqlf1 = "UPDATE `pages_projects` SET `image` = '" . $featureimage_1 . "' WHERE `id` = " . $pId . ";";
                DB::statement($sqlf1);
            }

            //update image end
            //update start
            $sql_Update = "UPDATE `pages_projects` SET `title` = '" . $request->title . "',`short_description`='" . $request->short_description . "',`category`='" . $request->category . "',`author`='" . $request->author . "',`type`='" . $request->type . "',`description` = '" . $request->description . "' WHERE `id` = '" . $pId . "';";
            DB::statement($sql_Update);
            //update end
            Session::flash('flash_message', 'Successfully Page Updated!');
            $donationDetails = DB::table('pages_projects')->where('id', $pId)->first();
            return view('themes.backend.projects.edit', ['donationDetails' => $donationDetails]);
        } else {
            return view('themes.backend.login');
        }
    }

    public function delete(Request $request)
    {
        $user = Auth::user();
        if (@$user->id) {
            $pId = $request->pId;
            if ($pId) {
                $sqlDelete = "DELETE FROM pages_projects where id='" . $pId . "'";
                DB::statement($sqlDelete);
                Session::flash('flash_message', 'Successfully Page Deleted!');
            }
            return redirect('/eficor/administrator/projects');
        } else {
            return view('themes.backend.login');
        }
    }

    public function get_location()
    {
        $user = Auth::user();
        if (@$user->id) {
        $getworklocation=DB::table('map_work_location')->get();
        return view('themes.backend.work_location.manage',['worklocation'=>$getworklocation]);
        } else {
            return view('themes.backend.login');
        }
    }
    public function delete_location($id)
    {
        $user = Auth::user();
        if (@$user->id) {
            $getworklocation=DB::table('map_work_location')->where('id','=',$id)->delete();
            session()->flash('msg','successfully deleted');
            return redirect()->route('work_location');
        } else {
            return view('themes.backend.login');
        }
    }


    public function work_location_add()
    {
        $user = Auth::user();
            if (@$user->id) {
            return view('themes.backend.work_location.add');
        } else {
            return view('themes.backend.login');
        }


    }

    public function work_location_save(Request $request)
    {
        $user = Auth::user();
        if (@$user->id) {
            $validatedData = $request->validate([
                'address' => 'required',

            ]);
        $data=array('title'=>$request->title,'lat'=>$request->lat,'lng'=>$request->lng,'address'=>$request->address,'created_at'=>date('y-m-d'),'updated_at'=>date('y-m-d'));
       DB::table('map_work_location')->insert($data);
       session()->flash('msg','Successfully added');
       return redirect()->back();
        } else {
            return view('themes.backend.login');
        }
    }

}
