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
                            <h2 class="text-theme-colored font-36">{{$readmore->title}}</h2>
                            <!-- <ol class="breadcrumb text-center mt-10 white">
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
                        <h3 class="text-theme-colored text-uppercase mt-0">{{$readmore->title}}</h3>
                        @if(isset($readmore->description))
                            <p>{{$readmore->description}}</p>
                        @endif

                    </div>
                    <div class="col-sm-12 col-md-7">
                        <div class="image-carousel">

                                <div class="item">
                                    <div class="thumb">
                                        <img src="{{asset('uploads/slider/'.$readmore->image)}}" alt="">
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


    </div>
@endsection

