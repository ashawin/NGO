@extends('themes.frontend.layout.app')
@section('content')
    <style>
        #homepage_slider video {
            min-height: 100% !important;
            min-width: 100% !important;
            height:auto !important;
            width: auto !important;
            overflow: hidden;
        }

        #homepage_slider img {
            width: 100%;
            max-width: 100%;
            height: 30%;
            vertical-align: middle;
            border: 0;
        }

        .carousel-inner>.item>img {
            display: block;
            line-height: 1;
        }

        /* button to display if user choses to not autoplay the video: */
        #slider-play-button button {
            display: inline-block;
            border: 0.06666em solid #fff;
            font-size: 2rem;
            background: rgba(255,255,255,0.23);
            color: #fff;
            cursor: pointer;
            transition: .3s background;
            line-height: 1.3em;
            height: 1.5em;
            width: 2.5em;
            border-radius: 0.3em;
            position: absolute;
            opacity: .7;
            right: 1em;
            top: 20%;
        }
        .play-video-button:before {
            font-family: FontAwesome;
            content: "\f04b";
        }
        .pause-video-button:before {
            font-family: FontAwesome;
            content: "\f04c";
        }
    </style>
    <div class="main-content">

        <section class="inner-header divider layer-overlay overlay-dark" data-bg-img="{{asset('themes/frontend/images/bg/bg2.jpg')}}">
            <div class="container pt-30 pb-30">

                <div class="section-content text-center">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 text-center">
                            <h3 class="text-theme-colored font-36">INVEST AND PROJECT</h3>

                        </div>
                    </div>
                </div>
            </div>
        </section>
@if(!$invest->isEmpty())

        <div id="banner" style="margin-top:100px;margin:100px;height:500px;">


            <!-- Slider begins here -->
            <div id="homepage_slider" class="carousel slide" style="height:30%">
                <ol class="carousel-indicators">

                    <li data-target="#homepage_slider" data-slide-to="0" class="active"></li>
                    <li data-target="#homepage_slider" data-slide-to="1"></li>
                    <li data-target="#homepage_slider" data-slide-to="2" ></li>


                </ol>


                <!-- Carousel items -->
                <div class="carousel-inner" style="height:540px;">
                    <!-- slide #1 -->
                    <?php
                    $i=0;
                    ?>
                    @foreach($invest as $in)
<?php
                            if($i==0)
                                {
                                    $class='active';
                                }

?>

                    <div data-slide="{{$i}}" class="item {{$class}} ">

                            <video title="{{$i+1}}" id="bgvid" autoplay loop muted poster="{{asset('uploads/pages/'.$in->images)}}"><source src="{{asset('uploads/pages/'.$in->video)}}" type="video/webm">your videos</video>

                    </div>
                        <?php
                            $i++;
                        ?>
                    @endforeach

                    <!-- slide #2 (image) -->
                    <div data-slide="1" class="item">
                        <!-- <img title="2" alt="image of hotel" src="http://hdcoolwallpapers.com/wp-content/uploads/2014/09/Hd-Ocean-Wallpapers-5.jpg">-->
                        <video title="1" id="bgvid" autoplay loop muted poster="{{asset('uploads/pages/'.$invest[0]->images)}}"><source src="{{asset('uploads/pages/'.$invest[0]->video)}}" type="video/webm">your videos</video>
                    </div>
{{--                    <!-- slide #3 (image) -->--}}
{{--                    <div data-slide="2" class="item">--}}
{{--                        <video title="1" id="bgvid" autoplay loop muted poster="http://www.thefrasier.com/wp-content/themes/frasier/images/Frasier_Home_120314.jpg"><source src="http://www.thefrasier.com/wp-content/uploads/2014/12/0_final_reel_home.webm" type="video/webm">your videos</video>--}}
{{--                        <!--<img title="3" alt="image of apartment" src="http://imgs.abduzeedo.com/files/gismullr/beautifulhouses/bh306/wh01.jpg">-->--}}
{{--                    </div>--}}

{{--                    <div data-slide="2" class="item">--}}
{{--                        <video title="1" id="bgvid" autoplay loop muted poster="http://www.thefrasier.com/wp-content/themes/frasier/images/Frasier_Home_120314.jpg"><source src="http://www.thefrasier.com/wp-content/uploads/2014/12/0_final_reel_home.webm" type="video/webm">your videos</video>--}}
{{--                        <!--<img title="3" alt="image of apartment" src="http://imgs.abduzeedo.com/files/gismullr/beautifulhouses/bh306/wh01.jpg">-->--}}
{{--                    </div>--}}
{{--                    <div data-slide="2" class="item">--}}
{{--                        <!--<video title="1" id="bgvid" autoplay loop muted poster="http://www.thefrasier.com/wp-content/themes/frasier/images/Frasier_Home_120314.jpg"><source src="http://www.thefrasier.com/wp-content/uploads/2014/12/0_final_reel_home.webm" type="video/webm">your videos</video>-->--}}
{{--                        <img title="3" alt="image of apartment" src="http://imgs.abduzeedo.com/files/gismullr/beautifulhouses/bh306/wh01.jpg">--}}
{{--                    </div>--}}
{{--                    <div data-slide="2" class="item">--}}
{{--                        <!--<video title="1" id="bgvid" autoplay loop muted poster="http://www.thefrasier.com/wp-content/themes/frasier/images/Frasier_Home_120314.jpg"><source src="http://www.thefrasier.com/wp-content/uploads/2014/12/0_final_reel_home.webm" type="video/webm">your videos</video>-->--}}
{{--                        <img title="3" alt="image of apartment" src="http://imgs.abduzeedo.com/files/gismullr/beautifulhouses/bh306/wh01.jpg">--}}
{{--                    </div>--}}

{{--                    <div data-slide="2" class="item">--}}
{{--                        <video title="1" id="bgvid" autoplay loop muted poster="http://www.thefrasier.com/wp-content/themes/frasier/images/Frasier_Home_120314.jpg"><source src="http://www.thefrasier.com/wp-content/uploads/2014/12/0_final_reel_home.webm" type="video/webm">your videos</video>--}}
{{--                        <!--<img title="3" alt="image of apartment" src="http://imgs.abduzeedo.com/files/gismullr/beautifulhouses/bh306/wh01.jpg">-->--}}
{{--                    </div>--}}

{{--                    <div data-slide="2" class="item">--}}
{{--                        <video title="1" id="bgvid" autoplay loop muted poster="http://www.thefrasier.com/wp-content/themes/frasier/images/Frasier_Home_120314.jpg"><source src="http://www.thefrasier.com/wp-content/uploads/2014/12/0_final_reel_home.webm" type="video/webm">your videos</video>--}}
{{--                        <!--<img title="3" alt="image of apartment" src="http://imgs.abduzeedo.com/files/gismullr/beautifulhouses/bh306/wh01.jpg">-->--}}
{{--                    </div>--}}

{{--                    <div data-slide="2" class="item">--}}
{{--                        <video title="1" id="bgvid" autoplay loop muted poster="http://www.thefrasier.com/wp-content/themes/frasier/images/Frasier_Home_120314.jpg"><source src="http://www.thefrasier.com/wp-content/uploads/2014/12/0_final_reel_home.webm" type="video/webm">your videos</video>--}}
{{--                        <!--<img title="3" alt="image of apartment" src="http://imgs.abduzeedo.com/files/gismullr/beautifulhouses/bh306/wh01.jpg">-->--}}
{{--                    </div>--}}

                </div> <!-- end of '.carousel-inner' -->

                <!-- Carousel nav -->
                <!-- 	<div id="slider-play-button"><button class="play-video-button" type="button" title="Play Video"></button></div> -->
                <a class="carousel-control left" href="#homepage_slider" data-slide="prev">&lsaquo;</a>
                <a class="carousel-control right" href="#homepage_slider" data-slide="next">&rsaquo;</a>
            </div> <!-- end of '#homepage_slider' -->
            <!-- Slider ends here -->
        </div>  <!-- end of "#banner" -->
        @else
    <h3 style="text-align: center"> Not Project Found Sorry !</h3>
        @endif
    </div>


    @endsection
