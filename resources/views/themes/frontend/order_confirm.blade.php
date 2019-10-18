@extends('themes.frontend.layout.app')
@section('content')
    <style>
        .btn-class {
            padding: 7px;
            color: #fff;
            font-size: 1.4em !important;
            text-transform: uppercase;
            border: none;
            background: #008d7d;
            display: block;
            float: left;
            border-radius: 0px;
            margin-bottom: 5%;
        }
    </style>
    <div style="  background-color:#FFF; color:#000000; border:0; width:100%; font-weight:bold;font-size:20px"> <marquee behavior="scroll" onmouseover="this.stop()" onmouseout="this.start()"> EFICOR FANI CYCLONE RELIEF : An Amount of Rs.700 will help a family to have meals for the next 21 days as per international standards.Please <a href="https://www.eficor.org/donate/">Donate</a></marquee></div>
    <div class="container clearfix">
        <div class="default-page">
            <center><label><h2> Thank you for your donation</h2></label></center>
            <div class="ipt_paydata">
    <div   class="col-md-12" id="printableArea">
        <p style="color:black; background-color:#f1f1f2; font-size:16px !important;">To <br>
              The Director,<br>
               EFICOR<br>
              308, Mahatta Towers<br>
              B- Block Community Centre<br>
              Janakpuri<br>
            New Delhi 110058<br><br>
            Date: {{date('Y-m-d')}}<br><br>

            Dear Friend,<br>

            This contribution of  INR&nbsp;{{$details->amount}} to EFICOR's work is given by {{$details->first_name}} {{$details->second_name}} and is meant for charity purposes only. Please inform us of receipt of the money and send a report on its utilization
            as indicated by me below.
            I am attaching a copy of the photo page of my passport for added confirmation.
            <br><br>
            My Address is : {{$details->address}} <br>

            My Email Contact is : {{$details->mobile}} <br>
            If any of your team is in my area please contact me on my mobile no. 7081152574<br>
            With regards<br><br>
            ( {{$details->first_name}} ) <br>

        </p>
    </div>
    <input type="submit" class="btn-class" onclick="printDiv('printableArea')" value="PRINT">

    </div>
    </div>

    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <script type="text/javascript">
        function printDiv(divName) {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        }
    </script>
    @endsection
