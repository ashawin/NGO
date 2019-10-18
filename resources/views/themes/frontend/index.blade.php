@extends('themes.frontend.layout.app')
@section('content')
    <!-- Start main-content -->
    <div class="main-content">
        <section id="home" class="divider">
            <div class="container-fluid p-0">

                <!-- Slider Revolution Start -->
                <div class="rev_slider_wrapper">
                    <div class="rev_slider" data-version="5.0">
                        <?php
                        $getSliders = \Illuminate\Support\Facades\DB::table('slider')->get();

                        ?>
                        <ul>
                            @if(!$getSliders->isEmpty())
                            <!-- slider Start -->
                            <!-- SLIDE 1 -->
                            <?php foreach($getSliders as $singleSlider) {
                            $mTitle = Str::limit($singleSlider->title, 20);
                            $mDescription = Str::limit($singleSlider->description, 50);

                            ?>
                            <li data-index="rs-{{$singleSlider->id}}" data-transition="random" data-slotamount="7"
                                data-easein="default" data-easeout="default" data-masterspeed="1000"
                                data-thumb="{{ asset('uploads/slider/') }}/{{@$singleSlider->image}}" data-rotate="0"
                                data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7"
                                data-saveperformance="off" data-title="Intro" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="{{ asset('uploads/slider/') }}/{{@$singleSlider->image}}" alt=""
                                     data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                                     class="rev-slidebg" data-bgparallax="6" data-no-retina>
                                <!-- LAYERS -->
                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption BigBold-Title tp-resizeme rs-parallaxlevel-0 text-uppercase"
                                     id="rs-1-layer-1"
                                     data-x="['left','left','left','left']"
                                     data-hoffset="['50','50','30','17']"
                                     data-y="['bottom','bottom','bottom','bottom']"
                                     data-voffset="['110','110','180','160']"
                                     data-fontsize="['105','100','70','60']"
                                     data-lineheight="['100','90','60','60']"
                                     data-width="['none','none','none','400']"
                                     data-height="none"
                                     data-whitespace="['nowrap','nowrap','nowrap','normal']"
                                     data-transform_idle="o:1;"
                                     data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                     data-mask_in="x:0px;y:[100%];"
                                     data-mask_out="x:inherit;y:inherit;"
                                     data-start="500"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-basealign="slide"
                                     data-responsive_offset="on"
                                     style="z-index: 6; white-space: nowrap;">{{$mTitle}}<span style="display: none;"
                                                                                               class="text-theme-colored">Care</span>
                                </div>

                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption BigBold-SubTitle tp-resizeme rs-parallaxlevel-0"
                                     id="rs-1-layer-2"

                                     data-x="['left','left','left','left']"
                                     data-hoffset="['55','55','33','20']"
                                     data-y="['bottom','bottom','bottom','bottom']"
                                     data-voffset="['40','1','74','58']"
                                     data-fontsize="['15','15','15','13']"
                                     data-lineheight="['24','24','24','20']"
                                     data-width="['410','410','410','280']"
                                     data-height="['60','100','100','100']"
                                     data-whitespace="normal"
                                     data-transform_idle="o:1;"
                                     data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                                     data-transform_out="y:50px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                     data-start="650"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-basealign="slide"
                                     data-responsive_offset="on"
                                     style="z-index: 7; min-width: 410px; max-width: 410px; max-width: 60px; max-width: 60px; white-space: normal;">{{$mDescription}}
                                </div>

                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption btn btn-default btn-transparent btn-flat btn-lg pl-40 pr-40 rs-parallaxlevel-0"

                                     id="rs-1-layer-3"
                                     data-x="['left','left','left','left']"
                                     data-hoffset="['470','480','30','20']"
                                     data-y="['bottom','bottom','bottom','bottom']"
                                     data-voffset="['50','50','30','20']"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;"
                                     data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                                     data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;"
                                     data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                                     data-transform_out="y:50px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                     data-start="650"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-actions='[{"event":"click","action":"scrollbelow","offset":"px"}]'
                                     data-basealign="slide"
                                     data-responsive_offset="on"
                                     style="z-index: 8; white-space: nowrap;border-color:rgba(255, 255, 255, 0.25);outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">
                                    <a href="{{route('sliderreadmore',['slug'=>$singleSlider->slug])}}" style="color:#fff;">Read More</a>
                                </div>
                            </li>
                        <?php } ?>
                            @endif
                        <!-- slider end  -->


                        </ul>
                    </div><!-- end .rev_slider -->
                </div>
                <!-- end .rev_slider_wrapper -->
                <script>
                    $(document).ready(function (e) {
                        $(".rev_slider").revolution({
                            sliderType: "standard",
                            sliderLayout: "auto",
                            dottedOverlay: "none",
                            delay: 5000,
                            navigation: {
                                keyboardNavigation: "off",
                                keyboard_direction: "horizontal",
                                mouseScrollNavigation: "off",
                                onHoverStop: "off",
                                touch: {
                                    touchenabled: "on",
                                    swipe_threshold: 75,
                                    swipe_min_touches: 1,
                                    swipe_direction: "horizontal",
                                    drag_block_vertical: false
                                },
                                arrows: {
                                    style: "gyges",
                                    enable: true,
                                    hide_onmobile: false,
                                    hide_onleave: true,
                                    hide_delay: 200,
                                    hide_delay_mobile: 1200,
                                    tmp: '',
                                    left: {
                                        h_align: "left",
                                        v_align: "center",
                                        h_offset: 0,
                                        v_offset: 0
                                    },
                                    right: {
                                        h_align: "right",
                                        v_align: "center",
                                        h_offset: 0,
                                        v_offset: 0
                                    }
                                },
                                bullets: {
                                    enable: true,
                                    hide_onmobile: true,
                                    hide_under: 960,
                                    style: "zeus",
                                    hide_onleave: false,
                                    direction: "horizontal",
                                    h_align: "right",
                                    v_align: "bottom",
                                    h_offset: 80,
                                    v_offset: 50,
                                    space: 5,
                                    tmp: '<span class="tp-bullet-image"></span><span class="tp-bullet-imageoverlay"></span><span class="tp-bullet-title"></span>'
                                }
                            },
                            responsiveLevels: [1240, 1024, 778, 480],
                            visibilityLevels: [1240, 1024, 778, 480],
                            gridwidth: [1170, 1024, 778, 480],
                            gridheight: [550, 768, 960, 720],
                            lazyType: "none",
                            parallax: {
                                origo: "slidercenter",
                                speed: 1000,
                                levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
                                type: "scroll"
                            },
                            shadow: 0,
                            spinner: "off",
                            stopLoop: "on",
                            stopAfterLoops: 0,
                            stopAtSlide: -1,
                            shuffle: "off",
                            autoHeight: "off",
                            fullScreenAutoWidth: "off",
                            fullScreenAlignForce: "off",
                            fullScreenOffsetContainer: "",
                            fullScreenOffset: "0",
                            hideThumbsOnMobile: "off",
                            hideSliderAtLimit: 0,
                            hideCaptionAtLimit: 0,
                            hideAllCaptionAtLilmit: 0,
                            debugMode: false,
                            fallbacks: {
                                simplifyAll: "off",
                                nextSlideOnWindowFocus: "off",
                                disableFocusListener: false,
                            }
                        });
                    });
                </script>
                <!-- Slider Revolution Ends -->
            </div>
        </section>
        <section>
            <div class="container pb-80">
                <div class="section-title text-center">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2" style="margin-bottom:20px;">
                            <h3 class="text-uppercase mt-0">WHAT WE DO</h3>
                        </div>
                    </div>
                </div>
                <div class="row mtli-row-clearfix">
                    @if(!$whatwedo->isEmpty())
                    @foreach($whatwedo as $wedo)
                        <div class="col-sm-6 col-md-3 col-lg-3">
                            <div class="causes bg-lighter1 box-hover-effect effect1 maxwidth500 mb-sm-30">
<a href="{{route('getdonation')}}">
                                <div class="card" style="margin-top:-1px;">
                                    <img src="{{ asset('uploads/pages/'.$wedo->feature_image_1) }}" alt="Card Back"
                                         style="margin-left:50px;">
                                    <img src="{{ asset('uploads/pages/'.$wedo->feature_image_2) }}" class="img-top"
                                         alt="Card Front" style="margin-left:50px;">
                                </div>
                                <div class="causes-details clearfix border-bottom1 p-15 pt-10"
                                     style="margin-top: 132px;position: absolute;">
                                    <h5><a href="{{route('whatwedodetails',['id'=>$wedo->slug])}}" style="text-align: center">{{$wedo->title}}</a>
                                    </h5>
                                    <p>{!! str_limit($wedo->description,200,'...')  !!}</p>
                                </div>
</a>
                            </div>
                        </div>
                    @endforeach
                        @endif


                </div>

            </div>
        </section>
        <section class="bg-lightest" style="margin-top:-150px;">
            <div class="container" style="margin-top:-20px;">
                <h1 style="color:#008d7d">YOUR GENEROSITY IS TRANSFORMING LIVES</h1>
                <br/>
                <div class="row">

                    <div class="col-sm-12 col-md-4 wow fadeInLeft ">
                        @if(!$project['project_1']->isEmpty())
                        <h4 class="text-uppercase line-bottom mt-0">{{$project['project_1'][0]->title}}</h4>
                        @endif
                        <div class="featured-project-carousel owl-nav-top">
@if(!$project['project_1']->isEmpty())
                            @foreach($project['project_1'] as $pro1)
                                @if(isset($pro1))
                                <div class="item" style="min-height:400px">
                                    <div class="causes bg-lighter box-hover-effect effect1 sm-maxwidth500 mb-sm-30">
                                        <div class="thumb" style="min-height:200px">
                                            <img class="img-fullwidth" alt=""
                                                 src="{{ asset('uploads/pages/'.$pro1->image) }}" height="195px"
                                                 width="360px">
                                        </div>
                                        <div class="progress-item mt-0">
                                            <div class="progress mb-0">
                                                <div class="progress-bar" data-percent="85"></div>
                                            </div>
                                        </div>
                                        <div class="causes-details clearfix border-bottom p-15 pt-10">
                                            <p class="mb-10 mt-5"><span
                                                        class="text-uppercase text-theme-colored"><strong>{{$pro1->title}}:</strong></span>
                                                {!! str_limit($pro1->description,'200','...') !!}
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                @endif
                            @endforeach
    @endif


                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 wow fadeInLeft ">
                        @if(!$project['project_2']->isEmpty())
                        <h4 class="text-uppercase line-bottom mt-0">{{$project['project_2'][0]->title}}</h4>
                        <div class="featured-project-carousel owl-nav-top">
                            @foreach($project['project_2'] as $pro2)
                                <div class="item" style="min-height: 400px">
                                    <div class="causes bg-lighter box-hover-effect effect1 sm-maxwidth500 mb-sm-30">
                                        <div class="thumb" style="max-height: 200px">
                                            <img class="img-fullwidth" alt=""
                                                 src="{{ asset('uploads/pages/'.$pro2->image)   }}" height="200px"
                                                 width="200px">
                                        </div>
                                        <div class="progress-item mt-0">
                                            <div class="progress mb-0">
                                                <div class="progress-bar" data-percent="85"></div>
                                            </div>
                                        </div>
                                        <div class="causes-details clearfix border-bottom p-15 pt-10">
                                            <p class="mb-10 mt-5"><span
                                                        class="text-uppercase text-theme-colored"><strong>{{$pro2->title}}:</strong></span>
                                                {!! str_limit($pro2->description,'200','...') !!}</p>

                                        </div>
                                    </div>
                                </div>

                            @endforeach
                        </div>
                            @endif
                    </div>
                    <div class="col-sm-12 col-md-4 wow fadeInLeft ">
                        @if(!$project['project_3']->isEmpty())
                        <h4 class="text-uppercase line-bottom mt-0">{{$project['project_3'][0]->title}}</h4>
                        <div class="featured-project-carousel owl-nav-top">
                            @foreach($project['project_3'] as $pro3)
                                <div class="item" style="min-height: 400px">
                                    <div class="causes bg-lighter box-hover-effect effect1 sm-maxwidth500 mb-sm-30">
                                        <div class="thumb" style="max-height:200px">
                                            <img class="img-fullwidth" alt=""
                                                 src="{{ asset('uploads/pages/'.$pro3->image)   }}" height="200px" width="200px">
                                        </div>
                                        <div class="progress-item mt-0">
                                            <div class="progress mb-0">
                                                <div class="progress-bar" data-percent="85"></div>
                                            </div>
                                        </div>
                                        <div class="causes-details clearfix border-bottom p-15 pt-10">
                                            <p class="mb-10 mt-5"><span
                                                        class="text-uppercase text-theme-colored"><strong>{{$pro3->title}}:</strong></span>
                                                {!! str_limit($pro3->description,'200','...') !!}</p>

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                            @endif
                    </div>
                </div>
            </div>
        </section>
        <section id="donate-now" style="margin-top:50px;">
            <div class="container pt-0 pb-0" class="divider" data-bg-img="#" style="background-color:#eeece8;background-repeat: repeat;
    background-position: center center;">
                <div class="row">
                    <div class="col-md-7">
                        <div class="bg-light-transparent p-40">
                            <h4 class="text-uppercase line-bottom">Make a Donation Now!</h4>

                            <!-- Paypal Both Onetime/Recurring Form Starts -->
                            <form id="paypal_donate_form_onetime_recurring">
                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="form-group mb-20">
                                            <label><strong>Payment Type</strong></label> <br>
                                            <label class="radio-inline">
                                                <input type="radio" checked="" value="one_time" name="payment_type">
                                                One Time
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="monthly" name="payment_type">
                                                Monthly
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="monthly" name="payment_type">
                                                Yearly
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-sm-12" id="donation_type_choice">
                                        <div class="form-group mb-20">
                                            <label><strong>Donation Type</strong></label>
                                            <div class="radio mt-5">
                                                <label class="radio-inline">
                                                    <input type="radio" value="D" name="t3" checked="">
                                                    Daily</label>
                                                <label class="radio-inline">
                                                    <input type="radio" value="W" name="t3">
                                                    Weekly</label>
                                                <label class="radio-inline">
                                                    <input type="radio" value="M" name="t3">
                                                    Monthly</label>
                                                <label class="radio-inline">
                                                    <input type="radio" value="Y" name="t3">
                                                    Yearly</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group mb-20">
                                            <label><strong>I Want to Donate for</strong></label>
                                            <select name="item_name" class="form-control">
                                                <option value="Emergency Relief">Emergency Relief</option>
                                                <option value="Mother and Child Nutrition">Mother and Child Nutrition
                                                </option>
                                                <option value="Livelihood">Livelihood</option>
                                                <option value="Anti Human Trafficking">Anti Human Trafficking</option>
                                                <option value="Training">Training</option>
                                                <option value="HIV/AIDS">HIV/AIDS</option>
                                                <option value="Piece Building">Piece Building</option>
                                                <option value="Climate Change Adaptation">Climate Change Adaptation
                                                </option>
                                                <option value="Urban Poverty">Urban Poverty</option>
                                                <option value="Advocacy ">Advocacy</option>
                                                <option value="Child Development">Child Development</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group mb-20">
                                            <label><strong>Currency</strong></label>
                                            <select name="currency_code" class="form-control">
                                                <option value="">Select Currency</option>
                                                <option value="USD" selected="selected">&#36; - U.S. Dollars</option>
                                                <option value="AUD">&#36; - Australian Dollars</option>
                                                <option value="BRL">&#82;&#36; - Brazilian Reais</option>
                                                <option value="GBP">&#163; - British Pounds</option>
                                                <option value="HKD">&#36; - Hong Kong Dollars</option>
                                                <option value="INR">&#8377; - Indian Rupee</option>
                                                <option value="JPY">&#165; - Japanese Yen</option>
                                                <option value="MYR">&#82;&#77; - Malaysian Ringgit</option>
                                                <option value="NZD">&#36; - New Zealand Dollars</option>
                                                <option value="NOK">&#107;&#114; - Norwegian Kroner</option>
                                                <option value="SGD">&#36; - Singapore Dollars</option>
                                                <option value="CHF">&#8355; - Swiss Francs</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group mb-20">
                                            <label><strong>How much do you want to donate?</strong></label>
                                            <select name="amount" class="form-control">
                                                <option value="20">20</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                                <option value="200">200</option>
                                                <option value="500">500</option>
                                                <option value="other">Other Amount</option>
                                            </select>
                                            <div id="custom_other_amount">
                                                <label><strong>Custom Amount:</strong></label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group mb-20">
                                            <a href="{{route('getdonation')}}"
                                                    class="btn btn-flat btn-dark btn-theme-colored mt-10 pl-30 pr-30"
                                                    >Donate Now
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <!-- Script for Donation Form Custom Amount -->
                            <script type="text/javascript">
                                $(document).ready(function (e) {
                                    var $donation_form = $("#paypal_donate_form_onetime_recurring");
                                    //toggle custom amount
                                    var $custom_other_amount = $donation_form.find("#custom_other_amount");
                                    $custom_other_amount.hide();
                                    $donation_form.find("select[name='amount']").change(function () {
                                        var $this = $(this);
                                        if ($this.val() == 'other') {
                                            $custom_other_amount.show().append('<div class="input-group"><span class="input-group-addon">$</span> <input id="input_other_amount" type="text" name="amount" class="form-control" value="100"/></div>');
                                        } else {
                                            $custom_other_amount.children(".input-group").remove();
                                            $custom_other_amount.hide();
                                        }
                                    });

                                    //toggle donation_type_choice
                                    var $donation_type_choice = $donation_form.find("#donation_type_choice");
                                    $donation_type_choice.hide();
                                    $("input[name='payment_type']").change(function () {
                                        if (this.value == 'recurring') {
                                            $donation_type_choice.show();
                                        } else {
                                            $donation_type_choice.hide();
                                        }
                                    });


                                    // submit form on click
                                    $donation_form.on('submit', function (e) {
                                        $("#paypal_donate_form-onetime").submit();
                                        var item_name = $donation_form.find("select[name='item_name'] option:selected").val();
                                        var currency_code = $donation_form.find("select[name='currency_code'] option:selected").val();
                                        var amount = $donation_form.find("select[name='amount'] option:selected").val();
                                        var t3 = $donation_form.find("input[name='t3']:checked").val();

                                        if (amount == 'other') {
                                            amount = $donation_form.find("#input_other_amount").val();
                                        }

                                        // submit proper form now
                                        if ($("input[name='payment_type']:checked", $donation_form).val() == 'recurring') {
                                            var recurring_form = $('#paypal_donate_form-recurring');

                                            recurring_form.find("input[name='item_name']").val(item_name);
                                            recurring_form.find("input[name='currency_code']").val(currency_code);
                                            recurring_form.find("input[name='a3']").val(amount);
                                            recurring_form.find("input[name='t3']").val(t3);

                                            recurring_form.find("input[type='submit']").trigger('click');

                                        } else if ($("input[name='payment_type']:checked", $donation_form).val() == 'one_time') {
                                            var onetime_form = $('#paypal_donate_form-onetime');

                                            onetime_form.find("input[name='item_name']").val(item_name);
                                            onetime_form.find("input[name='currency_code']").val(currency_code);
                                            onetime_form.find("input[name='amount']").val(amount);

                                            onetime_form.find("input[type='submit']").trigger('click');
                                        }
                                        return false;
                                    });

                                });
                            </script>


                            <!-- Paypal Onetime Form -->
                            <form id="paypal_donate_form-onetime" class="hidden" action="#" method="post">
                                <input type="hidden" name="cmd" value="_donations">
                                <input type="hidden" name="business" value="accounts@thememascot.com">

                                <input type="hidden" name="item_name" value="Educate Children">
                                <!-- updated dynamically -->
                                <input type="hidden" name="currency_code" value="USD"> <!-- updated dynamically -->
                                <input type="hidden" name="amount" value="20"> <!-- updated dynamically -->

                                <input type="hidden" name="no_shipping" value="1">
                                <input type="hidden" name="cn" value="Comments...">
                                <input type="hidden" name="tax" value="0">
                                <input type="hidden" name="lc" value="US">
                                <input type="hidden" name="bn" value="PP-DonationsBF">
                                <input type="hidden" name="return" value="http://www.yoursite.com/thankyou.html">
                                <input type="hidden" name="cancel_return"
                                       value="http://www.yoursite.com/paymentcancel.html">
                                <input type="hidden" name="notify_url"
                                       value="http://www.yoursite.com/notifypayment.php">
                                <input type="submit" name="submit">
                            </form>

                            <!-- Paypal Recurring Form -->
                            <form id="paypal_donate_form-recurring" class="hidden" action="#" method="post">
                                <input type="hidden" name="cmd" value="_xclick-subscriptions">
                                <input type="hidden" name="business" value="accounts@thememascot.com">

                                <input type="hidden" name="item_name" value="Educate Children">
                                <!-- updated dynamically -->
                                <input type="hidden" name="currency_code" value="USD"> <!-- updated dynamically -->
                                <input type="hidden" name="a3" value="20"> <!-- updated dynamically -->
                                <input type="hidden" name="t3" value="D"> <!-- updated dynamically -->


                                <input type="hidden" name="p3" value="1">
                                <input type="hidden" name="rm" value="2">
                                <input type="hidden" name="src" value="1">
                                <input type="hidden" name="sra" value="1">
                                <input type="hidden" name="no_shipping" value="0">
                                <input type="hidden" name="no_note" value="1">
                                <input type="hidden" name="lc" value="US">
                                <input type="hidden" name="bn" value="PP-DonationsBF">
                                <input type="hidden" name="return" value="http://www.yoursite.com/thankyou.html">
                                <input type="hidden" name="cancel_return"
                                       value="http://www.yoursite.com/paymentcancel.html">
                                <input type="hidden" name="notify_url"
                                       value="http://www.yoursite.com/notifypayment.php">
                                <input type="submit" name="submit">
                            </form>
                            <!-- Paypal Both Onetime/Recurring Form Ends -->

                        </div>
                    </div>

                    <div class="col-md-5">
                        <h2 style="color:#008d7d;margin-top:50px;">DONATE US</h2>
                        <ul class="donate"
                            style="list-style:circle;font-size:16px;margin-left:20px;line-height: 3em;margin-top:30px;">
@if(!$project['donnationtype']->isEmpty())
                            @foreach($project['donnationtype'] as $pro)
                            <li>{!! $pro->description !!}</li>
                                @endforeach
    @endif

                        </ul>

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
                                <a href="{{url('/news/blog/'.$new->id)}}">
                                <article class="post clearfix maxwidth600 mb-sm-30 wow "
                                         data-wow-delay=".0s">
                                    <div class="entry-header">
                                        <div class="post-thumb thumb"> <img src="{{ asset('uploads/pages/'.$new->image) }}" alt="" class="img-responsive img-fullwidth"> </div>
                                        <div class="entry-meta meta-absolute text-center pl-15 pr-15">
                                            <div class="display-table">
                                                <div class="display-table-cell">
                                                    <ul>
                                                        <li><a class="text-white" href="{{url('/news/blog/'.$new->id)}}"><i class="fa fa-thumbs-o-up"></i> 265 <br> Likes</a></li>
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
                                </a>
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
