@extends('themes.frontend.layout.app')
@section('content')
    <div class="container clearfix">
        <div class="default-page">
            <div class="ipt_paydata">
                <div class="col-md-12">
                    <center><h3> Payment Confirmation Status</h3></center>
                    <br>


                    <p style="text-align: center">Thanks for your payment.Your Transaction for the amount
                    {{$details->amount}}.00 has been {{$status}}.Your Transaction Id is {{$transactionid}}

                </div>
{{--             @if($status=='APPROVED')--}}
{{--                  <p>--}}
{{--                      DEAR .{{$details->first_name}}.{{$details->second_name}},<br><br>--}}
{{--                      EFICOR, over the years, has been able to effect transformation in the nation through the generous--}}
{{--                    contributions of individuals and groups from across the world. We thank you for joining with us in--}}
{{--                    this journey as we work towards a just, responsible and compassionate society with your support and--}}
{{--                    contribution.<br><br>--}}

{{--                    We invite you to continue to journey with us through prayers, contributions and telling others about--}}
{{--                    the change that is happening in different communities in our nation through EFICOR and your--}}
{{--                    partnership.<br><br>--}}

{{--                    A stamped, printed receipt for 80G exemption will reach you soon, by post. In case you do not--}}
{{--                    receive it in 15 days please call us on 7777068068.<br><br>--}}

{{--                    If you would like to know more about EFICOR please visit our website www.eficor.orgor email us at--}}
{{--                    hq@eficor.org<br><br>--}}

{{--                    If you would like to receive regular updates on EFICOR’s work and plans, please send us an email at--}}
{{--                    subscribe@eficor.org.<br><br>--}}

{{--                    Thank you again for your support and we look forward to your continued support.<br><br>--}}

{{--                    With warm regards<br>--}}
{{--                    Kennedy Dhanabalan<br>--}}
{{--                    Executive Director--}}
{{--                  </p>--}}
{{--                @else--}}

{{--                    <p>--}}
{{--                        DEAR .{{$details->first_name}}.{{$details->second_name}},<br><br>--}}
{{--                    We regret to inform that your payment did not go through. Could you please try again or call--}}
{{--                    7777068068 for help. Support at EFICOR--}}
{{--                        DEAR .{{$details->first_name}}.{{$details->second_name}}<br><br>--}}
{{--                    We regret to inform you that your effort to donate did not succeed. We would be grateful if you--}}
{{--                    could try again in a little while or please call us at 7777068068 and we will be happy to help--}}
{{--                    you.<br><br>--}}

{{--                    We thank you for making a serious effort to make a generous contribution. EFICOR has been able to--}}
{{--                    effect transformation through generous contributions of individuals and groups from across the--}}
{{--                    world. <br><br>--}}

{{--                    If you would like to know more about EFICOR please visit our website www.eficor.org or email us at--}}
{{--                    hq@eficor.org<br><br>--}}

{{--                    If you would like to receive regular updates on EFICOR’s work and plans, please send us an email at--}}
{{--                    subscribe@eficor.org.<br><br>--}}

{{--                    Thank you again for your support and we look forward to your continued support.<br><br>--}}

{{--                    With warm regards<br>--}}
{{--                    Kennedy Dhanabalan<br>--}}
{{--                    Executive Director--}}
{{--                    </p>--}}
{{--                @endif--}}




                </div>

                <br><br><br><br>


            </div>
        </div>
@endsection
