<!DOCTYPE html>
<html lang="en">

<head>
    <title>Hotel Voucher - Horison Ultima Bandung</title>
    <style>
        @page {
            margin-bottom: -100;
            size: letter;
            /*or width x height 150mm 50mm*/
        }

        .font-voucher {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        .fs-11 {
            font-size: 11px;
        }

        .fs-12 {
            font-size: 12px;
        }

        .fs-13 {
            font-size: 13px;
        }

        .fs-14 {
            font-size: 14px;
        }

        .horison-dark {
            color: #1E1E1E
        }

        .horison-dark-2 {
            color: #323639
        }

        .mt-min10 {
            margin-top: -10px;
        }

        .mt-min25 {
            margin-top: -25px;
        }

        .mb-12 {
            margin-bottom: 12px;
        }

    </style>
</head>

@php
if ($data->rsvp_guest_name == '') {
    $guest_name = $data->rsvp_cust_name;
} else {
    $guest_name = $data->rsvp_guest_name;
}

@endphp

<body class="page-body" data-url="">
    <div class="col-lg-12">
        <div class="container">
            <div class="panel panel-gradient" style="margin-bottom:100px;">

                <!-- panel body -->
                <div class="panel-body">

                    {{-- BOOKING DETAILS - HEADER --}}
                    <div class="row">
                        <div class="col-sm-3 col-md-3">
                            <img src="{{ public_path('/images/logo/logo.jpg') }}" width="210"
                                alt="Horison Ultima Bandung">
                            <h1 class="font-voucher horison-dark" style="margin-top: -66px; margin-left: 230px;">
                                <b>Hotel Voucher</b><br>
                                <span><i class="fs-11">Present either electronic or paper copy of your booking
                                        confirmation upon check-in</i></span>
                            </h1>
                        </div>
                    </div>

                    <hr class="mt-min10">

                    {{-- BOOKING DETAILS - ROW 1 --}}
                    <h3 class="font-voucher horison-dark" style="margin-bottom:3%;">Booking Details</h3>

                    <div class="row">
                        <table width="100%" class="font-voucher fs-14 horison-dark">
                            <tr>
                                <td style="width:30%; height:4%; vertical-align:top;"><b>Reservation Number:</b></td>
                                <td style="width:35%; vertical-align:top;">{{ $data->reservation_id }}</td>
                                <td style="width:18%; vertical-align:top;"><b>Address:</b></td>
                                <td rowspan="2" style="width:60%; vertical-align:top;">{{ $setting->address }}</td>
                            </tr>
                            <tr>
                                <td style="width:30%; height:4%; vertical-align:top;"><b>Booking Made by:</b></td>
                                <td style="width:35%; vertical-align:top;">{{ $data->rsvp_cust_name }}</td>
                            </tr>
                        </table>
                    </div>

                    <hr style="border: 0.1px solid #BFBFBF">

                    {{-- BOOKING DETAILS - ROW 2 --}}
                    <div class="row" style="margin-top:20px; margin-bottom:20px;">
                        <table style="width:100%" class="font-voucher fs-14 horison-dark">
                            @if ($data->from == 'ROOMS')
                                <tr>
                                    <td style="height:4%; vertical-align:top;width:30%"><b>Guest:</b></td>
                                    <td style="vertical-align:top;width:35%">{{ $guest_name }}</td>
                                </tr>
                                <tr>
                                    <td style="height:4%; vertical-align:top;width:30%"><b>Room Type:</b></td>
                                    <td style="vertical-align:top;width:35%">{{ $data->room->room_name }}</td>
                                    <td
                                        style="vertical-align:top; border-top: 1px dashed black; border-left: 1px dashed black; padding-left:10px;width:35%">
                                        <b>Payment Details</b>
                                    </td>
                                    <td
                                        style="vertical-align:top; border-top: 1px dashed black; border-right: 1px dashed black;width:60%">
                                    </td>
                                </tr>
                                <tr>
                                    <td style="height:4%; vertical-align:top;width:30%"><b>Check In:</b></td>
                                    <td style="vertical-align:top;width:35%">{{ $data->rsvp_checkin }}</td>
                                    <td
                                        style="vertical-align:top; border-top: 1px dashed transparent; border-left: 1px dashed black; padding-left:10px;width:35%">
                                        Payment Method:</td>
                                    <td
                                        style="vertical-align:top; border-top: 1px dashed transparent; border-right: 1px dashed black;width:60%">
                                        {{ $data->payment->payment_type }}</td>
                                </tr>
                                <tr>
                                    <td style="width:140px; height:4%; vertical-align:top;width:30%"><b>Check Out:</b>
                                    </td>
                                    <td style="width:230px; vertical-align:top;width:35%">{{ $data->rsvp_checkout }}
                                    </td>
                                    <td
                                        style="vertical-align:top; border-bottom: 1px dashed black; border-left: 1px dashed black; padding-left:10px;width:35%">
                                        Transferred Date:</td>
                                    <td
                                        style="vertical-align:top; border-bottom: 1px dashed black; border-right: 1px dashed black;width:60%">
                                        {{ $data->payment->transaction_time }}</td>
                                </tr>
                                <tr>
                                    <td style="height:4%; vertical-align:top; width:30%"><b>Additional:</b></td>
                                    <td style="vertical-align:top;width:35%">{{ $data->rsvp_total_extrabed }} x Extra
                                        Bed</td>
                                </tr>
                                <tr>
                                    <td style="height:4%; vertical-align:top;width:30%"><b>Breakfast:</b></td>
                                    <td style="vertical-align:top;width:35%">
                                        {{ $data->rsvp_breakfast == 1 ? 'Yes' : 'No' }}
                                    </td>
                                </tr>
                            @endif
                            @if ($data->from == 'PRODUCTS')
                                <tr>
                                    <td style="height:4%; vertical-align:top;width:30%"><b>Guest:</b></td>
                                    <td style="vertical-align:top;width:35%">{{ $guest_name }}</td>
                                    <td
                                        style="vertical-align:top; border-top: 1px dashed black; border-left: 1px dashed black; padding-left:10px;width:35%">
                                        <b>Payment Details</b>
                                    </td>
                                    <td
                                        style="vertical-align:top; border-top: 1px dashed black; border-right: 1px dashed black;width:60%">
                                    </td>
                                </tr>
                                <tr>
                                    <td style="height:4%; vertical-align:top;width:30%"><b>Package Name:</b></td>
                                    <td style="vertical-align:top;width:35%">{{ $data->product->product_name }}</td>
                                    <td
                                        style="vertical-align:top; border-top: 1px dashed transparent; border-left: 1px dashed black; padding-left:10px;width:35%">
                                        Payment Method:</td>
                                    <td
                                        style="vertical-align:top; border-top: 1px dashed transparent; border-right: 1px dashed black;width:60%">
                                        {{ $data->payment->payment_type }}</td>
                                </tr>
                                <tr>
                                    <td style="height:4%; vertical-align:top;width:30%"><b>Reserved For:</b></td>
                                    <td style="vertical-align:top;width:35%">{{ $data->rsvp_amount_pax }} Pax</td>
                                    <td
                                        style="vertical-align:top; border-bottom: 1px dashed black; border-left: 1px dashed black; padding-left:10px;width:35%">
                                        Transferred Date:</td>
                                    <td
                                        style="vertical-align:top; border-bottom: 1px dashed black; border-right: 1px dashed black;width:60%">
                                        {{ $data->payment->transaction_time }}</td>
                                </tr>
                                <tr>
                                    <td style="width:140px; height:4%; vertical-align:top;width:30%"><b>Date:</b></td>
                                    <td style="width:230px; vertical-align:top;width:50%">
                                        {{ $data->rsvp_date_reserve }}</td>
                                </tr>
                            @endif
                            <tr>
                                <td style="height:4%; vertical-align:top;width:30%"><b>Special Request:</b></td>
                                <td style="vertical-align:top;width:35%">{{ $data->rsvp_special_request }}</td>
                            </tr>
                        </table>
                    </div>

                    <hr>

                    {{-- BOOKING DETAILS - ROW 3 --}}
                    <div class="row">
                        <div class="col-md-9">
                            <h4 class="font-voucher horison-dark" style="font-size: 16px;">Remarks</h4>
                            <ul class="fs-14">
                                <li class="mb-12 font-voucher horison-dark">Service and Tax are <b>Included in the
                                        Price.</b></li>
                                <li class="mb-12 font-voucher horison-dark">All special request are subject to
                                    availability upon arrival and any specific additional request made should contact
                                    the hotel at the maximum 1 day prior before arrival.</li>
                                @if ($data->from == 'ROOMS')
                                    <li class="mb-12 font-voucher horison-dark">Breakfast are not applied for Guest
                                        using
                                        Extra Bed(s).</li>
                                    <li class="mb-12 font-voucher horison-dark">Check In from 08.00 AM until 14.00 PM,
                                        while
                                        Check Out at 12.00 PM.</li>
                                    <li class="mb-12 font-voucher horison-dark">Guest should contact hotel 1 day prior
                                        to
                                        arrival or inform for any possible early or late Check In.</li>
                                @endif
                            </ul>
                        </div>
                        <div class="col-md-9">
                            <h4 class="font-voucher horison-dark" style="font-size: 16px;">Cancellation, Refund and
                                Reschedule Policy</h4>
                            <ul class="fs-14">
                                @if ($data->from == 'ROOMS')
                                    <li class="mb-12 font-voucher horison-dark">
                                        Cancellation for booking(s) 4 days prior before Check In will not apply any
                                        Cancellation Fee,
                                        while Cancellation that made <b>less than 4 days before Check In</b> will apply
                                        Cancellation Fee
                                        before being Refunded.
                                    </li>
                                @endif
                                <li class="mb-12 font-voucher horison-dark">Contact our costumer services for
                                    cancellation, refund and reschedule possibility.
                                </li>
                            </ul>
                        </div>
                    </div>

                    {{-- BOOKING DETAILS - FOOTER --}}
                    <div class="row" style="position: absolute; bottom:45px;">
                        <hr>
                        <table class="font-voucher fs-11 horison-dark;">
                            <tr>
                                <td style="width:345px; vertical-align:top; text-align: center;"><b><i>Customer Services
                                            Email</i></b></td>
                                <td style="width:345px; vertical-align:top; text-align: center;"><b><i>Customer
                                            Services</i></b></td>
                            </tr>
                            <tr>
                                <td
                                    style="height: 3%; vertical-align:middle; text-align: center; padding-bottom: 10px;">
                                    <span><img src="{{ public_path('/images/utility/mail.jpg') }}" width="10"
                                            style="margin-top: 1px; margin-right:3px;">{{ $setting->email }}
                                    </span>
                                </td>
                                <td
                                    style="height: 3%; vertical-align:middle; text-align: center; padding-bottom: 10px;">
                                    <span><img src="{{ public_path('/images/utility/phone.jpg') }}" width="10"
                                            style="margin-right:3px;"> {{ $setting->phone }}</span>
                                </td>
                            </tr>
                        </table>
                    </div>

                </div>

            </div>
        </div>
    </div>
</body>

</html>
