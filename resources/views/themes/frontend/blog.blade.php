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
                            <h2 class="text-theme-colored font-36">Recent News</h2>
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
        <section>
            <div class="container pt-70">
                <div class="section-title text-center">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h3 class="text-uppercase mt-0">Recent News</h3>
                            <div class="title-icon">
                                <i class="flaticon-charity-hand-holding-a-heart"></i>
                            </div>
                            @if(!$project['news']->isEmpty())
                                <p>{!!  str_limit($project['news'][0]->description ,'300','..')!!}</p>
                            @else
                                <p>No record Found</p>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="news-carousel owl-nav-top mb-sm-80" data-dots="true">
                            @if(!$project['news']->isEmpty())
                                @foreach($project['news'] as $new)

                                    <div class="item">
                                        <article class="post clearfix maxwidth600 mb-sm-30 wow "
                                                 data-wow-delay=".0s">
                                            <div class="entry-header">
                                                <div class="post-thumb thumb"> <img src="{{ asset('uploads/pages/'.$new->image) }}" alt="" class="img-responsive img-fullwidth"> </div>
                                                <div class="entry-meta meta-absolute text-center pl-15 pr-15">
                                                    <div class="display-table">
                                                        <div class="display-table-cell">
                                                            <ul>
                                                                <li><a class="text-white" href="{{url('/news/blog/'.$new->id)}}"><i class="fa fa-thumbs-o-up"></i> {{$new->likes}}<br> Likes</a></li>
                                                                <li class="mt-20"><a class="text-white" href="{{url('/news/blog/'.$new->id)}}"><i class="fa fa-comments-o"></i> 72 <br> comments</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="entry-content border-1px p-20">
                                                <h5 class="entry-title mt-0 pt-0"><a href="#">{{$new->title}}</a></h5>
                                                <p class="text-left mb-20 mt-15 font-13">{!! str_limit($new->description,'200','...') !!}</p>
                                                <a class="btn btn-flat btn-dark btn-theme-colored btn-sm pull-left" href="{{url('/news/blog/'.$new->id)}}">Read
                                                    more</a>
                                                <ul class="list-inline entry-date pull-right font-12 mt-5">

                                                    <li><span class="text-theme-colored">{{$new->created_at}}</span></li>
                                                </ul>
                                                <div class="clearfix"></div>
                                            </div>
                                        </article>
                                    </div>


                                @endforeach
                            @else
                                <div class="item">
                                    <article class="post clearfix maxwidth600 mb-sm-30 wow fadeInRight"
                                             data-wow-delay=".2s">
                                        <div class="entry-header">
                                            <div  style="min-height:240px " class="post-thumb thumb"><img height="200px"
                                                                                                          No record Found                                                          src="{{ asset('uploads/pages/'.$new->image) }}" alt=""
                                                                                                          class="img-responsive img-fullwidth"></div>

                                        </div>
                                    </article>
                                </div>

                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @endsection
