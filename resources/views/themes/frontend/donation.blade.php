<?php
/*
 * Template Name: Donate single Page
 */
get_header(); ?>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/formsmain.min.css">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/readyclass.min.css">
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/dateplaceholder.js"></script>
<br/>
<script>
    jQuery(function ($) {
        $("#input_1_3").mask("99/99", {placeholder: "DD/MM"});

    });
</script>
<?php
$user_agent = $_SERVER['HTTP_USER_AGENT'];
function getOS()
{

    global $user_agent;

    $os_platform = "Unknown OS Platform";

    $os_array = array(
        '/windows nt 10/i' => 'Windows 10',
        '/windows nt 6.3/i' => 'Windows 8.1',
        '/windows nt 6.2/i' => 'Windows 8',
        '/windows nt 6.1/i' => 'Windows 7',
        '/windows nt 6.0/i' => 'Windows Vista',
        '/windows nt 5.2/i' => 'Windows Server 2003/XP x64',
        '/windows nt 5.1/i' => 'Windows XP',
        '/windows xp/i' => 'Windows XP',
        '/windows nt 5.0/i' => 'Windows 2000',
        '/windows me/i' => 'Windows ME',
        '/win98/i' => 'Windows 98',
        '/win95/i' => 'Windows 95',
        '/win16/i' => 'Windows 3.11',
        '/macintosh|mac os x/i' => 'Mac OS X',
        '/mac_powerpc/i' => 'Mac OS 9',
        '/linux/i' => 'Linux',
        '/ubuntu/i' => 'Ubuntu',
        '/iphone/i' => 'iPhone',
        '/ipod/i' => 'iPod',
        '/ipad/i' => 'iPad',
        '/android/i' => 'Android',
        '/blackberry/i' => 'BlackBerry',
        '/webos/i' => 'Mobile'
    );

    foreach ($os_array as $regex => $value)
        if (preg_match($regex, $user_agent))
            $os_platform = $value;

    return $os_platform;
}

function getBrowser()
{

    global $user_agent;

    $browser = "Unknown Browser";

    $browser_array = array(
        '/msie/i' => 'Internet Explorer',
        '/firefox/i' => 'Firefox',
        '/safari/i' => 'Safari',
        '/chrome/i' => 'Chrome',
        '/edge/i' => 'Edge',
        '/opera/i' => 'Opera',
        '/netscape/i' => 'Netscape',
        '/maxthon/i' => 'Maxthon',
        '/konqueror/i' => 'Konqueror',
        '/mobile/i' => 'Handheld Browser'
    );

    foreach ($browser_array as $regex => $value)
        if (preg_match($regex, $user_agent))
            $browser = $value;

    return $browser;
}

//include('function/function.php');
include(get_stylesheet_directory() . '/connection.php');
extract($_POST);
if (isset($_POST['gform_submit_button_1'])) {
    $title = $_POST['input_1'];
    $gender = $_POST['input_2'];
    $dob = $_POST['input_3'];
    $first_name = $_POST['first_name'];
    $mid = $_POST['mid'];
    $last = $_POST['last'];
    $email = $_POST['input_5'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $pin = $_POST['pin'];
    $country = $_POST['country'];
    $pan_no = $_POST['input_7'];
    $mobile_no = $_POST['input_8'];
    $landline_no = $_POST['input_9'];
    $currency = $_POST['costtype'];
    $ammount = $_POST['input_11'];
    $yes_no = $_POST['input_23'];
    $via = $_POST['via'];
    $bank = $_POST['ba_name'];
    $branch = $_POST['br_name'];
    $acc = $_POST['ac_no'];
    $Strt_from_date = $_POST['Strt_from_date'];
    $transfering = $_POST['transfering'];
    $pay_status = 0;
    $date = date('Y-m-d');
    $random = rand() . rand() . rand() . rand() . rand();
    $sql = "INSERT INTO donate(secret_key,title,gender,dob,email,first_name,mid_name,last_name,address,city,state,pin,country,pan_no,mobile_no,landline_no,currency_type,ammount,yes_no,via,bank_name,branch_name,account_no,payment_status,starting_date,standing_order,status,created_date)
VALUES('$random','$title','$gender','$dob','$email','$first_name','$mid','$last','$address','$city','$state','$pin','$country','$pan_no','$mobile_no','$landline_no','$currency','$ammount','$yes_no','$via','$bank','$branch','$acc','$pay_status','$Strt_from_date','$transfering',1,'$date')";
    $rest = mysqli_query($link, $sql);
//$last_id = mysqli_insert_id();
//echo $last_id ;
//summary log start
    $klk_for_summary_log_last_id = mysqli_insert_id($link);
    if ($klk_for_summary_log_last_id) {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip_address = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip_address = $_SERVER['REMOTE_ADDR'];
        }
        $isp = gethostbyaddr($ip_address);
        $geopluginURL = 'http://www.geoplugin.net/php.gp?ip=' . $ip_address;
        $addrDetailsArr = file_get_contents($geopluginURL);
        $browserAgent = getBrowser();
        $platform = $_SERVER['HTTP_USER_AGENT'];
        $os = getOS();
        $donation_description = ($_POST['donation_description']) ? $_POST['donation_description'] : '';
        $sqlSummaryLog = "INSERT INTO `donate_location` (`id`, `donateId`, `summary`, `locationInfo`, `ipAddress`, `isp`, `browserAgent`, `platform`, `os`, `updated_at`) VALUES (NULL, '" . $klk_for_summary_log_last_id . "', '" . $donation_description . "', '" . $addrDetailsArr . "', '" . $ip_address . "', '" . $isp . "', '" . $browserAgent . "', '" . $platform . "', '" . $os . "', CURRENT_TIMESTAMP);";
        $rest = mysqli_query($link, $sqlSummaryLog);
    }
//summary log end
    $sql1 = "SELECT LAST_INSERT_ID() FROM donate";
    $rest1 = mysqli_query($link, $sql1);
    $id = mysqli_insert_id($link);
    if ($rest) {

        if ($yes_no == 'Yes') {
            if ($via == 'CHEQUE/DEMAND DRAFT') {

                echo '<script> window.location="http://www.eficor.org/chequedemand-draft?secreteKey=' . $random . '&title=' . $_GET['title'] . '";</script>';
                //header('Location:http://www.eficor.org/chequedemand-draft?secreteKey='.$id[0].$random);
            } else if ($via == 'STANDING INSTRUCTIONS') {

                echo '<script> window.location="http://www.eficor.org/standing-order?secreteKey=' . $random . '&title=' . $_GET['title'] . '";</script>';

            } else {
                echo '<script> window.location="http://www.eficor.org/pay-online?secreteKey=' . $random . '&title=' . $_GET['title'] . '";</script>';
                //header('Location:http:http://www.eficor.org/pay-online?secreteKey='.$id[0].$random);
                //header('Location:http://localhost/eficor/field-data?id='.$id[0]);
            }
        } else {

            echo '<script> window.location="http://www.eficor.org/account-details?secreteKey=' . $random . '&title=' . $_GET['title'] . '";</script>';

            //header('Location:http://www.eficor.org/account-details);
        }
    } else {
        echo "not incered";
    }

}


?>
<div class="container clearfix">
    <div class="default-page default-page2">
        <div class="ipt_donateform">
            <div class="ipt_donateform">
                <h2> Thank you for your donation </h2>


                <div class="gf_browser_chrome gform_wrapper" id="gform_wrapper_1" style="">
                    <form method="post" enctype="multipart/form-data" id="gform_1" action="">
                        <div class="gform_heading">
                            <span class="gform_description"></span>
                        </div>
                        <div class="gform_body">
                            <ul id="gform_fields_1"
                                class="gform_fields top_label form_sublabel_above description_below">
                                <li id="field_1_1"
                                    class="gfield gf_left_third gfield_contains_required field_sublabel_above field_description_below hidden_label">
                                    <label class="gfield_label" for="input_1_1">Title<span
                                                class="gfield_required">*</span></label>
                                    <div class="ginput_container"><select name="input_1" id="input_1_1"
                                                                          class="medium gfield_select" tabindex="1">
                                            <option value="Select Title">Select Title</option>
                                            <option value="Miss.">Miss.</option>
                                            <option value="Ms.">Ms.</option>
                                            <option value="Mr.">Mr.</option>
                                        </select></div>
                                </li>
                                <li id="field_1_3"
                                    class="gfield gf_right_third field_sublabel_above field_description_below hidden_label">
                                    <label class="gfield_label" for="input_1_3">Date Of Birth ( Year not required
                                        )</label>
                                    <div class="ginput_container"><input name="input_3" id="input_1_3" type="text"
                                                                         value="" class="medium" tabindex="3"
                                                                         maxlength="5" placeholder="DD/MM"></div>
                                </li>
                                <li id="field_1_4"
                                    class="gfield gfield_contains_required field_sublabel_hidden_label field_description_below hidden_label">
                                    <label class="gfield_label" for="input_1_4_3">Name<span
                                                class="gfield_required">*</span></label>
                                    <div class="ginput_complex ginput_container no_prefix has_first_name has_middle_name has_last_name no_suffix"
                                         id="input_1_4">

                            <span id="input_1_4_3_container" class="name_first">
                                                    <input type="text" name="first_name" id="input_1_4_3" value=""
                                                           maxlength="15" tabindex="5" placeholder="First Name*">
                                                    <label for="input_1_4_3" class="hidden_sub_label">First</label>
                                                </span>
                                        <span id="input_1_4_4_container" class="name_middle">
                                                    <input type="text" name="mid" id="input_1_4_4" value="" tabindex="6"
                                                           maxlength="15" placeholder="Middle Name">
                                                    <label for="input_1_4_4" class="hidden_sub_label">Middle</label>
                                                </span>
                                        <span id="input_1_4_6_container" class="name_last">
                                                    <input type="text" name="last" id="input_1_4_6" value=""
                                                           tabindex="7" maxlength="15" placeholder="Last Name*">
                                                    <label for="input_1_4_6" class="hidden_sub_label">Last</label>
                                                </span>

                                    </div>
                                </li>
                                <li id="field_1_5"
                                    class="gfield gfield_contains_required field_sublabel_above field_description_below hidden_label">
                                    <label class="gfield_label" for="input_1_5">Email<span
                                                class="gfield_required">*</span></label>
                                    <div class="ginput_container">
                                        <input name="input_5" maxlength="30" id="input_1_5" type="text" value=""
                                               class="medium" tabindex="9" placeholder="Please Enter Your Email*">
                                    </div>
                                </li>
                                <li id="field_1_6"
                                    class="gfield gf_simple_horizontal gfield_contains_required field_sublabel_hidden_label field_description_below hidden_label">
                                    <label class="gfield_label" for="input_1_6_1">Address<span
                                                class="gfield_required">*</span></label>
                                    <div class="ginput_complex ginput_container has_street has_city has_state has_zip has_country"
                                         id="input_1_6">
                         <span class="ginput_full" id="input_1_6_1_container">
                                                <input type="text" name="address" id="input_1_6_1" maxlength="100"
                                                       value="" tabindex="10" placeholder="Address*">
                                                <label for="input_1_6_1" id="input_1_6_1_label"
                                                       class="hidden_sub_label">Address</label>
                                            </span><span class="ginput_left" id="input_1_6_3_container">
                                    <input type="text" name="city" id="input_1_6_3" value="" maxlength="20"
                                           tabindex="11" placeholder="City*">
                                    <label for="input_1_6_3" id="input_1_6_3_label"
                                           class="hidden_sub_label">City</label>
                                 </span><span class="ginput_right" id="input_1_6_4_container">
                                        <input type="text" name="state" id="input_1_6_4" value="" maxlength="20"
                                               tabindex="13" placeholder="State / Province*">
                                        <label for="input_1_6_4" id="input_1_6_4_label"
                                               class="hidden_sub_label">State</label>
                                      </span><span class="ginput_left" id="input_1_6_5_container">
                                    <input type="text" name="pin" id="input_1_6_5" value="" maxlength="7" tabindex="14"
                                           placeholder="ZIP / Pin Code*">
                                    <label for="input_1_6_5" id="input_1_6_5_label"
                                           class="hidden_sub_label">Pin Code</label>
                                </span><span class="ginput_right" id="input_1_6_6_container">
                                        <select name="country" id="input_1_6_6" tabindex="15"><option value=""
                                                                                                      selected="selected">Country*</option><option
                                                    value="Afghanistan">Afghanistan</option><option value="Albania">Albania</option><option
                                                    value="Algeria">Algeria</option><option value="American Samoa">American Samoa</option><option
                                                    value="Andorra">Andorra</option><option
                                                    value="Angola">Angola</option><option value="Antigua and Barbuda">Antigua and Barbuda</option><option
                                                    value="Argentina">Argentina</option><option
                                                    value="Armenia">Armenia</option><option
                                                    value="Australia">Australia</option><option
                                                    value="Austria">Austria</option><option value="Azerbaijan">Azerbaijan</option><option
                                                    value="Bahamas">Bahamas</option><option
                                                    value="Bahrain">Bahrain</option><option value="Bangladesh">Bangladesh</option><option
                                                    value="Barbados">Barbados</option><option
                                                    value="Belarus">Belarus</option><option
                                                    value="Belgium">Belgium</option><option
                                                    value="Belize">Belize</option><option value="Benin">Benin</option><option
                                                    value="Bermuda">Bermuda</option><option
                                                    value="Bhutan">Bhutan</option><option
                                                    value="Bolivia">Bolivia</option><option
                                                    value="Bosnia and Herzegovina">Bosnia and Herzegovina</option><option
                                                    value="Botswana">Botswana</option><option
                                                    value="Brazil">Brazil</option><option value="Brunei">Brunei</option><option
                                                    value="Bulgaria">Bulgaria</option><option value="Burkina Faso">Burkina Faso</option><option
                                                    value="Burundi">Burundi</option><option
                                                    value="Cambodia">Cambodia</option><option
                                                    value="Cameroon">Cameroon</option><option
                                                    value="Canada">Canada</option><option
                                                    value="Cape Verde">Cape Verde</option><option
                                                    value="Cayman Islands">Cayman Islands</option><option
                                                    value="Central African Republic">Central African Republic</option><option
                                                    value="Chad">Chad</option><option value="Chile">Chile</option><option
                                                    value="China">China</option><option
                                                    value="Colombia">Colombia</option><option
                                                    value="Comoros">Comoros</option><option
                                                    value="Congo, Democratic Republic of the">Congo, Democratic Republic of the</option><option
                                                    value="Congo, Republic of the">Congo, Republic of the</option><option
                                                    value="Costa Rica">Costa Rica</option><option value="Côte d'Ivoire">Côte d'Ivoire</option><option
                                                    value="Croatia">Croatia</option><option value="Cuba">Cuba</option><option
                                                    value="Cyprus">Cyprus</option><option value="Czech Republic">Czech Republic</option><option
                                                    value="Denmark">Denmark</option><option
                                                    value="Djibouti">Djibouti</option><option
                                                    value="Dominica">Dominica</option><option
                                                    value="Dominican Republic">Dominican Republic</option><option
                                                    value="East Timor">East Timor</option><option value="Ecuador">Ecuador</option><option
                                                    value="Egypt">Egypt</option><option
                                                    value="El Salvador">El Salvador</option><option
                                                    value="Equatorial Guinea">Equatorial Guinea</option><option
                                                    value="Eritrea">Eritrea</option><option
                                                    value="Estonia">Estonia</option><option
                                                    value="Ethiopia">Ethiopia</option><option value="Faroe Islands">Faroe Islands</option><option
                                                    value="Fiji">Fiji</option><option value="Finland">Finland</option><option
                                                    value="France">France</option><option value="French Polynesia">French Polynesia</option><option
                                                    value="Gabon">Gabon</option><option value="Gambia">Gambia</option><option
                                                    value="Georgia">Georgia</option><option
                                                    value="Germany">Germany</option><option value="Ghana">Ghana</option><option
                                                    value="Greece">Greece</option><option
                                                    value="Greenland">Greenland</option><option
                                                    value="Grenada">Grenada</option><option value="Guam">Guam</option><option
                                                    value="Guatemala">Guatemala</option><option
                                                    value="Guinea">Guinea</option><option value="Guinea-Bissau">Guinea-Bissau</option><option
                                                    value="Guyana">Guyana</option><option value="Haiti">Haiti</option><option
                                                    value="Honduras">Honduras</option><option value="Hong Kong">Hong Kong</option><option
                                                    value="Hungary">Hungary</option><option
                                                    value="Iceland">Iceland</option><option value="India">India</option><option
                                                    value="Indonesia">Indonesia</option><option
                                                    value="Iran">Iran</option><option value="Iraq">Iraq</option><option
                                                    value="Ireland">Ireland</option><option
                                                    value="Israel">Israel</option><option value="Italy">Italy</option><option
                                                    value="Jamaica">Jamaica</option><option value="Japan">Japan</option><option
                                                    value="Jordan">Jordan</option><option
                                                    value="Kazakhstan">Kazakhstan</option><option
                                                    value="Kenya">Kenya</option><option
                                                    value="Kiribati">Kiribati</option><option value="North Korea">North Korea</option><option
                                                    value="South Korea">South Korea</option><option value="Kosovo">Kosovo</option><option
                                                    value="Kuwait">Kuwait</option><option
                                                    value="Kyrgyzstan">Kyrgyzstan</option><option
                                                    value="Laos">Laos</option><option value="Latvia">Latvia</option><option
                                                    value="Lebanon">Lebanon</option><option
                                                    value="Lesotho">Lesotho</option><option
                                                    value="Liberia">Liberia</option><option value="Libya">Libya</option><option
                                                    value="Liechtenstein">Liechtenstein</option><option
                                                    value="Lithuania">Lithuania</option><option value="Luxembourg">Luxembourg</option><option
                                                    value="Macedonia">Macedonia</option><option value="Madagascar">Madagascar</option><option
                                                    value="Malawi">Malawi</option><option
                                                    value="Malaysia">Malaysia</option><option
                                                    value="Maldives">Maldives</option><option value="Mali">Mali</option><option
                                                    value="Malta">Malta</option><option value="Marshall Islands">Marshall Islands</option><option
                                                    value="Mauritania">Mauritania</option><option value="Mauritius">Mauritius</option><option
                                                    value="Mexico">Mexico</option><option
                                                    value="Micronesia">Micronesia</option><option value="Moldova">Moldova</option><option
                                                    value="Monaco">Monaco</option><option
                                                    value="Mongolia">Mongolia</option><option value="Montenegro">Montenegro</option><option
                                                    value="Morocco">Morocco</option><option value="Mozambique">Mozambique</option><option
                                                    value="Myanmar">Myanmar</option><option
                                                    value="Namibia">Namibia</option><option value="Nauru">Nauru</option><option
                                                    value="Nepal">Nepal</option><option
                                                    value="Netherlands">Netherlands</option><option value="New Zealand">New Zealand</option><option
                                                    value="Nicaragua">Nicaragua</option><option
                                                    value="Niger">Niger</option><option value="Nigeria">Nigeria</option><option
                                                    value="Northern Mariana Islands">Northern Mariana Islands</option><option
                                                    value="Norway">Norway</option><option value="Oman">Oman</option><option
                                                    value="Pakistan">Pakistan</option><option
                                                    value="Palau">Palau</option><option value="Palestine, State of">Palestine, State of</option><option
                                                    value="Panama">Panama</option><option value="Papua New Guinea">Papua New Guinea</option><option
                                                    value="Paraguay">Paraguay</option><option value="Peru">Peru</option><option
                                                    value="Philippines">Philippines</option><option value="Poland">Poland</option><option
                                                    value="Portugal">Portugal</option><option value="Puerto Rico">Puerto Rico</option><option
                                                    value="Qatar">Qatar</option><option value="Romania">Romania</option><option
                                                    value="Russia">Russia</option><option value="Rwanda">Rwanda</option><option
                                                    value="Saint Kitts and Nevis">Saint Kitts and Nevis</option><option
                                                    value="Saint Lucia">Saint Lucia</option><option
                                                    value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option><option
                                                    value="Samoa">Samoa</option><option
                                                    value="San Marino">San Marino</option><option
                                                    value="Sao Tome and Principe">Sao Tome and Principe</option><option
                                                    value="Saudi Arabia">Saudi Arabia</option><option value="Senegal">Senegal</option><option
                                                    value="Serbia and Montenegro">Serbia and Montenegro</option><option
                                                    value="Seychelles">Seychelles</option><option value="Sierra Leone">Sierra Leone</option><option
                                                    value="Singapore">Singapore</option><option value="Sint Maarten">Sint Maarten</option><option
                                                    value="Slovakia">Slovakia</option><option
                                                    value="Slovenia">Slovenia</option><option value="Solomon Islands">Solomon Islands</option><option
                                                    value="Somalia">Somalia</option><option value="South Africa">South Africa</option><option
                                                    value="Spain">Spain</option><option
                                                    value="Sri Lanka">Sri Lanka</option><option
                                                    value="Sudan">Sudan</option><option value="Sudan, South">Sudan, South</option><option
                                                    value="Suriname">Suriname</option><option value="Swaziland">Swaziland</option><option
                                                    value="Sweden">Sweden</option><option value="Switzerland">Switzerland</option><option
                                                    value="Syria">Syria</option><option value="Taiwan">Taiwan</option><option
                                                    value="Tajikistan">Tajikistan</option><option value="Tanzania">Tanzania</option><option
                                                    value="Thailand">Thailand</option><option value="Togo">Togo</option><option
                                                    value="Tonga">Tonga</option><option value="Trinidad and Tobago">Trinidad and Tobago</option><option
                                                    value="Tunisia">Tunisia</option><option
                                                    value="Turkey">Turkey</option><option value="Turkmenistan">Turkmenistan</option><option
                                                    value="Tuvalu">Tuvalu</option><option value="Uganda">Uganda</option><option
                                                    value="Ukraine">Ukraine</option><option
                                                    value="United Arab Emirates">United Arab Emirates</option><option
                                                    value="United Kingdom">United Kingdom</option><option
                                                    value="United States">United States</option><option value="Uruguay">Uruguay</option><option
                                                    value="Uzbekistan">Uzbekistan</option><option value="Vanuatu">Vanuatu</option><option
                                                    value="Vatican City">Vatican City</option><option value="Venezuela">Venezuela</option><option
                                                    value="Vietnam">Vietnam</option><option
                                                    value="Virgin Islands, British">Virgin Islands, British</option><option
                                                    value="Virgin Islands, U.S.">Virgin Islands, U.S.</option><option
                                                    value="Yemen">Yemen</option><option value="Zambia">Zambia</option><option
                                                    value="Zimbabwe">Zimbabwe</option></select>
                                        <label for="input_1_6_6" id="input_1_6_6_label"
                                               class="hidden_sub_label">Country</label>
                                    </span>
                                        <div class="gf_clear gf_clear_complex"></div>
                                    </div>


                                </li>
                                <li id="field_1_8"
                                    class="gfield gf_left_third gfield_contains_required field_sublabel_above field_description_below hidden_label csshide">
                                    <label class="gfield_label" for="input_1_8">Mobile No.<span class="gfield_required">*</span></label>
                                    <div class="ginput_container"><input name="input_8" id="input_1_8" type="text"
                                                                         value="" class="medium" tabindex="17"
                                                                         maxlength="13" placeholder="Mobile Number*">
                                    </div>
                                </li>
                                <li id="field_1_9"
                                    class="gfield gf_right_third field_sublabel_above field_description_below hidden_label">
                                    <label class="gfield_label" for="input_1_9">Landline NO.</label>
                                    <div class="ginput_container"><input name="input_9" id="input_1_9" type="text"
                                                                         value="" class="medium" maxlength="16"
                                                                         tabindex="18" placeholder="Landline Number">
                                    </div>
                                </li>


                                <li id="field_1_11"
                                    class="gfield gf_right_full field_sublabel_above field_description_below">
                                    <label class="gfield_label" for="input_1_11">I would like to donate</label>
                                </li>


                                <li id="field_1_9"
                                    class="gfield gf_right_half field_sublabel_above field_description_below hidden_label">
                                    <select name="costtype" id="costtype" tabindex="16" style="
    float: left;
    width: 30% !important;
    margin-right: 10px;
">
                                        <option value="100"> INR</option>
                                        <option value="60"> USD</option>
                                    </select>
                                    <div class="ginput_container" style="
    width: 50%;
    float: left;
">

                                        <input name="input_11" id="input_1_11" type="text"
                                               value="<?php if ($_GET['amount'] != "") {
                                                   echo $_GET['amount'];
                                               } else {
                                                   echo "1000.00";
                                               } ?>" class="medium" tabindex="19">

                                    </div>
                                </li>
                                <div>
                                    <li class="gfield gf_right_half field_sublabel_above field_description_below hidden_label">
                                        <label class="gfield_label" for="input_1_1000">Description <span
                                                    class="gfield_required">*</span></label>
                                        <div class="ginput_container">
                                            <textarea style="width:140%" class="form-control" id="donation_description"
                                                      name="donation_description"
                                                      placeholder="Please enter details for which the donation is given"></textarea>
                                        </div>
                                        <br/>
                                    </li>
                                </div>

                                <li id="field_1_12"
                                    class="gfield gform_hidden field_sublabel_above field_description_below"><input
                                            name="input_12" id="input_1_12" type="hidden" class="gform_hidden"
                                            value="Pending"></li>
                                <li id="field_1_23" class="gfield field_sublabel_above field_description_below"><label
                                            class="gfield_label">I am an Indian paying from a bank in India</label>
                                    <div class="ginput_container">
                                        <ul class="gfield_radio" id="input_1_23" name="input_1_23">
                                            <li class="gchoice_1_23_0"><input name="input_23" type="radio" value="Yes"
                                                                              id="choice_1_23_y" tabindex="20"><label
                                                        for="choice_1_23_0" id="label_1_23_0">Yes</label></li>
                                            <li class="gchoice_1_23_1"><input name="input_23" type="radio" value="No"
                                                                              data-toggle="modal" data-target="#myModal"
                                                                              id="choice_1_23_1" tabindex="21"><label
                                                        for="choice_1_23_1" id="label_1_23_1">No</label></li>
                                        </ul>
                                    </div>
                                </li>
                                <li id="field_1_7" style="display:none;"
                                    class="gfield gf_left_third gfield_contains_required field_sublabel_above field_description_below hidden_label">
                                    <label class="gfield_label" for="input_1_7">PAN No.<span
                                                class="gfield_required">*</span></label>
                                    <div class="ginput_container"><input name="input_7" id="input_1_7" type="text"
                                                                         value="" class="medium" maxlength="11"
                                                                         tabindex="16" placeholder="PAN No.*"></div>
                                </li>
                                <li id="field_1_14"
                                    class="gfield field_sublabel_above field_description_below hidden_label"
                                    style="display: none;"><label class="gfield_label">ONLINE DONATION</label>
                                    <div class="ginput_container">
                                        <ul class="gfield_radio" id="input_1_14">
                                            <li class="gchoice_1_14_0"><input name="via" type="radio"
                                                                              value="ONLINE DONATE" id="choice_1_14_0"
                                                                              tabindex="22"><label for="choice_1_14_0"
                                                                                                   id="label_1_14_0">ONLINE
                                                    DONATION</label></li>
                                        </ul>
                                    </div>
                                </li>
                                <li id="field_1_17"
                                    class="gfield field_sublabel_above field_description_below hidden_label"
                                    style="display: none;"><label class="gfield_label">CHEQUE/DEMAND DRAFT</label>
                                    <div class="ginput_container">
                                        <ul class="gfield_radio" id="input_1_17">
                                            <li class="gchoice_1_17_0"><input name="via" type="radio"
                                                                              value="CHEQUE/DEMAND DRAFT"
                                                                              id="choice_1_17_0" tabindex="23"><label
                                                        for="choice_1_17_0" id="label_1_17_0">CHEQUE/DEMAND
                                                    DRAFT</label></li>
                                        </ul>
                                    </div>
                                </li>
                                <li id="field_1_18"
                                    class="gfield field_sublabel_above field_description_below hidden_label"
                                    style="display: none;"><label class="gfield_label">STANDING INSTRUCTIONS</label>
                                    <div class="ginput_container">
                                        <ul class="gfield_radio" id="input_1_18">
                                            <li class="gchoice_1_18_0"><input name="via" type="radio"
                                                                              value="STANDING INSTRUCTIONS"
                                                                              id="choice_1_18_0" tabindex="24"><label
                                                        for="choice_1_18_0" id="label_1_18_0">STANDING
                                                    INSTRUCTIONS</label></li>
                                        </ul>
                                    </div>
                                </li>
                                <li id="field_1_20"
                                    class="gfield gfield_html gfield_html_formatted gfield_no_follows_desc field_sublabel_above field_description_below"
                                    style="display: none;">
                                    <p>Please make Cheques in favor of "EFICOR, New Delhi".On clicking <strong>'Letter
                                            to EFICOR'</strong> below you will see a page with letter that should be
                                        sent to EFICOR along with your cheque. You can print it directly from the screen
                                        using the 'Print' button at the bottom of the page.<br>
                                        Please send it to us so that we are fully compliant under Indian laws and we can
                                        send you a receipt and regular updates.<br> Our address is:
                                    </p>


                                    <p>
                                        EFICOR,<br>
                                        308, Mahatta Tower,
                                        B-Block Community Centre,
                                        Janakpuri, New Delhi-110058
                                        Tel Fax : +91(0) 11-25516383/4/5
                                        Email:hq@eficor.org


                                    </p>

                                    <p class="ipt-box">EFICOR will always be blessed to receive your donation, however
                                        small. If you <font color="#000">would</font> like to make a regular donation,
                                        please use the ECS facility available with your bank or give a standing order to
                                        your banker for transfer to EFICOR's account. If you would like to make a
                                        standing order, please click <span class="me" style="cursor:pointer"
                                                                           id="gform_fields_3">I want to make a standing order</span>
                                    </p></li>
                                <li id="field_1_21"
                                    class="gfield gfield_html gfield_html_formatted gfield_no_follows_desc field_sublabel_above field_description_below"
                                    style="display: none;"><p> Thank you for considering a regular donation to
                                        EFICOR.<br><br>
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
                                                               maxlength="30" class="medium" tabindex="9"
                                                               placeholder="Please Enter Bank Name*">
                                                    </div>
                                                </li>
                                                <li id="field_1_5"
                                                    class="gfield gfield_contains_required field_sublabel_above field_description_below hidden_label">
                                                    <label class="gfield_label" for="input_1_5">Branch Name<span
                                                                class="gfield_required">*</span></label>
                                                    <div class="ginput_container">
                                                        <input name="br_name" id="input_1_5" type="text" value=""
                                                               maxlength="30" class="medium" tabindex="9"
                                                               placeholder="Please Enter Branch Name*">
                                                    </div>
                                                </li>
                                                <li id="field_1_5"
                                                    class="gfield gfield_contains_required field_sublabel_above field_description_below hidden_label">
                                                    <label class="gfield_label" for="input_1_5">Branch A/c No.<span
                                                                class="gfield_required">*</span></label>
                                                    <div class="ginput_container">
                                                        <input name="ac_no" id="input_1_5" type="text" value=""
                                                               maxlength="20" class="medium" tabindex="9"
                                                               placeholder="Please Enter Account No*">
                                                    </div>
                                                </li>
                                                <li id="field_1_5"
                                                    class="gfield gfield_contains_required field_sublabel_above field_description_below hidden_label">
                                                    <label class="gfield_label" for="input_1_5">Starting From<span
                                                                class="gfield_required">*</span></label>
                                                    <div class="ginput_container">
                                                        <input name="Strt_from_date" id="Strt_from_date" type="text"
                                                               value="" class="medium" tabindex="9"
                                                               placeholder="Enter starting from date* eg : dd/mm/yy">
                                                    </div>
                                                </li>
                                                <li id="field_1_5"
                                                    class="gfield gfield_contains_required field_sublabel_above field_description_below hidden_label">
                                                    <label class="gfield_label" for="input_1_5">Standing order for
                                                        transferring<span class="gfield_required">*</span></label>
                                                    <div class="ginput_container">
                                                        <select name="transfering" id="transfering"
                                                                class="medium gfield_select" tabindex="1">
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
                                    <p>If you would like to do the standing instruction through your bank's online
                                        banking, <br>EFICOR's banking details are:<br>
                                        Account Number: 30647111974<br>
                                        Name of the Bank: State Bank of India<br>
                                        Name of the Branch: District Center, Janakpuri, New Delhi<br>
                                        IFSC Code: SBIN0001706<br>


                                    </p></li>
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
                            </ul>
                        </div>


                        <div class="gform_footer top_label"><input type="submit" name="gform_submit_button_1"
                                                                   id="gform_submit_button_1"
                                                                   class="gform_button button" value="submit"
                                                                   tabindex="25">
                            <input type="hidden" class="gform_hidden" name="is_submit_1" value="1">
                            <input type="hidden" class="gform_hidden" name="gform_submit" value="1">

                            <input type="hidden" class="gform_hidden" name="gform_unique_id" value="">
                            <input type="hidden" class="gform_hidden" name="state_1"
                                   value="WyJbXSIsIjVhOGIwODM0ODAzNmY3ZTA3ZjdjZGI5ZTQ5OTY0Mjc0Il0=">
                            <input type="hidden" class="gform_hidden" name="gform_target_page_number_1"
                                   id="gform_target_page_number_1" value="0">
                            <input type="hidden" class="gform_hidden" name="gform_source_page_number_1"
                                   id="gform_source_page_number_1" value="1">
                            <input type="hidden" name="gform_field_values" value="">

                        </div>
                    </form>
                </div><!--<script type="text/javascript"> if(typeof gf_global == 'undefined') var gf_global = {"gf_currency_config":{"name":"U.S. Dollar","symbol_left":"$","symbol_right":"","symbol_padding":"","thousand_separator":",","decimal_separator":".","decimals":2},"base_url":"http:\/\/www.eficor.org\/wp-content\/plugins\/Download - Gravity Forms v1.9.6 Advanced Forms for WordPress","number_formats":[],"spinnerUrl":"http:\/\/www.eficor.org\/wp-content\/plugins\/Download - Gravity Forms v1.9.6 Advanced Forms for WordPress\/images\/spinner.gif"};jQuery(document).bind('gform_post_render', function(event, formId, currentPage){if(formId == 1) {if(window['jQuery']){if(!window['gf_form_conditional_logic'])window['gf_form_conditional_logic'] = new Array();window['gf_form_conditional_logic'][1] = {'logic' : {26: {"field":{"actionType":"show","logicType":"all","rules":[{"fieldId":"17","operator":"is","value":"CHEQUE\/DEMAND DRAFT"}]},"nextButton":null,"section":null},25: {"field":{"actionType":"show","logicType":"all","rules":[{"fieldId":"18","operator":"is","value":"STANDING INSTRUCTIONS"}]},"nextButton":null,"section":null},27: {"field":{"actionType":"show","logicType":"all","rules":[{"fieldId":"14","operator":"is","value":"ONLINE DONATE"}]},"nextButton":null,"section":null},14: {"field":{"actionType":"show","logicType":"all","rules":[{"fieldId":"23","operator":"is","value":"Yes"},{"fieldId":"17","operator":"isnot","value":"CHEQUE\/DEMAND DRAFT"},{"fieldId":"18","operator":"isnot","value":"STANDING INSTRUCTIONS"}]},"nextButton":null,"section":null},17: {"field":{"actionType":"show","logicType":"all","rules":[{"fieldId":"23","operator":"is","value":"Yes"},{"fieldId":"14","operator":"isnot","value":"ONLINE DONATE"},{"fieldId":"18","operator":"isnot","value":"STANDING INSTRUCTIONS"}]},"nextButton":null,"section":null},18: {"field":{"actionType":"show","logicType":"all","rules":[{"fieldId":"23","operator":"is","value":"Yes"},{"fieldId":"14","operator":"isnot","value":"ONLINE DONATE"},{"fieldId":"17","operator":"isnot","value":"CHEQUE\/DEMAND DRAFT"}]},"nextButton":null,"section":null},20: {"field":{"actionType":"show","logicType":"all","rules":[{"fieldId":"17","operator":"is","value":"CHEQUE\/DEMAND DRAFT"}]},"nextButton":null,"section":null},21: {"field":{"actionType":"show","logicType":"all","rules":[{"fieldId":"18","operator":"is","value":"STANDING INSTRUCTIONS"}]},"nextButton":null,"section":null},28: {"field":{"actionType":"show","logicType":"all","rules":[{"fieldId":"23","operator":"is","value":"No"}]},"nextButton":null,"section":null} }, 'dependents' : {26: [26],25: [25],27: [27],14: [14],17: [17],18: [18],20: [20],21: [21],28: [28] }, 'animation' : 0 , 'defaults' : {"4":{"4.2":"","4.3":"","4.4":"","4.6":"","4.8":""},"6":{"6.1":"","6.2":"","6.3":"","6.4":"","6.5":"","6.6":""},"11":"1000.00","12":"Pending"} }; if(!window['gf_number_format'])window['gf_number_format'] = 'decimal_dot';jQuery(document).ready(function(){gf_apply_rules(1, [26,25,27,14,17,18,20,21,28], true);jQuery('#gform_wrapper_1').show();jQuery(document).trigger('gform_post_conditional_logic', [1, null, true]);} );} if(typeof Placeholders != 'undefined'){
                        Placeholders.enable();
                    }} } );
					jQuery(document).bind('gform_post_conditional_logic', function(event, formId, fields, isInit){} ) ; </script>
					<script type="text/javascript"> jQuery(document).ready(function(){ jQuery(document).trigger('gform_post_render', [1, 1]) } );
					</script>-->
            </div>
        </div>
    </div>

    <!---End Pop up --->
    <script type="text/javascript"
            src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/jquery-1.7.1.min.js"></script>
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


            $('#gform_submit_button_1').click(function () {
                var input_3 = $('#input_1_3').val();
                var first_name = $('#input_1_4_3').val();
                var last = $('#input_1_4_6').val();
                var input_5 = $('#input_1_5').val();
                var address = $('#input_1_6_1').val();
                var city = $('#input_1_6_3').val();
                var state = $('#input_1_6_4').val();
                var pin = $('#input_1_6_5').val();
                var country = $('#input_1_6_6').val();
                var input_7 = $('#input_1_7').val();
                var input_8 = $('#input_1_8').val();
                var input_23 = $('#input_1_7').val();
                var input_1_23 = $('#input_1_23').val();
                var highlights = $('#highlight').val();
                var land1 = $('#input_1_9').val();
                var yas = $("input[name='input_23']:checked").val();

                var ck_last = /^[A-Za-z ]{3,20}$/;
                var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                var ck_name = /^[A-Za-z ]{3,20}$/;
                var reg = /^[a-zA-Z0-9\s,.'-]{2,100}$/;
                var regc = /^([a-zA-Z\u0080-\u024F]+(?:. |-| |'))*[a-zA-Z\u0080-\u024F]{2,25}$/;
                var regs = /^([a-zA-Z\u0080-\u024F]+(?:. |-| |'))*[a-zA-Z\u0080-\u024F]{2,25}$/;
                var regpin = /[\d]{5,7}/;
                var mob = /[\d]{10,13}/;
                var land = /[\d]{10,16}/;
                var regpan = /^([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}?$/;
                var re = /^\d{1,2}\/\d{1,2}$/;
                /*if(!re.test(input_3)){

                   $('#input_1_3').focus();
                       $('#input_1_3').css('border-color','red');
                        $("#input_1_3").keyup(function(){
                $('#input_1_3').css('border-color','');
                 });
                       return false;
                   }

                   else*/
                if (!ck_name.test(first_name)) {

                    $('#input_1_4_3').focus();
                    $('#input_1_4_3').css('border-color', 'red');
                    $("#input_1_4_3").keyup(function () {
                        $('#input_1_4_3').css('border-color', '');
                    });
                    return false;
                } else if (!ck_last.test(last)) {
                    $('#input_1_4_6').focus();
                    $('#input_1_4_6').css('border-color', 'red');
                    $("#input_1_4_6").keyup(function () {
                        $('#input_1_4_6').css('border-color', '');
                    });
                    return false;
                } else if (!regex.test(input_5)) {
                    $('#input_1_5').focus();
                    $('#input_1_5').css('border-color', 'red');
                    $("#input_1_5").keyup(function () {
                        $('#input_1_5').css('border-color', '');
                    });
                    return false;
                } else if (!reg.test(address)) {
                    $('#input_1_6_1').focus();
                    $('#input_1_6_1').css('border-color', 'red');
                    $("#input_1_6_1").keyup(function () {
                        $('#input_1_6_1').css('border-color', '');
                    });
                    return false;
                } else if (!regc.test(city)) {
                    $('#input_1_6_3').focus();
                    $('#input_1_6_3').css('border-color', 'red');
                    $("#input_1_6_3").keyup(function () {
                        $('#input_1_6_3').css('border-color', '');
                    });

                    return false;
                } else if (!regs.test(state)) {
                    $('#input_1_6_4').focus();
                    $('#input_1_6_4').css('border-color', 'red');
                    $("#input_1_6_4").keyup(function () {
                        $('#input_1_6_4').css('border-color', '');
                    });
                    return false;
                } else if (!regpin.test(pin)) {
                    $('#input_1_6_5').focus();
                    $('#input_1_6_5').css('border-color', 'red');
                    $("#input_1_6_5").keyup(function () {
                        $('#input_1_6_5').css('border-color', '');
                    });
                    return false;
                } else if (country == "") {
                    $('#input_1_6_6').focus();
                    $('#input_1_6_6').css('border-color', 'red');
                    $("#input_1_6_6").keyup(function () {
                        $('#input_1_6_6').css('border-color', '');
                    });
                    return false;
                } else if (!mob.test(input_8)) {
                    $('#input_1_8').focus();
                    $('#input_1_8').css('border-color', 'red');
                    $("#input_1_8").keyup(function () {
                        $('#input_1_8').css('border-color', '');
                    });
                    return false;
                }
                /*else if(!land.test(land1)){
                    $('#input_1_9').focus();
                    $('#input_1_9').css('border-color','red');
                    $("#input_1_9").keyup(function(){
                    $('#input_1_9').css('border-color','');
                });
                return false;
                }*/
                else if (!regpan.test(highlights) && yas == 'Yes') {
                    $('#highlight').focus();
                    $('#highlight').css('border-color', 'red');
                    $("#highlight").keyup(function () {
                        $('#highlight').css('border-color', '');
                    });
                    return false;
                }


            });


        });

    </script>
