<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function getrecentnews()
    {
        $project['news']= DB::table('pages_projects')
            ->where('type',2)
            ->limit(6)
            ->orderBy('id', 'DESC')
            ->get();
        $initial = DB::table('settings')->where('id', '=', 1)->first();
        return view('themes.frontend.blog', ['initial' => $initial, 'project' => $project]);
    }

    public function blog_details($id)
    {
        $project= DB::table('pages_projects')
            ->where('id','=',$id)
            ->first();

        $initial = DB::table('settings')->where('id', '=', 1)->first();
        return view('themes.frontend.more_blogs', ['initial' => $initial, 'project' => $project]);
    }
    public function like(Request $request)
    {

        $var = DB::table('pages_projects')->where('id', '=', $request->id)->first();
            $like = $var->likes + 1;
            DB::table('pages_projects')->where('id', '=', $request->id)->update(array('likes' => $like));
            DB::table('comments')->insert(array('ip'=>$_SERVER['REMOTE_ADDR'],'likes'=>1,'created_at'=>date('y-m-d'),'blog_id'=>$request->id));

    }

    public function comments(Request $request)
    {

      $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'comment' => 'required',
            'email' => 'required',
            'mobile' => 'required',
        ]);
       $data=array('first_name'=>$request->first_name,'last_name'=>$request->last_name,'comments'=>$request->comment,'email'=>$request->email,'created_at'=>date('y-m-d'),'ip'=>$_SERVER['REMOTE_ADDR'],'status'=>1,'mobile'=>$request->mobile,'blog_id'=>$request->id);
       DB::table('comments')->insert($data);
       session()->flash('message','Wait for  8 to 24 hours Admin will Approve !');
       return redirect()->back();
    }


}
