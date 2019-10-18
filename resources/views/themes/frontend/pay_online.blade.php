@extends('themes.frontend.layout.app')
@section('content')
<h3>Make Payment</h3>
<?php
$oid =$order_id;
$CT =$amount;
$txntype = 'sale';
$currency =$cr;
$mode = 'payonly';
$storename = '3396087960';
$sharedsecret = 'SjC9ZHChJ5';
date_default_timezone_set('Asia/Kolkata');
$responseSuccessURL = url('payment/response'); //Need to change as per location of response page
$responseFailURL = url('payment/response');
$stringToHash = $storename.date('Y:m:d-H:i:s').$CT.'356'.$sharedsecret;

$ascii = bin2hex($stringToHash);

$shal= sha1($ascii);
?>
<form action="https://www4.ipg-online.com/connect/gateway/processing" method="post" name="icci_pay">
@csrf
    <input type="hidden" name="fdfdfdf">
    <input type="hidden" name="timezone" value="IST" />
    <input type="hidden" name="authenticateTransaction" value="true" />
    <input type="hidden" name="oid" value="<?php echo $oid ?>"  />
    <input size="50" type="hidden" name="txntype" value="<?php echo $txntype ?>"  />
    <input size="50" type="hidden" name="txndatetime" value="<?php echo  date('Y:m:d-H:i:s'); ?>"  />
    <input size="50" type="hidden" name="hash" value="<?php echo $shal ?>"  />
    <input size="50" type="hidden" name="currency" value="<?php echo $currency ?>"  />
    <input size="50" type="hidden" name="mode" value="<?php echo $mode ?>"  />
    <input size="50" type="hidden" name="storename" value="<?php echo $storename ?>"  />
    <input size="50" type="hidden" name="chargetotal" value="<?php echo $CT ?>"  />
    <input size="50" type="hidden" name="sharedsecret" value="<?php echo $sharedsecret ?>"  />
    <input type="hidden" name="responseSuccessURL" value="<?php echo $responseSuccessURL ?>"  />
    <input type="hidden" name="responseFailURL" value="<?php echo $responseFailURL ?>"  />
    <input type="hidden" name="hash_algorithm" value="SHA1"/>
    <button type="submit" value="add">ADD</button>
</form>
    <script>
        window.onload = function(){
            document.forms['icci_pay'].submit();
        }
    </script>
@endsection
