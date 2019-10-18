<header class="header" style="margin-top:-20px;">
    <div class="header-top bg-theme-colored sm-text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="widget no-border m-0">
            </div>
          </div>
          <div class="col-md-4">
            <div id="side-panel-trigger" class="side-panel-trigger pull-right sm-pull-none mt-5"><a href="#"><i class="fa fa-bars font-24 text-white"></i></a></div>
            <div class="widget no-border m-0">
              <ul class="styled-icons icon-dark icon-circled icon-theme-colored icon-sm pull-right sm-pull-none sm-text-center mt-sm-15">
                <li><a href="#"></a></li>
                <li><a href="#"></i></a></li>
                <li><a href="#"></i></a></li>
                <li><a href="#"></i></a></li>
                <li><a href="#"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-middle p-0 bg-lightest xs-text-center">
      <div class="container pt-0 pb-0">
        <div class="row">
          <div class="col-xs-12 col-sm-4 col-md-5">
            <div class="widget no-border m-0">
              <a class="menuzord-brand xs-pull-center mb-15" href="{{ url('/') }}"><img width="138" height="150"  src="{{ asset('uploads/settings/') }}/{{$initial->logo}}" alt="" style="margin-top:-60px;"></a>
            </div>
          </div>

            <style>
                .info{
                    color:black;
                }
            </style>
          <div class="col-xs-12 col-sm-4 col-md-4">
            <div class="widget no-border m-0">
              <div class="mt-10 mb-10 text-right sm-text-center">
                  <div class="font-20 text-black-333 text-uppercase mb-5 font-weight-600"><a class="info"  href="tel:{{$initial->phone}}"><i class="fa fa-phone-square text-theme-colored font-24"></i> {{$initial->phone}}</a></div>
                <a class="font-12 text-gray" href="tel:{{$initial->phone}}">Call us for more details!</a>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-3">
            <div class="widget no-border m-0">
         <div class="mt-10 mb-10 text-right sm-text-center">
             <div class="font-20 text-black-333 text-uppercase mb-5 font-weight-600"><i class="fa fa-envelope text-theme-colored font-24"></i>   <a  class="info" href="mailto:{{$initial->email}}" target="_top">Mail us today</a></div>
                  <a class="font-12 text-gray" href="mailto:{{$initial->email}}" target="_top">{{$initial->email}}</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>   
  <div class="header-nav" style="margin-top:-10px;">
      <div class="header-nav-wrapper navbar-scrolltofixed bg-light">
        <div class="container">
          <nav id="menuzord" class="menuzord orange bg-light">
            <ul class="menuzord-menu">
              <li class="active"><a href="{{ url('/') }}">Home</a>
              </li>
              <li><a href="#">About us</a>
                <ul class="dropdown">
                  <li><a href="{{route('history')}}">History</a></li>
                  <li><a href="{{route('team')}}">Team</a></li>
                  <li><a href="{{route('stretgy')}}">Strategy</a></li>
                  <li><a href="{{route('quality')}}">Quality Standards</a></li>
                  <li><a href="{{route('finance')}}">Financial Information</a></li>
                  <li><a href="{{route('awardnetwork')}}">Awards Accreditation and Network</a></li>
              </li>
                </ul>
              </li>
              <li><a href="#">Our work</a>
                <ul class="dropdown">
                 
                  <li><a href="{{route('wherewework')}}">Where We Work</a>
                  </li>
                    <?php
                   $donationpage= \Illuminate\Support\Facades\DB::table('donatation_pages')->get();
                    ?>
                  <li><a href="{{route('whatwedo')}}">What We Do</a>
                    <ul class="dropdown">
                        @foreach($donationpage as $donpage)
                          <li><a href="{{route('whatwedodetails',['id'=>$donpage->slug])}}">{{$donpage->title}}</a></li>
                        @endforeach
                    
                    </ul>
                  </li>
                </ul>
              </li>
              <li><a href="#">Resource </a>
                <ul class="dropdown">
                  <li><a href="{{route('annualreport')}}">Annual Report</a></li>
                  <li><a href="{{route('publication')}}">Publication</a></li>
                  <li><a href="{{route('policies')}}">Policies</a></li>
                  <li><a href="{{route('aidssunday')}}">AIDS Sunday</a></li>
                  <li><a href="{{route('ecosunday')}}">ECO Sunday</a></li>
                 <!-- <li><a href="invest_project.html">Invest & Project </a></li>-->
                </ul>
              </li>

            <li><a href="#">Get Involved </a>
                <ul class="dropdown">
                  <li><a href="{{route('getdonation')}}">Ways to Donate</a></li>
                  <li><a href="job-recruitments.html">Job Opportunities</a></li>
                  <li><a href="{{route('volunteer')}}">Volunteers</a></li>
                   <li><a href="{{route('getpartenership')}}">Partnership</a></li>
             <li><a href="{{route('getintership')}}">Internship</a></li>
                          <li><a href="{{route('invest&project')}}">Invest & Project </a></li>
                </ul>
              </li>
            
              <li><a href="#">Quick Link</a>
                <div class="megamenu">
                  <div class="megamenu-row">
                    <div class="col3">
                      <ul class="list-unstyled list-dashed">
                        <li>
                          <h5 class="pl-10"><strong>About us:</strong></h5>
                        </li>
                        <li><a href="{{route('history')}}">History</a></li>
                        <li><a href="{{route('team')}}">Team</a></li>
                        <li><a href="{{route('stretgy')}}">Strategy</a></li>
                        <li><a href="{{route('quality')}}">Quality Standards</a></li>
                        <li><a href="{{route('finance')}}">Financial Information</a></li>
                        <li><a href="{{route('awardnetwork')}}">Awards & Accreditation and network</a></li>
                       <!-- <li><a href="#">Networks</a></li>-->
                      </ul>
            
                    </div>
                    <div class="col5">
                    <ul class="list-unstyled list-dashed">
                        <li>
                          <h5 class="pl-10"><strong>Resource :</strong></h5>
                        </li>
                        <li><a href="{{route('annualreport')}}">Annual Report</a></li>
                        <li><a href="{{route('publication')}}">Publication</a></li>
                        <li><a href="{{route('policies')}}">Policies</a></li>
                        <li><a href="{{route('aidssunday')}}">AIDS Sunday</a></li>
                        <li><a href="{{route('ecosunday')}}">ECO Sunday</a></li>
                      <!--  <li><a href="invest_project.html">Invest & Project</a></li>-->
                        
                      </ul>
                     
                    </div>
                    <div class="col4">
                        <ul class="list-unstyled list-dashed">
                        <li>
                          <h5 class="pl-10"><strong>Get Involved :</strong></h5>
                        </li>
                        <li><a href="{{route('getdonation')}}">Ways to Donate</a></li>
                        <li><a href="job-recruitments.html">Job Opportunities</a></li>
                        <li><a href="{{route('volunteer')}}">Volunteers</a></li>
             <li><a href="{{route('getpartenership')}}">Partnership</a></li>
             <li><a href="{{route('getintership')}}">Internship</a></li>
             <li><a href="#">Invest and Project</a></li>
                      </ul>
                    </div>
                       <div class="col4">
                        <ul class="list-unstyled list-dashed">
                        <li>
                          <h5 class="pl-10"><strong>Our work :</strong></h5>
                        </li>
                        <li><a href="{{route('wherewework')}}">Where We Work</a></li>
                        <li><a href="{{route('whatwedo')}}">What We Do</a></li>
                       
                      </ul>
                    </div>
                  </div>
                </div>
              </li>
             
            </ul>
            <ul class="pull-right hidden-sm hidden-xs">
           <li>
{{--               <a href="{{route('donatenow')}}" class="btn btn-colored btn-flat btn-theme-colored mt-15" data-toggle="modal" data-target="#myModal" style="margin-left:-15px;">Donate Now</a>--}}
               <a href="{{route('getdonation')}}" class="btn btn-colored btn-flat btn-theme-colored mt-15"  style="margin-left:-15px;">Donate Now</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>
