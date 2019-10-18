@extends('themes.frontend.layout.app')
@section('content')
    <div class="main-content">
        <!-- Section: inner-header -->
        <section class="inner-header divider layer-overlay overlay-dark" data-bg-img="{{asset('themes/frontend/images/bg/bg2.jpg')}}">
            <div class="container pt-30 pb-30">
                <!-- Section Content -->
                <div class="section-content text-center">
                    <div class="row">
                        @if(!$policy->isEmpty())
                        <div class="col-md-6 col-md-offset-3 text-center">@if($policy[0]->type=='ref')
                            <h2 class="text-theme-colored font-36">REFUND CANCELLATION POLICY</h2>
                                                                              @elseif($policy[0]->type=='termsandcondition')
                                <h2 class="text-theme-colored font-36">TERMS AND CONDITION</h2>
                                                                              @elseif($policy[0]->type=='privacypolicy')

                                <h2 class="text-theme-colored font-36">PRIVACY POLICY</h2>
                            @endif
                            @else
                                <h2 class="text-theme-colored font-36">NO POLICY FOUND</h2>
                            @endif
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

        @if(!$policy->isEmpty())
        <section class="position-inherit">
            <div class="container">
                <div class="row">

                    <div class="col-md-3 scrolltofixed-container">

                        <div class="list-group scrolltofixed z-index-0">
                            @foreach($policy as $pa)
                                <?php
                                $title = str_replace(' ', '', $pa->title);
                                ?>
                            <a href="#{{$title}}" class="list-group-item smooth-scroll-to-target">{{$pa->title}} </a>
                            @endforeach
                        </div>

                    </div>

                    <div class="col-md-9">
{{--                        <div id="section-one" class="mb-50">--}}
{{--                            <h3>Terms and Conditions</h3>--}}
{{--                            <hr>--}}
{{--                            <p class="mb-20">The facilities and services provided by EFICOR are as follows,</p>--}}
{{--                            <ul>--}}
{{--                                <li>Payment Gateway: If you are making donations through the payment gateway, you understand that the payment gateway is provided by a third party and governed by the terms and conditions provided by such third party. You are liable in the event you violate any of the terms and conditions of such third party in making your donations. EFICOR shall not be responsible for any such errors or default in making your donations.</li>--}}
{{--                                <li>EFICOR is responsible for the cause to which you have donated. EFICOR shall make every effort to ensure that the donation is utilized for the purpose which is specified in the description.</li>--}}
{{--                                <li>Utilization of donations and Feedback reports: EFICOR strives to provide a feedback report on the utilization of donations made by you within reasonable time limits. The feedback report time period may vary depending on the nature of utilization of donation.</li>--}}
{{--                                <li>Tax exemption certificates: You are requested to go through the tax exemption details displayed in the content of every cause before you make the donation. EFICOR will  ensure to send applicable tax exemption certificates to you within reasonable time limits.</li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div id="section-two" class="mb-50">--}}
{{--                            <h3> Description of EFICOR services</h3>--}}
{{--                            <hr>--}}
{{--                            <p class="mb-20">The facilities and services provided by EFICOR are as follows,</p>--}}
{{--                            <ul>--}}
{{--                                <li>Payment Gateway: If you are making donations through the payment gateway, you understand that the payment gateway is provided by a third party and governed by the terms and conditions provided by such third party. You are liable in the event you violate any of the terms and conditions of such third party in making your donations. EFICOR shall not be responsible for any such errors or default in making your donations.</li>--}}
{{--                                <li>EFICOR isresponsible for the cause to which you have donated. EFICOR shall make every effort to ensure that the donation is utilized for the purpose which is specified in the description.</li>--}}
{{--                                <li>EFICOR isresponsible for the cause to which you have donated. EFICOR shall make every effort to ensure that the donation is utilized for the purpose which is specified in the description.</li>--}}
{{--                                <li>Utilization of donations and Feedback reports: EFICOR strives to provide a feedback report on the utilization of donations made by you within reasonable time limits. The feedback report time period may vary depending on the nature of utilization of donation.</li>--}}
{{--                                <li>Tax exemption certificates: You are requested to go through the tax exemption details displayed in the content of every cause before you make the donation. EFICOR will  ensure to send applicable tax exemption certificates to you within reasonable time limits.</li>--}}
{{--                            </ul>--}}

{{--                        </div>--}}
                        @foreach($policy as $pa)
                            <?php
                            $title = str_replace(' ', '', $pa->title);
                            ?>
                        <div id="{{$title}}" class="mb-50">
                            <h3>{{$pa->title}}</h3>
                            <hr>
                           {!! $pa->description !!}

                        </div>
                        @endforeach
{{--                        <div id="section-four" class="mb-50">--}}
{{--                            <h3>Refund Policy:</h3>--}}
{{--                            <hr>--}}
{{--                            <p class="mb-20">--}}
{{--                            <ul>--}}

{{--                                <li>All donations made through EFICOR are NON-REFUNDABLE. Please contact EFICOR immediately if there are justifying reasons or circumstances for refund and your case may be reviewed on a best effort basis and decision of EFICOR will be final.</li>--}}
{{--                                <li> You will receive an email confirming your donation to the cause. This is the final confirmation of your donation. If you have not received please contact EFICOR immediately.3.3  EFICOR reserves the right at any time from time to time to modify or discontinue, temporarily or permanently the donation facility with or without notice.</li>--}}

{{--                            </ul>--}}
{{--                            </p>--}}
{{--                            <p>If you have questions regarding your gift, or need to discuss your donations, please contact us athq@eficor.org.</p>--}}

{{--                        </div>--}}





                    </div>
                </div>
            </div>
        </section>
    @else
    <h3 style="text-align: center">No Policy Found</h3>
    @endif

    </div>
    @endsection
