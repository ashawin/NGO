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
                            <h2 class="text-theme-colored font-36">{{$wherewework->title}}</h2>
                            <!--  <ol class="breadcrumb text-center mt-10 white">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Pages</a></li>
                                <li class="active">About</li>
                              </ol>-->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: About -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-5">
                        <h3 class="text-theme-colored text-uppercase mt-0">{{$wherewework->title}}</h3>
                        <p>{!! $wherewework->description  !!}</p>
                        <p>{!!  $wherewework->left_content !!}</p>
                        <?php
                        $keyword = array();

                        $keyword=   explode(',',$wherewework->keywords);


                        ?>
                       <div class="row mt-30 mb-30 ml-20">
                            <div class="col-xs-6">
                                <ul class="mt-10">
                                    @foreach($keyword as $key)
                                    <li class="mb-10"><i class="fa fa-check-circle text-theme-colored"></i>&emsp;{{$key}}</li>
                               @endforeach
                                </ul>
                            </div>
                            <div class="col-xs-6">
                                <ul class="mt-10">
                                    @foreach($keyword as $key)
                                    <li class="mb-10"><i class="fa fa-check-circle text-theme-colored"></i>&emsp;{{$key}}</li>
                                @endforeach
                                </ul>
                            </div>
                        </div>





                    </div>
                    <div class="col-sm-12 col-md-7">
                        <div class="image-carousel">
                            <div class="item">
                                <div class="thumb">
                                    <img src="{{asset('uploads/pages/'.$wherewework->feature_image_1)}}" alt="No image found"  height="400px" width="400px">
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <img src="{{asset('uploads/pages/'.$wherewework->feature_image_2)}}" alt="No image found" height="400px" width="400px">
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <img src="{{asset('uploads/pages/'.$wherewework->image_1)}}" alt="No image found" height="400px" width="400px">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- divider: Emergency Services -->
        <section class="divider parallax layer-overlay overlay-deep" data-stellar-background-ratio="0.2"  data-bg-img="images/bg/bg2.jpg">
            <div class="container">
                <div class="section-content text-center">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="mt-0">How you can help us</h3>
                            <h2>Just call at <span class="text-theme-colored">{{$initial->phone}}</span> to make a donation</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- divider: Emergency Services -->
        <section>
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-7">
                       <p>{!! $wherewework->left_content !!}</p>
                        </div>
                        <div class="col-md-5">
                       <p>{!!  $wherewework->right_content !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- divider: Became a Volunteers -->
        <section class="divider parallax layer-overlay overlay-deep" data-stellar-background-ratio="0.5" data-bg-img="images/bg/bg4.jpg">
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-7">
                            <h3 class="line-bottom">{{$wherewework->title}}</h3>
                            <p class="mt-30 mb-30">{!! $wherewework->right_content !!}</p>
                            <a class="btn btn-dark btn-theme-colored btn-lg btn-flat pull-left pl-30 pr-30" href="{{route('getdonation')}}">Donate Now</a>
                        </div>
                        <div class="col-md-5">
                            <div class="fluid-video-wrapper">
                                <iframe width="640" height="360" src="{{$wherewework->youtube_video}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Divider: Partners & Donors -->

    </div>
    @endsection
