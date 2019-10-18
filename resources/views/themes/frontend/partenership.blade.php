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
                            <h2 class="text-theme-colored font-36">Partnership</h2>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>Partnership</h2>
                        <div id="accordion1" class="panel-group accordion">

                        <?php
                        $i=1;
                        ?>
                        @foreach($internship as $intern)
                            <div class="panel">
                                <?php
                                if($i==1)
                                {
                                    $css='in';
                                    $expnd='true';
                                }
                                else
                                {
                                    $expnd='false';
                                }

                                ?>
                                <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion1{{$i}}" class="active" aria-expanded="true"> <span class="open-sub"></span> <strong>{{$intern->title}}</strong></a> </div>
                                <div id="accordion1{{$i}}" class="panel-collapse collapse {{$css}} " role="tablist" aria-expanded="{{$expnd}}">
                                    <div class="panel-content">
                                        <p>{!! $intern->description !!}</p>
                                    </div>
                                </div>
                            </div>
                            <?php

                            $i++;
                            ?>

                        @endforeach
                    </div>
                    </div>
                </div>
            </div>
    </div>
    </div>
    </section>

    <!-- divider: what makes us different -->
{{--    <section class="divider parallax layer-overlay overlay-light" data-stellar-background-ratio="0.5" data-bg-img="images/bg/bg2.jpg">--}}
{{--        <div class="container">--}}
{{--            <div class="section-content text-center">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-md-12">--}}
{{--                        <h3 class="mt-0">Did not find your answer?</h3>--}}
{{--                        <h2>Just call at <span class="text-theme-colored">{{$initial->phone}}</span> for emergency service</h2>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    </div>
@endsection
