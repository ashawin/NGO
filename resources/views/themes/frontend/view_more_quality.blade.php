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
                            <h2 class="text-theme-colored font-36">OUR QUALITY STANDARDS</h2>
                            <!-- <ol class="breadcrumb text-center mt-10 white">
                               <li><a href="#">Home</a></li>
                               <li><a href="#">Pages</a></li>
                               <li class="active">Header 1</li>
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
                    <div class="col-md-12">
                        <!-- <img class="pull-left mr-15 thumbnail" src="images/images/rsz_scan0002.jpg" alt="">-->
                        <h2 class="history">OUR QUALITY STANDARDS</h2>
                        {!! $quality[0]->description !!}
                    </div>
                </div>
                <div class="col-md-12" style="margin-top:50px;">
                    <div class="row">
                        @foreach($quality as $qua)
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="schedule-box maxwidth500 bg-light mb-30" style="max-height: 400px">
                                    <div class="thumb">
                                        <img  alt="" src="{{asset('uploads/pages/'.$qua->image)}}" height="200px" width="200px">
                                    </div>
                                    <div class="schedule-details clearfix p-15 pt-10">
                                        <h5 class="font-16 title"><a href="{{route('qualitydesc',['id'=>$qua->id])}}">{{str_limit($qua->title,'30','...')}}</a></h5>
                                        <p>{{str_limit($qua->description,'100','...')}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach



                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
