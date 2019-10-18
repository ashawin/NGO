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


class SiteConfigController extends Controller
{
    //login  
    public function siteConfig(Request $request)
    {
        $user = Auth::user();
        if (@$user->id) {
            $settings = DB::table('settings')->where('id', 1)->first();
            return view('themes.backend.site-config', ['settings' => $settings]);
        } else {
            return view('themes.backend.login');
        }

    }

    public function saveSiteConfig(Request $request)
    {
        $user = Auth::user();
        if (@$user->id) {
            $validatedData = $request->validate([
                'title' => 'required',
                'short_intro' => 'required',
                'long_summary' => 'required'
            ]);
            if (Input::file('logo')) {
                $image = $request->file('logo');
                $logophoto_filename = time() . '_logo.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads/settings');
                $image->move($destinationPath, $logophoto_filename);
                DB::table('settings')->where('id', 1)->update(['logo' => $logophoto_filename]);
            } else {
                $logophoto_filename = false;
            }


            if (Input::file('footer_img')) {
                $image = $request->file('footer_img');
                $footer_filename = time() . 'footer_img.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads/settings');
                $image->move($destinationPath, $footer_filename);
                DB::table('settings')->where('id', 1)->update(['footer_img' => $footer_filename]);
            } else {
                $footer_filename = false;
            }
            if (Input::file('favico')) {
                $image = $request->file('favico');
                $favicophoto_filename = time() . '_favico.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads/settings');
                $image->move($destinationPath, $favicophoto_filename);
                DB::table('settings')->where('id', 1)->update(['favico' => $favicophoto_filename]);
            } else {
                $favicophoto_filename = false;
            }

            DB::table('settings')->where('id', 1)->update(['title' => $request->title, 'short_intro' => $request->short_intro, 'long_summary' => $request->long_summary, 'phone' => $request->phone, 'email' => $request->email, 'facebook' => $request->facebook, 'twitter' => $request->twitter, 'google_plus' => $request->google_plus, 'instagram' => $request->instagram, 'youtube' => $request->youtube, 'footer_1' => $request->footer_1, 'footer_2' => $request->footer_2, 'footer_3' => $request->footer_3, 'timing' => $request->timing, 'location' => $request->location]);
            $settings = DB::table('settings')->where('id', 1)->first();
            Session::flash('flash_message', 'Successfully Site Config Updated !');
            return view('themes.backend.site-config', ['settings' => $settings]);
        } else {
            return view('themes.backend.login');
        }
    }

    public function comments($id)
    {
        $user = Auth::user();
        if (@$user->id) {
            $comments = DB::table('comments')->where('blog_id', '=', $id)->get();
            return view('themes.backend.pages.comments', ['comments' => $comments]);
        } else {
            return view('themes.backend.login');
        }
    }

    public function like($id)
    {
        $user = Auth::user();
        if (@$user->id) {

            DB::table('comments')->where('id', '=', $id)->update(array('status' => 1));

            return redirect()->back();
        } else {
            return view('themes.backend.login');
        }
    }

    public function dislike($id)
    {
        $user = Auth::user();
        if (@$user->id) {
            DB::table('comments')->where('id', '=', $id)->update(array('status' => 0));
            return redirect()->back();
        } else {
            return view('themes.backend.login');
        }
    }
    public function delete_comment($id)
    {

        $user = Auth::user();
        if (@$user->id) {
            DB::table('comments')->where('id', '=', $id)->delete();
            return redirect()->back();
        }
        else{
            return view('themes.backend.login');
        }
    }


}
