@extends('themes.frontend.layout.app')
@section('content')
    <div class="main-content">
        <!-- Section: inner-header -->
        <section class="inner-header divider layer-overlay overlay-dark" data-bg-img="{{asset('themes/frontend/images/team/bg/bg2.jpg')}}">
            <div class="container pt-30 pb-30">
                <!-- Section Content -->
                <div class="section-content text-center">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 text-center">
                            <h3 class="text-theme-colored font-36">RESOURCE</h3>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section: Volunteer -->
        <section class="divider parallax layer-overlay overlay-deep" data-stellar-background-ratio="0.2" data-bg-img="{{asset('themes/frontend/images/bg/bg2.jpg')}}">
            <div class="container pb-30">
                <div class="section-content">
                    <div class="row multi-row-clearfix">
                        <div class="col-sm-6 col-md-3 mb-sm-60 text-left sm-text-center">
                            <div class="volunteer border bg-white-fa maxwidth400 mb-30 p-30">
                                <div class="thumb"><img alt="" src="{{asset('themes/frontend/images/team/team1.jpg')}}" class="img-fullwidth"></div>
                                <div class="info">
                                    <h4 class="name"><a href="{{route('annualreport')}}">Annual Report</a></h4>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 mb-sm-60 text-left sm-text-center">
                            <div class="volunteer border bg-white-fa maxwidth400 mb-30 p-30">
                                <div class="thumb"><img alt="" src="{{asset('themes/frontend/images/team/team2.jpg')}}" class="img-fullwidth"></div>
                                <div class="info">
                                    <h4 class="name"><a href="{{route('publication')}}">Publication</a></h4>


                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 mb-sm-60 text-left sm-text-center">
                            <div class="volunteer border bg-white-fa maxwidth400 p-30">
                                <div class="thumb"><img alt="" src="{{asset('themes/frontend/images/team/team3.jpg')}}" class="img-fullwidth"></div>
                                <div class="info">
                                    <h4 class="name"><a href="{{route('policies')}}">Policies</a></h4>


                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-3 mb-sm-60 text-left sm-text-center">
                            <div class="volunteer border bg-white-fa maxwidth400 mb-30 p-30">
                                <div class="thumb"><img alt="" src="{{asset('themes/frontend/images/team/team2.jpg')}}" class="img-fullwidth"></div>
                                <div class="info">
                                    <h4 class="name"><a href="{{route('aidssunday')}}">Aids Sunday</a></h4>


                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row multi-row-clearfix">
                        <div class="col-sm-6 col-md-3 mb-sm-60 text-left sm-text-center">
                            <div class="volunteer border bg-white-fa maxwidth400 mb-30 p-30">
                                <div class="thumb"><img alt="" src="{{asset('themes/frontend/images/team/team1.jpg')}}" class="img-fullwidth"></div>
                                <div class="info">
                                    <h4 class="name"><a href="{{route('ecosunday')}}">Eco Sunday</a></h4>


                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>
    @endsection
