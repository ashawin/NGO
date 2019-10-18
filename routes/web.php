<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
\Illuminate\Support\Facades\Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index');

//administrator panel start
Route::get('/eficor/administrator/login', 'ControlPanelAdmin@login');
Route::post('/eficor/administrator/login', 'ControlPanelAdmin@loginCheck');
Route::get('/eficor/administrator/dashboard', 'ControlPanelAdmin@dashboard');
Route::get('/eficor/administrator/logout', 'ControlPanelAdmin@logout');
//slider start
Route::get('/eficor/administrator/slider/manage-slider', 'ControlPanelAdmin@manageSlider');
Route::get('/eficor/administrator/slider/add-new', 'ControlPanelAdmin@addNewSlider');
Route::post('/eficor/administrator/slider/add-new', 'ControlPanelAdmin@saveNewSlider');
Route::get('/eficor/administrator/slider/edit/{id}', 'ControlPanelAdmin@editSlider');
Route::post('/eficor/administrator/slider/edit/{id}', 'ControlPanelAdmin@saveEditSlider');
Route::get('/eficor/administrator/slider/delete/{id}', 'ControlPanelAdmin@deleteSlider');
//slider end 


//page start
Route::get('/eficor/administrator/cms/about-histroy', 'CmsController@aboutHistroy');
Route::post('/eficor/administrator/cms/about-histroy', 'CmsController@saveAboutHistroy');


Route::get('/eficor/administrator/cms/team/add', 'CmsController@aboutTeamAdd')->name('getaboutTeam');
Route::post('/eficor/administrator/cms/team/add', 'CmsController@aboutTeamSave');

Route::get('/eficor/administrator/cms/about-team', 'CmsController@aboutTeam');
Route::post('/eficor/administrator/cms/about-team', 'CmsController@saveAboutTeam');

Route::get('/eficor/administrator/cms/team/delete/{tId}', 'CmsController@deleteAboutTeam');

//Edit Team
Route::get('/eficor/administrator/cms/team/edit/{tId}', 'CmsController@editAboutTeam')->name('editaboutteam');
Route::post('/eficor/administrator/cms/team/edit/save', 'CmsController@saveeditAboutTeam')->name('saveeditaboutteam');

Route::get('/eficor/administrator/cms/about-strategy', 'CmsController@aboutStrategy');
Route::post('/eficor/administrator/cms/about-strategy', 'CmsController@saveAboutStrategy');

Route::get('/eficor/administrator/cms/about-quality', 'CmsController@aboutQuality')->name('addquality');
Route::post('/eficor/administrator/cms/about-quality', 'CmsController@saveAboutQuality');
Route::get('/eficor/administrator/cms/quality/view', 'CmsController@view_quality')->name('viewquality');
Route::get('/eficor/administrator/cms/quality/edit/{id}', 'CmsController@edit_quality')->name('editquality');
Route::post('/eficor/administrator/cms/quality/edit', 'CmsController@edit_save_quality')->name('editqualitysave');
Route::get('/eficor/administrator/cms/quality/delete/{id}', 'CmsController@deletequality')->name('deletequality');

//financial start
Route::get('/eficor/administrator/cms/about-financials', 'CmsController@aboutFinancials');
Route::get('/eficor/administrator/cms/about-financials/add', 'CmsController@aboutFinancialsAdd');
Route::post('/eficor/administrator/cms/about-financials/add', 'CmsController@aboutFinancialsSave');
Route::post('/eficor/administrator/cms/about-financials-group/add', 'CmsController@aboutFinancialsgroupadd');
Route::get('/eficor/administrator/cms/about-financials/edit/{id}', 'CmsController@aboutfinancialedit');
Route::post('/eficor/administrator/cms/about-financials/edit', 'CmsController@aboutfinanceeditsave')->name('aboutfinanceeditsave');
Route::get('/eficor/administrator/cms/about-financials/group/delete/{id}', 'CmsController@aboutFinancialsDelete');
//financial end
//financial details start

Route::get('/eficor/administrator/cms/about-financials-details', 'CmsController@aboutFinancialsDetails');
Route::get('/eficor/administrator/cms/about-financials-details/add', 'CmsController@aboutFinancialsDetailsAdd');
Route::post('/eficor/administrator/cms/about-financials-details/add', 'CmsController@aboutFinancialsDetailsSave');
Route::get('/eficor/administrator/cms/about-financials-details/edit', 'CmsController@aboutFinancialsDetailsEdit');
Route::post('/eficor/administrator/cms/about-financials-details/edit', 'CmsController@aboutFinancialsDetailsEditSave');
Route::get('/eficor/administrator/cms/about-financials-details/delete/{findetailid}', 'CmsController@aboutFinancialsDetailsEditDelete');
//financial details end


Route::get('/eficor/administrator/cms/about-awards', 'CmsController@aboutAwards');
Route::post('/eficor/administrator/cms/about-awards', 'CmsController@saveAboutAwards');
//awards gallery start
Route::get('/eficor/administrator/cms/about-awards-gallery', 'CmsController@aboutAwardsGallery');
Route::get('/eficor/administrator/cms/about-awards-gallery-add', 'CmsController@aboutAwardsGalleryAdd');
Route::post('/eficor/administrator/cms/about-awards-gallery-add', 'CmsController@aboutAwardsGallerySave');
Route::get('/eficor/administrator/cms/about-awards-gallery-edit/{gId}', 'CmsController@aboutAwardsGalleryEdit');
Route::post('/eficor/administrator/cms/about-awards-gallery-edit/{gId}', 'CmsController@aboutAwardsGalleryUpdate');
Route::get('/eficor/administrator/cms/about-awards-gallery-delete/{gId}', 'CmsController@aboutAwardsGalleryDelete');
//awards gallery end 

//common page start
Route::get('/eficor/administrator/cms/common-pages', 'CmsController@commonPages')->name('commonpagesdetails');
Route::get('/eficor/administrator/cms/common-pages/add', 'CmsController@commonPagesAdd')->name('getcommonpages');
Route::post('/eficor/administrator/cms/common-pages/add', 'CmsController@commonPagesAddSave')->name('savecommonpage');
Route::get('/eficor/administrator/cms/common-pages/edit/{pId}', 'CmsController@commonPagesEdit');
Route::post('/eficor/administrator/cms/common-pages/edit/{pId}', 'CmsController@commonPagesUpdate');
Route::get('/eficor/administrator/cms/common-pages/delete/{pId}', 'CmsController@commonPagesDelete');
//common page end

//Volunteeers start
Route::get('/eficor/administrator/cms/volunteeers', 'VolunteeersController@manage');
Route::get('/eficor/administrator/cms/volunteeers/add', 'VolunteeersController@add');
Route::post('/eficor/administrator/cms/volunteeers/add', 'VolunteeersController@save');
Route::get('/eficor/administrator/cms/volunteeers/edit/{vId}', 'VolunteeersController@edit');
Route::post('/eficor/administrator/cms/volunteeers/edit/{vId}', 'VolunteeersController@update');
Route::get('/eficor/administrator/cms/volunteeers/delete/{vId}', 'VolunteeersController@delete');
//Volunteeers end

//Partner&Inter start
Route::get('/eficor/administrator/cms/partner-inter', 'PartnerShipController@manage');
Route::get('/eficor/administrator/cms/partner-inter/add', 'PartnerShipController@add');
Route::post('/eficor/administrator/cms/partner-inter/add', 'PartnerShipController@save');
Route::get('/eficor/administrator/cms/partner-inter/edit/{pId}', 'PartnerShipController@edit');
Route::post('/eficor/administrator/cms/partner-inter/edit/{pId}', 'PartnerShipController@update');
Route::get('/eficor/administrator/cms/partner-inter/delete/{pId}', 'PartnerShipController@delete');
//Partner&Inter end
Route::get('/eficor/administrator/cms/invest', 'CmsController@getinvest')->name('getinvest');
Route::get('/eficor/administrator/cms/invest/add', 'CmsController@addinvest')->name('addinvest');
Route::post('/eficor/administrator/cms/invest/add', 'CmsController@saveinvest')->name('saveaddinvest');
Route::get('/eficor/administrator/cms/invest/delete/{id}', 'CmsController@deleteinvest')->name('deleteinvest');

//


//donation Start
Route::get('/eficor/administrator/donation', 'DonationController@manage');
Route::get('/eficor/administrator/donation/add', 'DonationController@add');
Route::post('/eficor/administrator/donation/add', 'DonationController@save');
Route::get('/eficor/administrator/donation/edit/{pId}', 'DonationController@edit')->name('indexdonationedit');
Route::post('/eficor/administrator/donation/edit/{pId}', 'DonationController@update');
Route::get('/eficor/administrator/donation/delete/{pId}', 'DonationController@delete');
//donation End

//projects & News Start
Route::get('/eficor/administrator/projects/manage', 'ProjectController@manage');
Route::get('/eficor/administrator/projects/add', 'ProjectController@add');
Route::post('/eficor/administrator/projects/add', 'ProjectController@save');
Route::get('/eficor/administrator/projects/edit/{pId}', 'ProjectController@edit');
Route::post('/eficor/administrator/projects/edit/{pId}', 'ProjectController@update');
Route::get('/eficor/administrator/projects/delete/{pId}', 'ProjectController@delete');

//Projects & News End

Route::get('/eficor/administrator/cms/about-where', 'CmsController@aboutWhere');
Route::post('/eficor/administrator/cms/about-where', 'CmsController@saveAboutWhere');
//page end


//config start
Route::get('/eficor/administrator/site-config', 'SiteConfigController@siteConfig');
Route::post('/eficor/administrator/site-config', 'SiteConfigController@saveSiteConfig');

//config end 

Route::get('/administrator/settings', 'ControlPanelAdmin@settings');
Route::get('/administrator/blogs', 'ControlPanelAdmin@manageBlogs');


//team start here
Route::get('/administrator/team/add', 'TeamController@add_team')->name('add_team');
Route::post('/administrator/team/save', 'TeamController@save_team')->name('save_team');
Route::get('/administrator/team', 'TeamController@view_team')->name('get_team');
Route::get('/eficor/administrator/team/edit/{id}', 'TeamController@edit_team')->name('edit_team');
Route::post('/eficor/administrator/team/edit/save', 'TeamController@edit_save')->name('edit_save');
Route::get('/eficor/administrator/team/delete/{id}', 'TeamController@delete_team')->name('delete_team');

//job oppurtunity start here
Route::get('/administrator/jobs/list', 'CmsController@joblist')->name('joblist');
Route::get('/administrator/job/add', 'CmsController@get_job')->name('get_job');
Route::post('/administrator/job/save', 'CmsController@add_job')->name('add_job');
Route::get('/administrator/job/edit/{id}', 'CmsController@edit_job')->name('edit_job');
Route::post('/administrator/job/edit/save', 'CmsController@editsave_job')->name('editsave_job');
Route::get('/administrator/job/delete/{id}', 'CmsController@delete_job')->name('delete_job');
Route::get('/administrator/jobs/view', 'CmsController@view_apply_job')->name('view_apply_job');
Route::get('/administrator/jobs/apply/delete/{id}', 'CmsController@delete_apply_job')->name('delete_apply_job');

//quick link policy
Route::get('/administrator/quick/link/policy', 'CmsController@quick_link_policy')->name('quick_lin_policy');
Route::post('/administrator/quick/link/policy', 'CmsController@save_quick_link_policy')->name('quick_lin_policy_save');

//work location
Route::get('/administrator/work/location', 'ProjectController@get_location')->name('work_location');
Route::get('/administrator/work/location/add', 'ProjectController@work_location_add')->name('work_location_add');
Route::get('/administrator/work/location/delete/{id}', 'ProjectController@delete_location')->name('work_location_delete');
Route::post('/administrator/work/location/save', 'ProjectController@work_location_save')->name('work_location_save');

//administrator panel end


//History details Start here
Route::get('/history/', 'frontend\HistoryController@index')->name('history');

//Team Details Start Here
Route::get('/team', 'frontend\TeamController@index')->name('team');
Route::get('/team/destails/{id}', 'frontend\TeamController@team_details')->name('teamdetails');


//team quick contact
Route::post('/team/contact/save', 'frontend\TeamController@teamquickcontact')->name('teamquickcontact');
//Strategy Controller
Route::get('/strategy', 'frontend\StretgyController@index')->name('stretgy');

//Quality Standard
Route::get('/quality', 'frontend\QualityController@index')->name('quality');

//finance Controller
Route::get('/finance', 'frontend\FinancialController@index')->name('finance');

//Network Award Controller
Route::get('/awardnetwork', 'frontend\AwardNetworkController@index')->name('awardnetwork');

//Where We work
Route::get('/wherewework', 'frontend\WhereWorkController@index')->name('wherewework');

//Get Annual report
Route::get('/annualreport', 'frontend\PageController@getannualreport')->name('annualreport');

//Get Publication
Route::get('/publication', 'frontend\PageController@getpublication')->name('publication');

//Get Policies
Route::get('/policies', 'frontend\PageController@getpolicies')->name('policies');

//aids Sunday
Route::get('/aidssunday', 'frontend\PageController@getaidssunday')->name('aidssunday');

//Eco Sunday
Route::get('/ecosunday', 'frontend\PageController@getecosunday')->name('ecosunday');

//internship
Route::get('/internship', 'frontend\PageController@getinternship')->name('getintership');

//partenership
Route::get('/partenership', 'frontend\PageController@getpartenership')->name('getpartenership');

//what we do
Route::get('/whatwedo', 'frontend\HomeController@whatwedo')->name('whatwedo');
Route::get('/whatwedo/{id}', 'frontend\HomeController@whatwedodetails')->name('whatwedodetails');

//Voluteer
Route::get('/volunteer', 'frontend\PageController@volunteer')->name('volunteer');

//slider read more
Route::get('/readmore/{slug}', 'HomeController@readmore')->name('sliderreadmore');

//coming soon
Route::get('/donate', 'HomeController@comingsoon')->name('donatenow');

//quality desc
Route::get('/quality/desc/{id}', 'frontend\QualityController@qualitydesc')->name('qualitydesc');

//Donate page
Route::get('/donate', 'frontend\DonationController@getdonation')->name('getdonation');
Route::post('/donate/save', 'frontend\DonationController@savedonation')->name('savedonation');
//getcontact
Route::get('/contact', 'frontend\HomeController@getcontact')->name('getcontact');
Route::post('/contact/save', 'frontend\HomeController@savecontact')->name('savecontact');


Route::get('/thankyou/{id}', 'frontend\DonationController@paythanky')->name('paythanky');
Route::get('/make/payment', 'frontend\DonationController@payment_panel')->name('paypanel');

Route::post('/payment/response', 'frontend\DonationController@payment_response')->name('paymentresponse');
//ajax title
Route::get('/eficor/more/{slug}', 'frontend\PageController@view_more_pages')->name('viewmorepages');
//invest &project
Route::get('/invest/project', 'frontend\PageController@investproject')->name('invest&project');
//job oppurtunity
Route::get('/job/oppurtunity', 'frontend\PageController@joboppurtunity')->name('joboppurtunity');
Route::post('/job/apply', 'frontend\PageController@jobapplied')->name('jobapplied');

Route::get('/thankyou', 'Controller@thankyou')->name('thankyou');
//
Route::get('/more/quality', 'frontend\QualityController@morequality')->name('morequalitystd');

//refund policy

Route::get('/eficor/refundpolicy', 'frontend\PageController@refund_policy')->name('refundpolicy');
//privacy policy
Route::get('/eficor/privacypolicy', 'frontend\PageController@privacy_policy')->name('privacyplicy');
//terms & condition
Route::get('/eficor/terms&c', 'frontend\PageController@termsandcondition')->name('tandc');
//get involved
Route::get('/eficor/getinvolved', 'frontend\PageController@getinvolved')->name('getinvolved');
Route::get('/eficor/resource', 'frontend\PageController@getresource')->name('getresource');
//volunteers


Route::get('/eficor/volunteers', 'frontend\TeamController@get_all_volunteers')->name('getallvolunteers');
Route::get('/eficor/morejobs', 'frontend\PageController@more_jobs')->name('more_jobs');

//
Route::get('/admin/donaters', 'DonationController@getdonaters')->name('getdonaters');

//
Route::get('/news/blog', 'frontend\BlogController@getrecentnews')->name('getrecentnews');
Route::get('/news/blog/{id}', 'frontend\BlogController@blog_details')->name('blog_details');
Route::post('/news/blog/like', 'frontend\BlogController@like')->name('bloglike');
Route::post('/news/comment', 'frontend\BlogController@comments')->name('blogcomments');
Route::get('/eficor/administrator/comments/{id}', 'SiteConfigController@comments')->name('adminblogcomments');
Route::get('/admin/comment/status/like/{id}', 'SiteConfigController@like')->name('adminbloglike');
Route::get('/admin/comment/status/dislike/{id}', 'SiteConfigController@dislike')->name('adminblogdislike');
Route::get('/admin/comment/delete/{id}', 'SiteConfigController@delete_comment')->name('delete_comment');


