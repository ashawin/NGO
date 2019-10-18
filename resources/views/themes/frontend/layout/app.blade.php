<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-146814788-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-146814788-1');
  </script>
<!-- Meta Tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="{{$initial->short_intro}}" />
<meta name="keywords" content="{{$initial->short_intro}}" />
<meta name="author" content="Eficor" />
  <link rel="icon" href="{{ asset('themes/backend/assets/images/brand/logo-1.jpg') }}" type="image/x-icon"/>
<!-- Page Title -->
<title>{{$initial->title}}</title>

<!-- Favicon and Touch Icons -->
<!--<link href="images/favicon.png" rel="shortcut icon" type="image/png">-->

<link href="{{ asset('themes/frontend/images/apple-touch-icon.png') }}" rel="apple-touch-icon">
<link href="{{ asset('themes/frontend/images/apple-touch-icon-72x72.png') }}" rel="apple-touch-icon" sizes="72x72">
<link href="{{ asset('themes/frontend/images/apple-touch-icon-114x114.png') }}" rel="apple-touch-icon" sizes="114x114">
<link href="{{ asset('themes/frontend/images/apple-touch-icon-144x144.png') }}" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
<link href="{{ asset('themes/frontend/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('themes/frontend/css/jquery-ui.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('themes/frontend/css/animate.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('themes/frontend/css/css-plugin-collections.css') }}" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="{{ asset('themes/frontend/css/menuzord-skins/menuzord-boxed.css') }}" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="{{ asset('themes/frontend/css/style-main.css') }}" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="{{ asset('themes/frontend/css/preloader.css') }}" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="{{ asset('themes/frontend/css/custom-bootstrap-margin-padding.css') }}" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="{{ asset('themes/frontend/css/responsive.css') }}" rel="stylesheet" type="text/css">
<!---CSS | style css for home page -->
<link href="{{ asset('themes/frontend/css/style.css') }}" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="{{ asset('themes/frontend/css/style.css') }}" rel="stylesheet" type="text/css"> -->

<!-- Revolution Slider 5.x CSS settings -->
<link  href="{{ asset('themes/frontend/js/revolution-slider/css/settings.css') }}" rel="stylesheet" type="text/css"/>
<link  href="{{ asset('themes/frontend/js/revolution-slider/css/layers.css') }}" rel="stylesheet" type="text/css"/>
<link  href="{{ asset('themes/frontend/js/revolution-slider/css/navigation.css') }}" rel="stylesheet" type="text/css"/>

<!-- CSS | Theme Color -->
<link href="{{ asset('themes/frontend/css/colors/heme-skin-rose.css') }}" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="{{ asset('themes/frontend/js/jquery-2.2.0.min.js') }}"></script>
<script src="{{ asset('themes/frontend/js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('themes/frontend/js/bootstrap.min.js') }}"></script>
<!--<script src="{{ asset('themes/frontend/js/jquery.min.js') }}"></script>-->
<!-- JS | jquery plugin collection for this theme -->
<script src="{{ asset('themes/frontend/js/jquery-plugin-collection.js') }}"></script>


<!-- Revolution Slider 5.x SCRIPTS -->
<script src="{{ asset('themes/frontend/js/revolution-slider/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('themes/frontend/js/revolution-slider/js/jquery.themepunch.revolution.min.js') }}"></script>

</head>
<body class="has-side-panel side-panel-right fullwidth-page side-push-panel">
<div class="body-overlay"></div>
<div id="side-panel" class="dark" data-bg-img="#">
  <div class="side-panel-wrap">
    <div id="side-panel-trigger-close" class="side-panel-trigger"><a href="{{ url('/') }}"><i class="icon_close font-30"></i></a></div>
    <a href="{{ url('/') }}"><img  alt="logo" src="{{ asset('uploads/settings/') }}/{{$initial->logo}}"></a>
    <div class="side-panel-nav mt-30">
      <div class="widget no-border">
        <nav>
          <ul class="nav nav-list">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a class="tree-toggler nav-header">About Us<i class="fa fa-angle-down"></i></a>
              <ul class="nav nav-list tree">
                <li><a href="{{route('history')}}">History</a></li>
                <li><a href="{{route('team')}}">Team</a></li>
                <li><a href="{{route('stretgy')}}">Strategy</a></li>
                <li><a href="{{route('quality')}}">Quality Standards</a></li>
                <li><a href="{{route('finance')}}">Financial Information</a></li>
                <li><a href="{{route('awardnetwork')}}">Awards Accreditation and Network</a></li>
              </ul>
            </li>
      <li><a class="tree-toggler nav-header" href="#">Our Work<i class="fa fa-angle-down"></i></a>
              <ul class="nav nav-list tree">
                <li><a href="{{route('wherewework')}}">Where We Work</a></li>
                <li><a href="{{route('whatwedo')}}">What We Do</a></li>
              </ul>
            </li>
        <li><a class="tree-toggler nav-header" href="{{route('getresource')}}">Resource <i class="fa fa-angle-down"></i></a>

                 <ul class="nav nav-list tree">
                  <li><a href="{{route('annualreport')}}">Annual Report</a></li>
                  <li><a href="{{route('publication')}}">Publication</a></li>
                  <li><a href="{{route('policies')}}">Policies</a></li>
                  <li><a href="{{route('aidssunday')}}">AIDS Sunday</a></li>
                  <li><a href="{{route('ecosunday')}}">ECO Sunday</a></li>
                 <!-- <li><a href="invest_project.html">Invest & Project </a></li>--> 
              </ul>
        </li>


            <li><a class="tree-toggler nav-header" href="{{route('getinvolved')}}">Get Involved<i class="fa fa-angle-down"></i></a>
              <ul class="nav nav-list tree">
                       
                  <li><a href="{{route('getdonation')}}">Ways to Donate</a></li>
                  <li><a href="{{route('joboppurtunity')}}">Job Opportunities</a></li>
                  <li><a href="{{route('getallvolunteers')}}">Volunteers</a></li>
                  <li><a href="{{route('getpartenership')}}">Partnership</a></li>
                  <li><a href="{{route('getintership')}}">Internship</a></li>
                  <li><a href="{{route('invest&project')}}">Invest & Project </a></li>
              </ul>
            </li>
            <li><a href="{{route('getcontact')}}">Contact</a></li>
          </ul>
        </nav>        
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="side-panel-widget mt-30">
      <div class="widget no-border">
        <ul>
          <li class="font-14 mb-5"> <i class="fa fa-phone text-theme-colored"></i> <a href="tel:{{$initial->phone}}" class="text-gray">{{$initial->phone}}</a> </li>
          <li class="font-14 mb-5"> <i class="fa fa-clock-o text-theme-colored"></i> {{$initial->timing}} </li>
          <li class="font-14 mb-5"> <i class="fa fa-envelope-o text-theme-colored"></i> <a href="mailto:{{$initial->email}}" target="_top" class="text-gray">{{$initial->email}}</a> </li>
        </ul>      
      </div>
      <div class="widget">
        <ul class="styled-icons icon-dark icon-theme-colored icon-sm">
          @if($initial->google_plus)
          <li><a href="{{ $initial->google_plus }}"><i class="fa fa-google-plus"></i></a></li>
          @endif
          @if($initial->facebook)
          <li><a href="{{ $initial->facebook }}"><i class="fa fa-facebook"></i></a></li>
          @endif
          @if($initial->twitter)
          <li><a href="{{ $initial->twitter }}"><i class="fa fa-twitter"></i></a></li>
          @endif
        </ul>
      </div>
      <p>Copyright &copy;<?=date('Y')?> {{env('SITENAME')}}</p>
    </div>
  </div>
</div>
<div id="wrapper" class="clearfix">
  <!-- preloader -->
  <div id="preloader">
    <div id="spinner">
      <div class="preloader-dot-loading">
        <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
      </div>
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
  </div>
  
  <!-- Header -->
  @include('themes.frontend.layout.menu')
  <!-- Modal -->
  @include('themes.frontend.layout.popup')
  
  <!-- Start main-content -->
  @yield('content')
  <!-- end main-content -->

  <section class="divider parallax layer-overlay overlay-deep" data-stellar-background-ratio="0.5" data-bg-img="{{ asset('/uploads/settings/'.$initial->footer_img)}}">
    <div class="container">
      <div class="section-content">
        <div class="row">
          <h3 class="line-bottom3">EFICOR</h3>
{{--          <p class="line-bottoms"> {{$initial->short_intro}}</p>--}}
          <div class="col-md-4">
            <p class="mt-30 mb-30">{{$initial->footer_1}}</p>
            <!--<a class="btn btn-dark btn-theme-colored btn-lg btn-flat pull-left pl-30 pr-30" href="#">Join Us</a>-->
          </div>
          <div class="col-md-4">

            <p class="mt-30 mb-30"> {{$initial->footer_2}}</p>
            <!--<a class="btn btn-dark btn-theme-colored btn-lg btn-flat pull-left pl-30 pr-30" href="#">Join Us</a>-->
          </div>
          <div class="col-md-4">

            <p class="mt-30 mb-30">{{$initial->footer_3}}</p>
            <!--<a class="btn btn-dark btn-theme-colored btn-lg btn-flat pull-left pl-30 pr-30" href="#">Join Us</a>-->
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer id="footer" class="footer pb-0" data-bg-img="{{ asset('themes/frontend/images/footer-bg.png') }}" data-bg-color="#25272e">
    <div class="container pb-20">
      <div class="row multi-row-clearfix">
        <div class="col-sm-6 col-md-3">
          <div class="widget dark"> <img width="138" height="188" alt="" src="{{ asset('uploads/settings/') }}/{{$initial->logo}}">

            <a style="display: none;" class="text-gray font-12" href="#"><i class="fa fa-angle-double-right text-theme-colored"></i> Read more</a>
            <ul class="styled-icons icon-dark mt-20">
              @if($initial->facebook)
              <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".1s" data-wow-offset="10"><a href="{{$initial->facebook}}" data-bg-color="#3B5998"><i class="fa fa-facebook"></i></a></li>
              @endif
              @if($initial->twitter)
              <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".2s" data-wow-offset="10"><a href="{{$initial->twitter}}" data-bg-color="#02B0E8"><i class="fa fa-twitter"></i></a></li>
              @endif
              <!--<li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".3s" data-wow-offset="10"><a href="#" data-bg-color="#05A7E3"><i class="fa fa-skype"></i></a></li>-->
              @if($initial->google_plus)
              <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".4s" data-wow-offset="10"><a href="#" data-bg-color="#A11312"><i class="fa fa-google-plus"></i></a></li>
              @endif
              @if($initial->instagram)
              <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".3s" data-wow-offset="10"><a href="{{$initial->instagram}}" data-bg-color="#05A7E3"><i class="fa fa-instagram"></i></a></li>
              @endif
              @if($initial->youtube)
              <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".5s" data-wow-offset="10"><a href="{{$initial->youtube}}" data-bg-color="#C22E2A"><i class="fa fa-youtube"></i></a></li>
              @endif
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h5 class="widget-title line-bottom">Pages</h5>
            <ul class="list-border list theme-colored angle-double-right">
              <li><a href="{{ url('/') }}">Home</a></li>
              <li><a href="{{route('whatwedo')}}">About us</a></li>
              <li><a href="{{route('getresource')}}">Resource</a></li>
              <li><a href="{{route('getinvolved')}}">Get involved</a></li>
        <li><a href="{{route('getcontact')}}">Contact us</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h5 class="widget-title line-bottom">Quick Links</h5>
            <ul class="list-border list theme-colored angle-double-right">
              <li><a href="{{route('privacyplicy')}}">Privacy Policy</a></li>
               <li><a href="{{route('tandc')}}">Terms and conditions</a></li>
          <li><a href="{{route('refundpolicy')}}">Refund cancellation policy</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h5 class="widget-title line-bottom">Quick Contact</h5>
            <ul class="list-border">
              <li><a href="tel:{{$initial->phone}}">{{$initial->phone}}</a></li>
              <li><a href="mailto:{{$initial->email}}">{{$initial->email}}</a></li>
              <li><a href="#" class="lineheight-20">{{$initial->location}}</a></li>
            </ul>

            <!-- Mailchimp Subscription Form Validation-->
            <script type="text/javascript">
              $('#footer-mailchimp-subscription-form').ajaxChimp({
                  callback: mailChimpCallBack,
                  url: '#'
              });

              function mailChimpCallBack(resp) {
                  // Hide any previous response text
                  var $mailchimpform = $('#footer-mailchimp-subscription-form'),
                      $response = '';
                  $mailchimpform.children(".alert").remove();
                  if (resp.result === 'success') {
                      $response = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                  } else if (resp.result === 'error') {
                      $response = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                  }
                  $mailchimpform.prepend($response);
              }
            </script>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid bg-theme-colored p-20">
      <div class="row text-center">
        <div class="col-md-12">
          <p class="text-white font-11 m-0">Copyright &copy;<?=date('Y')?> {{env('SITENAME')}}. All Rights Reserved</p>
        </div>
      </div>
    </div>
  </footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="{{ asset('themes/frontend/js/custom.js') }}"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
      (Load Extensions only on Local File Systems ! 
       The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="{{ asset('themes/frontend/js/revolution-slider/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/frontend/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/frontend/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/frontend/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/frontend/js/revolution-slider/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/frontend/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/frontend/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/frontend/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/frontend/js/revolution-slider/js/extensions/revolution.extension.video.min.js') }}"></script>
</body>
</html>
