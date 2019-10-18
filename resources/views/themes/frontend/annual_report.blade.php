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
                            <h2 class="text-theme-colored font-36">ANNUAL REPORT</h2>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: About -->
        <!-- Section: Volunteer -->
        <section class="divider parallax layer-overlay overlay-deep" data-stellar-background-ratio="0.2" data-bg-img="{{asset('themes/frontend/images/bg/bg2.jpg')}}">
            <div class="container pb-30">
                <div class="section-content">
                    <div class="row multi-row-clearfix">
                        @foreach($annualreport as $annual)
                        <div class="col-sm-6 col-md-3 mb-sm-60 text-left sm-text-center">
                            <div class="volunteer border bg-white-fa maxwidth400 mb-30 p-30">
                                <div class="thumb"><img alt="" src="{{asset('uploads/pages/'.$annual->images)}}" height="150px" width="300px"></div>
                                <div class="info">
                                    <h4>{{$annual->title}}</h4>
                                    <h6 class="name"><a href="{{asset('uploads/pages/'.$annual->pdf)}}" target="_blank"> {{$annual->pdf}} </a></h6>

                                </div>
                            </div>
                        </div>
                            @endforeach

                    </div>
                {{ $annualreport->links() }}
                    <!--<div class="row multi-row-clearfix">
               <div class="col-sm-6 col-md-3 mb-sm-60 text-left sm-text-center">
                 <div class="volunteer border bg-white-fa maxwidth400 mb-30 p-30">
                   <div class="thumb"><img alt="" src="images/portfolio/1.jpg" class="img-fullwidth"></div>
                   <div class="info">
                   <h4>Annual Report</h4>
                     <h6 class="name"><a href="pdf/annual-report/EFICOR-Annual-Report-2016-2017.pdf" target="_blank"> EFICOR AEFICOR Annual Report 2016-2017</a></h6>




                   </div>
                 </div>
               </div>
               <div class="col-sm-6 col-md-3 mb-sm-60 text-left sm-text-center">
                 <div class="volunteer border bg-white-fa maxwidth400 mb-30 p-30">
                   <div class="thumb"><img alt="" src="images/portfolio/2.jpg" class="img-fullwidth"></div>
                   <div class="info">
                   <h4>Annual Report</h4>
                     <h6 class="name"><a href="pdf/annual-report/EFICOR-Annual-Report-2017-2018.pdf" target="_blank"> EFICOR Annual Report 2017 – 2018</a></h6>
                   </div>
                 </div>
               </div>
             </div>-->
                </div>

            </div>
        </section>
    </div>
    <!-- end main-content -->
    </div>
   @endsection
