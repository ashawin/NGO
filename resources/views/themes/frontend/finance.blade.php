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
                            <h2 class="text-theme-colored font-36">FINANCIAL INFORMATION</h2>
                            <!--<ol class="breadcrumb text-center mt-10 white">
                              <li><a href="#">Home</a></li>
                              <li><a href="#">Pages</a></li>
                              <li class="active">Blog</li>
                            </ol>-->
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="cd-timeline" class="cd-container">
            @foreach($finance as $key=>$fin)
             <?php
                    $oddoreven=$key%2;
             ?>

                <div class="cd-timeline-block">
                    @if($oddoreven==0)
                    <div class="cd-timeline-img cd-picture">
                        <img src="{{asset('themes/frontend/js/vertical-timeline/img/cd-icon-picture.svg')}}" alt="Picture">
                    </div>
                    @else
                        <div class="cd-timeline-img cd-movie bounce-in">
                            <img src="{{asset('themes/frontend/js/vertical-timeline/img/cd-icon-movie.svg')}}" alt="Picture">
                        </div>

                @endif<!-- cd-timeline-img -->

                    <div class="cd-timeline-content">
                        <article class="post clearfix">
                            <div class="entry-header">
                                <!--<div class="post-thumb">
                                 <img alt="" src="https://placehold.it/900x500" class="img-fullwidth img-responsive"> </div>-->
                                <h2 class="entry-title"><a href="#">{{$fin->title}}</a></h2>
                                <!-- <ul class="list-inline font-12 mb-20 mt-10">
                                   <li>posted by <a href="#" class="text-theme-colored">Admin |</a></li>
                                   <li><span class="text-theme-colored">SEP 12,15</span></li>
                                 </ul>-->
                            </div>
                            <?php
                            $pdf=\Illuminate\Support\Facades\DB::table('page_fin_pdf')->where('f_id','=',$fin->id)->get();
                            ?>
                            <div class="entry-content">
                                <p class="mb-30">
                                <ul style="margin-left: 16px;">
                                    @if(!$pdf->isEmpty())
                                    @foreach($pdf as $pf)
                                    <li>
                                        <a href="{{asset('uploads/pages/'.$pf->pdf)}}"
                                           target="_blank">{{$pf->title}}</a></li>
                                   @endforeach
                                        @else
                                        <li>No Record Found</li>
                                        @endif
                                </ul>
                                </p>


                            </div>
                        </article>
                    </div> <!-- cd-timeline-content -->
                </div>

            @endforeach

        <!-- <div class="cd-timeline-block">
               <div class="cd-timeline-img cd-location">
                 <img src="js/vertical-timeline/img/cd-icon-location.svg" alt="Location">
               </div>

               <div class="cd-timeline-content">
                 <article class="post clearfix">
                   <div class="entry-header">

                     <h5 class="entry-title"><a href="#">Financial Year 2016 – 2017 </a></h5>

                   </div>
                   <div class="entry-content">
                     <p class="mb-30">
                       <ul>
                            <li><a href="pdf/Financial/EFICOR-Consolidated-Balance-Sheet-as-at-31-03-2017.pdf.pdf" target="_blank">EFICOR-Consolidated-Balance-Sheet-as-at-31-03-2017.pdf</a></li>
                      </ul>
                     </p>


                   </div>
                 </article>
               </div>
             </div> -->

            <!--<div class="cd-timeline-block">
              <div class="cd-timeline-img cd-location">
                <img src="js/vertical-timeline/img/cd-icon-location.svg" alt="Location">
              </div>
              <div class="cd-timeline-content">
                <article class="post clearfix">
                  <div class="entry-header">

                    <h5 class="entry-title"><a href="#">Financial Year 2014 – 2015 </a></h5>

                  </div>
                  <div class="entry-content">
                    <p class="mb-30">
                       <ul>
                           <li><a href="pdf/Financial/EFICOR-Consolidated-Balance-Sheet-as-at-31-03-2015-.pdf.pdf" target="_blank">EFICOR-Consolidated-Balance-Sheet-as-at-31-03-2015-.pdf</a></li>
                       </ul
                    </p>


                  </div>
                </article>
              </div>
            </div> -->

            <!--<div class="cd-timeline-block">
              <div class="cd-timeline-img cd-movie">
                <img src="js/vertical-timeline/img/cd-icon-movie.svg" alt="Movie">
              </div>

              <div class="cd-timeline-content">
                <article class="post clearfix">
                  <div class="entry-header">
                    <h5 class="entry-title mt-0 pt-0"><a href="#">Financial Year 2013 – 2014</a></h5>

                  </div>
                  <div class="entry-content">
                    <div class="display-block">
                      <blockquote class="gray">
                                <p>
                                    <ul>
                                       <li><a href="pdf/Financial/EFICOR-Consolidated-Balance-Sheet-as-at-31.03.2014.pdf.pdf" target="_blank">EFICOR-Consolidated-Balance-Sheet-as-at-31.03.2014.pdf</a></li>
                                        <li><a href="pdf/Financial/EFICOR-Consolidated-Income-Expenditure-Account-for-Year-Ended-31.03.2013.pdf.pdf" target="_blank">EFICOR-Consolidated-Income-Expenditure-Account-for-Year-Ended-31.03.2014.pdf</a></li>
                                         <li><a href="pdf/Financial/EFICOR-Schedule-to-the-Balance-Sheet-as-31.03.2014-Schedule-A-to-Q.pdf.pdf" target="_blank">EFICOR-Schedule-to-the-Balance-Sheet-as-31.03.2014-Schedule-A-to-Q.pdf</a></li>
                                    </ul>
                                </p>

                              </blockquote>
                    </div>

                  </div>
                </article>
              </div>
            </div>-->

            <!--<div class="cd-timeline-block">
              <div class="cd-timeline-img cd-movie">
                <img src="js/vertical-timeline/img/cd-icon-movie.svg" alt="Movie">
              </div>

              <div class="cd-timeline-content">
                <article class="post clearfix">
                  <div class="entry-header">

                    <h5 class="entry-title"><a href="#">Financial Year 2012 – 2013</a></h5>

                  </div>
                  <div class="entry-content">
                    <p class="mb-30">
                      <ul>
                         <li><a href="pdf/Financial/EFICOR-Consolidated-Balance-Sheet-as-at-31.03.2013.pdf.pdf" target="_blank">EFICOR-Consolidated-Balance-Sheet-as-at-31.03.2013.pdf</a></li>
                                        <li><a href="pdf/Financial/EFICOR Schedule to the Balance Sheet as 31.03.2013 (Schedule-A to O).pdf" target="_blank">EFICOR Schedule to the Balance Sheet as 31.03.2013 (Schedule-A to O).pdf</a></li>
                                         <li><a href="pdf/Financial/EFICOR-Schedule-to-the-Balance-Sheet-as-31.03.2013-Schedule-A-to-O.pdf.pdf" target="_blank">EFICOR Schedule to the Balance Sheet as 31.03.2013 (Schedule-A to O).pdf</a></li>
                      </ul>
                    </p>
                  </div>
                </article>
              </div>
            </div> -->

        </section>
    </div>
    <!-- end main-content -->



@endsection
