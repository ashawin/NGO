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
                            <h2 class="text-theme-colored font-36">AIDS SUNDAY</h2>
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
                        <h3 class="text-theme-colored text-uppercase mt-0">AIDS SUNDAY</h3>
                        @if(isset($aidssunday[0]->description))
                        <p>{!!  $aidssunday[0]->description!!}</p>
                        @endif
                        <div class="row mt-30 mb-30 ml-20">
                            <div class="col-xs-6">
                                <ul class="mt-10">
                                    @foreach($aidssunday as $aidssun)
                                    <li class="mb-10"><i class="fa fa-check-circle text-theme-colored"></i>&emsp;{{$aidssun->title}}</li>
                                 @endforeach
                                </ul>
                            </div>

                        </div>
                        @if(isset($aidssunday[1]->description))
                            <p>{!! $aidssunday[1]->description!!}</p>
                            @endif
                    </div>
                    <div class="col-sm-12 col-md-7">
                        <div class="image-carousel">
                            @foreach($aidssunday as $aids)
                            <div class="item">
                                <div class="thumb">
                                    <img src="{{asset('uploads/pages/'.$aids->images)}}" alt="">
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
                    <div class="row"></p>
                        </div>
                        <div class="col-md-5">
                            <div class="col-md-7">
                                @if(isset($aidssunday[0]->description))
                                    <p>{!! $aidssunday[0]->description!!}</p>
                                @endif
                                    @if(isset($aidssunday[1]->description))
                                        <p>{!! $aidssunday[1]->description!!}</p>
                                    @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
    @endsection

