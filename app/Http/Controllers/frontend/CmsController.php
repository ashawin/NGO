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

class CmsController extends Controller
{

    public function aboutHistroy(Request $request)
    {
        $user = Auth::user();
        if (@$user->id) {
            //return view('themes.backend.login');
            $pageHistroy = DB::table('page_histroy')->where('id', 1)->first();
            return view('themes.backend.pages.aboutHistroy', ['pageHistroy' => $pageHistroy]);
        } else {
            return view('themes.backend.login');
        }
    }

    public function saveAboutHistroy(Request $request)
    {
        $user = Auth::user();
        if (@$user->id) {
            //update start
            $validatedData = $request->validate([
                'title' => 'required',
                'description' => 'required',
                'timeline' => 'required'
            ]);
            if (Input::file('pdf')) {
                $image = $request->file('pdf');
                $imagephoto_filename = time() . '-pdf.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads/pages');
                $image->move($destinationPath, $imagephoto_filename);
                $sql = "UPDATE `page_histroy` SET `pdf` = '" . $imagephoto_filename . "' WHERE `page_histroy`.`id` = 1;";
                DB::statement($sql);
            }
            $sql = "UPDATE `page_histroy` SET `title` = '" . $request->title . "',`desc`='" . $request->description . "',`timeline`='" . $request->timeline . "' WHERE `page_histroy`.`id` = 1;";
            DB::statement($sql);
            Session::flash('flash_message', 'Successfully Page Updated !');
            //update end
            $pageHistroy = DB::table('page_histroy')->where('id', 1)->first();
            return view('themes.backend.pages.aboutHistroy', ['pageHistroy' => $pageHistroy]);
        } else {
            return view('themes.backend.login');
        }
    }

    public function aboutTeamAdd(Request $request)
    {
        $user = Auth::user();
        if (@$user->id) {
            return view('themes.backend.pages.aboutTeamAdd');
        } else {
            return view('themes.backend.login');
        }
    }

    public function aboutTeamSave(Request $request)
    {
        $user = Auth::user();
        if (@$user->id) {
            //dd($request);
            $validatedData = $request->validate([
                'image' => 'required',
                'name' => 'required',
                'designation' => 'required',
                'group' => 'required',
                'contact' => 'required',
                'address' => 'required',
                'education' => 'required',
                'description' => 'required',
            ]);
            if (Input::file('image')) {
                $image = $request->file('image');
                $imagephoto_filename = time() . '-team.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads/team');
                $image->move($destinationPath, $imagephoto_filename);
            } else {
                $imagephoto_filename = false;
            }
            //insert start
            $sql = "INSERT INTO `page_team` (`id`, `name`, `image`, `role`, `group`,fb_link,tw_link,lnk_link,address,contact,education,description,`created_at`, `updated_at`) VALUES (NULL, '" . $request->name . "', '" . $imagephoto_filename . "', '" . $request->designation . "', '" . $request->group . "' , '" . $request->fb . "','" . $request->tw . "','" . $request->lk . "','" . $request->address . "','" . $request->contact . "','" . $request->education . "','" . $request->description . "' , CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);";
            DB::statement($sql);
            //insert end
            //$sql ="UPDATE `page_histroy` SET `title` = '".$request->title."',`desc`='".$request->description."',`timeline`='".$request->timeline."' WHERE `page_histroy`.`id` = 1;";
            //DB::statement($sql);
            Session::flash('flash_message', 'Successfully Team Added!');
            return view('themes.backend.pages.aboutTeamAdd');
        } else {
            return view('themes.backend.login');
        }
    }

    public function editAboutTeam($id)
    {
        $user = Auth::user();
        if (@$user->id) {
            $singleteam = DB::table('page_team')->where('id', '=', $id)->first();
            return view('themes.backend.pages.aboutTeamEdit', ['singleteam' => $singleteam]);

        } else {
            return view('themes.backend.login');
        }

    }

    public function saveeditAboutTeam(Request $request)
    {
        $user = Auth::user();
        if (@$user->id) {
            $validatedData = $request->validate([

                'name' => 'required',
                'designation' => 'required',
                'group' => 'required',
                'contact' => 'required',
                'address' => 'required',
                'education' => 'required',
                'description' => 'required',
            ]);
            if (Input::file('image')) {
                $image = $request->file('image');
                $imagephoto_filename = time() . '-team.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads/team');
                $image->move($destinationPath, $imagephoto_filename);
            } else {
                $imagephoto_filename = $request->filename;
            }
            $data = array('name' => $request->name, 'role' => $request->designation, 'group' => $request->group, 'fb_link' => $request->fb, 'tw_link' => $request->tw,
                'lnk_link' => $request->lk, 'contact' => $request->contact, 'education' => $request->education, 'address' => $request->address, 'description' => $request->description, 'image' => $imagephoto_filename);
            \Illuminate\Support\Facades\DB::table('page_team')->where('id', '=', $request->id)->update($data);
            return redirect()->route('editaboutteam', ['id' => $request->id]);
        } else {
            return view('themes.backend.login');
        }
    }

    public function deleteAboutTeam(Request $request)
    {

        $user = Auth::user();
        if (@$user->id) {
            //return view('themes.backend.login');
            $tId = $request->tId;
            $sql = "delete from page_team where id=" . $tId . "";
            DB::statement($sql);
            $teamList = DB::table('page_team')->get();
            return view('themes.backend.pages.aboutTeamList', ['teamList' => $teamList]);
        } else {
            return view('themes.backend.login');
        }

    }

    public function aboutTeam(Request $request)
    {
        $user = Auth::user();
        if (@$user->id) {
            //return view('themes.backend.login');
            $teamList = DB::table('page_team')->get();
            return view('themes.backend.pages.aboutTeamList', ['teamList' => $teamList]);
        } else {
            return view('themes.backend.login');
        }
    }

    public function aboutStrategy(Request $request)
    {
        $user = Auth::user();
        if (@$user->id) {
            //return view('themes.backend.login');
            $pageHistroy = DB::table('page_strategy')->where('id', 1)->first();
            return view('themes.backend.pages.aboutStrategy', ['pageHistroy' => $pageHistroy]);
        } else {
            return view('themes.backend.login');
        }
    }

    public function saveAboutStrategy(Request $request)
    {
        $user = Auth::user();
        if (@$user->id) {
            //update start
            $validatedData = $request->validate([
                'title' => 'required',
                'description' => 'required',
            ]);
            if (Input::file('pdf')) {
                $image = $request->file('pdf');
                $imagephoto_filename = time() . '-pdf.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads/pages');
                $image->move($destinationPath, $imagephoto_filename);
                $sql = "UPDATE `page_strategy` SET `pdf` = '" . $imagephoto_filename . "' WHERE `page_strategy`.`id` = 1;";
                DB::statement($sql);
            }
            $sql = "UPDATE `page_strategy` SET `title` = '" . $request->title . "',`desc`='" . $request->description . "',`timeline`='" . $request->timeline . "' WHERE `page_strategy`.`id` = 1;";
            DB::statement($sql);
            Session::flash('flash_message', 'Successfully Page Updated !');
            //update end
            $pageHistroy = DB::table('page_strategy')->where('id', 1)->first();
            return view('themes.backend.pages.aboutStrategy', ['pageHistroy' => $pageHistroy]);
        } else {
            return view('themes.backend.login');
        }
    }

    public function view_quality()
    {
        $user = Auth::user();
        if (@$user->id) {
            //return view('themes.backend.login');
            $pageHistroy = DB::table('page_quality')->get();

            return view('themes.backend.pages.quality', ['quality' => $pageHistroy]);
        } else {
            return view('themes.backend.login');
        }

    }

    public function aboutQuality(Request $request)
    {
        $user = Auth::user();
        if (@$user->id) {
            //return view('themes.backend.login');

            return view('themes.backend.pages.aboutQuality');
        } else {
            return view('themes.backend.login');
        }
    }

    public function saveAboutQuality(Request $request)
    {
        $user = Auth::user();
        if (@$user->id) {
            $validatedData = $request->validate([

                'title' => 'required',
                'image' => 'required',
                'desc' => 'required',
            ]);
            if ($request->hasFile('image')) {
                $image = $request->file('image')->getClientOriginalName();
                $request->file('image')->move(public_path('uploads/pages'), $image);
            } else {
                $image = null;
            }
            $description = $request->desc;

            $data = array('title' => $request->title, 'image' => $image, 'description' => $description);
            DB::table('page_quality')->insert($data);
            Session::flash('flash_message', 'Successfully added !');
            //update end
            return view('themes.backend.pages.aboutQuality');
        } else {
            return view('themes.backend.login');
        }
    }

    public function edit_quality($id)
    {
        $user = Auth::user();
        if (@$user->id) {
            $pageHistroy = DB::table('page_quality')->where('id', '=', $id)->first();
            return view('themes.backend.pages.editQuality', ['quality' => $pageHistroy]);
        } else {
            return view('themes.backend.login');
        }
    }

    public function edit_save_quality(Request $request)
    {
        $user = Auth::user();
        if (@$user->id) {
            $validatedData = $request->validate([

                'title' => 'required',
                'desc' => 'required',
            ]);
            if ($request->hasFile('image')) {
                $image = $request->file('image')->getClientOriginalName();
                $request->file('image')->move(public_path('uploads/pages'), $image);
            } else {
                $image = $request->imagename;
            }
            $description = $request->desc;

            $data = array('title' => $request->title, 'image' => $image, 'description' => $description);
            DB::table('page_quality')->where('id', '=', $request->id)->update($data);
            Session::flash('flash_message', 'Successfully  updated !');
            //update end
            return redirect()->back();
        } else {
            return view('themes.backend.login');
        }
    }


    public function deletequality($id)
    {
        $user = Auth::user();
        if (@$user->id) {
            DB::table('page_quality')->where('id', '=', $id)->delete();
            Session::flash('flash_message', 'Successfully deleted ');
            return redirect()->back();
        } else {
            return view('themes.backend.login');
        }

    }

    public function aboutFinancials(Request $request)
    {
        $user = Auth::user();
        if (@$user->id) {
            //return view('themes.backend.login');
            $pageFin = DB::table('page_fin')->get();
            return view('themes.backend.pages.aboutFinancialsList', ['pageFin' => $pageFin]);
        } else {
            return view('themes.backend.login');
        }
    }

    public function aboutFinancialsAdd(Request $request)
    {
        $user = Auth::user();
        if (@$user->id) {

            //return view('themes.backend.login');
            $pageFin = DB::table('page_fin')->get();
            return view('themes.backend.pages.aboutFinancialsAdd', ['pageFin' => $pageFin]);
        } else {
            return view('themes.backend.login');
        }
    }

    public function aboutFinancialsSave(Request $request)
    {
        $user = Auth::user();
        if (@$user->id) {
            //return view('themes.backend.login');
            //validation start
            $validatedData = $request->validate([
                'title' => 'required',

            ]);
            //validation end 

            $sql = "INSERT INTO `page_fin` (`id`, `title`, `created_at`, `updated_at`) VALUES (NULL, '" . $request->title . "', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);";
            DB::statement($sql);
            Session::flash('flash_message', 'Successfully Page Updated !');

            $pageFin = DB::table('page_fin')->get();
            return view('themes.backend.pages.aboutFinancialsAdd', ['pageFin' => $pageFin]);
        } else {
            return view('themes.backend.login');
        }
    }

    //details start
    public function aboutFinancialsDetailsAdd(Request $request)
    {
        $user = Auth::user();
        if (@$user->id) {
            $pageFin = DB::table('page_fin_pdf')->get();
            return view('themes.backend.pages.aboutFinancialsDetailsAdd', ['pageFin' => $pageFin]);
        } else {
            return view('themes.backend.login');
        }
    }

    public function aboutFinancialsDetailsSave(Request $request)
    {
        $user = Auth::user();
        if (@$user->id) {

            if (Input::file('image')) {
                $image = $request->file('image');
                $fin = time() . '-fin.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads/pages');
                $image->move($destinationPath, $fin);
            } else {
                $fin = false;
            }
            $sql = "INSERT INTO `page_fin_pdf` (`id`, `f_id`, `title`, `pdf`, `created_at`, `updated_at`) VALUES (NULL, '" . $request->financialGroup . "', '" . $request->title . "', '" . $fin . "', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);";
            DB::statement($sql);
            Session::flash('flash_message', 'Successfully Page Updated !');
            $pageFin = DB::table('page_fin_pdf')->get();
            return view('themes.backend.pages.aboutFinancialsDetailsAdd', ['pageFin' => $pageFin]);
        } else {
            return view('themes.backend.login');
        }
    }

    public function aboutFinancialsDetails(Request $request)
    {
        $user = Auth::user();
        if (@$user->id) {
            //return view('themes.backend.login');
            $fId = $_REQUEST['fId'];
            $pageFin = DB::table('page_fin_pdf')->where('f_id', $fId)->get();
            return view('themes.backend.pages.aboutFinancialsDetailsList', ['pageFin' => $pageFin]);
        } else {
            return view('themes.backend.login');
        }
    }

    public function aboutfinancialedit($id)
    {
        $user = Auth::user();
        if (@$user->id) {
            $finance = DB::table('page_fin_pdf')->where('id', $id)->first();
            $pageFin = DB::table('page_fin')->get();
            return view('themes.backend.pages.aboutFincialsDetailsEdit', ['pageFin' => $pageFin, 'finance' => $finance]);

        } else {
            return view('themes.backend.login');
        }
    }


    public function aboutfinanceeditsave(Request $request)
    {

        $user = Auth::user();
        if (@$user->id) {
            $validatedData = $request->validate([

                'title' => 'required',
                'financialGroup' => 'required',

            ]);
            if (Input::file('image')) {
                $image = $request->file('image');
                $fin = time() . '-fin.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads/pages');
                $image->move($destinationPath, $fin);
            } else {
                $fin = $request->pdf;
            }
            $data = array('title' => $request->title, 'f_id' => $request->financialGroup, 'pdf' => $fin);
            DB::table('page_fin_pdf')->where('id', '=', $request->id)->update($data);
            return redirect()->back();

        } else {
            return view('themes.backend.login');
        }
    }


    public function aboutFinancialsDetailsEditDelete(Request $request)
    {
        $user = Auth::user();
        if (@$user->id) {
            //return view('themes.backend.login');
            $fId = $_REQUEST['fId'];
            $sql = "Delete from page_fin_pdf where id=" . $request->findetailid . "";
            DB::statement($sql);
            $pageFin = DB::table('page_fin_pdf')->where('f_id', $fId)->get();
            return view('themes.backend.pages.aboutFinancialsDetailsList', ['pageFin' => $pageFin]);
        } else {
            return view('themes.backend.login');
        }
    }

    public function aboutFinancialsgroupadd()
    {
        $user = Auth::user();
        if (@$user->id) {
        } else {
            return view('themes.backend.login');
        }

    }

    public function aboutFinancialsDelete($id)
    {
        $user = Auth::user();
        if (@$user->id) {
            DB::table('page_fin')->where('id', '=', $id)->delete();
            return redirect()->back();
        } else {
            return view('themes.backend.login');
        }
    }

    //invest & project
    public function getinvest()
    {
        $user = Auth::user();
        if (@$user->id) {
           $investproject= DB::table('pages_common')->where('slug','=','invest')->get();
           // dd($investproject);
            return view('themes.backend.pages.aboutInvest',['invest'=>$investproject]);
        }
        else
        {
            return view('themes.backend.login');
        }

    }

    public function addinvest()
    {
        $user = Auth::user();
        if (@$user->id) {
            return view('themes.backend.pages.aboutInvestAdd');
        }
        else{
            return view('themes.backend.login');
        }
    }

    public function saveinvest(Request $request)
    {
        $user = Auth::user();
        if (@$user->id) {
            if (Input::file('image')) {
                $image = $request->file('image');
                $invest = $image->getClientOriginalName();
                $destinationPath = public_path('/uploads/pages');
                $image->move($destinationPath, $invest);

            } else {
                $invest = false;
            }
            if (Input::file('video')) {
                $image = $request->file('video');
                $video= $image->getClientOriginalName();
                $destinationPath = public_path('/uploads/pages');
                $image->move($destinationPath, $video);

            } else {
                $video = false;
            }
            $data=array('images'=>$invest,'video'=>$video,'slug'=>str_slug('invest'));
            DB::table('pages_common')->insert($data);
            Session::flash('flash_message', 'Successfully Added !');
            return redirect()->route('addinvest');
        }
        else{
            return view('themes.backend.login');
        }
    }

    public function deleteinvest($id)
    {
        $user = Auth::user();
        if (@$user->id) {
            DB::table('pages_common')->where('id', '=', $id)->delete();
            return redirect()->back();
        }
        else{
            return view('themes.backend.login');
        }

    }


    //details end            
    public function aboutAwards(Request $request)
    {
        $user = Auth::user();
        if (@$user->id) {
            //return view('themes.backend.login');
            $pageAwards = DB::table('page_awards_networks')->where('id', 1)->first();
            return view('themes.backend.pages.aboutAwards', ['pageAwards' => $pageAwards]);
        } else {
            return view('themes.backend.login');
        }
    }

    public function saveAboutAwards(Request $request)
    {
        $user = Auth::user();
        if (@$user->id) {
            //return view('themes.backend.login');
            $sql = "UPDATE `page_awards_networks` SET `title` = '" . $request->title . "',`description` = '" . $request->description . "' WHERE `page_awards_networks`.`id` = 1;";
            DB::statement($sql);
            $pageAwards = DB::table('page_awards_networks')->where('id', 1)->first();
            return view('themes.backend.pages.aboutAwards', ['pageAwards' => $pageAwards]);
        } else {
            return view('themes.backend.login');
        }
    }

    public function aboutAwardsGallery(Request $request)
    {
        $user = Auth::user();
        if (@$user->id) {
            //return view('themes.backend.login');
            $pageGalleryAwards = DB::table('page_awards_gallery')->get();
            return view('themes.backend.pages.aboutAwardsGalleryList', ['pageGalleryAwards' => $pageGalleryAwards]);
        } else {
            return view('themes.backend.login');
        }
    }

    public function aboutAwardsGalleryAdd(Request $request)
    {
        $user = Auth::user();
        if (@$user->id) {
            //return view('themes.backend.login');
            return view('themes.backend.pages.aboutAwardsGalleryAdd');
        } else {
            return view('themes.backend.login');
        }
    }

    public function aboutAwardsGallerySave(Request $request)
    {
        $user = Auth::user();
        if (@$user->id) {
            //return view('themes.backend.login');
            //validation start
            $validatedData = $request->validate([
                'title' => 'required',
                'description' => 'required',
                'image' => 'required',
            ]);
            //validation end 
            //insert db start
            if (Input::file('image')) {
                $image = $request->file('image');
                $fin = time() . '-awards.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads/pages');
                $image->move($destinationPath, $fin);
            } else {
                $fin = false;
            }
            $sql = "INSERT INTO `page_awards_gallery` (`id`, `aId`, `title`,`description`, `image`, `created_at`, `updated_at`) VALUES (NULL, '0', '" . $request->title . "', '" . $request->description . "','" . $fin . "',CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);";
            DB::statement($sql);
            Session::flash('flash_message', 'Successfully Gallery Added!');
            //insert db end 
            return view('themes.backend.pages.aboutAwardsGalleryAdd');
        } else {
            return view('themes.backend.login');
        }
    }

    public function aboutAwardsGalleryDelete(Request $request)
    {
        $galleryId = $request->gId;
        $user = Auth::user();
        if (@$user->id) {
            $sql = "Delete from page_awards_gallery where id=" . $galleryId . "";
            DB::statement($sql);
            $pageGalleryAwards = DB::table('page_awards_gallery')->get();
            Session::flash('flash_message', 'Successfully Gallery Deleted!');
            return redirect('/eficor/administrator/cms/about-awards-gallery');
        } else {
            return view('themes.backend.login');
        }
    }

    /////////////// common pages start ///////////
    public function commonPages(Request $request)
    {
        $user = Auth::user();
        if (@$user->id) {
            $commonPages = DB::table('pages_common')->get();

            return view('themes.backend.common-pages.manage', ['commonPages' => $commonPages]);
        } else {
            return view('themes.backend.login');
        }
    }

    public function commonPagesAdd(Request $request)
    {
        $user = Auth::user();
        if (@$user->id) {
            return view('themes.backend.common-pages.add');
        } else {
            return view('themes.backend.login');
        }
    }

    public function commonPagesAddSave(Request $request)
    {
        $user = Auth::user();
        if (@$user->id) {
            $validatedData = $request->validate([
                'title' => 'required',
                'description' => 'required',
                'image' => 'required',
                'imagepdf' => 'required',
                'type' => 'required',
            ]);
            $title = $request->input('title');
            $description = $request->input('description');
            $type = $request->input('type');
            $slug = str_slug($type);


            if ($request->file('image')) {
                $imagename = $request->file('image')->getClientOriginalName();
                $request->file('image')->move(public_path('uploads/pages/'), $imagename);
            } else {
                $imagename = null;
            }

            if ($request->file('imagepdf')) {
                $imagepdf = $request->file('imagepdf')->getClientOriginalName();
                $request->file('imagepdf')->move(public_path('uploads/pages/'), $imagepdf);
            } else {
                $imagepdf = null;
            }


            $data = array('title' => $title, 'description' => $description, 'type' => $type, 'status' => 1, 'slug' => $slug, 'images' => $imagename, 'pdf' => $imagepdf);
            \Illuminate\Support\Facades\DB::table('pages_common')->insert($data);
            return redirect()->route('commonpagesdetails');
        } else {
            return view('themes.backend.login');
        }

    }

    public function commonPagesEdit(Request $request)
    {
        $pageId = $request->pId;
        $user = Auth::user();
        if (@$user->id) {
            $pageGalleryAwards = DB::table('pages_common')->where('id', $pageId)->first();
            return view('themes.backend.common-pages.edit', ['pageGalleryAwards' => $pageGalleryAwards]);
        } else {
            return view('themes.backend.login');
        }
    }

    public function commonPagesUpdate(Request $request)
    {
        $pageId = $request->pId;
        $user = Auth::user();
        if (@$user->id) {

            if (Input::file('image')) {
                $image = $request->file('image');
                $fin = time() . '-image.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads/pages');
                $image->move($destinationPath, $fin);
                //update start
                $sql = "UPDATE `pages_common` SET `images` = '" . $fin . "' WHERE `pages_common`.`id` = " . $pageId . ";";
                DB::statement($sql);
                //update end
            }
            if (Input::file('pdf')) {
                $image = $request->file('pdf');
                $pdf = time() . '-pages.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads/pages');
                $image->move($destinationPath, $pdf);
                //update start
                $sql = "UPDATE `pages_common` SET `pdf` = '" . $pdf . "' WHERE `pages_common`.`id` = " . $pageId . ";";
                DB::statement($sql);
                //update end                
            }
            //update start
            $sql = "UPDATE `pages_common` SET `title` = '" . $request->title . "',`description` = '" . $request->description . "' WHERE  `pages_common`.`id` = " . $pageId . ";";
            DB::statement($sql);
            //update end 
            $pageGalleryAwards = DB::table('pages_common')->where('id', $pageId)->first();
            return view('themes.backend.common-pages.edit', ['pageGalleryAwards' => $pageGalleryAwards]);
        } else {
            return view('themes.backend.login');
        }
    }

    public function commonPagesDelete($id)
    {
        \Illuminate\Support\Facades\DB::table('pages_common')->where('id', '=', $id)->delete();
        return redirect()->route('commonpagesdetails');

    }

    /////////////// common pages end ///////////        


    public function aboutWhere(Request $request)
    {
        $user = Auth::user();
        if (@$user->id) {
            //return view('themes.backend.login');
            return view('themes.backend.pages.aboutWhere');
        } else {
            return view('themes.backend.login');
        }
    }

    public function saveNew(Request $request)
    {
        $user = Auth::user();
        if (@$user->id) {
            $validatedData = $request->validate([
                'image' => 'required',
                'title' => 'required',
                'description' => 'required',
                'link' => 'required',
                'status' => 'required'
            ]);
            if (Input::file('image')) {
                $image = $request->file('image');
                $imagephoto_filename = time() . '-slider.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads/slider');
                $image->move($destinationPath, $imagephoto_filename);
            } else {
                $imagephoto_filename = false;
            }
            $sql = "INSERT INTO `slider` (`id`, `title`, `image`, `description`, `link`, `status`, `created_at`) VALUES (NULL, '" . $request->title . "', '" . $imagephoto_filename . "', '" . $request->description . "', '" . $request->link . "', '" . $request->status . "', CURRENT_TIMESTAMP);";
            DB::statement($sql);
            Session::flash('flash_message', 'Successfully Slider Added !');
            return view('themes.backend.page.add');
        } else {
            return view('themes.backend.login');
        }
    }

    public function manage(Request $request)
    {
        $user = Auth::user();
        if (@$user->id) {
            $sliders = DB::table('slider')->get();
            return view('themes.backend.page.manage', ['sliders' => $sliders]);
        } else {
            return view('themes.backend.login');
        }
    }

    public function edit(Request $request)
    {
        $user = Auth::user();
        if (@$user->id) {
            $id = $request->id;
            if ($id) {
                $singleSlider = DB::table('slider')->where('id', $id)->first();
                return view('themes.backend.page.edit', ['singleSlider' => $singleSlider]);
            } else {
                return "404 PAGE NOT FOUND!";
            }

        } else {
            return view('themes.backend.login');
        }
    }

    public function saveEdit(Request $request)
    {
        $user = Auth::user();
        if (@$user->id) {
            $id = $request->id;
            if ($id) {
                //update the slider start
                if (Input::file('image')) {
                    $image = $request->file('image');
                    $imagephoto_filename = time() . '-slider.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('/uploads/slider');
                    $image->move($destinationPath, $imagephoto_filename);
                    DB::table('slider')->where('id', $id)->update(['image' => $imagephoto_filename]);
                } else {
                    $imagephoto_filename = false;
                }
                DB::table('slider')->where('id', $id)->update(['title' => $request->title, 'description' => $request->description, 'link' => $request->link, 'status' => $request->status]);
                //update the slider end
                Session::flash('flash_message', 'Successfully Slider Updated !');
                $singleSlider = DB::table('slider')->where('id', $id)->first();
                return view('themes.backend.page.edit', ['singleSlider' => $singleSlider]);
            } else {
                return "404 PAGE NOT FOUND!";
            }

        } else {
            return view('themes.backend.login');
        }
    }

    public function delete(Request $request)
    {
        $user = Auth::user();
        if (@$user->id) {
            $id = $request->id;
            if ($id) {
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

    public function joblist()
    {
        $user = Auth::user();
        if (@$user->id) {
        $jobs = DB::table('jobs')->get();
        return view('themes.backend.job.manage', ['jobs' => $jobs]);
        } else {
            return view('themes.backend.login');
        }
    }

    public function get_job(Request $request)
    {
        $user = Auth::user();
        if (@$user->id) {
        return view('themes.backend.job.add');
        } else {
            return view('themes.backend.login');
        }
    }

    public function add_job(Request $request)
    {
        $user = Auth::user();
        if (@$user->id) {
        $this->validate($request, [
            'title' => 'required',
            'desc' => 'required',
            'duration' => 'required',
            'location' => 'required',
        ]);
        $data = array('title' => $request->title, 'desc' => $request->desc, 'duration' => $request->duration, 'location' => $request->location, 'created_at' => date('y-m-d'), 'updated_at' => date('y-m-d'));
        DB::table('jobs')->insert($data);
        return redirect()->route('get_job');
        } else {
            return view('themes.backend.login');
        }


    }

    public function edit_job($id)
    {
        $user = Auth::user();
        if (@$user->id) {
        $jobdetails = DB::table('jobs')->where('id', '=', $id)->first();
        return view('themes.backend.job.edit', ['jobdetails' => $jobdetails]);
        } else {
            return view('themes.backend.login');
        }
    }

    public function editsave_job(Request $request)
    {
        $user = Auth::user();
        if (@$user->id) {
        $this->validate($request, [
            'title' => 'required',
            'desc' => 'required',
            'duration' => 'required',
            'location' => 'required',
        ]);
        $data = array('title' => $request->title, 'desc' => $request->desc, 'duration' => $request->duration, 'location' => $request->location, 'updated_at' => date('y-m-d'));
        DB::table('jobs')->where('id', '=', $request->id)->update($data);
        session()->flash('flash_message', 'Successfully Updated');
        return redirect()->route('edit_job', ['id' => $request->id]);
        } else {
            return view('themes.backend.login');
        }
    }


    public function delete_job($id)
    {

        $user = Auth::user();
        if (@$user->id) {
        DB::table('jobs')->where('id', '=', $id)->delete();
        return redirect()->route('joblist');
        } else {
            return view('themes.backend.login');
        }
    }

    public function view_apply_job()
    {

        $user = Auth::user();
        if (@$user->id) {
        $job_applied = DB::table('users')->where('role', '=', 2)->get();
        return view('themes.backend.job.applied_job', ['apply' => $job_applied]);
        } else {
            return view('themes.backend.login');
        }
    }

    public function delete_apply_job($id)
    {
        $user = Auth::user();
        if (@$user->id) {
        \Illuminate\Support\Facades\DB::table('users')->where('id', '=', $id)->delete();
        return redirect()->route('view_apply_job');
        } else {
            return view('themes.backend.login');
        }
    }



    public function quick_link_policy()
    {
        $user = Auth::user();
        if (@$user->id) {
        return view('themes.backend.pages.quick_page_footer');
        } else {
            return view('themes.backend.login');
        }
    }

    public function save_quick_link_policy(Request $request)
    {
        $user = Auth::user();
        if (@$user->id) {
        $this->validate($request, [

            'description' => 'required',
            'type' => 'required',
            'title' => 'required',
        ]);
        $data=array('title'=>$request->title,'description'=>$request->description,'type'=>$request->type,'slug'=>str_slug($request->type));
        DB::table('pages_common')->insert($data);
        return redirect()->route('quick_lin_policy');
        } else {
            return view('themes.backend.login');
        }
    }





}
