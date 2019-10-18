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
                            <h3 class="text-theme-colored font-36">TEAM DETAILS</h3>
                            <!--<ol class="breadcrumb text-center mt-10 white">
                              <li><a href="#">Home</a></li>
                              <li><a href="#">Pages</a></li>
                              <li class="active">Volunteer Details</li>
                            </ol>-->
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Section: Volunteer Details -->
        <section>
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="thumb">
                                <img src="{{asset('uploads/team/'.$description->image)}}" alt="No image Found" height="240px" width="240px">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h4 class="line-bottom text-uppercase mt-0">{{$description->role}}</h4>
                            <h5 class="name mt-30 mb-0">{{$description->name}}</h5>
                            <h6>{{$description->role}}</h6>
{{--                            @if($description->group==2)--}}
{{--                            (<h6 class="mt-5">Director</h6>)--}}
{{--                            @endif--}}
{{--                            @if($description->group==3)--}}
{{--                               ( <h6 class="mt-5">Manager</h6>)--}}
{{--                            @endif--}}
{{--                            @if($description->group==1)--}}
{{--                                (<h6 class="mt-5">Board and Society</h6>)--}}
{{--                            @endif--}}
                            <p>{{$description->description}}</p>
                          <ul class="styled-icons icon-dark icon-theme-colored icon-sm mt-15 mb-0">
                                <li><a href="{{$description->fb_link}}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="{{$description->tw_link}}" target="_blank"><i class="fa fa-skype"></i></a></li>
                                <li><a href="{{$description->lnk_link}}" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row mt-30">
                        <div class="col-md-4">
                            <h4 class="line-bottom">About Me:</h4>
                            <div class="volunteer-address">
                                <ul>
                                    <li>
                                        <div class="bg-light media border-bottom p-15 mb-20">
                                            <div class="media-left">
                                                <i class="fa fa-book text-theme-colored font-24 mt-5"></i>
                                            </div>
                                            <div class="media-body">
                                                <h5 class="mt-0 mb-0">Education:</h5>
                                                <p>{{$description->education}}</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="bg-light media border-bottom p-15 mb-20">
                                            <div class="media-left">
                                                <i class="fa fa-map-marker text-theme-colored font-24 mt-5"></i>
                                            </div>
                                            <div class="media-body">
                                                <h5 class="mt-0 mb-0">Address:</h5>
                                                <p>{{$description->address}}</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="bg-light media border-bottom p-15">
                                            <div class="media-left">
                                                <i class="fa fa-phone text-theme-colored font-24 mt-5"></i>
                                            </div>
                                            <div class="media-body">
                                                <h5 class="mt-0 mb-0">Contact:</h5>
                                                <p>{{$description->contact}}</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        @if(session()->has('msg'))
                            <h3 class="alert-success">{{session()->get('msg')}}</h3>
                        @endif
                        <div class="col-md-6">
                            <div class="clearfix">
                                <h4 class="line-bottom">Quick Contact:</h4>
                            </div>
                            <form id="contact-form" method="post" class="contact-form-transparent" action="{{route('teamquickcontact')}}">
                                @csrf
                                <input type="hidden" name="id" value="{{$description->id}}">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="text" placeholder="Enter Name" id="name" name="name" required="" class="form-control">
                                        </div>
                                        @if($errors->has('name'))
                                            <p class="alert-danger">{{$errors->first('name')}}</p>
                                            @endif
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="email" placeholder="Enter Email" id="email" name="email" class="form-control" required="">
                                        </div>
                                        @if($errors->has('email'))
                                            <p class="alert-danger">{{$errors->first('email')}}</p>
                                        @endif
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" placeholder="Enter Subject" id="subject" name="subject" class="form-control" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea rows="5" placeholder="Enter Message" id="message" name="message" required class="form-control"></textarea>
                                    @if($errors->has('message'))
                                        <p class="alert-danger">{{$errors->first('message')}}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <button data-loading-text="Please wait..." class="btn btn-flat btn-dark btn-theme-colored mt-5" type="submit">Send your message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @endsection
