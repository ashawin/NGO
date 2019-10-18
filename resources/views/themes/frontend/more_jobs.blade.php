@extends('themes.frontend.layout.app')
@section('content')
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
            <div class="row">
                <div class="col-md-8">
                    <div class="heading-line-bottom mt-0 mb-30">
                        <h3 class="heading-title">Job List Style</h3>
                    </div>
                    @foreach($jobs as $job)
                    <div class="icon-box mb-0 p-0">
                        <a href="#" class="icon icon-gray pull-left mb-0 mr-10">
                            <i class="pe-7s-users"></i>
                        </a>
                        <h3 class="icon-box-title pt-15 mt-0 mb-40">{{$job->title}}</h3>
                        <hr>
                        <p class="text-gray">{{$job->desc}}</p>

                    </div>
                        @endforeach
                </div>
                <div class="col-md-4">
                    @if(session()->has('msg'))
                        <h4 style="text-align: center" class="alert-info">{{session()->get('msg')}}</h4>
                    @endif
                    <div class="heading-line-bottom mt-0 mb-30">
                        <h3 class="heading-title">Apply Job</h3>
                    </div>
                    <form id="volunteer_apply_form" name="job_apply_form" action="{{route('jobapplied')}}" method="post" enctype="multipart/form-data">
                       @csrf
                        <input type="hidden" name="role" value="2">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="form_name">Name <small>*</small></label>
                                    <input id="form_name" name="name" type="text" placeholder="Enter Name" required="" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="form_email">Email <small>*</small></label>
                                    <input id="form_email" name="email" class="form-control required email" type="email" placeholder="Enter Email">
                                </div>
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
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="form_branch">Choose Job <small>*</small></label>
                                    <select id="form_branch" name="job" class="form-control required">
                                        <option value="" selected>Select Job</option>
                                        @foreach($jobs as $job)
                                        <option value="{{$job->id}}">{{$job->title}}</option>
                                   @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="form_message">Message <small>*</small></label>
                            <textarea id="form_message" name="desc" class="form-control required" rows="5" placeholder="Your cover letter/message sent to the employer"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="form_attachment">C/V Upload</label>
                            <input id="form_attachment" name="cv" class="file" type="file" multiple data-show-upload="false" data-show-caption="true">
                            <small>Maximum upload file size: 12 MB</small>
                        </div>
                        <div class="form-group">
                            <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="" />
                            <button type="submit" class="btn btn-block btn-dark btn-theme-colored btn-sm mt-20 pt-10 pb-10" data-loading-text="Please wait...">Apply Now</button>
                        </div>
                    </form>
                    <!-- Job Form Validation-->
{{--                    <script type="text/javascript">--}}
{{--                        $("#volunteer_apply_form").validate({--}}
{{--                            submitHandler: function(form) {--}}
{{--                                var form_btn = $(form).find('button[type="submit"]');--}}
{{--                                var form_result_div = '#form-result';--}}
{{--                                $(form_result_div).remove();--}}
{{--                                form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');--}}
{{--                                var form_btn_old_msg = form_btn.html();--}}
{{--                                form_btn.html(form_btn.prop('disabled', true).data("loading-text"));--}}
{{--                                $(form).ajaxSubmit({--}}
{{--                                    dataType:  'json',--}}
{{--                                    success: function(data) {--}}
{{--                                        if( data.status == 'true' ) {--}}
{{--                                            $(form).find('.form-control').val('');--}}
{{--                                        }--}}
{{--                                        form_btn.prop('disabled', false).html(form_btn_old_msg);--}}
{{--                                        $(form_result_div).html(data.message).fadeIn('slow');--}}
{{--                                        setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);--}}
{{--                                    }--}}
{{--                                });--}}
{{--                            }--}}
{{--                        });--}}
{{--                    </script>--}}
                </div>
            </div>
        </div>
    </section>
@endsection
