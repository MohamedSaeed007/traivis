<table bgcolor="#f2f2f2" border="0" cellpadding="0" cellspacing="0" width="100%">
    <tbody>
        <tr>
            <td align="center" valign="top">
                <table bgcolor="#f8f8f8" border="0" cellpadding="0" cellspacing="0" class="mobile-shell" width="600">
                    <tbody>
                        <tr>
                            <td style="display:none !important;
    visibility:hidden;
    mso-hide:all;
    font-size:1px;
    color:#ffffff;
    line-height:1px;
    max-height:0px;
    max-width:0px;
    opacity:0;
    overflow:hidden;">We can&#39;t wait to see what you create. |</td>
                        </tr>
                        <tr>
                            <td class="td"
                                style="width:600px; min-width:600px; font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;">
                                <!-- Header -->
                                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                    <tbody>
                                        <tr>
                                            <td bgcolor="#f9f9f9" class="p20-15"
                                                style="padding: 20px 40px; border-bottom: 1px solid #dbdbdb;">
                                                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                    <tbody>
                                                        <tr>
                                                            <th class="column"
                                                                style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;"
                                                                width="157">
                                                                <div class="img-center"
                                                                    style="font-size:0pt; line-height:0pt; text-align:center;">
                                                                    <a href="" target="_blank">
                                                                        <pan class="text-traivis ">
                                                                            <x-svg-icons.logo-square
                                                                                class="block h-8 w-auto" />
                                                                        </pan>
                                                                    </a>
                                                                </div>
                                                            </th>
                                                            <th class="column"
                                                                style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;"
                                                                width="20">
                                                                <div class="m-br-15"
                                                                    style="font-size:0pt; line-height:0pt;">&nbsp;</div>
                                                            </th>
                                                            <th class="column"
                                                                style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;">
                                                                <table border="0" cellpadding="0" cellspacing="0"
                                                                    width="100%">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="text-nav m-center"
                                                                                style="color:#979696; font-family:Helvetica,Arial,sans-serif; font-size:8px; line-height:12px; text-align:right; letter-spacing:1px; white-space:nowrap;">
                                                                                <a class="link-grey" href=""
                                                                                    style="color:#979696; text-decoration:none;"
                                                                                    target="_blank"><span
                                                                                        class="link-grey"
                                                                                        style="color:#979696; text-decoration:none;">Traivis</span></a>
                                                                                |
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </th>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- END Header -->
                                <!-- END Header -->
                                <!-- Intro -->

                                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                    <tbody>
                                        <tr>
                                            <td class="intro-content" style="padding: 45px 100px 55px;">
                                                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                    <tbody>
                                                        <tr>
                                                            <td class="h1 center"
                                                                style="padding-bottom: 13px; color:#333333; font-family:Helvetica,Arial,sans-serif; font-size:40px; line-height:44px; letter-spacing:-1px; text-align:center;">
                                                                {{ $order->transactions->first()->productable_type == 'App\Models\Plan' ? 'Subscribed Successfully' : 'COURSES PURCHASED'}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text center"
                                                                style="padding-bottom: 25px; color:#828282; font-family:Helvetica,Arial,sans-serif; font-size:16px; line-height:24px; text-align:center;">
                                                                Hi <strong>
                                                                    @if ($order->transactions->first()->payerable_type
                                                                    == 'App\Models\Business')
                                                                    {{
                                                                    $order->transactions->first()->payerable->business_email
                                                                    }}
                                                                    @else
                                                                    {{ $order->transactions->first()->payerable->email
                                                                    }}
                                                                    @endif
                                                                </strong>, Thank You for your {{$order->transactions->first()->productable_type == 'App\Models\Plan' ? 'Subscription' : 'Order' }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td align="center">
                                                                <!-- Button -->
                                                                <table border="0" cellpadding="0" cellspacing="0"
                                                                    style="margin: 0 auto;">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td align="center" bgcolor="#333333"
                                                                                class="text-btn"><a
                                                                                    href="{{ route('order-invoice',$order) }}"
                                                                                    style="color: #ffffff; font-family:Helvetica,Arial,sans-serif; font-size: 12px; line-height: 14px; text-align: center; font-weight: bold; text-transform: uppercase; letter-spacing: 1px; border: 1px solid #333333; display: inline-block; mso-line-height-rule: exactly; padding: 15px 40px;"
                                                                                    target="_blank">
                                                                                    <font color="#ffffff">View Your
                                                                                        Invoice</font>
                                                                                </a></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <!-- END Button -->
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- EBD Intro -->
                                <!-- END Grey Section -->

                                <table bgcolor="#e6e6e6" border="0" cellpadding="0" cellspacing="0" width="100%">
                                    <!--FOOTER-->
                                    <tbody>
                                        <tr>
                                            <!-- Footer -->
                                        </tr>
                                        <tr>
                                            <td bgcolor="#e6e6e6" class="p20-15" style="padding: 24px 15px;">
                                                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-footer"
                                                                style="padding-bottom: 0px; color:#797979; font-family:Helvetica,Arial,sans-serif; font-size:11px; line-height:10px; text-align:center; letter-spacing:1px;">
                                                                THANKS, Traivis<br />
                                                                &nbsp;</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-footer-1"
                                                                style="padding-bottom: 13px; color:#797979; font-family:Helvetica,Arial,sans-serif; font-size:11px; line-height:16px; text-align:center;">
                                                                <a class="link-grey-u" href=""
                                                                    style="color:#979696; text-decoration:underline;"
                                                                    target="_blank"><span class="link-grey-u"
                                                                        style="color:#979696; text-decoration:underline;">Privacy
                                                                        Policy</span> </a> &nbsp;| &nbsp;<a
                                                                    class="link-grey-u" href=""
                                                                    style="color:#979696; text-decoration:underline;"
                                                                    target="_blank"><span class="link-grey-u"
                                                                        style="color:#979696; text-decoration:underline;">Contact
                                                                        Us</span></a> &nbsp;
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        <!-- END Footer -->
                                        <!--END FOOTER-->
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>