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
                            <h3 class="text-theme-colored font-36">Quality DETAILS</h3>
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
                                <img src="{{asset('uploads/pages/'.$description->image)}}" alt="No image Found">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h4 class="line-bottom text-uppercase mt-0">{{$description->title}}</h4>
                            <p>{{$description->description}}</p>
                            <ul class="styled-icons icon-dark icon-theme-colored icon-sm mt-15 mb-0">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row mt-30">
                        <div class="col-md-4">
                            <h4 class="line-bottom">About Me:</h4>
                            <div class="volunteer-address">
                                <ul>
{{--                                    <li>--}}
{{--                                        <div class="bg-light media border-bottom p-15 mb-20">--}}
{{--                                            <div class="media-left">--}}
{{--                                                <i class="fa fa-book text-theme-colored font-24 mt-5"></i>--}}
{{--                                            </div>--}}
{{--                                            <div class="media-body">--}}
{{--                                                <h5 class="mt-0 mb-0">Education:</h5>--}}
{{--                                                <p>Bachelor’s degree in Engineering<br>From Rutgers University, California.</p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <div class="bg-light media border-bottom p-15 mb-20">--}}
{{--                                            <div class="media-left">--}}
{{--                                                <i class="fa fa-map-marker text-theme-colored font-24 mt-5"></i>--}}
{{--                                            </div>--}}
{{--                                            <div class="media-body">--}}
{{--                                                <h5 class="mt-0 mb-0">Address:</h5>--}}
{{--                                                <p>Village 856 Broadway New York</p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
                                    </li>
                                    <li>
                                        <div class="bg-light media border-bottom p-15">
                                            <div class="media-left">
                                                <i class="fa fa-phone text-theme-colored font-24 mt-5"></i>
                                            </div>
                                            <div class="media-body">
                                                <h5 class="mt-0 mb-0">Contact:</h5>
                                                <p><span>Phone:</span> {{$initial->phone}}<br><span>Email:</span> {{$initial->email}}</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="clearfix">
                                <h4 class="line-bottom">Quick Contact:</h4>
                            </div>
                            <form id="contact-form" method="post" action="{{route('teamquickcontact')}}" class="contact-form-transparent">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="text" placeholder="Enter Name" id="contact_name" name="name" required="" class="form-control">
                                        </div>
                                        @if($errors->has('name'))
                                            <p class="alert-danger">{{$errors->first('name')}}</p>
                                        @endif
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" placeholder="Enter Email" id="contact_email" name="email" class="form-control" required="">
                                        </div>
                                        @if($errors->has('email'))
                                            <p class="alert-danger">{{$errors->first('email')}}</p>
                                        @endif
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" placeholder="Enter Subject" id="contact_subject" name="subject" class="form-control" required="">
                                        </div>
                                        @if($errors->has('subject'))
                                            <p class="alert-danger">{{$errors->first('subject')}}</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea rows="5" placeholder="Enter Message" id="contact_message" name="message" required class="form-control"></textarea>
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
