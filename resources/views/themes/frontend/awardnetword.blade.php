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
                            <h2 class="text-theme-colored font-36">{{$awardnetwork->title}}</h2>
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
        <div class="container" style="margin-top:30px;">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
            <?php
                    $i=0;
                    $active='';
            ?>
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    @foreach($awardslider as $slider)
                <?php
                            if($i==0)
                            {
                              $active='active' ;
                            }
                            else
                                {
                                    $active='';
                                }

                ?>
                    <div class="item {{$active}} ">
                        <img src="{{asset('uploads/pages/'.$slider->image)}}" alt="No image found" style="width:100%;height:500px;">
                    </div>
                        <?php
                        $i++;
                        ?>
                        @endforeach
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 style="color:#008d7d;">{{$awardnetwork->title}}</h2>
                    </div>
                </div>

                <div class="row" style="margin-left:40px;margin-top:20px;">
                    <div class="col-md-12">
                        <h4 class="Awards">{{$awardnetwork->title}}</h4>
                    {!! $awardnetwork->description !!}
                    </div>
                </div>

            </div>
        </section>
    </div>
    @endsection
