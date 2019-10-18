<!doctype html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="msapplication-TileColor" content="#0061da">
        <meta name="theme-color" content="#1643a3">
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <link rel="icon" href="{{ asset('themes/backend/assets/images/brand/logo-1.jpg') }}" type="image/x-icon"/>
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('themes/backend/assets/images/brand/logo-1.jpg') }}" />

        <!-- Title -->
        <title>Eficor</title>


        <!--Bootstrap.min css-->
        <link rel="stylesheet" href="{{ asset('themes/backend/assets/plugins/bootstrap/css/bootstrap.min.css') }}">

        <!--Font Awesome-->
        <link href="{{ asset('themes/backend/assets/plugins/fontawesome-free/css/all.css') }}" rel="stylesheet">

        <!-- Dashboard Css -->
        <link href="{{ asset('themes/backend/assets/css/dashboard.css') }}" rel="stylesheet" />

        <!-- vector-map -->
        <link href="{{ asset('themes/backend/assets/plugins/vector-map/jqvmap.min.css') }}" rel="stylesheet">

        <!-- Custom scroll bar css-->
        <link href="{{ asset('themes/backend/assets/plugins/scroll-bar/jquery.mCustomScrollbar.css') }}" rel="stylesheet" />

        <!-- Sidemenu Css -->
        <link href="{{ asset('themes/backend/assets/plugins/toggle-sidebar/css/sidemenu.css') }}" rel="stylesheet">

        <!-- morris Charts Plugin -->
        <link href="{{ asset('themes/backend/assets/plugins/morris/morris.css') }}" rel="stylesheet" />

        <!---Font icons-->
        <link href="{{ asset('themes/backend/assets/plugins/iconfonts/plugin.css') }}" rel="stylesheet" />

        <!-- Sidebar css -->
        <link href="{{ asset('themes/backend/assets/plugins/sidebar/sidebar.css') }}" rel="stylesheet">

        <!-- WYSIWYG Editor css -->
        <link href="{{ asset('themes/backend/assets/plugins/wysiwyag/richtext.min.css') }}" rel="stylesheet" />


    </head>

    <body class="app sidebar-mini rtl">

        <!-- Global Loader-->
        <div id="global-loader"><img src="{{ asset('themes/backend/assets/images/loader.svg') }}" alt="loader"></div>

        <div class="page">
            <div class="page-main">

                <!-- Navbar-->
                @include('themes.backend.layout.leftmenu')
                <!--/.Navbar -->
                @include('themes.backend.layout.sidebar')

                <div class=" app-content my-3 my-md-5">
                    @yield('content')
                    

                    <!--footer-->
                    <footer class="footer">
                        <div class="container">
                            <div class="row align-items-center flex-row-reverse text-white-50">
                                <div class="col-md-12 col-sm-12 text-center">
                                    Copyright © <?=date('Y')?> <a href="#">MOJO</a>.All rights reserved.
                                </div>
                            </div>
                        </div>
                    </footer>
                    <!-- End Footer-->
                </div>
            </div>
        </div>

        <!-- Back to top -->
        <a href="#top" id="back-to-top"><i class="fas fa-angle-up "></i></a>

        <!-- Dashboard Core -->
        <script src="{{ asset('themes/backend/assets/js/vendors/jquery-3.2.1.min.js') }}"></script>
        <script src="{{ asset('themes/backend/assets/js/vendors/jquery.sparkline.min.js') }}"></script>
        <script src="{{ asset('themes/backend/assets/js/vendors/selectize.min.js') }}"></script>
        <script src="{{ asset('themes/backend/assets/js/vendors/jquery.tablesorter.min.js') }}"></script>
        <script src="{{ asset('themes/backend/assets/js/vendors/circle-progress.min.js') }}"></script>
        <script src="{{ asset('themes/backend/assets/plugins/rating/jquery.rating-stars.js') }}"></script>

        <!--Bootstrap.min js-->
        <script src="{{ asset('themes/backend/assets/plugins/bootstrap/popper.min.js') }}"></script>
        <script src="{{ asset('themes/backend/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

        <!-- Side menu js -->
        <script src="{{ asset('themes/backend/assets/plugins/toggle-sidebar/js/sidemenu.js') }}"></script>

        <!-- Custom scroll bar Js-->
        <script src="{{ asset('themes/backend/assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
        <!-- WYSIWYG Editor js -->

        <script src="{{ asset('themes/backend/assets/plugins/wysiwyag/jquery.richtext.js') }}"></script>


        <!-- Input Mask Plugin -->
        <script src="{{ asset('themes/backend/assets/plugins/input-mask/jquery.mask.min.js') }}"></script>

        <!-- Progress -->
        <script src="{{ asset('themes/backend/assets/js/vendors/circle-progress.min.js') }}"></script>
        <!-- ApexChart -->
        <script src="{{ asset('themes/backend/assets/js/apexcharts.js') }}"></script>

        <!-- Chart js -->
        <script src="{{ asset('themes/backend/assets/plugins/chart.js/chart.min.js') }}"></script>
        <script src="{{ asset('themes/backend/assets/plugins/chart.js/chart.extension.js') }}"></script>

        <!--Jquery.knob js-->
        <script src="{{ asset('themes/backend/assets/plugins/othercharts/jquery.knob.js') }}"></script>
        <script src="{{ asset('themes/backend/assets/plugins/othercharts/othercharts.js') }}"></script>

        <!--Jquery.sparkline js-->
        <script src="{{ asset('themes/backend/assets/plugins/othercharts/jquery.sparkline.min.js') }}"></script>

        <!-- peitychart -->
        <script src="{{ asset('themes/backend/assets/plugins/peitychart/jquery.peity.min.js') }}"></script>

        <!--Counters -->
        <script src="{{ asset('themes/backend/assets/plugins/counters/counterup.min.js') }}"></script>
        <script src="{{ asset('themes/backend/assets/plugins/counters/waypoints.min.js') }}"></script>

        <!-- Sidebar js -->
        <script src="{{ asset('themes/backend/assets/plugins/sidebar/sidebar.js') }}"></script>
        
        <!--Index js -->
        <script src="{{ asset('themes/backend/assets/js/index.js') }}"></script>

        <!-- custom js -->
        <script src="{{ asset('themes/backend/assets/js/custom.js') }}"></script>
        <script src="{{ asset('themes/backend/assets/js/index3.js') }}"></script>
        @yield('addCustomJS')
    </body>
</html>
