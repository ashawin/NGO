@extends('themes.frontend.layout.app')
@section('content')


    <style>
        #input_11_23 li {
            color: #000;
            padding: 10px !important;
            margin-right: 10px !important;
            display: inline-table;
            border-radius: 2px;
            border: 1px solid #000;
        }
        .default-p {
            /* font-size: 1em !important; */
            background-color: #d7d4c2;
            padding: 10px !important;
            color: #000 !important
        }

        .default-b {
            font-weight: bold;
            font-size: 100%

        }

        /* Customize the label (the container) */
        .container1 {
            display: block;
            position: relative;
            padding-left: 35px;
            margin-bottom: 12px;
            cursor: pointer;
            font-size: 22px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        /* Hide the browser's default radio button */
        .container1 input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
            height: 0;
            width: 0;
        }

        /* Create a custom radio button */
        .checkmark1 {
            position: absolute;
            top: 0;
            left: 0;
            height: 25px;
            width: 25px;
            background-color: #eee;
            border-radius: 50%;
        }

        /* On mouse-over, add a grey background color */
        .container1:hover input ~ .checkmark1 {
            background-color: #ccc;
        }

        /* When the radio button is checked, add a blue background */
        .container1 input:checked ~ .checkmark1 {
            background-color: #008d7d;
        }

        /* Create the indicator (the dot/circle - hidden when not checked) */
        .checkmark1:after {
            content: "";
            position: absolute;
            display: none;
        }

        /* Show the indicator (dot/circle) when checked */
        .container1 input:checked ~ .checkmark1:after {
            display: block;
        }

        /* Style the indicator (dot/circle) */
        .container1 .checkmark1:after {
            top: 9px;
            left: 9px;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: white;
        }
    </style>
    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <section class="">
            <button type="button" class="close" data-dismiss="modal" style="width:60px;">&times;</button>
            <div class="container" style="max-width: 700px;">
                <h3 class="bg-theme-colored p-15 mb-0 text-white">Donation Through PayPal (One Time / Recurring)</h3>
                <div class="section-content bg-white p-30">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- ===== START: Paypal Both Onetime/Recurring Form ===== -->
                            <form method="post" action="{{route('savedonation')}}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <img src="images/images/payment-card-logo-sm.png">
                                        <div class="form-group mt-20 mb-20">
                                            <label><strong>Payment Type</strong></label> <br>
                                            <label class="radio-inline">
                                                <input type="radio" checked="" value="one_time" name="payment_type">
                                                One Time
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="recurring" name="payment_type">
                                                Recurring
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

                                    <div class="col-sm-6">
                                        <div class="form-group mb-20">
                                            <label><strong>I Want to Donate for</strong></label>
                                            <select name="donate_for" class="form-control" required>
                                                <option value="Educate Children">Educate Children</option>
                                                <option value="Child Camps">Child Camps</option>
                                                <option value="Clean Water for Life">Clean Water for Life</option>
                                                <option value="Campaign for Child Poverty">Campaign for Child Poverty
                                                </option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group mb-20">
                                            <label><strong>Currency</strong></label>
                                            <select name="currency_code" class="form-control">
                                                <option value="">Select Currency</option>
                                                <option value="USD" selected="selected">USD - U.S. Dollars</option>
                                                <option value="AUD">AUD - Australian Dollars</option>
                                                <option value="BRL">BRL - Brazilian Reais</option>
                                                <option value="GBP">GBP - British Pounds</option>
                                                <option value="HKD">HKD - Hong Kong Dollars</option>
                                                <option value="HUF">HUF - Hungarian Forints</option>
                                                <option value="INR">INR - Indian Rupee</option>
                                                <option value="ILS">ILS - Israeli New Shekels</option>
                                                <option value="JPY">JPY - Japanese Yen</option>
                                                <option value="MYR">MYR - Malaysian Ringgit</option>
                                                <option value="MXN">MXN - Mexican Pesos</option>
                                                <option value="TWD">TWD - New Taiwan Dollars</option>
                                                <option value="NZD">NZD - New Zealand Dollars</option>
                                                <option value="NOK">NOK - Norwegian Kroner</option>
                                                <option value="PHP">PHP - Philippine Pesos</option>
                                                <option value="PLN">PLN - Polish Zlotys</option>
                                                <option value="RUB">RUB - Russian Rubles</option>
                                                <option value="SGD">SGD - Singapore Dollars</option>
                                                <option value="SEK">SEK - Swedish Kronor</option>
                                                <option value="CHF">CHF - Swiss Francs</option>
                                                <option value="THB">THB - Thai Baht</option>
                                                <option value="TRY">TRY - Turkish Liras</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group mb-20">
                                            <label><strong>How much do you want to donate?</strong></label>
                                            <div class="radio mt-5">
                                                <label class="radio-inline">
                                                    <input type="radio" name="amount" value="20">
                                                    $20</label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="amount" value="50">
                                                    $50</label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="amount" value="100">
                                                    $100</label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="amount" value="200">
                                                    $200</label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="amount" value="500">
                                                    $500</label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="amount" value="other">
                                                    Other Amount</label>
                                            </div>
                                            <div id="custom_other_amount">
                                                <label><strong>Custom Amount:</strong></label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <button type="submit"
                                                    class="btn btn-flat btn-dark btn-theme-colored mt-10 pl-30 pr-30"
                                                    data-loading-text="Please wait...">Donate Now
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </form>

                            <!-- Script for Donation Form Custom Amount -->
                            <script type="text/javascript">
                                $(document).ready(function (e) {
                                    var $donation_form = $("#popup_paypal_donate_form_onetime_recurring");
                                    //toggle custom amount
                                    var $custom_other_amount = $donation_form.find("#custom_other_amount");
                                    $custom_other_amount.hide();
                                    $donation_form.find("[name='amount']").change(function () {
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
                                        //$( "#popup_paypal_donate_form-onetime" ).submit();
                                        var item_name = $donation_form.find("select[name='item_name'] option:selected").val();
                                        var currency_code = $donation_form.find("select[name='currency_code'] option:selected").val();
                                        var amount = $donation_form.find("[name='amount']:checked").val();
                                        var t3 = $donation_form.find("input[name='t3']:checked").val();

                                        if (amount == 'other') {
                                            amount = $donation_form.find("#input_other_amount").val();
                                        }

                                        // submit proper form now
                                        if ($("input[name='payment_type']:checked", $donation_form).val() == 'recurring') {
                                            var recurring_form = $('#popup_paypal_donate_form-recurring');

                                            recurring_form.find("input[name='item_name']").val(item_name);
                                            recurring_form.find("input[name='currency_code']").val(currency_code);
                                            recurring_form.find("input[name='a3']").val(amount);
                                            recurring_form.find("input[name='t3']").val(t3);

                                            recurring_form.find("input[type='submit']").trigger('click');

                                        } else if ($("input[name='payment_type']:checked", $donation_form).val() == 'one_time') {
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
                            <form id="popup_paypal_donate_form-recurring" class="hidden" action="" method="post">
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
        <section class="inner-header divider layer-overlay overlay-dark"
                 data-bg-img="{{asset('themes/frontend/images/bg/bg2.jpg')}}">
            <div class="container pt-30 pb-30">
                <!-- Section Content -->
                <div class="section-content text-center">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 text-center">
                            <h2 class="text-theme-colored font-36">WAY TO DONATE</h2>
                            <!--<ol class="breadcrumb text-center mt-10 white">
                              <li><a href="#">Home</a></li>
                              <li><a href="#">Pages</a></li>
                              <li class="active">Page Title</li>
                            </ol>-->
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Section: Have Any Question -->
        <section class="divider">
            <div class="container pt-60 pb-60">
                <div class="section-title mb-60">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="esc-heading small-border text-center">
                                <h3>Have any Questions?</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="col-sm-12 col-md-4">
                            <div class="contact-info text-center">
                                <i class="fa fa-phone font-36 mb-10 text-theme-colored"></i>
                                <h4>Donate by Call </h4>
                                <h6 class="text-gray">Phone: &nbsp{{$initial->phone}}</h6>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="contact-info text-center">
                                <i class="fa fa-map-marker font-36 mb-10 text-theme-colored"></i>
                                <h4>Address</h4>
                                <h6 class="text-gray">{{$initial->location}}</h6>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="contact-info text-center">
                                <i class="fa fa-envelope font-36 mb-10 text-theme-colored"></i>
                                <h4>Donate by Mail</h4>
                                <h6 class="text-gray">{{$initial->email}}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Divider: Contact -->
        <section class="divider bg-lighter">
            <div class="container">

                <h3 class="line-bottom mt-0 mb-30">Donate Now</h3>
                <div class="col-md-12">
                    <div class="col-md-4">
                        <label class="container1">Indian
                            <input id="indianclick" type="checkbox" checked="checked">
                            <span class="checkmark1"></span>
                        </label>
                    </div>
                    <div class="col-md-3">
                        <label class="container1">Foreign
                            <input id="foreignclick" type="checkbox">
                            <span class="checkmark1"></span>
                        </label>
                    </div>
                </div>
                <div class="row pt-30">

                    <div class="col-md-7">

                        <div id="indian" style="display:block">
                            <!-- Contact Form -->
                            <form action="{{route('savedonation')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label><strong>Enter title</strong> &nbsp;&nbsp;
                                                <small>*</small>
                                            </label>
                                            <input name="title" class="form-control required"
                                                   onclick="autosearch()" type="text" id="titleind"
                                                   placeholder="Title" list="title" required>
                                            <datalist id="title">
                                                <option>Mr</option>
                                                <option>Ms</option>
                                                <option>Mrs</option>
                                            </datalist>
                                        </div>

                                        @if ($errors->has('title'))
                                            <lable class="alert-danger">{{$errors->first('title')}}</lable>
                                        @endif
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Date of birth(Year Not Required)

                                            </label>
                                            <input name="dob" class="form-control required date of birth" type="text"
                                                   placeholder="DD/MM" tabindex="3" maxlength="5" id="dobind" onkeyup="mydateind()"   required>
                                        </div>


                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>First Name
                                                <small>*</small>
                                            </label>
                                            <input name="first_name" class="form-control required" type="text"
                                                   placeholder="Enter First name" required>
                                        </div>
                                        @if ($errors->has('first_name'))
                                            <lable class="alert-danger">{{$errors->first('first_name')}}</lable>
                                        @endif
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Middle Name
                                                <small>*</small>
                                            </label>
                                            <input name="second_name" class="form-control" type="text"
                                                   placeholder="Enter Middle name" required>
                                        </div>
                                        @if ($errors->has('second_name'))
                                            <lable class="alert-danger">{{$errors->first('second_name')}}</lable>
                                        @endif
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Last Name

                                            </label>
                                            <input name="last_name" class="form-control" type="text"
                                                   placeholder="Enter Last name" >
                                        </div>
                                        @if ($errors->has('last_name'))
                                            <lable class="alert-danger">{{$errors->first('last_name')}}</lable>
                                        @endif
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Email
                                                <small>*</small>
                                            </label>
                                            <input name="email" class="form-control required email" type="email"
                                                   placeholder="Enter Email" required>
                                        </div>
                                        @if ($errors->has('email'))
                                            <lable class="alert-danger">{{$errors->first('email')}}</lable>
                                        @endif
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Address
                                                <small>*</small>
                                            </label>
                                            <input name="address" class="form-control required " type="text"
                                                   placeholder="Enter Address" required>
                                        </div>
                                        @if ($errors->has('address'))
                                            <lable class="alert-danger">{{$errors->first('address')}}</lable>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>City
                                                <small>*</small>
                                            </label>
                                            <input name="city" class="form-control required" type="text"
                                                   placeholder="Enter city" required>
                                        </div>
                                        @if ($errors->has('city'))
                                            <lable class="alert-danger">{{$errors->first('city')}}</lable>
                                        @endif
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>State/Province
                                                <small>*</small>
                                            </label>
                                            <input name="state" class="form-control" type="text"
                                                   placeholder="State/Province" required>
                                        </div>
                                        @if ($errors->has('state'))
                                            <lable class="alert-danger">{{$errors->first('state')}}</lable>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Country
                                                <small>*</small>
                                            </label>
                                            <select id="country" name="country" class="form-control" required>
                                                <option value="Afghanistan">Afghanistan</option>
                                                <option value="Åland Islands">Åland Islands</option>
                                                <option value="Albania">Albania</option>
                                                <option value="Algeria">Algeria</option>
                                                <option value="American Samoa">American Samoa</option>
                                                <option value="Andorra">Andorra</option>
                                                <option value="Angola">Angola</option>
                                                <option value="Anguilla">Anguilla</option>
                                                <option value="Antarctica">Antarctica</option>
                                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                <option value="Argentina">Argentina</option>
                                                <option value="Armenia">Armenia</option>
                                                <option value="Aruba">Aruba</option>
                                                <option value="Australia">Australia</option>
                                                <option value="Austria">Austria</option>
                                                <option value="Azerbaijan">Azerbaijan</option>
                                                <option value="Bahamas">Bahamas</option>
                                                <option value="Bahrain">Bahrain</option>
                                                <option value="Bangladesh">Bangladesh</option>
                                                <option value="Barbados">Barbados</option>
                                                <option value="Belarus">Belarus</option>
                                                <option value="Belgium">Belgium</option>
                                                <option value="Belize">Belize</option>
                                                <option value="Benin">Benin</option>
                                                <option value="Bermuda">Bermuda</option>
                                                <option value="Bhutan">Bhutan</option>
                                                <option value="Bolivia">Bolivia</option>
                                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                <option value="Botswana">Botswana</option>
                                                <option value="Bouvet Island">Bouvet Island</option>
                                                <option value="Brazil">Brazil</option>
                                                <option value="British Indian Ocean Territory">British Indian Ocean
                                                    Territory
                                                </option>
                                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                <option value="Bulgaria">Bulgaria</option>
                                                <option value="Burkina Faso">Burkina Faso</option>
                                                <option value="Burundi">Burundi</option>
                                                <option value="Cambodia">Cambodia</option>
                                                <option value="Cameroon">Cameroon</option>
                                                <option value="Canada">Canada</option>
                                                <option value="Cape Verde">Cape Verde</option>
                                                <option value="Cayman Islands">Cayman Islands</option>
                                                <option value="Central African Republic">Central African Republic
                                                </option>
                                                <option value="Chad">Chad</option>
                                                <option value="Chile">Chile</option>
                                                <option value="China">China</option>
                                                <option value="Christmas Island">Christmas Island</option>
                                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                                <option value="Colombia">Colombia</option>
                                                <option value="Comoros">Comoros</option>
                                                <option value="Congo">Congo</option>
                                                <option value="Congo, The Democratic Republic of The">Congo, The
                                                    Democratic Republic of The
                                                </option>
                                                <option value="Cook Islands">Cook Islands</option>
                                                <option value="Costa Rica">Costa Rica</option>
                                                <option value="Cote D'ivoire">Cote D'ivoire</option>
                                                <option value="Croatia">Croatia</option>
                                                <option value="Cuba">Cuba</option>
                                                <option value="Cyprus">Cyprus</option>
                                                <option value="Denmark">Denmark</option>
                                                <option value="Czech Republic">Czech Republic</option>
                                                <option value="Djibouti">Djibouti</option>
                                                <option value="Dominica">Dominica</option>
                                                <option value="Dominican Republic">Dominican Republic</option>
                                                <option value="Ecuador">Ecuador</option>
                                                <option value="Egypt">Egypt</option>
                                                <option value="El Salvador">El Salvador</option>
                                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                <option value="Eritrea">Eritrea</option>
                                                <option value="Ethiopia">Ethiopia</option>
                                                <option value="Estonia">Estonia</option>
                                                <option value="Falkland Islands (Malvinas)">Falkland Islands
                                                    (Malvinas)
                                                </option>
                                                <option value="Faroe Islands">Faroe Islands</option>
                                                <option value="Fiji">Fiji</option>
                                                <option value="Finland">Finland</option>
                                                <option value="France">France</option>
                                                <option value="French Guiana">French Guiana</option>
                                                <option value="French Polynesia">French Polynesia</option>
                                                <option value="French Southern Territories">French Southern
                                                    Territories
                                                </option>
                                                <option value="Gabon">Gabon</option>
                                                <option value="Gambia">Gambia</option>
                                                <option value="Georgia">Georgia</option>
                                                <option value="Germany">Germany</option>
                                                <option value="Ghana">Ghana</option>
                                                <option value="Gibraltar">Gibraltar</option>
                                                <option value="Greece">Greece</option>
                                                <option value="Greenland">Greenland</option>
                                                <option value="Grenada">Grenada</option>
                                                <option value="Guadeloupe">Guadeloupe</option>
                                                <option value="Guam">Guam</option>
                                                <option value="Guatemala">Guatemala</option>
                                                <option value="Guernsey">Guernsey</option>
                                                <option value="Guinea">Guinea</option>
                                                <option value="Guinea-bissau">Guinea-bissau</option>
                                                <option value="Guyana">Guyana</option>
                                                <option value="Haiti">Haiti</option>
                                                <option value="Heard Island and Mcdonald Islands">Heard Island and
                                                    Mcdonald Islands
                                                </option>
                                                <option value="Holy See (Vatican City State)">Holy See (Vatican City
                                                    State)
                                                </option>
                                                <option value="Honduras">Honduras</option>
                                                <option value="Hong Kong">Hong Kong</option>
                                                <option value="Hungary">Hungary</option>
                                                <option value="Iceland">Iceland</option>
                                                <option value="India">India</option>
                                                <option value="Indonesia">Indonesia</option>
                                                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of
                                                </option>
                                                <option value="Iraq">Iraq</option>
                                                <option value="Ireland">Ireland</option>
                                                <option value="Isle of Man">Isle of Man</option>
                                                <option value="Israel">Israel</option>
                                                <option value="Italy">Italy</option>
                                                <option value="Jamaica">Jamaica</option>
                                                <option value="Japan">Japan</option>
                                                <option value="Jersey">Jersey</option>
                                                <option value="Jordan">Jordan</option>
                                                <option value="Kazakhstan">Kazakhstan</option>
                                                <option value="Kenya">Kenya</option>
                                                <option value="Kiribati">Kiribati</option>
                                                <option value="Korea, Democratic People's Republic of">Korea, Democratic
                                                    People's Republic of
                                                </option>
                                                <option value="Korea, Republic of">Korea, Republic of</option>
                                                <option value="Kuwait">Kuwait</option>
                                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                <option value="Lao People's Democratic Republic">Lao People's Democratic
                                                    Republic
                                                </option>
                                                <option value="Latvia">Latvia</option>
                                                <option value="Lebanon">Lebanon</option>
                                                <option value="Lesotho">Lesotho</option>
                                                <option value="Liberia">Liberia</option>
                                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                                <option value="Liechtenstein">Liechtenstein</option>
                                                <option value="Lithuania">Lithuania</option>
                                                <option value="Luxembourg">Luxembourg</option>
                                                <option value="Macao">Macao</option>
                                                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia,
                                                    The Former Yugoslav Republic of
                                                </option>
                                                <option value="Madagascar">Madagascar</option>
                                                <option value="Malawi">Malawi</option>
                                                <option value="Malaysia">Malaysia</option>
                                                <option value="Maldives">Maldives</option>
                                                <option value="Mali">Mali</option>
                                                <option value="Malta">Malta</option>
                                                <option value="Marshall Islands">Marshall Islands</option>
                                                <option value="Martinique">Martinique</option>
                                                <option value="Mauritania">Mauritania</option>
                                                <option value="Mauritius">Mauritius</option>
                                                <option value="Mayotte">Mayotte</option>
                                                <option value="Mexico">Mexico</option>
                                                <option value="Micronesia, Federated States of">Micronesia, Federated
                                                    States of
                                                </option>
                                                <option value="Moldova, Republic of">Moldova, Republic of</option>
                                                <option value="Monaco">Monaco</option>
                                                <option value="Mongolia">Mongolia</option>
                                                <option value="Montenegro">Montenegro</option>
                                                <option value="Montserrat">Montserrat</option>
                                                <option value="Morocco">Morocco</option>
                                                <option value="Mozambique">Mozambique</option>
                                                <option value="Myanmar">Myanmar</option>
                                                <option value="Namibia">Namibia</option>
                                                <option value="Nauru">Nauru</option>
                                                <option value="Nepal">Nepal</option>
                                                <option value="Netherlands">Netherlands</option>
                                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                <option value="New Caledonia">New Caledonia</option>
                                                <option value="New Zealand">New Zealand</option>
                                                <option value="Nicaragua">Nicaragua</option>
                                                <option value="Niger">Niger</option>
                                                <option value="Nigeria">Nigeria</option>
                                                <option value="Niue">Niue</option>
                                                <option value="Norfolk Island">Norfolk Island</option>
                                                <option value="Northern Mariana Islands">Northern Mariana Islands
                                                </option>
                                                <option value="Norway">Norway</option>
                                                <option value="Oman">Oman</option>
                                                <option value="Pakistan">Pakistan</option>
                                                <option value="Palau">Palau</option>
                                                <option value="Palestinian Territory, Occupied">Palestinian Territory,
                                                    Occupied
                                                </option>
                                                <option value="Panama">Panama</option>
                                                <option value="Papua New Guinea">Papua New Guinea</option>
                                                <option value="Paraguay">Paraguay</option>
                                                <option value="Peru">Peru</option>
                                                <option value="Philippines">Philippines</option>
                                                <option value="Pitcairn">Pitcairn</option>
                                                <option value="Poland">Poland</option>
                                                <option value="Portugal">Portugal</option>
                                                <option value="Puerto Rico">Puerto Rico</option>
                                                <option value="Qatar">Qatar</option>
                                                <option value="Reunion">Reunion</option>
                                                <option value="Romania">Romania</option>
                                                <option value="Russian Federation">Russian Federation</option>
                                                <option value="Rwanda">Rwanda</option>
                                                <option value="Saint Helena">Saint Helena</option>
                                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                <option value="Saint Lucia">Saint Lucia</option>
                                                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon
                                                </option>
                                                <option value="Saint Vincent and The Grenadines">Saint Vincent and The
                                                    Grenadines
                                                </option>
                                                <option value="Samoa">Samoa</option>
                                                <option value="San Marino">San Marino</option>
                                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                <option value="Saudi Arabia">Saudi Arabia</option>
                                                <option value="Senegal">Senegal</option>
                                                <option value="Serbia">Serbia</option>
                                                <option value="Seychelles">Seychelles</option>
                                                <option value="Sierra Leone">Sierra Leone</option>
                                                <option value="Singapore">Singapore</option>
                                                <option value="Slovakia">Slovakia</option>
                                                <option value="Slovenia">Slovenia</option>
                                                <option value="Solomon Islands">Solomon Islands</option>
                                                <option value="Somalia">Somalia</option>
                                                <option value="South Africa">South Africa</option>
                                                <option value="South Georgia and The South Sandwich Islands">South
                                                    Georgia and The South Sandwich Islands
                                                </option>
                                                <option value="Spain">Spain</option>
                                                <option value="Sri Lanka">Sri Lanka</option>
                                                <option value="Sudan">Sudan</option>
                                                <option value="Suriname">Suriname</option>
                                                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                                <option value="Swaziland">Swaziland</option>
                                                <option value="Sweden">Sweden</option>
                                                <option value="Switzerland">Switzerland</option>
                                                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                                <option value="Taiwan, Province of China">Taiwan, Province of China
                                                </option>
                                                <option value="Tajikistan">Tajikistan</option>
                                                <option value="Tanzania, United Republic of">Tanzania, United Republic
                                                    of
                                                </option>
                                                <option value="Thailand">Thailand</option>
                                                <option value="Timor-leste">Timor-leste</option>
                                                <option value="Togo">Togo</option>
                                                <option value="Tokelau">Tokelau</option>
                                                <option value="Tonga">Tonga</option>
                                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                <option value="Tunisia">Tunisia</option>
                                                <option value="Turkey">Turkey</option>
                                                <option value="Turkmenistan">Turkmenistan</option>
                                                <option value="Turks and Caicos Islands">Turks and Caicos Islands
                                                </option>
                                                <option value="Tuvalu">Tuvalu</option>
                                                <option value="Uganda">Uganda</option>
                                                <option value="Ukraine">Ukraine</option>
                                                <option value="United Arab Emirates">United Arab Emirates</option>
                                                <option value="United Kingdom">United Kingdom</option>
                                                <option value="United States">United States</option>
                                                <option value="United States Minor Outlying Islands">United States Minor
                                                    Outlying Islands
                                                </option>
                                                <option value="Uruguay">Uruguay</option>
                                                <option value="Uzbekistan">Uzbekistan</option>
                                                <option value="Vanuatu">Vanuatu</option>
                                                <option value="Venezuela">Venezuela</option>
                                                <option value="Viet Nam">Viet Nam</option>
                                                <option value="Virgin Islands, British">Virgin Islands, British</option>
                                                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                                <option value="Wallis and Futuna">Wallis and Futuna</option>
                                                <option value="Western Sahara">Western Sahara</option>
                                                <option value="Yemen">Yemen</option>
                                                <option value="Zambia">Zambia</option>
                                                <option value="Zimbabwe">Zimbabwe</option>
                                            </select>
                                        </div>
                                        @if ($errors->has('country'))
                                            <lable class="alert-success">{{$errors->first('country')}}</lable>
                                        @endif
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Mobile Number
                                                <small>*</small>
                                            </label>
                                            <input name="phone" class="form-control" type="text"
                                                   placeholder="Enter Mobile number" required>

                                            @if ($errors->has('phone'))
                                                <lable class="alert-danger">{{$errors->first('phone')}}</lable>
                                            @endif
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Landline Number</label>
                                            <input name="land_phone" class="form-control" type="text"
                                                   placeholder="Enter Landline number" >
                                        </div>
                                        @if ($errors->has('land_phone'))
                                            <lable class="alert-danger">{{$errors->first('land_phone')}}</lable>
                                        @endif
                                    </div>
                                    <div class="col-sm-6">
                                        <label><strong>I Want to Donate for</strong>&nbsp;&nbsp;<small>*</small>
                                        </label>
                                        <select name="donate_for" class="form-control" required>
                                            <option value="Emergency Relief">Emergency Relief</option>
                                            <option value="Mother and Child Nutrition">Mother and Child Nutrition
                                            </option>
                                            <option value="Livelihood">Livelihood</option>
                                            <option value="Anti Human Trafficking">Anti Human Trafficking</option>
                                            <option value="Training">Training</option>
                                            <option value="HIV/AIDS">HIV/AIDS</option>
                                            <option value="Piece Building">Piece Building</option>
                                            <option value="Climate Change Adaptation">Climate Change Adaptation</option>
                                            <option value="Urban Poverty">Urban Poverty</option>
                                            <option value="Advocacy ">Advocacy</option>
                                            <option value="Child Development">Child Development</option>
                                        </select>
                                    </div>
                                    @if ($errors->has('donate_for'))
                                        <lable class="alert-danger">{{$errors->first('donate_for')}}</lable>
                                    @endif
                                </div>
                                <br/>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label><strong>Currency</strong>&nbsp;&nbsp;<small>*</small>
                                        </label>
                                        <select name="cr" class="form-control" required>
                                            <option value="356" selected>INR</option>
                                            <option value="840">USD</option>

                                        </select>
                                    </div>
                                    <div id="amountinddiv" class="col-sm-6">
                                        <label><strong>How much do you want to donate?</strong>&nbsp;&nbsp;<small>*
                                            </small>
                                        </label>
                                        <select name="amount" id="amountind" onclick="GetSelectedvalueind()"
                                                class="form-control" required>
                                            <option value="1">20</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                            <option value="200">200</option>
                                            <option value="500">500</option>
                                            <option value="other">Other Amount</option>
                                        </select>
                                    </div>

                                    <div style="display: none" id="inputamountind" class="col-sm-6">
                                        <label><strong>How much do you want to donate?</strong>&nbsp;&nbsp;<small>*
                                            </small>
                                        </label>
                                        <input name="amount" class="form-control" type="text" id="inputamounti"
                                               placeholder="amount" value="20">
                                    </div>
                                    @if ($errors->has('amount'))
                                        <lable class="alert-danger">{{$errors->first('amount')}}</lable>
                                    @endif

                                </div>
                                <br/>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>ZIP / Pin Code
                                                <small>*</small>
                                            </label>
                                            <input name="pin" class="form-control required" type="text"
                                                   placeholder="Enter ZIP / Pin code" required>
                                        </div>
                                        @if ($errors->has('pin'))
                                            <lable class="alert-danger">{{$errors->first('pin')}}</lable>
                                        @endif
                                    </div>
                                    <div class="col-sm-6">

                                        <li id="field_1_7" style="display:block;"
                                            class="gfield gf_left_third gfield_contains_required field_sublabel_above field_description_below hidden_label">
                                            <label class="gfield_label" for="input_1_7">PAN No.<span
                                                        class="gfield_required">*</span></label>
                                            <div class="ginput_container"><input name="pan" id="pan" type="text" onblur="panvalidation()"
                                                                                 value="" class="form-control"
                                                                                 maxlength="11"
                                                                                 tabindex="16" placeholder="PAN No.*">
                                            </div>
                                            @if ($errors->has('pan'))
                                                <lable class="alert-danger">{{$errors->first('pan')}}</lable>
                                            @endif
                                        </li>

                                    </div>

                                </div>


                                <label
                                        for="choice_1_23_0" id="label_1_23_0">IF NRI</label>
                                <div class="ginput_container">
                                    <ul class="gfield_radio" id="input_11_23">
                                        <li class="gchoice_1_23_0">
                                            <input name="input_23" type="radio" value="Yes" id="yesnri" onclick="nri(this.id)"
                                                   tabindex="20"><label
                                                    for="choice_1_23_0" id="label_1_23_0">Yes</label>
                                        </li>
                                    <li class="gchoice_1_23_0">
                                        <input name="input_23" type="radio" value="No" id="nonri" onclick="nri(this.id)"

                                               tabindex="21"><label
                                                for="choice_1_23_1" id="label_1_23_1">No</label>
                                    </li>
                                    </ul>

                                    &nbsp; &nbsp; &nbsp; &nbsp;


                                </div>
                                <div  style="display: none" class="row" id="passdetails">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Passport Details
                                            </label>
                                            <input name="passport" class="form-control " type="text"
                                                   placeholder="Enter Passport Number">
                                        </div>

                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label> Expiry Date
                                            </label>
                                            <input name="exp_date" class="form-control " type="date"
                                                   placeholder="Expiry date">
                                        </div>

                                    </div>
                                </div>

                                <li id="field_1_14"
                                    class="gfield field_sublabel_above field_description_below hidden_label"
                                    style="display: block;margin-top: 20px;margin-bottom: 10px">
                                    <div class="ginput_container">
                                        <ul class="gfield_radio" id="input_1_14">
                                            <li class="gchoice_1_14_0"><input name="via" type="radio"
                                                                              value="1" id="choice_1_14_0"
                                                                              tabindex="22"><label for="choice_1_14_0"
                                                                                                   id="label_1_14_0">ONLINE
                                                    DONATION</label></li>
                                        </ul>
                                    </div>
                                </li>
                                <li id="field_1_17"
                                    class="gfield field_sublabel_above field_description_below hidden_label"
                                    style="display: block;margin-bottom: 10px">
                                    <div class="ginput_container">
                                        <ul class="gfield_radio" id="input_1_17">
                                            <li class="gchoice_1_17_0"><input name="via" type="radio"
                                                                              value="2"
                                                                              id="choice_1_17_0" tabindex="23"><label
                                                        for="choice_1_17_0" id="label_1_17_0">CHEQUE/DEMAND
                                                    DRAFT</label></li>
                                        </ul>
                                    </div>
                                </li>
                                <li id="field_1_18"
                                    class="gfield field_sublabel_above field_description_below hidden_label"
                                    style="display: block;margin-bottom: 20px">
                                    <div class="ginput_container">
                                        <ul class="gfield_radio" id="input_1_18">
                                            <li class="gchoice_1_18_0"><input name="via" type="radio"
                                                                              value="3"
                                                                              id="choice_1_18_0" tabindex="24"><label
                                                        for="choice_1_18_0" id="label_1_18_0">STANDING
                                                    INSTRUCTIONS</label></li>
                                        </ul>
                                    </div>
                                </li>
                                <div id="field_1_20"
                                     class="gfield gfield_html gfield_html_formatted gfield_no_follows_desc field_sublabel_above field_description_below"
                                     style="display: none;">
                                    <p class="default-p">Please make Cheques in favor of "EFICOR, New Delhi".On clicking
                                        <strong>'Letter
                                            to EFICOR'</strong> below you will see a page with letter that should be
                                        sent to EFICOR along with your cheque. You can print it directly from the screen
                                        using the 'Print' button at the bottom of the page.<br>
                                        Please send it to us so that we are fully compliant under Indian laws and we can
                                        send you a receipt and regular updates.<br> Our address is:
                                    </p>


                                    <p class="default-p">
                                        EFICOR,<br>
                                        308, Mahatta Tower,
                                        B-Block Community Centre,
                                        Janakpuri, New Delhi-110058
                                        Tel Fax : +91(0) 11-25516383/4/5
                                        Email:hq@eficor.org


                                    </p>

                                    <p class="default-p">EFICOR will always be blessed to receive your donation, however
                                        small. If you <font color="#000">would</font> like to make a regular donation,
                                        please use the ECS facility available with your bank or give a standing order to
                                        your banker for transfer to EFICOR's account. If you would like to make a
                                        standing order, please click <span class="me" style="cursor:pointer"
                                                                           id="gform_fields_3">I want to make a standing order</span>
                                    </p></div>
                                <div id="field_1_21"
                                     class="gfield gfield_html gfield_html_formatted gfield_no_follows_desc field_sublabel_above field_description_below"
                                     style="display: none;"><p> Thank you for considering a regular donation to
                                        EFICOR.<br>
                                        You can use your Bank's ECS facility or give a standing order to your banker to
                                        transfer a regular amount to EFICOR's account. Please fill in a few details and
                                        click on <strong>'Standing Order Letter'</strong> below and we will provide you
                                        with a standard letter that you can submit to your banker.</p>
                                    <div class="gf_browser_chrome gform_wrapper" style="">
                                        <div class="gform_body">
                                            <ul id="gform_fields_2"
                                                class="gform_fields top_label form_sublabel_above description_below">
                                                <li id="field_1_5"
                                                    class="gfield gfield_contains_required field_sublabel_above field_description_below hidden_label">
                                                    <label class="gfield_label" for="input_1_5">Bank Name<span
                                                                class="gfield_required">*</span></label>
                                                    <div class="ginput_container">
                                                        <input name="ba_name" id="input_1_5" type="text" value=""
                                                               maxlength="30" class="form-control" tabindex="9"
                                                               placeholder="Please Enter Bank Name*">
                                                    </div>
                                                </li>
                                                <li id="field_1_5"
                                                    class="gfield gfield_contains_required field_sublabel_above field_description_below hidden_label">
                                                    <label class="gfield_label" for="input_1_5">Branch Name<span
                                                                class="gfield_required">*</span></label>
                                                    <div class="ginput_container">
                                                        <input name="br_name" id="input_1_5" type="text" value=""
                                                               maxlength="30" class="form-control" tabindex="9"
                                                               placeholder="Please Enter Branch Name*">
                                                    </div>
                                                </li>
                                                <li id="field_1_5"
                                                    class="gfield gfield_contains_required field_sublabel_above field_description_below hidden_label">
                                                    <label class="gfield_label" for="input_1_5">Branch A/c No.<span
                                                                class="gfield_required">*</span></label>
                                                    <div class="ginput_container">
                                                        <input name="ac_no" id="input_1_5" type="text" value=""
                                                               maxlength="20" class="form-control" tabindex="9"
                                                               placeholder="Please Enter Account No*">
                                                    </div>
                                                </li>
                                                <li id="field_1_5"
                                                    class="gfield gfield_contains_required field_sublabel_above field_description_below hidden_label">
                                                    <label class="gfield_label" for="input_1_5">Starting From<span
                                                                class="gfield_required">*</span></label>
                                                    <div class="ginput_container">
                                                        <input name="Strt_from_date" id="Strt_from_date" type="date"
                                                               value="" class="form-control" tabindex="9"
                                                               placeholder="Enter starting from date* eg : dd/mm/yy">
                                                    </div>
                                                </li>
                                                <li id="field_1_5"
                                                    class="gfield gfield_contains_required field_sublabel_above field_description_below hidden_label">
                                                    <label class="gfield_label" for="input_1_5">Standing order for
                                                        transferring<span class="gfield_required">*</span></label>
                                                    <div class="ginput_container">
                                                        <select name="order_payment" id="transfering"
                                                                class="form-control gfield_select" tabindex="1">
                                                            <option>Select Standing order for transferring</option>
                                                            <option value="monthly">Monthly.</option>
                                                            <option value="quarterly">Quarterly.</option>
                                                            <option value="half yearly">Half Yearly.</option>
                                                            <option value="annually">Annually.</option>
                                                        </select>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p style="margin-top: 20px" class="default-p">If you would like to do the standing
                                        instruction through your bank's online
                                        banking, <br>EFICOR's banking details are:<br>
                                        Account Number: 30647111974<br>
                                        Name of the Bank: State Bank of India<br>
                                        Name of the Branch: District Center, Janakpuri, New Delhi<br>
                                        IFSC Code: SBIN0001706<br>


                                    </p></div>
                                <li id="field_1_28"
                                    class="gfield gfield_html gfield_html_formatted gfield_no_follows_desc field_sublabel_above field_description_below"
                                    style="display: none;"><b>Overseas Donations (Foreign National and Foreign
                                        Organizations/Corporates)</b><br><br>
                                    <b>Bank Transfer</b><br>
                                    <p>Please send your donations to the Bank account whose details are given below.
                                        <br><br>
                                        In order to comply with all Indian laws, EFICOR needs a letter from you. The
                                        letter is made available when you click on 'Letter for EFICOR' below. Attach it
                                        to an email and send it to us, please. We will send you a receipt and keep you
                                        updated on the use of your money. Thank you so much.</p>
                                    <b>Bank details for overseas donors</b><br>
                                    <p>Name of the Bank: State Bank of Mysore<br>
                                        Address: Nehru Place Branch, No. 3, 4, 5, DDA Building , Nehru Place<br>
                                        New Delhi – 110019, India<br><br>
                                        Official Name for the Account: EFICOR<br>
                                        Bank Account Number: 54015789609 <br>
                                        ABA Number (Routing Number or Swift Code) SBMYINBB415<br></p>
                                    <b>Cheque or Demand Draft</b>
                                    <p>Please make all Cheques or Demand Drafts drawn in favor of "EFICOR, New Delhi".
                                        <br><br>
                                        On clicking <strong>'Letter to EFICOR'</strong> below you will see a page with
                                        letter that should be sent to EFICOR along with your cheque. You can print it
                                        directly from the screen using the 'Print' button at the bottom of the page.
                                        Please send it to us so that we are fully compliant under Indian laws and we can
                                        send you a receipt and regular updates.
                                    </p>
                                    <p><b>EFICOR</b><br>
                                        308, Mahatta Tower,<br>
                                        B-Block Community Centre,<br>
                                        Janakpuri, New Delhi – 110058.<br>
                                        Tel fax: +91 (0) 11-25516383/4/5<br>
                                        Email: hq@eficor.org<br>
                                    </p>

                                </li>
                                @if ($errors->has('via'))
                                    <lable class="alert-danger">{{$errors->first('via')}}</lable>
                                @endif

                                <div class="form-group">
                                    <input name="form_botcheck" class="form-control" type="hidden" value=""/>
                                    <input type="submit" id="gform_submit_button_1"
                                           class="btn btn-dark btn-theme-colored"
                                           data-loading-text="Please wait..." value="Submit">

                                </div>
                            </form>
                        </div>
                        <div id="foreign" style="display:none">

                            <form action="{{route('savedonation')}}" method="post">

                                @csrf
                                <input type="hidden" name="via" value="4">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label><strong>Enter title</strong> &nbsp;&nbsp;
                                                <small>*</small>
                                            </label>
                                            <input name="title" class="form-control required" type="text"
                                                   placeholder="Title" list="titlefor">
                                            <datalist id="titlefor">
                                                <option>Mr</option>
                                                <option>Ms</option>
                                                <option>Mrs</option>
                                            </datalist>
                                        </div>
                                        @if ($errors->has('title'))
                                            <lable class="alert-danger">{{$errors->first('title')}}</lable>
                                        @endif
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Date of birth(Year Not Required)

                                            </label>
                                            <input name="dob" class="form-control required date of birth" type="text"
                                                   placeholder="DD/MM" tabindex="3" maxlength="5" id="dobfor" onkeyup="mydatefor()" >
                                        </div>
                                        @if ($errors->has('dob'))
                                            <lable class="alert-danger">{{$errors->first('dob')}}</lable>
                                        @endif

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>First Name
                                                <small>*</small>
                                            </label>
                                            <input name="first_name" class="form-control required" type="text"
                                                   placeholder="Enter First name">
                                        </div>
                                        @if ($errors->has('first_name'))
                                            <lable class="alert-danger">{{$errors->first('first_name')}}</lable>
                                        @endif
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Middle Name
                                                <small>*</small>
                                            </label>
                                            <input name="second_name" class="form-control" type="text"
                                                   placeholder="Enter Middle name">
                                        </div>
                                        @if ($errors->has('second_name'))
                                            <lable class="alert-danger">{{$errors->first('second_name')}}</lable>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Last Name
                                             
                                            </label>
                                            <input name="last_name" class="form-control" type="text"
                                                   placeholder="Enter Last name">
                                        </div>
                                        @if ($errors->has('last_name'))
                                            <lable class="alert-danger">{{$errors->first('last_name')}}</lable>
                                        @endif
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Email
                                                <small>*</small>
                                            </label>
                                            <input name="email" class="form-control required email" type="email"
                                                   placeholder="Enter Email">
                                        </div>
                                        @if ($errors->has('email'))
                                            <lable class="alert-danger">{{$errors->first('email')}}</lable>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Address
                                                <small>*</small>
                                            </label>
                                            <input name="address" class="form-control required " type="text"
                                                   placeholder="Enter Address">
                                        </div>
                                        @if ($errors->has('address'))
                                            <lable class="alert-danger">{{$errors->first('address')}}</lable>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>City
                                                <small>*</small>
                                            </label>
                                            <input name="city" class="form-control required" type="text"
                                                   placeholder="Enter city">
                                        </div>
                                        @if ($errors->has('city'))
                                            <lable class="alert-danger">{{$errors->first('city')}}</lable>
                                        @endif
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>State/Province
                                                <small>*</small>
                                            </label>
                                            <input name="state" class="form-control" type="text"
                                                   placeholder="State/Province">
                                        </div>
                                        @if ($errors->has('state'))
                                            <lable class="alert-danger">{{$errors->first('state')}}</lable>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Mobile Number
                                                <small>*</small>
                                            </label>
                                            <input name="phone" class="form-control" type="text"
                                                   placeholder="Enter Mobile number">

                                            @if ($errors->has('phone'))
                                                <lable class="alert-danger">{{$errors->first('phone')}}</lable>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Landline Number</label>
                                            <input name="land_phone" class="form-control" type="text"
                                                   placeholder="Enter Landline number">
                                        </div>
                                        @if ($errors->has('land_phone'))
                                            <lable class="alert-danger">{{$errors->first('land_phone')}}</lable>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label><strong>I Want to Donate for</strong>&nbsp;&nbsp;
                                            <small>*</small>
                                        </label>
                                        <select name="donate_for" class="form-control" required>
                                            <option value="Emergency Relief">Emergency Relief</option>
                                            <option value="Mother and Child Nutrition">Mother and Child Nutrition
                                            </option>
                                            <option value="Livelihood">Livelihood</option>
                                            <option value="Anti Human Trafficking">Anti Human Trafficking</option>
                                            <option value="Training">Training</option>
                                            <option value="HIV/AIDS">HIV/AIDS</option>
                                            <option value="Piece Building">Piece Building</option>
                                            <option value="Climate Change Adaptation">Climate Change Adaptation</option>
                                            <option value="Urban Poverty">Urban Poverty</option>
                                            <option value="Advocacy ">Advocacy</option>
                                            <option value="Child Development">Child Development</option>
                                        </select>
                                    </div>
                                    @if ($errors->has('donate_for'))
                                        <lable class="alert-danger">{{$errors->first('donate_for')}}</lable>
                                    @endif
                                </div>
                                <br/>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label><strong>Currency</strong>&nbsp;&nbsp;<small>*</small>
                                        </label>
                                        <select name="cr" class="form-control" required>
                                            <option value="840" selected>USD</option>
                                            <option value="356">INR</option>

                                        </select>
                                    </div>
                                    <div id="amountfordiv" class="col-sm-6">
                                        <label><strong>How much do you want to donate?</strong>&nbsp;&nbsp;<small>*
                                            </small>
                                        </label>
                                        <select name="amount" onclick="GetSelectedvaluefor()" id="amountfor"
                                                class="form-control" required>
                                            <option value="20">20</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                            <option value="200">200</option>
                                            <option value="500">500</option>
                                            <option value="other">Other Amount</option>
                                        </select>
                                    </div>
                                    <div id="inputamountfor" style="display:none" class="col-sm-6">
                                        <label><strong>How much do you want to donate?</strong>&nbsp;&nbsp;
                                            <small>*</small>
                                        </label>

                                        <input name="amount" class="form-control" type="text" id="inputamountf"
                                               placeholder="Amount" value="20" required>
                                    </div>
                                    @if ($errors->has('amount'))
                                        <lable class="alert-danger">{{$errors->first('amount')}}</lable>
                                    @endif

                                </div>
                                <br/>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>ZIP / Pin Code
                                                <small>*</small>
                                            </label>
                                            <input name="pin" class="form-control required" type="text"
                                                   placeholder="Enter ZIP / Pin code">
                                        </div>
                                        @if ($errors->has('pin'))
                                            <lable class="alert-danger">{{$errors->first('pin')}}</lable>
                                        @endif
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Country
                                                <small>*</small>
                                            </label>
                                            <select id="country" name="country" class="form-control" required>
                                                <option value="Afghanistan">Afghanistan</option>
                                                <option value="Åland Islands">Åland Islands</option>
                                                <option value="Albania">Albania</option>
                                                <option value="Algeria">Algeria</option>
                                                <option value="American Samoa">American Samoa</option>
                                                <option value="Andorra">Andorra</option>
                                                <option value="Angola">Angola</option>
                                                <option value="Anguilla">Anguilla</option>
                                                <option value="Antarctica">Antarctica</option>
                                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                <option value="Argentina">Argentina</option>
                                                <option value="Armenia">Armenia</option>
                                                <option value="Aruba">Aruba</option>
                                                <option value="Australia">Australia</option>
                                                <option value="Austria">Austria</option>
                                                <option value="Azerbaijan">Azerbaijan</option>
                                                <option value="Bahamas">Bahamas</option>
                                                <option value="Bahrain">Bahrain</option>
                                                <option value="Bangladesh">Bangladesh</option>
                                                <option value="Barbados">Barbados</option>
                                                <option value="Belarus">Belarus</option>
                                                <option value="Belgium">Belgium</option>
                                                <option value="Belize">Belize</option>
                                                <option value="Benin">Benin</option>
                                                <option value="Bermuda">Bermuda</option>
                                                <option value="Bhutan">Bhutan</option>
                                                <option value="Bolivia">Bolivia</option>
                                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                <option value="Botswana">Botswana</option>
                                                <option value="Bouvet Island">Bouvet Island</option>
                                                <option value="Brazil">Brazil</option>
                                                <option value="British Indian Ocean Territory">British Indian Ocean
                                                    Territory
                                                </option>
                                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                <option value="Bulgaria">Bulgaria</option>
                                                <option value="Burkina Faso">Burkina Faso</option>
                                                <option value="Burundi">Burundi</option>
                                                <option value="Cambodia">Cambodia</option>
                                                <option value="Cameroon">Cameroon</option>
                                                <option value="Canada">Canada</option>
                                                <option value="Cape Verde">Cape Verde</option>
                                                <option value="Cayman Islands">Cayman Islands</option>
                                                <option value="Central African Republic">Central African Republic
                                                </option>
                                                <option value="Chad">Chad</option>
                                                <option value="Chile">Chile</option>
                                                <option value="China">China</option>
                                                <option value="Christmas Island">Christmas Island</option>
                                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                                <option value="Colombia">Colombia</option>
                                                <option value="Comoros">Comoros</option>
                                                <option value="Congo">Congo</option>
                                                <option value="Congo, The Democratic Republic of The">Congo, The
                                                    Democratic Republic of The
                                                </option>
                                                <option value="Cook Islands">Cook Islands</option>
                                                <option value="Costa Rica">Costa Rica</option>
                                                <option value="Cote D'ivoire">Cote D'ivoire</option>
                                                <option value="Croatia">Croatia</option>
                                                <option value="Cuba">Cuba</option>
                                                <option value="Cyprus">Cyprus</option>
                                                <option value="Czech Republic">Czech Republic</option>
                                                <option value="Denmark">Denmark</option>
                                                <option value="Djibouti">Djibouti</option>
                                                <option value="Dominica">Dominica</option>
                                                <option value="Dominican Republic">Dominican Republic</option>
                                                <option value="Ecuador">Ecuador</option>
                                                <option value="Egypt">Egypt</option>
                                                <option value="El Salvador">El Salvador</option>
                                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                <option value="Eritrea">Eritrea</option>
                                                <option value="Estonia">Estonia</option>
                                                <option value="Ethiopia">Ethiopia</option>
                                                <option value="Falkland Islands (Malvinas)">Falkland Islands
                                                    (Malvinas)
                                                </option>
                                                <option value="Faroe Islands">Faroe Islands</option>
                                                <option value="Fiji">Fiji</option>
                                                <option value="Finland">Finland</option>
                                                <option value="France">France</option>
                                                <option value="French Guiana">French Guiana</option>
                                                <option value="French Polynesia">French Polynesia</option>
                                                <option value="French Southern Territories">French Southern
                                                    Territories
                                                </option>
                                                <option value="Gabon">Gabon</option>
                                                <option value="Gambia">Gambia</option>
                                                <option value="Georgia">Georgia</option>
                                                <option value="Germany">Germany</option>
                                                <option value="Ghana">Ghana</option>
                                                <option value="Gibraltar">Gibraltar</option>
                                                <option value="Greece">Greece</option>
                                                <option value="Greenland">Greenland</option>
                                                <option value="Grenada">Grenada</option>
                                                <option value="Guadeloupe">Guadeloupe</option>
                                                <option value="Guam">Guam</option>
                                                <option value="Guatemala">Guatemala</option>
                                                <option value="Guernsey">Guernsey</option>
                                                <option value="Guinea">Guinea</option>
                                                <option value="Guinea-bissau">Guinea-bissau</option>
                                                <option value="Guyana">Guyana</option>
                                                <option value="Haiti">Haiti</option>
                                                <option value="Heard Island and Mcdonald Islands">Heard Island and
                                                    Mcdonald Islands
                                                </option>
                                                <option value="Holy See (Vatican City State)">Holy See (Vatican City
                                                    State)
                                                </option>
                                                <option value="Honduras">Honduras</option>
                                                <option value="Hong Kong">Hong Kong</option>
                                                <option value="Hungary">Hungary</option>
                                                <option value="Iceland">Iceland</option>
                                                <option value="India">India</option>
                                                <option value="Indonesia">Indonesia</option>
                                                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of
                                                </option>
                                                <option value="Iraq">Iraq</option>
                                                <option value="Ireland">Ireland</option>
                                                <option value="Isle of Man">Isle of Man</option>
                                                <option value="Israel">Israel</option>
                                                <option value="Italy">Italy</option>
                                                <option value="Jamaica">Jamaica</option>
                                                <option value="Japan">Japan</option>
                                                <option value="Jersey">Jersey</option>
                                                <option value="Jordan">Jordan</option>
                                                <option value="Kazakhstan">Kazakhstan</option>
                                                <option value="Kenya">Kenya</option>
                                                <option value="Kiribati">Kiribati</option>
                                                <option value="Korea, Democratic People's Republic of">Korea, Democratic
                                                    People's Republic of
                                                </option>
                                                <option value="Korea, Republic of">Korea, Republic of</option>
                                                <option value="Kuwait">Kuwait</option>
                                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                <option value="Lao People's Democratic Republic">Lao People's Democratic
                                                    Republic
                                                </option>
                                                <option value="Latvia">Latvia</option>
                                                <option value="Lebanon">Lebanon</option>
                                                <option value="Lesotho">Lesotho</option>
                                                <option value="Liberia">Liberia</option>
                                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                                <option value="Liechtenstein">Liechtenstein</option>
                                                <option value="Lithuania">Lithuania</option>
                                                <option value="Luxembourg">Luxembourg</option>
                                                <option value="Macao">Macao</option>
                                                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia,
                                                    The Former Yugoslav Republic of
                                                </option>
                                                <option value="Madagascar">Madagascar</option>
                                                <option value="Malawi">Malawi</option>
                                                <option value="Malaysia">Malaysia</option>
                                                <option value="Maldives">Maldives</option>
                                                <option value="Mali">Mali</option>
                                                <option value="Malta">Malta</option>
                                                <option value="Marshall Islands">Marshall Islands</option>
                                                <option value="Martinique">Martinique</option>
                                                <option value="Mauritania">Mauritania</option>
                                                <option value="Mauritius">Mauritius</option>
                                                <option value="Mayotte">Mayotte</option>
                                                <option value="Mexico">Mexico</option>
                                                <option value="Micronesia, Federated States of">Micronesia, Federated
                                                    States of
                                                </option>
                                                <option value="Moldova, Republic of">Moldova, Republic of</option>
                                                <option value="Monaco">Monaco</option>
                                                <option value="Mongolia">Mongolia</option>
                                                <option value="Montenegro">Montenegro</option>
                                                <option value="Montserrat">Montserrat</option>
                                                <option value="Morocco">Morocco</option>
                                                <option value="Mozambique">Mozambique</option>
                                                <option value="Myanmar">Myanmar</option>
                                                <option value="Namibia">Namibia</option>
                                                <option value="Nauru">Nauru</option>
                                                <option value="Nepal">Nepal</option>
                                                <option value="Netherlands">Netherlands</option>
                                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                <option value="New Caledonia">New Caledonia</option>
                                                <option value="New Zealand">New Zealand</option>
                                                <option value="Nicaragua">Nicaragua</option>
                                                <option value="Niger">Niger</option>
                                                <option value="Nigeria">Nigeria</option>
                                                <option value="Niue">Niue</option>
                                                <option value="Norfolk Island">Norfolk Island</option>
                                                <option value="Northern Mariana Islands">Northern Mariana Islands
                                                </option>
                                                <option value="Norway">Norway</option>
                                                <option value="Oman">Oman</option>
                                                <option value="Pakistan">Pakistan</option>
                                                <option value="Palau">Palau</option>
                                                <option value="Palestinian Territory, Occupied">Palestinian Territory,
                                                    Occupied
                                                </option>
                                                <option value="Panama">Panama</option>
                                                <option value="Papua New Guinea">Papua New Guinea</option>
                                                <option value="Paraguay">Paraguay</option>
                                                <option value="Peru">Peru</option>
                                                <option value="Philippines">Philippines</option>
                                                <option value="Pitcairn">Pitcairn</option>
                                                <option value="Poland">Poland</option>
                                                <option value="Portugal">Portugal</option>
                                                <option value="Puerto Rico">Puerto Rico</option>
                                                <option value="Qatar">Qatar</option>
                                                <option value="Reunion">Reunion</option>
                                                <option value="Romania">Romania</option>
                                                <option value="Russian Federation">Russian Federation</option>
                                                <option value="Rwanda">Rwanda</option>
                                                <option value="Saint Helena">Saint Helena</option>
                                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                <option value="Saint Lucia">Saint Lucia</option>
                                                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon
                                                </option>
                                                <option value="Saint Vincent and The Grenadines">Saint Vincent and The
                                                    Grenadines
                                                </option>
                                                <option value="Samoa">Samoa</option>
                                                <option value="San Marino">San Marino</option>
                                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                <option value="Saudi Arabia">Saudi Arabia</option>
                                                <option value="Senegal">Senegal</option>
                                                <option value="Serbia">Serbia</option>
                                                <option value="Seychelles">Seychelles</option>
                                                <option value="Sierra Leone">Sierra Leone</option>
                                                <option value="Singapore">Singapore</option>
                                                <option value="Slovakia">Slovakia</option>
                                                <option value="Slovenia">Slovenia</option>
                                                <option value="Solomon Islands">Solomon Islands</option>
                                                <option value="Somalia">Somalia</option>
                                                <option value="South Africa">South Africa</option>
                                                <option value="South Georgia and The South Sandwich Islands">South
                                                    Georgia and The South Sandwich Islands
                                                </option>
                                                <option value="Spain">Spain</option>
                                                <option value="Sri Lanka">Sri Lanka</option>
                                                <option value="Sudan">Sudan</option>
                                                <option value="Suriname">Suriname</option>
                                                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                                <option value="Swaziland">Swaziland</option>
                                                <option value="Sweden">Sweden</option>
                                                <option value="Switzerland">Switzerland</option>
                                                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                                <option value="Taiwan, Province of China">Taiwan, Province of China
                                                </option>
                                                <option value="Tajikistan">Tajikistan</option>
                                                <option value="Tanzania, United Republic of">Tanzania, United Republic
                                                    of
                                                </option>
                                                <option value="Thailand">Thailand</option>
                                                <option value="Timor-leste">Timor-leste</option>
                                                <option value="Togo">Togo</option>
                                                <option value="Tokelau">Tokelau</option>
                                                <option value="Tonga">Tonga</option>
                                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                <option value="Tunisia">Tunisia</option>
                                                <option value="Turkey">Turkey</option>
                                                <option value="Turkmenistan">Turkmenistan</option>
                                                <option value="Turks and Caicos Islands">Turks and Caicos Islands
                                                </option>
                                                <option value="Tuvalu">Tuvalu</option>
                                                <option value="Uganda">Uganda</option>
                                                <option value="Ukraine">Ukraine</option>
                                                <option value="United Arab Emirates">United Arab Emirates</option>
                                                <option value="United Kingdom">United Kingdom</option>
                                                <option value="United States">United States</option>
                                                <option value="United States Minor Outlying Islands">United States Minor
                                                    Outlying Islands
                                                </option>
                                                <option value="Uruguay">Uruguay</option>
                                                <option value="Uzbekistan">Uzbekistan</option>
                                                <option value="Vanuatu">Vanuatu</option>
                                                <option value="Venezuela">Venezuela</option>
                                                <option value="Viet Nam">Viet Nam</option>
                                                <option value="Virgin Islands, British">Virgin Islands, British</option>
                                                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                                <option value="Wallis and Futuna">Wallis and Futuna</option>
                                                <option value="Western Sahara">Western Sahara</option>
                                                <option value="Yemen">Yemen</option>
                                                <option value="Zambia">Zambia</option>
                                                <option value="Zimbabwe">Zimbabwe</option>
                                            </select>
                                        </div>
                                        @if ($errors->has('ccountry'))
                                            <lable class="alert-success">{{$errors->first('country')}}</lable>
                                        @endif
                                    </div>
                                </div>


                                <li id="field_1_281"
                                    class="gfield gfield_html gfield_html_formatted gfield_no_follows_desc field_sublabel_above field_description_below"
                                    style="display: block;"><b>Overseas Donations (Foreign National and Foreign
                                        Organizations/Corporates)</b><br><br>
                                    <strong>Bank Transfer</strong><br>
                                    <p class="default-p">Please send your donations to the Bank account whose details
                                        are given below.
                                        <br><br>
                                        In order to comply with all Indian laws, EFICOR needs a letter from you. The
                                        letter is made available when you click on 'Letter for EFICOR' below. Attach it
                                        to an email and send it to us, please. We will send you a receipt and keep you
                                        updated on the use of your money. Thank you so much.</p>
                                    <b>Bank details for overseas donors</b><br>
                                    <p class="default-p">Name of the Bank: State Bank of Mysore<br>
                                        Address: Nehru Place Branch, No. 3, 4, 5, DDA Building , Nehru Place<br>
                                        New Delhi – 110019, India<br><br>
                                        Official Name for the Account: EFICOR<br>
                                        Bank Account Number: 54015789609 <br>
                                        ABA Number (Routing Number or Swift Code) SBMYINBB415<br></p>
                                    <b>Cheque or Demand Draft</b>
                                    <p class="default-p">Please make all Cheques or Demand Drafts drawn in favor of
                                        "EFICOR, New Delhi".
                                        <br><br>
                                        On clicking <strong>'Letter to EFICOR'</strong> below you will see a page with
                                        letter that should be sent to EFICOR along with your cheque. You can print it
                                        directly from the screen using the 'Print' button at the bottom of the page.
                                        Please send it to us so that we are fully compliant under Indian laws and we can
                                        send you a receipt and regular updates.
                                    </p>
                                    <p><b>EFICOR</b><br>
                                        308, Mahatta Tower,<br>
                                        B-Block Community Centre,<br>
                                        Janakpuri, New Delhi – 110058.<br>
                                        Tel fax: +91 (0) 11-25516383/4/5<br>
                                        Email: hq@eficor.org<br>
                                    </p>

                                </li>
                                @if ($errors->has('via'))
                                    <lable class="alert-danger">{{$errors->first('via')}}</lable>
                                @endif

                                <div class="form-group">
                                    <input name="form_botcheck" class="form-control" type="hidden" value=""/>
                                    <input type="submit" id="gform_submit_button_11"
                                           class="btn btn-dark btn-theme-colored"
                                           data-loading-text="Please wait..." value="LETTER To EFICOR">
                                </div>
                            </form>
                        </div>
                        <!-- Contact Form Validation-->
                        <script type="text/javascript">
                            $("#contact_form").validate({
                                submitHandler: function (form) {
                                    var form_btn = $(form).find('button[type="submit"]');
                                    var form_result_div = '#form-result';
                                    $(form_result_div).remove();
                                    form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                                    var form_btn_old_msg = form_btn.html();
                                    form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                                    $(form).ajaxSubmit({
                                        dataType: 'json',
                                        success: function (data) {
                                            if (data.status == 'true') {
                                                $(form).find('.form-control').val('');
                                            }
                                            form_btn.prop('disabled', false).html(form_btn_old_msg);
                                            $(form_result_div).html(data.message).fadeIn('slow');
                                            setTimeout(function () {
                                                $(form_result_div).fadeOut('slow')
                                            }, 6000);
                                        }
                                    });
                                }
                            });
                        </script>

                    </div>
                    <div class="col-md-5" style="margin-top:60px;">

                        <div id="accordion1" class="panel-group accordion transparent" style="margin-left:70px;">
                            <div class="panel">
                                <div class="panel-title"><a data-parent="#accordion1" data-toggle="collapse"
                                                            href="#accordion11" class="active" aria-expanded="true">
                                        <span class="open-sub"></span> <strong style="color:#008d7d;">1. Donate for
                                            farmer </strong></a></div>
                                <div id="accordion11" class="panel-collapse collapse in" role="tablist"
                                     aria-expanded="true">
                                    <div class="panel-content">
                                        <p>EFICOR provides seeds, fertilisers and pesticides to a struggling farmer. The
                                            produce would be a source of food and income, adding to the family’s food
                                            security.</p>
                                        <p>Rs. 5000/- would provide a kg of seeds, fertilizers and tools for a family to
                                            grow their own vegetables and build up their strength.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-title"><a class="collapsed" data-parent="#accordion1"
                                                            data-toggle="collapse" href="#accordion12"
                                                            aria-expanded="false"> <span class="open-sub"></span>
                                        <strong style="color:#008d7d;">2.Donate for tuition support to children</strong></a>
                                </div>
                                <div id="accordion12" class="panel-collapse collapse" role="tablist"
                                     aria-expanded="false" style="height: 0px;">
                                    <div class="panel-content">
                                        <p>EFICOR provides tuition support to children from poor urban communities to
                                            help them perform better in their classes. This lightens the financial
                                            burden on the parents, as the charges for private tuitions are quite
                                            high.</p>
                                        Rs.7000/- would provide tuition support to a child for a year.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-title"><a data-parent="#accordion1" data-toggle="collapse"
                                                            href="#accordion13" class="collapsed" aria-expanded="false">
                                        <span class="open-sub"></span> <strong style="color:#008d7d;">3. Donate for
                                            tribal communities</strong></a></div>
                                <div id="accordion13" class="panel-collapse collapse" role="tablist"
                                     aria-expanded="false">
                                    <div class="panel-content">
                                        <p>EFICOR provides functional literacy to tribal communities, which in turn help
                                            them to be actively involved in the community.</p>
                                        <p>Rs.5000/- would make an adult tribal person literate.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-title"><a data-parent="#accordion1" data-toggle="collapse"
                                                            href="#accordion14" class="collapsed" aria-expanded="false">
                                        <span class="open-sub"></span> <strong style="color:#008d7d;">4. Donate for
                                            commercial Sex Workers</strong></a></div>
                                <div id="accordion14" class="panel-collapse collapse" role="tablist"
                                     aria-expanded="false">
                                    <div class="panel-content">
                                        <p>Commercial Sex Workers (CSW) are provided with skill training for alternative
                                            livelihood. Many of the CSWs want to be liberated from commercial sex
                                            work.</p>
                                        <p>Rs.6000/- will cover the cost of skill training of a Commercial Sex Worker
                                            for alternate income generation.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-title"><a data-parent="#accordion1" data-toggle="collapse"
                                                            href="#accordion15" class="collapsed" aria-expanded="false">
                                        <span class="open-sub"></span> <strong style="color:#008d7d;">5. Donate for HIV
                                            infected persons</strong></a></div>
                                <div id="accordion15" class="panel-collapse collapse" role="tablist"
                                     aria-expanded="false">
                                    <div class="panel-content">
                                        <p>EFICOR assists in the care of HIV infected persons by providing medication
                                            and nutritional support.</p>
                                        <p>Rs.5000/- covers the cost to provide treatment to a HIV infected person.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-title"><a data-parent="#accordion1" data-toggle="collapse"
                                                            href="#accordion15" class="collapsed" aria-expanded="false">
                                        <span class="open-sub"></span> <strong style="color:#008d7d;">5. Donate for
                                            children infected and affected by HIV with education</strong></a></div>
                                <div id="accordion15" class="panel-collapse collapse" role="tablist"
                                     aria-expanded="false">
                                    <div class="panel-content">
                                        <p>EFICOR assists children infected and affected by HIV with educational
                                            support/school supplies i.e., school fees, uniforms, textbooks, notebooks,
                                            school bag, pens and pencils etc.</p>
                                        <p>Rs.3000/- would cover the cost to provide educational support for a HIV
                                            infected and affected child for a year.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- end main-content -->

    </div>
    <script>
        $('#foreignclick').click(function () {
            document.getElementById('indianclick').checked = false;
            var checked = $(this).attr('checked', true);

            if (checked) {
                document.getElementById('indian').style.display = 'none';
                document.getElementById('foreign').style.display = 'block';

            } else {
                document.getElementById('indian').style.display = 'block';
                document.getElementById('foreign').style.display = 'none';
            }


        });
        $('#indianclick').click(function () {
            document.getElementById('foreignclick').checked = false;
            var checked = $(this).attr('checked', true);
            if (checked) {
                document.getElementById('indian').style.display = 'block';
                document.getElementById('foreign').style.display = 'none';
            } else {

                document.getElementById('indian').style.display = 'none';
                document.getElementById('foreign').style.display = 'block';
            }


        });
    </script>
    <script type="text/javascript" src="/assets/js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            $('#showdata').hide();
            $('#demond_1').hide();
            /* $('#gform_fields_2').hide();
              $('#gform_fields_4').hide();	*/
            var price = $('#input_1_11').val();
            $("#costtype").change(function () {

                var costtype1 = $('#costtype').val();

                if (costtype1 == 60) {
                    var totalcost = price / 60;
                    document.getElementById("input_1_11").setAttribute('value', totalcost);
                } else {
                    //var costprice=price*60;
                    document.getElementById("input_1_11").setAttribute('value', price);
                }


            });
            $('#choice_1_23_1').click(function () {
                var name = $('#input_1_4_3').val();
                var last = $('#input_1_4_6').val();
                $('#name').html(name + " " + last);
                //$('#name').html(last);
                $('#field_1_7').hide();
                $('#demond_1').hide();
                $('#showdata').show();
                $('#field_1_28').show();
                $('#field_1_14').hide();
                $('#field_1_17').hide();
                $('#field_1_18').hide();
                $('#field_1_26').hide();
                $('#field_1_20').hide();
                $('#field_1_18').hide();
                $('#field_1_21').hide();
                $('#field_1_25').hide()
                $('#field_1_27').hide();
                $("#highlight").attr('id', 'input_1_7');
                var totalcost = price / 60;
                document.getElementById("input_1_11").setAttribute('value', totalcost);
                $('#costtype').val('60');
            });

            $('#gform_fields_3').click(function () {
                $('#choice_1_23_1').click();
                $('#choice_1_23_y').click();
                $('#choice_1_18_0').click();
            });
            $('#choice_1_23_y').click(function () {
                $('#field_1_28').hide();
                $('#field_1_7').show();
                $('#field_1_14').show();
                $('#field_1_17').show();
                $('#field_1_18').show();
                $('#demond_1').hide();
                $("#input_1_7").attr('id', 'highlight');
                document.getElementById("input_1_11").setAttribute('value', price);
                $('#costtype').val('100');
            });


            //buttontext
            $('#choice_1_17_0').click(function () {

                $('#gform_submit_button_1').val('Letter to EFICOR');

            });

            $('#choice_1_23_1').click(function () {

                $('#gform_submit_button_1').val('Letter to EFICOR');

            });

            $('#choice_1_18_0').click(function () {

                $('#gform_submit_button_1').val('Standing Order Letter');

            });

            $('#choice_1_14_0').click(function () {

                $('#gform_submit_button_1').val('Submit');

            });

            //cheque
            $('#input_1_17').click(function () {
                $('#field_1_26').show();
                $('#demond_1').show();
                $('#field_1_20').show();
                $('#field_1_27').hide();
                $('#field_1_25').hide();
                $('#field_1_14').hide();
                $('#field_1_18').hide();
            });
            // online
            $('#input_1_14').click(function () {
                $('#field_1_141').show();
                $('#field_1_27').show();
                $('#field_1_25').hide();
                $('#field_1_26').hide();
                /*$('#field_1_7').hide();*/
                //$('#field_1_17').hide();
                //$('#field_1_18').hide();
                $('#demond_1').hide();
            });
            $('#input_1_141').click(function () {
                $('#field_1_14').show();
                $('#field_1_27').show();
                $('#field_1_25').hide();
                $('#field_1_26').hide();
                /*$('#field_1_7').hide();*/
                //$('#field_1_17').hide();
                //$('#field_1_18').hide();
                $('#demond_1').hide();
            });
            // standing
            $('#input_1_18').click(function () {
                $('#field_1_18').show();
                $('#demond_1').hide();
                $('#field_1_21').show();
                $('#field_1_25').show();
                $('#field_1_26').hide();
                $('#field_1_27').hide();
                $('#field_1_14').hide();
                $('#field_1_17').hide();
            });


        });

        //foreign

        $('#choice_1_17_01').click(function () {

            $('#gform_submit_button_11').val('Letter to EFICOR');

        });
        $('#choice_1_18_01').click(function () {

            $('#gform_submit_button_11').val('Letter to EFICOR');

        });
        $('#input_1_171').click(function () {
            $('#field_1_26').show();
            $('#demond_1').show();
            $('#field_1_201').show();
            $('#field_1_27').hide();
            $('#field_1_25').hide();
            $('#field_1_14').hide();
            $('#field_1_18').hide();
        });
        $('#input_1_181').click(function () {
            $('#field_1_18').show();
            $('#demond_1').hide();
            $('#field_1_201').hide();
            $('#field_1_25').show();
            $('#field_1_26').hide();
            $('#field_1_27').hide();
            $('#field_1_14').hide();
            $('#field_1_181').show();
        });

    </script>

    <script>
        $(document).ready(function () {
            $("#input_1_4_3").keyup(function () {
                var ck_name = /^[A-Za-z ]{3,20}$/;
                var first_name = $('#input_1_4_3').val();
                if (!ck_name.test(first_name)) {
                    $('#input_1_4_3').focus();
                    $('#input_1_4_3').css('border-color', 'red');

                    return false;
                } else {
                    $('#input_1_4_3').css('border-color', '');
                    return true;
                }
            });
            $("#input_1_4_6").keyup(function () {
                var ck_last = /^[A-Za-z ]{3,20}$/;
                var last = $('#input_1_4_6').val();
                if (!ck_last.test(last)) {
                    $('#input_1_4_6').focus();
                    $('#input_1_4_6').css('border-color', 'red');
                    return false;
                } else {
                    $('#input_1_4_6').css('border-color', '');
                    return true;
                }

            });
            $("#input_1_5").keyup(function () {
                var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

                var input_5 = $('#input_1_5').val();
                if (!regex.test(input_5)) {
                    $('#input_1_5').focus();
                    $('#input_1_5').css('border-color', 'red');
                    return false;
                } else {
                    $('#input_1_5').css('border-color', '');
                    return true;
                }

            });
            $("#input_1_6_1").keyup(function () {
                var reg = /^[a-zA-Z0-9\s,.'-]{2,100}$/;
                var address = $('#input_1_6_1').val();

                if (!reg.test(address)) {
                    $('#input_1_6_1').focus();
                    $('#input_1_6_1').css('border-color', 'red');
                    return false;
                } else {
                    $('#input_1_6_1').css('border-color', '');
                    return true;
                }

            });

            $("#input_1_6_3").keyup(function () {
                var regc = /^([a-zA-Z\u0080-\u024F]+(?:. |-| |'))*[a-zA-Z\u0080-\u024F]{2,25}$/;

                var city = $('#input_1_6_3').val();

                if (!regc.test(city)) {
                    $('#input_1_6_3').focus();
                    $('#input_1_6_3').css('border-color', 'red');
                    return false;
                } else {
                    $('#input_1_6_3').css('border-color', '');
                    return true;
                }

            });

            $("#input_1_6_4").keyup(function () {
                var regs = /^([a-zA-Z\u0080-\u024F]+(?:. |-| |'))*[a-zA-Z\u0080-\u024F]{2,25}$/;

                var state = $('#input_1_6_4').val();

                if (!regs.test(state)) {
                    $('#input_1_6_4').focus();
                    $('#input_1_6_4').css('border-color', 'red');
                    return false;
                } else {
                    $('#input_1_6_4').css('border-color', '');
                    return true;
                }

            });


            $("#input_1_6_5").keyup(function () {
                var regpin = /[\d]{5,7}/;

                var pin = $('#input_1_6_5').val();

                if (!regpin.test(pin)) {
                    $('#input_1_6_5').focus();
                    $('#input_1_6_5').css('border-color', 'red');
                    return false;
                } else {
                    $('#input_1_6_5').css('border-color', '');
                    return true;
                }

            });

            $("#input_1_8").keyup(function () {
                var mob = /[\d]{10,13}/;

                var input_8 = $('#input_1_8').val();

                if (!mob.test(input_8)) {
                    $('#input_1_8').focus();
                    $('#input_1_8').css('border-color', 'red');
                    return false;
                } else {
                    $('#input_1_8').css('border-color', '');
                    return true;
                }

            });

            /*$("#input_1_9").keyup(function(){
              var land = /[\d]{10,16}/;

            var input_9=$('#input_1_9').val();

            if(!land.test(input_9)){
                $('#input_1_9').focus();
                $('#input_1_9').css('border-color','red');
                return false;
            }else{
                $('#input_1_9').css('border-color','');
                return true;
            }

            });*/

            $("#highlight").keyup(function () {

                var regpan = /^([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}?$/;

                var input_7 = $('#highlight').val();

                if (!regpan.test(input_7)) {
                    $('#highlight').focus();
                    $('#highlight').css('border-color', 'red');
                    return false;
                } else {
                    $('#highlight').css('border-color', '');
                    return true;
                }

            });

            //
            // $('#gform_submit_button_1').click(function () {
            //     var input_3 = $('#input_1_3').val();
            //     var first_name = $('#input_1_4_3').val();
            //     var last = $('#input_1_4_6').val();
            //     var input_5 = $('#input_1_5').val();
            //     var address = $('#input_1_6_1').val();
            //     var city = $('#input_1_6_3').val();
            //     var state = $('#input_1_6_4').val();
            //     var pin = $('#input_1_6_5').val();
            //     var country = $('#input_1_6_6').val();
            //     var input_7 = $('#input_1_7').val();
            //     var input_8 = $('#input_1_8').val();
            //     var input_23 = $('#input_1_7').val();
            //     var input_1_23 = $('#input_1_23').val();
            //     var highlights = $('#highlight').val();
            //     var land1 = $('#input_1_9').val();
            //     var yas = $("input[name='input_23']:checked").val();
            //
            //     var ck_last = /^[A-Za-z ]{3,20}$/;
            //     var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            //     var ck_name = /^[A-Za-z ]{3,20}$/;
            //     var reg = /^[a-zA-Z0-9\s,.'-]{2,100}$/;
            //     var regc = /^([a-zA-Z\u0080-\u024F]+(?:. |-| |'))*[a-zA-Z\u0080-\u024F]{2,25}$/;
            //     var regs = /^([a-zA-Z\u0080-\u024F]+(?:. |-| |'))*[a-zA-Z\u0080-\u024F]{2,25}$/;
            //     var regpin = /[\d]{5,7}/;
            //     var mob = /[\d]{10,13}/;
            //     var land = /[\d]{10,16}/;
            //     var regpan = /^([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}?$/;
            //     var re = /^\d{1,2}\/\d{1,2}$/;
            //     /*if(!re.test(input_3)){
            //
            //        $('#input_1_3').focus();
            //            $('#input_1_3').css('border-color','red');
            //             $("#input_1_3").keyup(function(){
            //     $('#input_1_3').css('border-color','');
            //      });
            //            return false;
            //        }
            //
            //        else*/
            //     if (!ck_name.test(first_name)) {
            //
            //         $('#input_1_4_3').focus();
            //         $('#input_1_4_3').css('border-color', 'red');
            //         $("#input_1_4_3").keyup(function () {
            //             $('#input_1_4_3').css('border-color', '');
            //         });
            //         return false;
            //     } else if (!ck_last.test(last)) {
            //         $('#input_1_4_6').focus();
            //         $('#input_1_4_6').css('border-color', 'red');
            //         $("#input_1_4_6").keyup(function () {
            //             $('#input_1_4_6').css('border-color', '');
            //         });
            //         return false;
            //     } else if (!regex.test(input_5)) {
            //         $('#input_1_5').focus();
            //         $('#input_1_5').css('border-color', 'red');
            //         $("#input_1_5").keyup(function () {
            //             $('#input_1_5').css('border-color', '');
            //         });
            //         return false;
            //     } else if (!reg.test(address)) {
            //         $('#input_1_6_1').focus();
            //         $('#input_1_6_1').css('border-color', 'red');
            //         $("#input_1_6_1").keyup(function () {
            //             $('#input_1_6_1').css('border-color', '');
            //         });
            //         return false;
            //     } else if (!regc.test(city)) {
            //         $('#input_1_6_3').focus();
            //         $('#input_1_6_3').css('border-color', 'red');
            //         $("#input_1_6_3").keyup(function () {
            //             $('#input_1_6_3').css('border-color', '');
            //         });
            //
            //         return false;
            //     } else if (!regs.test(state)) {
            //         $('#input_1_6_4').focus();
            //         $('#input_1_6_4').css('border-color', 'red');
            //         $("#input_1_6_4").keyup(function () {
            //             $('#input_1_6_4').css('border-color', '');
            //         });
            //         return false;
            //     } else if (!regpin.test(pin)) {
            //         $('#input_1_6_5').focus();
            //         $('#input_1_6_5').css('border-color', 'red');
            //         $("#input_1_6_5").keyup(function () {
            //             $('#input_1_6_5').css('border-color', '');
            //         });
            //         return false;
            //     } else if (country == "") {
            //         $('#input_1_6_6').focus();
            //         $('#input_1_6_6').css('border-color', 'red');
            //         $("#input_1_6_6").keyup(function () {
            //             $('#input_1_6_6').css('border-color', '');
            //         });
            //         return false;
            //     } else if (!mob.test(input_8)) {
            //         $('#input_1_8').focus();
            //         $('#input_1_8').css('border-color', 'red');
            //         $("#input_1_8").keyup(function () {
            //             $('#input_1_8').css('border-color', '');
            //         });
            //         return false;
            //     }
            //     /*else if(!land.test(land1)){
            //         $('#input_1_9').focus();
            //         $('#input_1_9').css('border-color','red');
            //         $("#input_1_9").keyup(function(){
            //         $('#input_1_9').css('border-color','');
            //     });
            //     return false;
            //     }*/
            //     else if (!regpan.test(highlights) && yas == 'Yes') {
            //         $('#highlight').focus();
            //         $('#highlight').css('border-color', 'red');
            //         $("#highlight").keyup(function () {
            //             $('#highlight').css('border-color', '');
            //         });
            //         return false;
            //     }
            //
            //
            // });


        });

        function GetSelectedvalueind() {

            var e = document.getElementById("amountind");
            var amount = e.options[e.selectedIndex].value;
            if (amount == 'other') {
                document.getElementById('inputamountind').style.display = 'block';
                document.getElementById('amountinddiv').style.display = 'none';
            } else {
                document.getElementById("inputamounti").value = amount;  // using element properties

            }

        }

        function GetSelectedvaluefor() {
            var e = document.getElementById("amountfor");
            var amount = e.options[e.selectedIndex].value;
            if (amount == 'other') {
                alert(amount);
                document.getElementById('inputamountfor').style.display = 'block';
                document.getElementById('amountfordiv').style.display = 'none';
            } else {
                document.getElementById("inputamountf").value = amount;  // using element properties

            }

        }

        function validatepan() {
            var panVal = $('#input_1_7').val;
            var panPat = /[a-zA-Z]{3}[PCHFATBLJG]{1}[a-zA-Z]{1}[0-9]{4}[a-zA-Z]{1}$/;
            if (panPat.test(panVal)) {
                // valid pan card number
            } else {
                document.getElementById('input_1_7').value = '';
                alert('Invalid Pan !')
            }
        }


        function autosearch() {

            document.getElementById('titledivind').style.display = 'block';
            $.ajax({
                url: '/settitle',
                type: 'post',
                data: {
                    "_token": "{{ csrf_token() }}",
                },
                success: function (result) {

                    $('#titledivind').html(result);
                }
            });
        }

        function  nri(e)
        {
            if(e=='yesnri') {
                document.getElementById('passdetails').style.display = 'block';
            }
            if(e=='nonri')
            {
                document.getElementById('passdetails').style.display = 'none';
            }

        }
        function mydateind() {

                var x = document.getElementById("dobind");

                if (x.value.length === 2)
                    x.value = x.value + '/';

        }

        function mydatefor()
        {
            var x = document.getElementById("dobfor");

            if (x.value.length === 2)
                x.value = x.value + '/';
        }

function panvalidation() {
    var panVal = $('#pan').val();
    var regpan = /^([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}?$/;

    if (regpan.test(panVal)) {
        // valid pan card number
    } else {
      alert('Invalid Pan');
      document.getElementById('pan').value='';
    }
}

    </script>
@endsection
