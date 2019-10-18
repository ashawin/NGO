@extends('themes.frontend.layout.app')
@section('content')
    <!-- Start main-content -->
    <div class="main-content">
        <!-- Section: inner-header -->
        <section class="inner-header divider layer-overlay overlay-dark" data-bg-img="{{asset('themes/frontend/images/bg/bg2.jpg')}}">
            <div class="container pt-30 pb-30">
                <!-- Section Content -->
                <div class="section-content text-center">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 text-center">
                            <h2 class="text-theme-colored font-36">BECOME A VOLUNTEER</h2>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Features -->
        <section class="bg-lighter">
            <div class="container">
                <div class="section-content">
                    <div class="row mtli-row-clearfix">
                        <div class="col-xs-12 col-sm-6 col-md-3 pb-sm-20">
                            <div class="icon-box text-center p-10">
                                <a href="#" class="icon icon-gray icon-bordered icon-rounded icon-border-effect effect-rounded mb-10">
                                    <i class="fa fa-user-plus font-30 text-theme-colored"></i>
                                </a>
                                <h4 class="icon-box-title"><a href="#">Short term volunteering</a></h4>
                                <p class="text-gray">Lorem ipsum dolor sit amet consecte adipisicing elit. Molestias nnulla placeat, odioqui dict</p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3 pb-sm-20">
                            <div class="icon-box text-center p-10">
                                <a href="#" class="icon icon-gray icon-bordered icon-rounded icon-border-effect effect-rounded mb-10">
                                    <i class="fa fa-magic font-30 text-theme-colored"></i>
                                </a>
                                <h4 class="icon-box-title"><a href="#">Technical expertise</a></h4>
                                <p class="text-gray">Lorem ipsum dolor sit amet consecte adipisicing elit. Molestias nnulla placeat, odioqui dict</p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3 pb-sm-20">
                            <div class="icon-box text-center p-10">
                                <a href="#" class="icon icon-gray icon-bordered icon-rounded icon-border-effect effect-rounded mb-10">
                                    <i class="fa fa-globe font-30 text-theme-colored"></i>
                                </a>
                                <h4 class="icon-box-title"><a href="#">Relief</a></h4>
                                <p class="text-gray">Lorem ipsum dolor sit amet consecte adipisicing elit. Molestias nnulla placeat, odioqui dict</p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3 pb-sm-20">
                            <div class="icon-box text-center p-10">
                                <a href="#" class="icon icon-gray icon-bordered icon-rounded icon-border-effect effect-rounded mb-10">
                                    <i class="fa fa-life-ring font-30 text-theme-colored"></i>
                                </a>
                                <h4 class="icon-box-title"><a href="#">Others</a></h4>
                                <p class="text-gray">Lorem ipsum dolor sit amet consecte adipisicing elit. Molestias nnulla placeat, odioqui dict</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">

                    <div class="col-md-8">
                        <div class="heading-line-bottom mt-0 mb-30">
                            <h3 class="heading-title">Become a Volunteer</h3>
                        </div>
                        <form id="volunteer_apply_form" name="job_apply_form" action="#" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="form_name">Name <small>*</small></label>
                                        <input id="form_name" name="form_name" type="text" placeholder="Enter Name" required="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="form_email">Email <small>*</small></label>
                                        <input id="form_email" name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="form_sex">Sex <small>*</small></label>
                                        <select id="form_sex" name="form_sex" class="form-control required">
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="form_branch">Choose Branch <small>*</small></label>
                                        <select id="form_branch" name="form_branch" class="form-control required">
                                            <option value="UK">UK</option>
                                            <option value="USA">USA</option>
                                            <option value="Australia">Australia</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="form_message">Message <small>*</small></label>
                                <textarea id="form_message" name="form_message" class="form-control required" rows="5" placeholder="Your cover letter/message sent to the employer"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="form_attachment">C/V Upload</label>
                                <input id="form_attachment" name="form_attachment" class="file" type="file" multiple data-show-upload="false" data-show-caption="true">
                                <small>Maximum upload file size: 12 MB</small>
                            </div>
                            <div class="form-group">
                                <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="" />
                                <button type="submit" class="btn btn-block btn-dark btn-theme-colored btn-sm mt-20 pt-10 pb-10" data-loading-text="Please wait...">Apply Now</button>
                            </div>
                        </form>
                        <!-- Job Form Validation-->
                        <script type="text/javascript">
                            $("#volunteer_apply_form").validate({
                                submitHandler: function(form) {
                                    var form_btn = $(form).find('button[type="submit"]');
                                    var form_result_div = '#form-result';
                                    $(form_result_div).remove();
                                    form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                                    var form_btn_old_msg = form_btn.html();
                                    form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                                    $(form).ajaxSubmit({
                                        dataType:  'json',
                                        success: function(data) {
                                            if( data.status == 'true' ) {
                                                $(form).find('.form-control').val('');
                                            }
                                            form_btn.prop('disabled', false).html(form_btn_old_msg);
                                            $(form_result_div).html(data.message).fadeIn('slow');
                                            setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                                        }
                                    });
                                }
                            });
                        </script>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- end main-content -->
    <!-- Section: Volunteer -->
    <section>
        <div class="container">
            <div class="section-title text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h3 class="text-uppercase mt-0">Our Volunteers</h3>
                        <div class="title-icon">
                            <i class="flaticon-charity-hand-holding-a-heart"></i>
                        </div>
                        <p>{!!  $volunteer[0]->description !!}</p>
                    </div>
                </div>
            </div>
            <div class="section-content">
                <div class="row multi-row-clearfix">
                    <div class="col-md-12 text-left sm-text-center">
                        <div class="volunteers-carousel owl-nav-top" data-dots="true">

                            @foreach($volunteer as $volu)
                                  <div class="item">
                                <div class="volunteer maxwidth400">
                                    <div class="thumb"><img alt="" src="{{asset('uploads/pages/'.$volu->image)}}" class="img-fullwidth"></div>
                                    <div class="overlay">
                                        <div class="content text-center">
                                            <h4 class="author mb-0"><a href="#" class="text-white">{{$volu->name}}</a></h4>
                                            <h6 class="title text-black font-14 mt-5 mb-15">Joined: {{$volu->created_at}}</h6>
                                            <ul class="styled-icons icon-gray icon-sm mt-10">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection
