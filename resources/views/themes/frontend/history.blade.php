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
                            <h2 class="text-theme-colored font-36">HISTORY</h2>
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
                        <h2 class="history">OUR HISTORY</h2>
                        {!! $history->desc !!}
                       </div>
                </div>
                <div class="col-md-12" style="margin-top:50px;">
                    <div class="row">
                        <div class="col-md-6">
                            <!--<img class="pull-left mr-15 thumbnail" src="images/images/rsz_scan0002.jpg" alt=""><br/>-->
                            <div class="pdf">
                                <h3>{{$history->title}}</h3>
                                <!--<h2 class="color:#fd4084">PDF file of <a href="pdf/parivartan.pdf.pdf" target="_blank" >parivartan</a>.</h2>-->
                                <iframe src="{{asset('uploads/pages/'.$history->pdf)}}" width="100%" height="500px"> </iframe>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <h2 class="time" style="margin-left:60px;">Time Lines</h2>

                                <ul class="time5" style="margin-left:80px;">
                                    {!!  $history->timeline !!}
{{--                                    <li class="mb-10"><i class="fa fa-check-circle text-theme-colored"></i>&emsp;1967 First relief intervention</li>--}}
{{--                                    <li class="mb-10"><i class="fa fa-check-circle text-theme-colored"></i>&emsp;1973 Commencement of Safe drinking water programme</li>--}}
{{--                                    <li class="mb-10"><i class="fa fa-check-circle text-theme-colored"></i>&emsp;1979 Training programmes started</li>--}}
{{--                                    <li class="mb-10"><i class="fa fa-check-circle text-theme-colored"></i>&emsp;1980 EFICOR Registered as a Society</li>--}}
{{--                                    <li class="mb-10"><i class="fa fa-check-circle text-theme-colored"></i>&emsp;1982 Commencement of Community Development Projects</li>--}}
{{--                                    <li class="mb-10"><i class="fa fa-check-circle text-theme-colored"></i>&emsp;1986 Headquarters shifted to New Delhi</li>--}}
{{--                                    <li class="mb-10"><i class="fa fa-check-circle text-theme-colored"></i>&emsp;1991 First 5 year Strategic Plan</li>--}}
{{--                                    <li class="mb-10"><i class="fa fa-check-circle text-theme-colored"></i>&emsp;1992 EFICOR’s Silver Jubilee and Micro Credit Programmes introduced.</li>--}}
{{--                                    <li class="mb-10"><i class="fa fa-check-circle text-theme-colored"></i>&emsp;1994 HIV/AIDS intervention</li>--}}
{{--                                    <li class="mb-10"><i class="fa fa-check-circle text-theme-colored"></i>&emsp;1994 Drishtikone magazine launched</li>--}}
{{--                                    <li class="mb-10"><i class="fa fa-check-circle text-theme-colored"></i>&emsp;1994 Watershed Management programmes initiated</li>--}}
{{--                                    <li class="mb-10"><i class="fa fa-check-circle text-theme-colored"></i>&emsp;1996 Second 5 year Strategic plan formulated</li>--}}
{{--                                    <li class="mb-10"><i class="fa fa-check-circle text-theme-colored"></i>&emsp;1999 Disaster Response during Orissa Super Cyclone</li>--}}
{{--                                    <li class="mb-10"><i class="fa fa-check-circle text-theme-colored"></i>&emsp;2001 Third 5 year Strategic plan</li>--}}
{{--                                    <li class="mb-10"><i class="fa fa-check-circle text-theme-colored"></i>&emsp;2001 Disaster Response during Gujarat Earthquake</li>--}}
{{--                                    <li class="mb-10"><i class="fa fa-check-circle text-theme-colored"></i>&emsp;2002 EFICOR’s own office premises in Delhi inaugurated</li>--}}
{{--                                    <li class="mb-10"><i class="fa fa-check-circle text-theme-colored"></i>&emsp;2003 Disaster Risk Reduction programmes</li>--}}
{{--                                    <li class="mb-10"><i class="fa fa-check-circle text-theme-colored"></i>&emsp;2004 Silver Jubilee of the Training Unit</li>--}}
{{--                                    <li class="mb-10"><i class="fa fa-check-circle text-theme-colored"></i>&emsp;2004 Disaster Response during Tsunami</li>--}}
{{--                                    <li class="mb-10"><i class="fa fa-check-circle text-theme-colored"></i>&emsp;2006 9 year – Strategic Directions and three year Strategic Plan</li>--}}
{{--                                    <li class="mb-10"><i class="fa fa-check-circle text-theme-colored"></i>&emsp;2007 EFICOR’s 40th Anniversary</li>--}}
{{--                                    <li class="mb-10"><i class="fa fa-check-circle text-theme-colored"></i>&emsp;2007 Maternal and Child Health and Nutrition programmes</li>--}}
{{--                                    <li class="mb-10"><i class="fa fa-check-circle text-theme-colored"></i>&emsp;2008 Commencement of MA in Mission and Development</li>--}}
{{--                                    <li class="mb-10"><i class="fa fa-check-circle text-theme-colored"></i>&emsp;2011 Commencement of Centre for Policy Studies and Advocacy</li>--}}
{{--                                    <li class="mb-10"><i class="fa fa-check-circle text-theme-colored"></i>&emsp;2009 Fifth 3 yea2011 Disability Programmes</li>--}}
{{--                                    <li class="mb-10"><i class="fa fa-check-circle text-theme-colored"></i>&emsp;2011 Conflict Resolution and Peace Building Programmes</li>--}}
{{--                                    <li class="mb-10"><i class="fa fa-check-circle text-theme-colored"></i>&emsp;2012 Climate Change Adaptation Programmes</li>--}}
{{--                                    <li class="mb-10"><i class="fa fa-check-circle text-theme-colored"></i>&emsp;2015 Sixth Strategic plan for 5 years (2015-2020)</li>--}}
{{--                                    <li class="mb-10"><i class="fa fa-check-circle text-theme-colored"></i>&emsp;2017 EFICOR’s 50th Anniversary</li>--}}
                                </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @endsection
