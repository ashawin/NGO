@extends('themes.frontend.layout.app')
@section('content')
    <style>
        .btn {
            background-color: #008d7d; /* Blue background */
            border: none; /* Remove borders */
            color: white; /* White text */
            padding: 12px 16px; /* Some padding */
            font-size: 16px; /* Set a font size */
            cursor: pointer; /* Mouse pointer on hover */
        }

        /* Darker background on mouse-over */

    </style>
    <div id="myModal1" class="modal fade" role="dialog">
        <section class="">
            <button type="button" class="close" data-dismiss="modal" style="width:60px;">&times;</button>
            <div class="container" style="max-width: 700px;">
                <h3 class="bg-theme-colored p-15 mb-0 text-white">Comment</h3>
                <div class="section-content bg-white p-30">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- ===== START: Paypal Both Onetime/Recurring Form ===== -->
                            <form method="post" action="{{route('blogcomments')}}">
                                @csrf
                                <input type="hidden"  name="id" value="{{$project->id}}">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group mb-20">
                                            <label><strong>First Name</strong></label>
                                           <input type="text" name="first_name" class="form-control" placeholder="First Name" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group mb-20">
                                            <label><strong>Last Name</strong></label>
                                            <input type="text" name="last_name" class="form-control" placeholder="Last Name" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group mb-20">
                                            <label><strong>Email</strong></label>
                                            <input type="text" name="email" class="form-control" placeholder="Email" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group mb-20">
                                            <label><strong>Mobile</strong></label>
                                            <input type="text" name="mobile" class="form-control" placeholder="Mobile" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group mb-20">
                                            <label><strong>Comment</strong></label>
                                            <textarea type="text" name="comment" class="form-control" placeholder="Message" required></textarea>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-flat btn-dark btn-theme-colored mt-10 pl-30 pr-30" data-loading-text="Please wait...">Submit</button>
                                    </div>
                                </div>

                            </form>

                            <!-- Script for Donation Form Custom Amount -->
                            <script type="text/javascript">
                                $(document).ready(function(e) {
                                    var $donation_form = $("#popup_paypal_donate_form_onetime_recurring");
                                    //toggle custom amount
                                    var $custom_other_amount = $donation_form.find("#custom_other_amount");
                                    $custom_other_amount.hide();
                                    $donation_form.find("[name='amount']").change(function() {
                                        var $this = $(this);
                                        if ($this.val() == 'other') {
                                            $custom_other_amount.show().append('<div class="input-group"><span class="input-group-addon">$</span> <input id="input_other_amount" type="text" name="amount" class="form-control" value="100"/></div>');
                                        }
                                        else{
                                            $custom_other_amount.children( ".input-group" ).remove();
                                            $custom_other_amount.hide();
                                        }
                                    });

                                    //toggle donation_type_choice
                                    var $donation_type_choice = $donation_form.find("#donation_type_choice");
                                    $donation_type_choice.hide();
                                    $("input[name='payment_type']").change(function() {
                                        if (this.value == 'recurring') {
                                            $donation_type_choice.show();
                                        }
                                        else {
                                            $donation_type_choice.hide();
                                        }
                                    });


                                    // submit form on click
                                    $donation_form.on('submit', function(e){
                                        //$( "#popup_paypal_donate_form-onetime" ).submit();
                                        var item_name = $donation_form.find("select[name='item_name'] option:selected").val();
                                        var currency_code = $donation_form.find("select[name='currency_code'] option:selected").val();
                                        var amount = $donation_form.find("[name='amount']:checked").val();
                                        var t3 = $donation_form.find("input[name='t3']:checked").val();

                                        if ( amount == 'other') {
                                            amount = $donation_form.find("#input_other_amount").val();
                                        }

                                        // submit proper form now
                                        if ( $("input[name='payment_type']:checked", $donation_form).val() == 'recurring' ) {
                                            var recurring_form = $('#popup_paypal_donate_form-recurring');

                                            recurring_form.find("input[name='item_name']").val(item_name);
                                            recurring_form.find("input[name='currency_code']").val(currency_code);
                                            recurring_form.find("input[name='a3']").val(amount);
                                            recurring_form.find("input[name='t3']").val(t3);

                                            recurring_form.find("input[type='submit']").trigger('click');

                                        } else if ( $("input[name='payment_type']:checked", $donation_form).val() == 'one_time' ) {
                                            var onetime_form = $('#popup_paypal_donate_form-onetime');

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
                            <form id="popup_paypal_donate_form-onetime" class="hidden" action="#" method="post">
                                <input type="hidden" name="cmd" value="_donations">
                                <input type="hidden" name="business" value="accounts@thememascot.com">

                                <input type="hidden" name="item_name" value="Educate Children"> <!-- updated dynamically -->
                                <input type="hidden" name="currency_code" value="USD"> <!-- updated dynamically -->
                                <input type="hidden" name="amount" value="20"> <!-- updated dynamically -->

                                <input type="hidden" name="no_shipping" value="1">
                                <input type="hidden" name="cn" value="Comments...">
                                <input type="hidden" name="tax" value="0">
                                <input type="hidden" name="lc" value="US">
                                <input type="hidden" name="bn" value="PP-DonationsBF">
                                <input type="hidden" name="return" value="http://www.yoursite.com/thankyou.html">
                                <input type="hidden" name="cancel_return" value="http://www.yoursite.com/paymentcancel.html">
                                <input type="hidden" name="notify_url" value="http://www.yoursite.com/notifypayment.php">
                                <input type="submit" name="submit">
                            </form>

                            <!-- Paypal Recurring Form -->
                            <form id="popup_paypal_donate_form-recurring" class="hidden" action="" method="post">
                                <input type="hidden" name="cmd" value="_xclick-subscriptions">
                                <input type="hidden" name="business" value="accounts@thememascot.com">

                                <input type="hidden" name="item_name" value="Educate Children"> <!-- updated dynamically -->
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
                                <input type="hidden" name="cancel_return" value="http://www.yoursite.com/paymentcancel.html">
                                <input type="hidden" name="notify_url" value="http://www.yoursite.com/notifypayment.php">
                                <input type="submit" name="submit">
                            </form>
                            <!-- ===== END: Paypal Both Onetime/Recurring Form ===== -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
   <!-- Start main-content -->
    <div class="main-content">

        <!-- Section: inner-header -->
        <section class="inner-header divider layer-overlay overlay-dark" data-bg-img="{{asset('themes/frontend/images/bg/bg2.jpg')}}">
            <div class="container pt-30 pb-30">
                <!-- Section Content -->
                <div class="section-content text-center">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 text-center">
                            <h3 class="text-theme-colored font-36">BLOG DETAILS</h3>
                            <!--<ol class="breadcrumb text-center mt-10 white">
                              <li><a href="#">Home</a></li>
                              <li><a href="#">Pages</a></li>
                              <li class="active">Volunteer Details</li>
                            </ol>-->
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Section: Volunteer Details -->
        <section>
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="thumb">
                                <img src="{{ asset('uploads/pages/'.$project->image) }}" alt="No image Found" height="240px" width="240px">
                            </div>
                        </div>
                        @if(session()->has('message'))
                            <h4 style="text-align: center" class="alert alert-success">{{session()->get('message')}}</h4>
                        @endif
                        <input type="hidden" value="{{$project->id}}" id="likeid">
                        <div class="col-md-8">
                            <div class="row mt-30">
                                <div class="col-md-8">
                                    <h4 class="line-bottom">News:</h4>
                                    <div class="volunteer-address">

                                                <div class="bg-light media border-bottom p-15 mb-20">
                                                    <div class="media-left">
                                                        <i class="fa fa-book text-theme-colored font-24 mt-5"></i>
                                                    </div>
                                                    <div class="media-body">

                                                        @if(isset($project))
                                                            <p>{!!  str_limit($project->description ,'300','..')!!}</p>
                                                        @else
                                                            <p>No record Found</p>
                                                        @endif
                                                    </div>
                                                </div>
                                        <?php
                                        $var = DB::table('comments')->where('id', '=', $project->id)->where('likes','=',1)->count();
                                        ?>
                                        <ul class="styled-icons icon-dark icon-theme-colored icon-sm mt-15 mb-0">
                                            @if($var>=1)
                                            <li><button id="likebutton" class="btn"><i class="fa fa-thumbs-up"></i></button></li>&nbsp;&nbsp;&nbsp;&nbsp;
                                            @else
                                            <li><button id="likebuttonset" class="btn" >Liked</button></li>&nbsp;&nbsp;&nbsp;&nbsp;
                                            @endif
                                           <li><button type="button" class="btn" data-toggle="modal" data-target="#myModal1" style="margin-left:-15px;"><i class="fa fa-comment-o"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                @if(session()->has('msg'))
                                    <h3 class="alert-success">{{session()->get('msg')}}</h3>
                                @endif

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
    <script>

        $("#likebutton").click(function(e) {

            e.preventDefault();
            $.ajax({
                type: "POST",
                url: "/news/blog/like",
                data: {
                    "_token": "{{ csrf_token() }}",
                    id: $("#likeid").val()

                },
                success: function(result) {

                },
                error: function(result) {
                    alert('error');
                }
            });
        });
    </script>
@endsection
