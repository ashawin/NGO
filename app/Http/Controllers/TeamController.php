<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeamController extends Controller
{
    public function add_team()
    {
        return view('themes.backend.team.add');
    }

    public function save_team(Request $request)
    {
        $name=$request->name;
        $description=$request->description;
        $role=$request->role;
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename =time().'.'.$extension;
            $file->move('uploads/team/', $filename);
        }
        else
        {
            $filename=false;
        }
        $data=array('name'=>$name,'description'=>$description,'role'=>$role,'group'=>$request->group,'image'=>$filename);
        DB::table('page_team')->insert($data);
        return redirect()->route('add_team');
    }

    public function view_team()
    {
        $teams=DB::table('page_team')->get();
        return view('themes.backend.team.manage',['teams'=>$teams]);
    }


    public function edit_team($id)
    {

        $team=DB::table('page_team')->where('id','=',$id)->first();
        return view('themes.backend.team.edit',['team'=>$team]);

    }

    public function edit_save(Request $request)
    {
        $name=$request->name;
        $description=$request->description;
        $role=$request->role;
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename =time().'.'.$extension;
            $file->move('uploads/team/', $filename);
        }
        else
        {
            $filename=false;
        }
        $data=array('name'=>$name,'description'=>$description,'role'=>$role,'group'=>$request->group,'image'=>$filename);
        DB::table('page_team')->where('id','=',$request->id)->update($data);
        return redirect()->route('get_team');
    }


    public function delete_team($id)
    {
        DB::table('page_team')->where('id','=',$id)->delete();
        return redirect()->route('get_team');
    }

}
