@extends('themes.frontend.layout.app')
@section('content')
    <!-- Start main-content -->
    <div class="main-content">
        <!-- Section: home -->
        <section class="inner-header divider layer-overlay overlay-dark" data-bg-img="{{asset('themes/frontend/images/bg/bg2.jpg')}}">
            <div class="container pt-30 pb-30">
                <!-- Section Content -->
                <div class="section-content text-center">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 text-center">
                            <h2 class="text-theme-colored font-36">WHAT WE DO</h2>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!------------------section-icons----->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-5">
                        <h3 class="text-theme-colored text-uppercase mt-0">WHAT WE DO</h3>
                        @if(isset($whatwedo[0]))
                        <p>{{$whatwedo[0]->desc}}</p>
                        @endif
                        <div class="row mt-30 mb-30 ml-20">
                            <div class="col-xs-6">
                                <ul class="mt-10">
                                    @foreach($whatwedo as $whatwe)
                                        <li class="mb-10"><i
                                                    class="fa fa-check-circle text-theme-colored"></i>&emsp;{{$whatwe->title}}
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                            <div class="col-xs-6">
                                <ul class="mt-10">
                                    @foreach($whatwedo as $whatwe)
                                        <li class="mb-10"><i
                                                    class="fa fa-check-circle text-theme-colored"></i>&emsp;{{$whatwe->title}}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        @if(isset($whatwedo[1]))
              <p>{{$whatwedo[1]->desc}}</p>
                            @endif
                    </div>
                    <div class="col-sm-12 col-md-7">
                        <div class="image-carousel">
                            @foreach($whatwedo as $whatwe)
                            <div class="item">
                                <div class="thumb">
                                    <img src="{{asset('uploads/pages/'.$whatwe->image)}}" alt="">
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container pb-80" style="margin-top:-60px;">
                <div class="section-title text-center">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2" style="margin-bottom:20px;">
                            <h3 class="text-uppercase mt-0">WHAT WE DO</h3>
                        </div>
                    </div>
                </div>
                <div class="row mtli-row-clearfix">
                    @foreach($wherewework as $wherewe)
                        <div class="col-sm-6 col-md-3 col-lg-3">
                            <div class="causes bg-lighter1 box-hover-effect effect1 maxwidth500 mb-sm-30">

                                <div class="card" style="margin-top:-1px;">
                                    <img src="{{asset('uploads/pages/'.$wherewe->feature_image_1)}}" alt="Card Back"
                                         style="margin-left:50px;">
                                    <img src="{{asset('uploads/pages/'.$wherewe->feature_image_2)}}" class="img-top"
                                         alt="Card Front" style="margin-left:50px;">
                                </div>
                                <div class="causes-details clearfix border-bottom1 p-15 pt-10"
                                     style="margin-top: 132px;position: absolute;">
                                    <h5><a href="Emergency_Relief.html"
                                           style="margin-left:40px;">{{$wherewe->title}}</a></h5>
                                    <p>{!! $wherewe->description !!}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </section>


    </div>
@endsection
