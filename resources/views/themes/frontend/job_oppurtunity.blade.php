@extends('themes.frontend.layout.app')
@section('content')
    <div class="main-content">
        <!-- Section: inner-header -->
        <section class="inner-header divider layer-overlay overlay-dark" data-bg-img="{{asset('themes/frontend/images/bg/bg2.jpg')}}">
            <div class="container pt-30 pb-30">
                <!-- Section Content -->
                <div class="section-content text-center">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 text-center">
                            <h2 class="text-theme-colored font-36">JOB RECRUITMENTS</h2>
                            <!-- <ol class="breadcrumb text-center mt-10 white">
                               <li><a href="#">Home</a></li>
                               <li><a href="#">Pages</a></li>
                               <li class="active">Job Details 1</li>
                             </ol>-->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                @if(!$jobs->isEmpty())
                <div class="row">
                    <div class="col-md-3">
                        <div class="job-overview">
                            <dl class="dl-horizontal">
                                <dt><i class="fa fa-calendar text-theme-colored mt-5 font-15"></i></dt>
                                <dd>
                                    <h5 class="mt-0">Date Posted:</h5>
                                    <p>Posted {{$jobs[0]->created_at}}</p>
                                </dd>
                            </dl>
                            <dl class="dl-horizontal">
                                <dt><i class="fa fa-map-marker text-theme-colored mt-5 font-15"></i></dt>
                                <dd>
                                    <h5 class="mt-0">Location:</h5>
                                    <p>{{$jobs[0]->location}}</p>
                                </dd>
                            </dl>
                            <dl class="dl-horizontal">
                                <dt><i class="fa fa-user text-theme-colored mt-5 font-15"></i></dt>
                                <dd>
                                    <h5 class="mt-0">Job Title:</h5>
                                    <p>{{$jobs[0]->title}}</p>
                                </dd>
                            </dl>
                            <dl class="dl-horizontal">
                                <dt><i class="fa fa-money text-theme-colored mt-5 font-15"></i></dt>
                                <dd>
                                    <h5 class="mt-0">Work Duration</h5>
                                    <p>{{$jobs[0]->duration}}</p>
                                </dd>
                            </dl>
                            <a class="btn btn-dark mt-20" href="{{route('more_jobs')}}">More Jobs</a>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="icon-box mb-0 p-0">
                            <a href="#" class="icon icon-gray pull-left mb-0 mr-10">
                                <i class="pe-7s-users"></i>
                            </a>
                            <h3 class="icon-box-title pt-15 mt-0 mb-40">{{$jobs[0]->title}}</h3>
                            <hr>
                       <p>{{$jobs[0]->desc}}</p>
                        </div>

                    </div>
                </div>@else
                    <h3>No  job Found</h3>
                    @endif
            </div>
        </section>
@if(!$jobs->isEmpty())
        <!-- Section: Registration Form -->
        <section class="divider parallax layer-overlay overlay-light" data-stellar-background-ratio="0.5" data-bg-img="images/bg/bg1.jpg">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 bg-lightest-transparent p-30 pt-10">
                        @if(session()->has('msg'))
                            <h4 style="text-align: center" class="alert-info">{{session()->get('msg')}}</h4>
                            @endif
                        <h3 class="text-center text-theme-colored mb-20">Apply Now</h3>
                        <form id="job_apply_form" name="job_apply_form" action="{{route('jobapplied')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="role" value="2">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="form_name">Name <small>*</small></label>
                                        <input id="form_name" name="name" type="text" placeholder="Enter Name" required="" class="form-control">
                                    </div>
                                    @if($errors->has('name'))
                                        <p class="alert-danger">{{$errors->first('name')}}</p>
                                        @endif
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="form_email">Email <small>*</small></label>
                                        <input id="form_email" name="email" class="form-control required email" type="email" placeholder="Enter Email">
                                    </div>
                                    @if($errors->has('email'))
                                        <p class="alert-danger">{{$errors->first('email')}}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="form_sex">Sex <small>*</small></label>
                                        <select id="form_sex" name="gender" class="form-control required">
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                    @if($errors->has('gender'))
                                        <p class="alert-danger">{{$errors->first('gender')}}</p>
                                    @endif
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="form_post">Job Post <small>*</small></label>
                                        <select id="form_post" name="job" class="form-control required">
                                            <option value="">Select Job</option>
                                            @foreach($jobs as $job)
                                            <option value="Finance Manager">{{$job->title}}</option>
                                                @endforeach

                                        </select>
                                        @if($errors->has('job'))
                                            <p class="alert-danger">{{$errors->first('job')}}</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="form_message">Message <small>*</small></label>
                                <textarea id="form_message" name="desc" class="form-control required" rows="5" placeholder="Your cover letter/message sent to the employer"></textarea>
                                @if($errors->has('desc'))
                                    <p class="alert-danger">{{$errors->first('desc')}}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="form_attachment">C/V Upload</label>
                                <input id="form_attachment" name="cv" class="file" type="file" multiple data-show-upload="false" data-show-caption="true">
                                <small>Maximum upload file size: 12 MB</small>
                                @if($errors->has('cv'))
                                    <p class="alert-danger">{{$errors->first('cv')}}</p>
                                @endif
                            </div>
                            <div class="form-group">

                                <button type="submit" class="btn btn-block btn-dark btn-theme-colored " >Apply Now</button>
                            </div>
                        </form>
                        <!-- Job Form Validation-->
{{--                        <script type="text/javascript">--}}
{{--                            $("#job_apply_form").validate({--}}
{{--                                submitHandler: function(form) {--}}
{{--                                    var form_btn = $(form).find('button[type="submit"]');--}}
{{--                                    var form_result_div = '#form-result';--}}
{{--                                    $(form_result_div).remove();--}}
{{--                                    form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');--}}
{{--                                    var form_btn_old_msg = form_btn.html();--}}
{{--                                    form_btn.html(form_btn.prop('disabled', true).data("loading-text"));--}}
{{--                                    $(form).ajaxSubmit({--}}
{{--                                        dataType:  'json',--}}
{{--                                        success: function(data) {--}}
{{--                                            if( data.status == 'true' ) {--}}
{{--                                                $(form).find('.form-control').val('');--}}
{{--                                            }--}}
{{--                                            form_btn.prop('disabled', false).html(form_btn_old_msg);--}}
{{--                                            $(form_result_div).html(data.message).fadeIn('slow');--}}
{{--                                            setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);--}}
{{--                                        }--}}
{{--                                    });--}}
{{--                                }--}}
{{--                            });--}}
{{--                        </script>--}}
                    </div>
                </div>
            </div>
        </section>
  @else
    <h3> No Jobs For applied</h3>
   @endif
    </div>
    @endsection
