<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function getannualreport()
    {
        $annualreport = DB::table('pages_common')->where('slug', '=', 'annualreport')->orderByDesc('id')->paginate(4);
        $initial = DB::table('settings')->where('id', '=', 1)->first();
        return view('themes.frontend.annual_report', ['initial' => $initial, 'annualreport' => $annualreport]);
    }

    public function getpublication()
    {
        $publication = DB::table('pages_common')->where('slug', '=', 'Publication')->orderByDesc('id')->paginate(8);
        $initial = DB::table('settings')->where('id', '=', 1)->first();
        return view('themes.frontend.publication', ['initial' => $initial, 'publication' => $publication]);
    }

    public function getpolicies()
    {
        $policies = DB::table('pages_common')->where('slug', '=', 'Policies')->orderByDesc('id')->paginate(8);
        $initial = DB::table('settings')->where('id', '=', 1)->first();
        return view('themes.frontend.policies', ['initial' => $initial, 'policies' => $policies]);
    }

    public function getaidssunday()
    {

        $aidssunday = DB::table('pages_common')->where('slug', '=', 'aidssunday')->get();
        $initial = DB::table('settings')->where('id', '=', 1)->first();
        return view('themes.frontend.aids_sunday', ['initial' => $initial, 'aidssunday' => $aidssunday]);
    }

    public function getecosunday()
    {
        $ecosunday = DB::table('pages_common')->where('slug', '=', 'ecosunday')->get();


        $initial = DB::table('settings')->where('id', '=', 1)->first();
        return view('themes.frontend.ecosunday', ['initial' => $initial, 'ecosunday' => $ecosunday]);
    }

    public function getinternship()
    {
        $internship = DB::table('ship')->where('group', '=', 'INTERSHIP')->get();
        $initial = DB::table('settings')->where('id', '=', 1)->first();
        return view('themes.frontend.internship', ['initial' => $initial, 'internship' => $internship]);
    }

    public function getpartenership()
    {
        $patenership = DB::table('ship')->where('group', '=', 'PARTNERSHIP')->get();
        $initial = DB::table('settings')->where('id', '=', 1)->first();
        return view('themes.frontend.partenership', ['initial' => $initial, 'internship' => $patenership]);
    }

    public function volunteer()
    {
        $volunteer = DB::table('volunteeers')->get();
        $initial = DB::table('settings')->where('id', '=', 1)->first();
        return view('themes.frontend.volunteers', ['initial' => $initial, 'volunteer' => $volunteer]);
    }

    public function view_more_pages($slug)
    {
        $pages = DB::table('pages_common')->where('slug', '=', $slug)->orderByDesc('id')->take(8)->get();
        $initial = DB::table('settings')->where('id', '=', 1)->first();
        return view('themes.frontend.view_more_pages', ['initial' => $initial, 'pages' => $pages, 'slug' => $slug]);
    }

    public function investproject()
    {
        $initial = DB::table('settings')->where('id', '=', 1)->first();
        $investproject = DB::table('pages_common')->where('slug', '=', 'invest')->get();
        return view('themes.frontend.invest&project', ['initial' => $initial, 'invest' => $investproject]);

    }

    public function joboppurtunity()
    {
        $jobs = DB::table('jobs')->orderByDesc('id')->get();

        $initial = DB::table('settings')->where('id', '=', 1)->first();
        return view('themes.frontend.job_oppurtunity', ['initial' => $initial, 'jobs' => $jobs]);
    }

    public function jobapplied(Request $request)
    {
        $this->validate($request, [
            'cv' => 'required',
            'name' => 'required',
            'email' => 'required',
            'desc' => 'required',
            'job' => 'required',
            'gender' => 'required',
        ]);
        if ($request->hasFile('cv')) {
            $cv = $request->file('cv')->getClientOriginalName();
            $request->file('cv')->move(public_path('uploads/pages/'), $cv);
        } else {
            $cv = false;
        }
        $data = array('name' => $request->name, 'email' => $request->email, 'gender' => $request->gender, 'job_type' => $request->job, 'description' => $request->desc, 'image' => $cv, 'created_at' => date('y-m-d'), 'updated_at' => date('y-m-d'), 'role' => $request->role);
        DB::table('users')->insert($data);
        session()->flash('msg', 'Job successfully applied.');
        return redirect()->back();
    }


    public function refund_policy()
    {

        $policy = DB::table('pages_common')->where('slug', '=', 'ref')->orderByDesc('id')->get();
        $initial = DB::table('settings')->where('id', '=', 1)->first();
        return view('themes.frontend.quick_link_footer', ['initial' => $initial, 'policy' => $policy]);
    }

    public function privacy_policy()
    {
        $policy = DB::table('pages_common')->where('slug', '=', 'privacypolicy')->orderByDesc('id')->get();

        $initial = DB::table('settings')->where('id', '=', 1)->first();
        return view('themes.frontend.quick_link_footer', ['initial' => $initial, 'policy' => $policy]);
    }

    public function termsandcondition()
    {
        $policy = DB::table('pages_common')->where('slug', '=', 'termsandcondition')->orderByDesc('id')->get();
        $initial = DB::table('settings')->where('id', '=', 1)->first();
        return view('themes.frontend.quick_link_footer', ['initial' => $initial, 'policy' => $policy]);
    }

    public function getinvolved()
    {
        $initial = DB::table('settings')->where('id', '=', 1)->first();
        return view('themes.frontend.getInvolved', ['initial' => $initial]);
    }

    public function getresource()
    {
        $initial = DB::table('settings')->where('id', '=', 1)->first();
        return view('themes.frontend.resource', ['initial' => $initial]);
    }

    public function more_jobs()
{
    $jobs=DB::table('jobs')->get();
    $initial = DB::table('settings')->where('id', '=', 1)->first();
    return view('themes.frontend.more_jobs', ['initial' => $initial,'jobs'=>$jobs]);
}


}
