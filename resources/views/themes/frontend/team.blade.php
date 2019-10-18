@extends('themes.frontend.layout.app')
@section('content')
    <style>
         .volunteer .info {
             padding: 15px 0;
             padding-bottom: 0;
             text-align: center;
         }
    </style>
    <div class="main-content">

        <!-- Section: inner-header -->
        <section class="inner-header divider layer-overlay overlay-dark" data-bg-img="{{asset('themes/frontend/images/bg/bg2.jpg')}}">
            <div class="container pt-30 pb-30">
                <!-- Section Content -->
                <div class="section-content text-center">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 text-center">
                            <h2 class="text-theme-colored font-36">OUT TEAM</h2>
                            <!-- <ol class="breadcrumb text-center mt-10 white">
                               <li><a href="#">Home</a></li>
                               <li><a href="#">Pages</a></li>
                               <li class="active">Page Title</li>
                             </ol>-->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Gallery Grid 3 -->
        <section>
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Portfolio Filter -->
                            <div class="portfolio-filter">
                                <a href="#" class="active" data-filter="*">All</a>
                                <a href="#branding" class="" data-filter=".Board">Board and Society</a>
                                <a href="#design" class="" data-filter=".Directors">Directors</a>
                                <a href="#photography" class="" data-filter=".Managers">Managers</a>
                            </div>
                            <!-- End Portfolio Filter -->

                            <!-- Portfolio Gallery Grid -->


                            <div id="grid" class="gallery-isotope grid-4 clearfix">
                                <!-- Portfolio Item Start -->

                                @foreach($groups['group_1'] as $group1)
                                <div class="gallery-item Board"  >
                                    <div class="volunteer border bg-white-fa maxwidth400 mb-30 p-30" style="margin:20px;">
                                    <div class="thumb" style="max-height: 180px">
                                        <img class="img-fullwidth" src="{{asset('uploads/team/'.$group1->image)}}" alt="no image found">
                                        <div class="overlay-shade"></div>
                                        <div class="icons-holder">
                                            <div class="icons-holder-inner">
                                                <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">

                                                    <a href="{{route('teamdetails',['id'=>$group1->id])}}"><i class="fa fa-link"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="hover-link" data-lightbox="image" href="{{asset('uploads/team/'.$group1->image)}}">View more</a>
                                    </div>
                                    <div class="info" style="min-height: 120px">
                                        <h5 class="title"><a href="{{route('teamdetails',['id'=>$group1->id])}}">{{$group1->name}}</a></h5>
                                        <span class="category"><span>{{$group1->role}}</span></span>
                                    </div>
                                    </div>
                                </div>
                                @endforeach
                                <!-- Portfolio Item End -->

                            </div>
                            <!-- End Portfolio Gallery Grid -->
                            <div id="grid" class="gallery-isotope grid-4 clearfix">
                            @foreach($groups['group_2'] as $group2)
                                <!-- Portfolio Item Start -->
                                <div class="gallery-item Directors" >
                                    <div class="volunteer border bg-white-fa maxwidth400 mb-30 p-30" style="margin:20px;">
                                    <div class="thumb" style="max-height: 180px">
                                        <img class="img-fullwidth" src="{{asset('uploads/team/'.$group2->image)}}" alt="no image found">
                                        <div class="overlay-shade"></div>
                                        <div class="icons-holder">
                                            <div class="icons-holder-inner">
                                                <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">

                                                    <a href="{{route('teamdetails',['id'=>$group2->id])}}"><i class="fa fa-link"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="hover-link" data-lightbox="image" href="{{asset('uploads/team/'.$group2->image)}}">View more</a>
                                    </div>
                                    <div class="info" style="min-height: 120px">
                                        <h5 class="title"><a href="{{route('teamdetails',['id'=>$group2->id])}}">
                                               {{$group2->name}}</a></h5>
                                        <span class="category"><span>{{$group2->role}}</span></span>
                                    </div>
                                    </div>
                                </div>
                                <!-- Portfolio Item End -->

                             @endforeach

                            </div>
                            <div id="grid" class="gallery-isotope grid-4 clearfix" >
                            @foreach($groups['group_3'] as $group3)
                                <!-- Portfolio Item Start -->
                                    <div class="gallery-item Managers"  >
                                        <div class="volunteer border bg-white-fa maxwidth400 mb-30 p-30" style="margin:20px;">
                                        <div class="thumb" style="max-height: 180px">
                                            <img class="img-fullwidth" src="{{asset('uploads/team/'.$group3->image)}}" alt="project">
                                            <div class="overlay-shade"></div>
                                            <div class="icons-holder">
                                                <div class="icons-holder-inner">
                                                    <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">

                                                        <a href="{{route('teamdetails',['id'=>$group3->id])}}"><i class="fa fa-link"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <a class="hover-link" data-lightbox="image" href="{{asset('uploads/team/'.$group3->image)}}">View more</a>
                                        </div>
                                        <div class="info" style="min-height: 120px">
                                            <h5 class="title"><a href="{{route('teamdetails',['id'=>$group3->id])}}">
                                                    {{$group3->name}}</a></h5>
                                            <span class="category"><span>{{$group3->role}}</span></span>
                                        </div>
                                        </div>
                                    </div>
                                    <!-- Portfolio Item End -->

                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
    @endsection
