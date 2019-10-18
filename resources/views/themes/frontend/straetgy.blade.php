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
                            <h2 class="text-theme-colored font-36">Our Strategy</h2>
                            <ol class="breadcrumb text-center mt-10 white">
                                <!-- <li><a href="#">Home</a></li>
                                 <li><a href="#">Pages</a></li>-->
                                <!-- <li class="active">Our Strategy</li>-->
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: About -->
        <!----About us------------------->

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-5" style="margin-top:-20px;">
                        <div class="pdf">
                            <h3>{{{$stretegy->title}}}</h3>
                            <!--<h2 class="color:#fd4084">PDF file of <a href="pdf/parivartan.pdf.pdf" target="_blank" >parivartan</a>.</h2>-->
                            <iframe src="{{asset('uploads/pages/'.$stretegy->pdf)}}" width="100%" height="500px"> </iframe>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-7">
                        <h3 class="text-theme-colored text-uppercase mt-0">Our Strategy</h3>
                       {!! $stretegy->desc !!}
                    </div>
                </div>
            </div>
        </section>
    @endsection
