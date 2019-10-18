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
                            <h2 class="text-theme-colored font-36">ECO SUNDAY</h2>
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
                        @if(isset($ecosunday[0]->type))
                        <h3 class="text-theme-colored text-uppercase mt-0">{{$ecosunday[0]->type}}</h3>
                        @endif
                       @if(isset($ecosunday[0]->description))
                           <p>{!! $ecosunday[0]->description !!}</p>
                           @endif
                        <div class="row mt-30 mb-30 ml-20">
                            <div class="col-xs-6">
                                <ul class="mt-10">
                                    @foreach($ecosunday as $eco)
                                    <li class="mb-10"><i class="fa fa-check-circle text-theme-colored"></i>&emsp;{{$eco->title}}</li>
                                    @endforeach
                                </ul>
                            </div>

                        </div>
                        @if(isset($ecosunday[1]->description))
                            <p>{!!  $ecosunday[1]->description !!}</p>
                        @endif  </div>
                    <div class="col-sm-12 col-md-7">
                        <div class="image-carousel">
                            @foreach($ecosunday as $eco)
                            <div class="item">
                                <div class="thumb">
                                    <img src="{{asset('uploads/pages/'.$eco->images)}}" alt="">
                                </div>
                            </div>
                                @endforeach

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
                            @if(isset($ecosunday[0]->description))
                            <p>{!! $ecosunday[0]->description !!}</p> </div>
                        @endif
                        <div class="col-md-5">
                            @if(isset($ecosunday[1]->description))
                            <p>{!! $ecosunday[1]->description !!}</p> </div>

                        @endif
                    </div>
                </div>
            </div>
        </section>

    </div>
    <!-- end main-content -->
    @endsection

