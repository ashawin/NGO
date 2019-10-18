@extends('themes.frontend.layout.app')
@section('content')
    <!-- hitwebcounter Code START -->

    <style>
        .InfoWindows
        {
            background-color: white;

        }
        .InfoWindows ul li p {
            width: 282px;
            padding: 10px 10px 10px 10px;
            color: #888;
            font-size: 3px;
            margin: 10px 10px;
        }


    </style>
    <?php
            $worklocation=\Illuminate\Support\Facades\DB::table('map_work_location')->get();
    ?>

    <!-- Start main-content -->
    <div class="main-content">
        <!-- Section: inner-header -->
        <section class="inner-header divider layer-overlay overlay-dark" data-bg-img="{{asset('themes/frontend/images/bg/bg2.jpg')}}">
            <div class="container pt-30 pb-30">
                <!-- Section Content -->
                <div class="section-content text-center">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 text-center">
                            <h2 class="text-theme-colored font-36">WHERE WE WORK</h2>

                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Section: About -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-5">
                        <h3 class="text-theme-colored text-uppercase mt-0">WHERE WE WORK</h3>
                        @if(isset($wherewework[0]))
                            <p>{!!  $wherewework[0]->desc !!}</p>
                        @endif
                        <div class="row mt-30 mb-30 ml-20">
                            <div class="col-xs-6">
                                @foreach($wherewework as $wherewe)
                                    <ul class="mt-10">
                                        <li class="mb-10"><i
                                                    class="fa fa-check-circle text-theme-colored"></i>&emsp;{{$wherewe->title}}
                                        </li>

                                    </ul>
                                @endforeach
                            </div>
                            <div class="col-xs-6">
                                <ul class="mt-10">
                                    @foreach($wherewework as $wherewe)
                                        <li class="mb-10"><i
                                                    class="fa fa-check-circle text-theme-colored"></i>&emsp;{{$wherewe->title}}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        @if(isset($wherewework[1]))
                            <p>{!!  $wherewework[1]->desc !!}</p>
                        @endif</div>
                    <div class="col-sm-12 col-md-7">
                        <div class="image-carousel">

                            @if(isset($wherewework[0]))
                                <div class="item">
                                    <div class="thumb">
                                        <img src="{{asset('themes/frontend/images/bg/'.$wherewework[0]->image)}}" alt="">
                                    </div>
                                </div>
                            @endif
                            @if(isset($wherewework[1]))
                                <div class="item">
                                    <div class="thumb">
                                        <img src="{{asset('themes/frontend/images/bg/'.$wherewework[1]->image)}}" alt="">
                                    </div>
                                </div>
                            @endif
                            @if(isset($wherewework[2]))
                                <div class="item">
                                    <div class="thumb">
                                        <img src="{{asset('themes/frontend/images/bg/'.$wherewework[2]->image)}}" alt="">
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>


        <section>
            <div class="container-fluid p-0">
                <div class="InfoWindows" id="info" style="width:300px;text-align: center"><h5>Where We Work</h5><ul><li><h6><span id="showtitle"></span></h6></li><li><h6><span id="showlocation">{{$initial->location}}</span></h6><br><br></li></ul></div>
                <div class="row" id="googleMap" style="width:100%;height:400px;position: relative">


{{--                    <!-- Google Map HTML Codes -->--}}
{{--                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5456.163483134849!2d144.95177475051227!3d-37.81589041361766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4dd5a05d97%3A0x3e64f855a564844d!2s121+King+St%2C+Melbourne+VIC+3000%2C+Australia!5e0!3m2!1sen!2sbd!4v1556130803137!5m2!1sen!2sbd&z=1"--}}
{{--                            width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>--}}

                </div>
            </div>
        </section>
    </div>


 <script>
     var customLabel = {
         restaurant: {
             label: 'R'
         },
         bar: {
             label: 'B'
         }
     };
     function myMap() {
         var map = new google.maps.Map(document.getElementById('googleMap'), {
             center: new google.maps.LatLng(28.629935, 77.090794),
             zoom: 4
         });
         var gmarker=new Array()
         var legend = document.getElementById('info');
         legend.style['margin-bottom'] = '200px';
         legend.style['margin-right'] = '100px';
         map.controls[google.maps.ControlPosition.RIGHT].push(legend);
         var infoWindow = new google.maps.InfoWindow;

         // Change this depending on the name of your PHP or XML file
         downloadUrl('{{asset('xmlTemplate.xml')}}', function(data) {
             var xml = data.responseXML;
             var markers = xml.documentElement.getElementsByTagName('marker');
             Array.prototype.forEach.call(markers, function(markerElem) {
                 var id = markerElem.getAttribute('id');
                 var name = markerElem.getAttribute('name');
                 var address = markerElem.getAttribute('address');
                 var type = markerElem.getAttribute('type');
                 var point = new google.maps.LatLng(
                     parseFloat(markerElem.getAttribute('lat')),
                     parseFloat(markerElem.getAttribute('lng')));

                 var infowincontent = document.createElement('div');
                 var strong = document.createElement('strong');
                 strong.textContent = name;
                 infowincontent.appendChild(strong);
                 infowincontent.appendChild(document.createElement('br'));


                 var text = document.createElement('text');
                 text.textContent = address
                 infowincontent.appendChild(text);
                 var icon = customLabel[type] || {};
                 geocoder = new google.maps.Geocoder();
                 geocoder.geocode({ 'address': address }, function(results, status) {
                     if (status == google.maps.GeocoderStatus.OK) {
                         var marker = new google.maps.Marker({
                             map: map,
                             position: results[0].geometry.location,
                             label: icon.label,
                             scale: 4
                         });
                         gmarker.push(marker);
                         marker.addListener('click', function() {
                             for (var i = 0; i < gmarker.length; i++) {
                                 gmarker[i].setIcon(); // set back to default
                             }
                             document.getElementById('showlocation').innerHTML=address;
                             document.getElementById('showtitle').innerHTML=name;
                             this.setIcon('http://maps.google.com/mapfiles/ms/icons/green-dot.png')
                                 // this.setIcon('https://www.google.com/mapfiles/marker_green.png');
                           //  infoWindow.setContent(infowincontent);
                           //  infoWindow.open(map, marker);
                         });


             }
             });

             });
         });
     }



     function downloadUrl(url, callback) {
         var request = window.ActiveXObject ?
             new ActiveXObject('Microsoft.XMLHTTP') :
             new XMLHttpRequest;

         request.onreadystatechange = function() {
             if (request.readyState == 4) {
                 request.onreadystatechange = doNothing;
                 callback(request, request.status);
             }
         };

         request.open('GET', url, true);
         request.send();
     }

     function doNothing() {}
 </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDjUtZCxQeSpV2TGsHBfQsk0zF0RWeohyg&callback=myMap"></script>

@endsection
