@extends('themes.frontend.layout.app')
@section('content')
    <!-- Start main-content -->
    <div class="main-content">
        <!-- Section: inner-header -->
        <section class="inner-header divider layer-overlay overlay-dark"
                 data-bg-img="{{asset('themes/frontend/images/bg/bg2.jpg')}}">
            <div class="container pt-30 pb-30">
                <!-- Section Content -->
                <div class="section-content text-center">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 text-center">
                            <h2 class="text-theme-colored font-36">PUBLICATIONS</h2>
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

        <section class="divider parallax layer-overlay overlay-deep" data-stellar-background-ratio="0.2"
                 data-bg-img="images/bg/bg2.jpg">
            <div class="container pb-30">
                <div class="section-content">
                    <div class="row multi-row-clearfix">
                        @foreach($publication as  $pub)
                            <div class="col-sm-6 col-md-3 mb-sm-60 text-left sm-text-center">
                                <div class="volunteer border bg-white-fa maxwidth400 mb-30 p-30">
                                    <div class="thumb"><img alt="" src="{{asset('uploads/pages/'.$pub->images)}}"
                                                            height="150px" width="300px"></div>
                                    <div class="info"  style="min-height: 150px">
                                   <h4>{{$pub->title}}</h4>
                                        <h6 class="name"><a href="{{asset('uploads/pages/'.$pub->pdf)}}"
                                                            target="_blank">{{$pub->pdf}}</a></h6>


                                        <!--<h2 class="color:#fd4084">PDF file of <a href="pdf/parivartan.pdf.pdf" target="_blank" >parivartan</a>.</h>-->
                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>
                    {{ $publication->links() }}

                </div>
            </div>
        </section>
    </div>
    <!-- end main-content -->
    </div>
@endsection