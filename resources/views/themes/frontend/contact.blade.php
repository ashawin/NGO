
@extends('themes.frontend.layout.app')
@section('content')
    <style>
        .form-control{
            color:black !important;
        }
    </style>
    <input type="hidden" value="{{$initial->location}}" id="address">
<!-- Start main-content -->
<div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-dark" data-bg-img="{{asset('themes/frontend/images/bg/bg2.jpg')}}">
        <div class="container pt-30 pb-30">
            <!-- Section Content -->
            <div class="section-content text-center">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center">
                        <h2 class="text-white font-36">CONTACT US</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Divider: Contact -->
    <section class="divider layer-overlay overlay-white-9" data-bg-img="{{asset('themes/frontend/images/bg/bg2.jpg')}}">
        <div class="container">
            <div class="row pt-30">

                <div class="col-md-7">
                    <h3 class="line-bottom mt-0 mb-30">Interested in discussing?</h3>
                    <!-- Contact Form -->
                    @if(session()->has('msg'))
                        <h4  style="text-align: center" class="alert-success">{{session()->get('msg')}}</h4>
                    @endif
                    <form  name="contact_form" class="form-transparent" action="{{route('teamquickcontact')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="form_name">Name <small>*</small></label>
                                    <input id="form_name" name="name" class="form-control" type="text" placeholder="Enter Name" required="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="form_email">Email <small>*</small></label>
                                    <input id="form_email" name="email" class="form-control required email" type="email" placeholder="Enter Email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="form_name">Subject <small>*</small></label>
                                    <input id="form_subject" name="subject" class="form-control required" type="text" placeholder="Enter Subject">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="form_phone">Phone</label>
                                    <input id="form_phone" name="phone" class="form-control" type="text" placeholder="Enter Phone">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="form_name">Message</label>
                            <textarea  name="message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-dark btn-theme-colored btn-flat mr-5" data-loading-text="Please wait...">Send your message</button>

                         </div>
                    </form>
                    <!-- Contact Form Validation-->
{{--                    <script type="text/javascript">--}}
{{--                        $("#contact_form").validate({--}}
{{--                            submitHandler: function(form) {--}}
{{--                                var form_btn = $(form).find('button[type="submit"]');--}}
{{--                                var form_result_div = '#form-result';--}}
{{--                                $(form_result_div).remove();--}}
{{--                                form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');--}}
{{--                                var form_btn_old_msg = form_btn.html();--}}
{{--                                form_btn.html(form_btn.prop('disabled', true).data("loading-text"));--}}
{{--                                $(form).ajaxSubmit({--}}
{{--                                    dataType:  'json',--}}
{{--                                    success: function(data) {--}}
{{--                                        if( data.status == 'true' ) {--}}
{{--                                            $(form).find('.form-control').val('');--}}
{{--                                        }--}}
{{--                                        form_btn.prop('disabled', false).html(form_btn_old_msg);--}}
{{--                                        $(form_result_div).html(data.message).fadeIn('slow');--}}
{{--                                        setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);--}}
{{--                                    }--}}
{{--                                });--}}
{{--                            }--}}
{{--                        });--}}
{{--                    </script>--}}
                </div>
                <div class="col-md-5">
                    <h3 class="line-bottom mt-0">Get in touch with us</h3>
                    <p>{{$initial->short_intro}}</p>
                    <ul class="styled-icons icon-dark icon-sm icon-circled mb-20">
                        <li><a href="{{$initial->facebook}}" data-bg-color="#3B5998"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="{{$initial->twitter}}" data-bg-color="#02B0E8"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="{{$initial->youtube}}" data-bg-color="#4C75A3"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="{{$initial->instagram}}" data-bg-color="#D9CCB9"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="{{$initial->google_plus}}" data-bg-color="#D71619"><i class="fa fa-google-plus"></i></a></li>
{{--                        <li><a href="#" data-bg-color="#A4CA39"><i class="fa fa-android"></i></a></li>--}}
{{--                        <li><a href="#" data-bg-color="#4C75A3"><i class="fa fa-vk"></i></a></li>--}}
                    </ul>

                    <div class="icon-box media mb-15"> <a class="media-left pull-left flip mr-20" href="#"> <i class="pe-7s-map-2 text-theme-colored"></i></a>
                        <div class="media-body">
                            <h5 class="mt-0">Our Office Location</h5>
                            <p>{{$initial->location}}</p>
                        </div>
                    </div>
                    <div class="icon-box media mb-15"> <a class="media-left pull-left flip mr-15" href="#"> <i class="pe-7s-call text-theme-colored"></i></a>
                        <div class="media-body">
                            <h5 class="mt-0">Contact Number</h5>
                            <p><a href="tel:+325-12345-65478">{{$initial->phone}}</a></p>
                        </div>
                    </div>
                    <div class="icon-box media mb-15"> <a class="media-left pull-left flip mr-15" href="#"> <i class="pe-7s-mail text-theme-colored"></i></a>
                        <div class="media-body">
                            <h5 class="mt-0">Email Address</h5>
                            <p><a href="mailto:supporte@yourdomin.com">{{$initial->email}}</a></p>
                        </div>
                    </div>
{{--                    <div class="icon-box media mb-15"> <a class="media-left pull-left flip mr-20" href="#"> <i class="fa fa-skype text-theme-colored"></i></a>--}}
{{--                        <div class="media-body">--}}
{{--                            <h5 class="mt-0">Make a Video Call</h5>--}}
{{--                            <p>ThemeMascotSkype</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </section>

    <!-- Divider: Google Map -->
    <section>
        <div class="container-fluid p-0">
            <div class="row">

                <div class="row" id="googleMap" style="width:100%;height:400px;">
            </div>
        </div>
    </section>
</div>
    <script>
    function myMap() {
    var markers = [];
    var myLatLng = {lat: 51.508742, lng: -0.120850};
    var mapProp= {
    center:myLatLng,
    zoom:4,
    };
    var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);



    var geocoder = new google.maps.Geocoder;
    var address = document.getElementById('address').value;
    geocoder.geocode( { 'address': address}, function(results, status) {
    if (status == 'OK') {
    map.setCenter(results[0].geometry.location);
    var marker = new google.maps.Marker({
    map: map,
    position: results[0].geometry.location
    })
    google.maps.event.addListener(marker, 'click', function() {
    var pos=this.position;

    geocodeLatLng(geocoder, map, infowindow,pos);

    });
    } else {
    alert('Geocode was not successful for the following reason: ' + status);
    }
    });
    var address = document.getElementById('address').value;
    var content='<div class="row-section">\n' +address+
        '                    <ul>\n' +
            '                        <li><h3> <br><span></span></h3><br>\n' +
                '                            \n' +
                '                           </li>\n' +
            '                    </ul>\n' +
        '                    <br>\n' +
        '                    <hr>\n' +
        '                </div>\n' +
    '            </div>'
    var infowindow = new google.maps.InfoWindow(
    {

    content:content
    });
    infowindow.open(map);

    function geocodeLatLng(geocoder, map, infowindow,pos) {
    var latlng =pos;
    geocoder.geocode({'location': latlng}, function (results, status) {
    if (status === 'OK') {
    if (results[0]) {

    var marker = new google.maps.Marker({
    position: latlng,
    map: map
    });
    marker.setIcon('https://www.google.com/mapfiles/marker_green.png');
    infowindow.open(map, marker);
    } else {
    window.alert('No results found');
    }
    } else {
    window.alert('Geocoder failed due to: ' + status);
    }
    });
    }
    }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDjUtZCxQeSpV2TGsHBfQsk0zF0RWeohyg&callback=myMap"></script>

    @endsection
