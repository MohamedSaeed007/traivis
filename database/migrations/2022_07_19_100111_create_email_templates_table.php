<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmailTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('email_templates', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table
                ->string('key')
                ->nullable()
                ->unique('key');
            $table->string('from', 50)->nullable();
            $table->text('to')->nullable();
            $table->string('subject')->nullable();
            $table->text('email_body');
            $table->boolean('is_show')->default(1);
            $table->integer('created_by')->nullable();
            $table->text('required_data')->nullable();
            $table->timestamps();
        });
        $email_templates_array = [
            [
                'title' => 'Password Reset for User',
                'key' => 'user-password-reset',
                'from' => null,
                'to' => null,
                'subject' => 'Password Reset',
                'email_body' => '<table bgcolor="#f2f2f2" border="0" cellpadding="0" cellspacing="0" width="100%">
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
overflow:hidden;">Password reset for Traivis</td>
</tr>
<tr>
<td class="td" style="width:600px; min-width:600px; font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;"><!-- Header -->
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody>
<tr>
<td bgcolor="#f9f9f9" class="p20-15" style="padding: 20px 40px; border-bottom: 1px solid #dbdbdb;">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody>
<tr>
<th class="column" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;" width="157">
<div class="img-center" style="font-size:0pt; line-height:0pt; text-align:center;"><a href="https://traivis.com/" target="_blank"><img alt="Traivis" border="0" class="text-alt" height="42" src="http://traivis.com/assets/images/logo.png" width="128" /></a></div>
</th>
<th class="column" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;" width="20">
<div class="m-br-15" style="font-size:0pt; line-height:0pt;">&nbsp;</div>
</th>
<th class="column" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody>
<tr>
<td class="text-nav m-center" style="color:#979696; font-family:Helvetica,Arial,sans-serif; font-size:8px; line-height:12px; text-align:right; letter-spacing:1px; white-space:nowrap;"><a class="link-grey" href="https://traivis.com/" style="color:#979696; text-decoration:none;" target="_blank"><span class="link-grey" style="color:#979696; text-decoration:none;">TRAIVIS</span></a>&nbsp;</td>
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
<!-- END Header --><!-- END Header --><!-- Intro -->

<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody>
<tr>
<td class="intro-content" style="padding: 45px 100px 55px;">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody>
<tr>
<td class="h1 center" style="padding-bottom: 13px; color:#333333; font-family:Helvetica,Arial,sans-serif; font-size:40px; line-height:44px; letter-spacing:-1px; text-align:center;">RESET YOUR PASSWORD</td>
</tr>
<tr>
<td class="text center" style="padding-bottom: 25px; color:#828282; font-family:Helvetica,Arial,sans-serif; font-size:16px; line-height:24px; text-align:center;">Hi <strong>[Name]</strong>,</td>
</tr>
<tr>
<td class="text center" style="padding-bottom: 25px; color:#828282; font-family:Helvetica,Arial,sans-serif; font-size:16px; line-height:24px; text-align:center;"><strong>Click below button to reset your password.</strong></td>
</tr>
<tr>
<td align="center"><!-- Button -->
<table border="0" cellpadding="0" cellspacing="0" style="margin: 0 auto;">
<tbody>
<tr>
<td align="center" bgcolor="#333333" class="text-btn"><a href="[activation_token]" style="color: #ffffff; font-family:Helvetica,Arial,sans-serif; font-size: 12px; line-height: 14px; text-align: center; font-weight: bold; text-transform: uppercase; letter-spacing: 1px; border: 1px solid #333333; display: inline-block; mso-line-height-rule: exactly; padding: 15px 40px;" target="_blank"><font color="#ffffff">Reset Password </font> </a></td>
</tr>
</tbody>
</table>
<!-- END Button --></td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<!-- EBD Intro --><!-- END Grey Section -->

<table bgcolor="#e6e6e6" border="0" cellpadding="0" cellspacing="0" width="100%"><!--FOOTER-->
<tbody>
<tr><!-- Footer -->
</tr>
<tr>
<td bgcolor="#e6e6e6" class="p20-15" style="padding: 24px 15px;">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody>
<tr>
<td class="text-footer" style="padding-bottom: 0px; color:#797979; font-family:Helvetica,Arial,sans-serif; font-size:11px; line-height:10px; text-align:center; letter-spacing:1px;">THANKS, TRAIVIS<br />
&nbsp;</td>
</tr>
<tr>
<td class="text-footer-1" style="padding-bottom: 13px; color:#797979; font-family:Helvetica,Arial,sans-serif; font-size:11px; line-height:16px; text-align:center;"><a class="link-grey-u" href="https://traivis.com/privacy-policy" style="color:#979696; text-decoration:underline;" target="_blank"><span class="link-grey-u" style="color:#979696; text-decoration:underline;">Privacy Policy</span> </a> &nbsp;| &nbsp;<a class="link-grey-u" href="https://traivis.com/contact-us" style="color:#979696; text-decoration:underline;" target="_blank"><span class="link-grey-u" style="color:#979696; text-decoration:underline;">Contact Us</span></a> &nbsp;</td>
</tr>
</tbody>
</table>
</td>
</tr>
<!-- END Footer --><!--END FOOTER-->
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>',
                'is_show' => 1,
                'created_by' => 1,
                'created_at' => '2018-05-17 06:12:20',
                'updated_at' => '2021-02-24 11:26:39',
            ],
            [
                'title' => 'Certificate Upload',
                'key' => 'certificate-upload',
                'from' => null,
                'to' => null,
                'subject' => 'upload certificate',
                'email_body' => '<table bgcolor="#f2f2f2" border="0" cellpadding="0" cellspacing="0" width="100%">
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
overflow:hidden;">&nbsp;</td>
</tr>
<tr>
<td class="td" style="width:600px; min-width:600px; font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;"><!-- Header -->
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody>
<tr>
<td bgcolor="#f9f9f9" class="p20-15" style="padding: 20px 40px; border-bottom: 1px solid #dbdbdb;">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody>
<tr>
<th class="column" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;" width="157">
<div class="img-center" style="font-size:0pt; line-height:0pt; text-align:center;"><a href="http://traivis.com/" target="_blank"><img alt="My Traivis" border="0" class="text-alt" height="42" src="http://traivis.com/assets/images/logo.png" width="128" /></a></div>
</th>
<th class="column" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;" width="20">
<div class="m-br-15" style="font-size:0pt; line-height:0pt;">&nbsp;</div>
</th>
<th class="column" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody>
<tr>
<td class="text-nav m-center" style="color:#979696; font-family:Helvetica,Arial,sans-serif; font-size:8px; line-height:12px; text-align:right; letter-spacing:1px; white-space:nowrap;"><a class="link-grey" href="http://traivis.com/" style="color:#979696; text-decoration:none;" target="_blank"><span class="link-grey" style="color:#979696; text-decoration:none;">Traivis</span></a> |</td>
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
<!-- END Header --><!-- END Header --><!-- Intro -->

<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody>
<tr>
<td class="intro-content" style="padding: 45px 100px 55px;">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody>
<tr>
<td class="h1 center" style="padding-bottom: 13px; color:#333333; font-family:Helvetica,Arial,sans-serif; font-size:40px; line-height:44px; letter-spacing:-1px; text-align:center;">CERTIFICATE UPLOAD</td>
</tr>
<tr>
<td class="text center" style="padding-bottom: 25px; color:#828282; font-family:Helvetica,Arial,sans-serif; font-size:16px; line-height:24px; text-align:center;">Hi <b>[user]</b>, Super Admin [name] upload a certificate for [course] course.</td>
</tr>
<tr>
<td align="center">
<table border="0" cellpadding="0" cellspacing="0" style="margin: 0 auto;">
<tbody>
<tr>
<td align="center" class="text-btn">&nbsp;</td>
<td align="center" class="text-btn">&nbsp;</td>
</tr>
<tr>
<td align="center" bgcolor="#333333" class="text-btn"><a href="http://traivis.com/" style="color: #ffffff; font-family:Helvetica,Arial,sans-serif; font-size: 12px; line-height: 14px; text-align: center; font-weight: bold; text-transform: uppercase; letter-spacing: 1px; border: 1px solid #333333; display: inline-block; mso-line-height-rule: exactly; padding: 15px 40px;" target="_blank"><font color="#ffffff">GO TO WEBSITE </font> </a></td>
</tr>
</tbody>
</table>
<!-- END Button --></td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<!-- EBD Intro --><!-- END Grey Section -->

<table bgcolor="#e6e6e6" border="0" cellpadding="0" cellspacing="0" width="100%"><!--FOOTER-->
<tbody>
<tr><!-- Footer -->
</tr>
<tr>
<td bgcolor="#e6e6e6" class="p20-15" style="padding: 24px 15px;">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody>
<tr>
<td class="text-footer" style="padding-bottom: 0px; color:#797979; font-family:Helvetica,Arial,sans-serif; font-size:11px; line-height:10px; text-align:center; letter-spacing:1px;">THANKS, Traivis<br />
&nbsp;</td>
</tr>
<tr>
<td class="text-footer-1" style="padding-bottom: 13px; color:#797979; font-family:Helvetica,Arial,sans-serif; font-size:11px; line-height:16px; text-align:center;"><a class="link-grey-u" href="http://traivis.com/privacy-policy" style="color:#979696; text-decoration:underline;" target="_blank"><span class="link-grey-u" style="color:#979696; text-decoration:underline;">Privacy Policy</span> </a> &nbsp;| &nbsp;<a class="link-grey-u" href="http://traivis.com/contact-us" style="color:#979696; text-decoration:underline;" target="_blank"><span class="link-grey-u" style="color:#979696; text-decoration:underline;">Contact Us</span></a> &nbsp;</td>
</tr>
</tbody>
</table>
</td>
</tr>
<!-- END Footer --><!--END FOOTER-->
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>',
                'is_show' => 1,
                'created_by' => 1,
                'created_at' => '2020-11-25 16:06:12',
                'updated_at' => '2021-02-23 13:10:47',
            ],
            [
                'title' => 'Course Purchase',
                'key' => 'course-purchase',
                'from' => null,
                'to' => null,
                'subject' => 'course purchase',
                'email_body' => '<table bgcolor="#f2f2f2" border="0" cellpadding="0" cellspacing="0" width="100%">
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
<td class="td" style="width:600px; min-width:600px; font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;"><!-- Header -->
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody>
<tr>
<td bgcolor="#f9f9f9" class="p20-15" style="padding: 20px 40px; border-bottom: 1px solid #dbdbdb;">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody>
<tr>
<th class="column" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;" width="157">
<div class="img-center" style="font-size:0pt; line-height:0pt; text-align:center;"><a href="http://traivis.com/" target="_blank"><img alt="My Traivis" border="0" class="text-alt" height="42" src="http://traivis.com/assets/images/logo.png" width="128" /></a></div>
</th>
<th class="column" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;" width="20">
<div class="m-br-15" style="font-size:0pt; line-height:0pt;">&nbsp;</div>
</th>
<th class="column" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody>
<tr>
<td class="text-nav m-center" style="color:#979696; font-family:Helvetica,Arial,sans-serif; font-size:8px; line-height:12px; text-align:right; letter-spacing:1px; white-space:nowrap;"><a class="link-grey" href="http://traivis.com/" style="color:#979696; text-decoration:none;" target="_blank"><span class="link-grey" style="color:#979696; text-decoration:none;">Traivis</span></a> |</td>
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
<!-- END Header --><!-- END Header --><!-- Intro -->

<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody>
<tr>
<td class="intro-content" style="padding: 45px 100px 55px;">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody>
<tr>
<td class="h1 center" style="padding-bottom: 13px; color:#333333; font-family:Helvetica,Arial,sans-serif; font-size:40px; line-height:44px; letter-spacing:-1px; text-align:center;">COURSE PURCHASED</td>
</tr>
<tr>
<td class="text center" style="padding-bottom: 25px; color:#828282; font-family:Helvetica,Arial,sans-serif; font-size:16px; line-height:24px; text-align:center;">Hi <strong>[fullname]</strong>, Thank You for purchaing the &quot; [course] &quot; Course&nbsp;</td>
</tr>
<tr>
<td align="center"><!-- Button -->
<table border="0" cellpadding="0" cellspacing="0" style="margin: 0 auto;">
<tbody>
<tr>
<td align="center" bgcolor="#333333" class="text-btn"><a href="http://traivis.com/courses" style="color: #ffffff; font-family:Helvetica,Arial,sans-serif; font-size: 12px; line-height: 14px; text-align: center; font-weight: bold; text-transform: uppercase; letter-spacing: 1px; border: 1px solid #333333; display: inline-block; mso-line-height-rule: exactly; padding: 15px 40px;" target="_blank"><font color="#ffffff">View Your Listing</font> </a></td>
</tr>
</tbody>
</table>
<!-- END Button --></td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<!-- EBD Intro --><!-- END Grey Section -->

<table bgcolor="#e6e6e6" border="0" cellpadding="0" cellspacing="0" width="100%"><!--FOOTER-->
<tbody>
<tr><!-- Footer -->
</tr>
<tr>
<td bgcolor="#e6e6e6" class="p20-15" style="padding: 24px 15px;">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody>
<tr>
<td class="text-footer" style="padding-bottom: 0px; color:#797979; font-family:Helvetica,Arial,sans-serif; font-size:11px; line-height:10px; text-align:center; letter-spacing:1px;">THANKS, Traivis<br />
&nbsp;</td>
</tr>
<tr>
<td class="text-footer-1" style="padding-bottom: 13px; color:#797979; font-family:Helvetica,Arial,sans-serif; font-size:11px; line-height:16px; text-align:center;"><a class="link-grey-u" href="http://traivis.com/privacy-policy" style="color:#979696; text-decoration:underline;" target="_blank"><span class="link-grey-u" style="color:#979696; text-decoration:underline;">Privacy Policy</span> </a> &nbsp;| &nbsp;<a class="link-grey-u" href="http://traivis.com/contact-us" style="color:#979696; text-decoration:underline;" target="_blank"><span class="link-grey-u" style="color:#979696; text-decoration:underline;">Contact Us</span></a> &nbsp;</td>
</tr>
</tbody>
</table>
</td>
</tr>
<!-- END Footer --><!--END FOOTER-->
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>',
                'is_show' => 1,
                'created_by' => 1,
                'created_at' => '2020-12-10 10:50:57',
                'updated_at' => '2021-02-23 10:08:36',
            ],
            [
                'title' => 'Register',
                'key' => 'register-notification',
                'from' => null,
                'to' => null,
                'subject' => 'Register',
                'email_body' => '<table bgcolor="#f2f2f2" border="0" cellpadding="0" cellspacing="0" width="100%">
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
overflow:hidden;">Your account has been created</td>
</tr>
<tr>
<td class="td" style="width:600px; min-width:600px; font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;"><!-- Header -->
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody>
<tr>
<td bgcolor="#f9f9f9" class="p20-15" style="padding: 20px 40px; border-bottom: 1px solid #dbdbdb;">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody>
<tr>
<th class="column" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;" width="157">
<div class="img-center" style="font-size:0pt; line-height:0pt; text-align:center;"><a href="http://traivis.com/" target="_blank"><img alt="Traivis" border="0" class="text-alt" height="42" src="http://traivis.com/assets/images/logo.png" width="128" /></a></div>
</th>
<th class="column" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;" width="20">
<div class="m-br-15" style="font-size:0pt; line-height:0pt;">&nbsp;</div>
</th>
<th class="column" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody>
<tr>
<td class="text-nav m-center" style="color:#979696; font-family:Helvetica,Arial,sans-serif; font-size:8px; line-height:12px; text-align:right; letter-spacing:1px; white-space:nowrap;"><a class="link-grey" href="http://traivis.com/" style="color:#979696; text-decoration:none;" target="_blank"><span class="link-grey" style="color:#979696; text-decoration:none;">TRAIVIS</span></a>&nbsp;</td>
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
<!-- END Header --><!-- END Header --><!-- Intro -->

<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody>
<tr>
<td class="intro-content" style="padding: 45px 100px 55px;">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody>
<tr>
<td class="h1 center" style="padding-bottom: 13px; color:#333333; font-family:Helvetica,Arial,sans-serif; font-size:40px; line-height:44px; letter-spacing:-1px; text-align:center;">ACCOUNT CREATED SUCCESSFULLY</td>
</tr>
<tr>
<td class="text center" style="padding-bottom: 25px; color:#828282; font-family:Helvetica,Arial,sans-serif; font-size:16px; line-height:24px; text-align:center;">Hi <strong>[Name]</strong>, Account created successfully</td>
</tr>
<tr>
<td class="text center" style="padding-bottom: 25px; color:#828282; font-family:Helvetica,Arial,sans-serif; font-size:16px; line-height:24px; text-align:center;">Please use this the below OTP to verify your account : <br><strong>[OTP]</strong></td>
</tr>
<tr>
<td align="center"><!-- Button -->
<table border="0" cellpadding="0" cellspacing="0" style="margin: 0 auto;">
<tbody>
<tr>
<td align="center" bgcolor="#333333" class="text-btn"><a href="http://traivis.com/" style="color: #ffffff; font-family:Helvetica,Arial,sans-serif; font-size: 12px; line-height: 14px; text-align: center; font-weight: bold; text-transform: uppercase; letter-spacing: 1px; border: 1px solid #333333; display: inline-block; mso-line-height-rule: exactly; padding: 15px 40px;" target="_blank"><font color="#ffffff">Go To Website</font> </a></td>
</tr>
</tbody>
</table>
<!-- END Button --></td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<!-- EBD Intro --><!-- END Grey Section -->

<table bgcolor="#e6e6e6" border="0" cellpadding="0" cellspacing="0" width="100%"><!--FOOTER-->
<tbody>
<tr><!-- Footer -->
</tr>
<tr>
<td bgcolor="#e6e6e6" class="p20-15" style="padding: 24px 15px;">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody>
<tr>
<td class="text-footer" style="padding-bottom: 0px; color:#797979; font-family:Helvetica,Arial,sans-serif; font-size:11px; line-height:10px; text-align:center; letter-spacing:1px;">THANKS, TRAIVIS<br />
&nbsp;</td>
</tr>
<tr>
<td class="text-footer-1" style="padding-bottom: 13px; color:#797979; font-family:Helvetica,Arial,sans-serif; font-size:11px; line-height:16px; text-align:center;"><a class="link-grey-u" href="http://traivis.com/privacy-policy" style="color:#979696; text-decoration:underline;" target="_blank"><span class="link-grey-u" style="color:#979696; text-decoration:underline;">Privacy Policy</span> </a> &nbsp;| &nbsp;<a class="link-grey-u" href="http://traivis.com/contact-us" style="color:#979696; text-decoration:underline;" target="_blank"><span class="link-grey-u" style="color:#979696; text-decoration:underline;">Contact Us</span></a> &nbsp;</td>
</tr>
</tbody>
</table>
</td>
</tr>
<!-- END Footer --><!--END FOOTER-->
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>',
                'is_show' => 1,
                'created_by' => 1,
                'created_at' => '2020-12-10 11:44:43',
                'updated_at' => '2021-02-24 07:31:11',
            ],
            [
                'title' => 'Course confirmation',
                'key' => 'course-confirmation',
                'from' => null,
                'to' => null,
                'subject' => 'course-confirmation',
                'email_body' => '<table bgcolor="#f2f2f2" border="0" cellpadding="0" cellspacing="0" width="100%">
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
overflow:hidden;">Your listing have a new review</td>
</tr>
<tr>
<td class="td" style="width:600px; min-width:600px; font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;"><!-- Header -->
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody>
<tr>
<td bgcolor="#f9f9f9" class="p20-15" style="padding: 20px 40px; border-bottom: 1px solid #dbdbdb;">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody>
<tr>
<th class="column" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;" width="157">
<div class="img-center" style="font-size:0pt; line-height:0pt; text-align:center;"><a href="http://traivis.com/" target="_blank"><img alt="Traivis" border="0" class="text-alt" height="42" src="http://traivis.com/assets/images/logo.png" width="128" /></a></div>
</th>
<th class="column" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;" width="20">
<div class="m-br-15" style="font-size:0pt; line-height:0pt;">&nbsp;</div>
</th>
<th class="column" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody>
<tr>
<td class="text-nav m-center" style="color:#979696; font-family:Helvetica,Arial,sans-serif; font-size:8px; line-height:12px; text-align:right; letter-spacing:1px; white-space:nowrap;"><a class="link-grey" href="http://traivis.com/" style="color:#979696; text-decoration:none;" target="_blank"><span class="link-grey" style="color:#979696; text-decoration:none;">Traivis</span></a></td>
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
<!-- END Header --><!-- END Header --><!-- Intro -->

<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody>
<tr>
<td class="intro-content" style="padding: 45px 100px 55px;">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody>
<tr>
<td class="h1 center" style="padding-bottom: 13px; color:#333333; font-family:Helvetica,Arial,sans-serif; font-size:40px; line-height:44px; letter-spacing:-1px; text-align:center;">&nbsp;Purchased Course Confirmation</td>
</tr>
<tr>
<td class="text center" style="padding-bottom: 25px; color:#828282; font-family:Helvetica,Arial,sans-serif; font-size:16px; line-height:24px; text-align:center;">
<p>Hi <strong>[name]</strong>, The [user] [status] Your&nbsp;purchased [course] course.</p>

<p>Purchased Date = [purchaseDate]</p>

<p>Purchased Time =[purchasedTime]</p>

<p>Thank You</p>
</td>
</tr>
<tr>
<td class="text center" style="padding-bottom: 25px; color:#828282; font-family:Helvetica,Arial,sans-serif; font-size:16px; line-height:24px; text-align:center;">&nbsp;</td>
</tr>
<tr>
<td align="center"><!-- Button -->
<table border="0" cellpadding="0" cellspacing="0" style="margin: 0 auto;">
<tbody>
<tr>
<td align="center" bgcolor="#333333" class="text-btn"><a href="http://traivis.com/" style="color: #ffffff; font-family:Helvetica,Arial,sans-serif; font-size: 12px; line-height: 14px; text-align: center; font-weight: bold; text-transform: uppercase; letter-spacing: 1px; border: 1px solid #333333; display: inline-block; mso-line-height-rule: exactly; padding: 15px 40px;" target="_blank"><font color="#ffffff">GO TO WEBSITE </font> </a></td>
</tr>
</tbody>
</table>
<!-- END Button --></td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<!-- EBD Intro --><!-- END Grey Section -->

<table bgcolor="#e6e6e6" border="0" cellpadding="0" cellspacing="0" width="100%"><!--FOOTER-->
<tbody>
<tr><!-- Footer -->
</tr>
<tr>
<td bgcolor="#e6e6e6" class="p20-15" style="padding: 24px 15px;">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody>
<tr>
<td class="text-footer" style="padding-bottom: 0px; color:#797979; font-family:Helvetica,Arial,sans-serif; font-size:11px; line-height:10px; text-align:center; letter-spacing:1px;">THANKS,Traivis<br />
&nbsp;</td>
</tr>
<tr>
<td class="text-footer-1" style="padding-bottom: 13px; color:#797979; font-family:Helvetica,Arial,sans-serif; font-size:11px; line-height:16px; text-align:center;"><a class="link-grey-u" href="http://traivis.com/privacy-policy" style="color:#979696; text-decoration:underline;" target="_blank"><span class="link-grey-u" style="color:#979696; text-decoration:underline;">Privacy Policy</span> </a> &nbsp;| &nbsp;<a class="link-grey-u" href="http://traivis.com/contact-us" style="color:#979696; text-decoration:underline;" target="_blank"><span class="link-grey-u" style="color:#979696; text-decoration:underline;">Contact Us</span></a> &nbsp;</td>
</tr>
</tbody>
</table>
</td>
</tr>
<!-- END Footer --><!--END FOOTER-->
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>',
                'is_show' => 1,
                'created_by' => 1,
                'created_at' => '2020-12-10 12:18:15',
                'updated_at' => '2021-02-23 11:13:36',
            ],
            [
                'title' => 'Complete Course',
                'key' => 'complete-course',
                'from' => null,
                'to' => null,
                'subject' => 'complete course',
                'email_body' => '<table bgcolor="#f2f2f2" border="0" cellpadding="0" cellspacing="0" width="100%">
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
overflow:hidden;">&nbsp;</td>
</tr>
<tr>
<td class="td" style="width:600px; min-width:600px; font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;"><!-- Header -->
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody>
<tr>
<td bgcolor="#f9f9f9" class="p20-15" style="padding: 20px 40px; border-bottom: 1px solid #dbdbdb;">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody>
<tr>
<th class="column" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;" width="157">
<div class="img-center" style="font-size:0pt; line-height:0pt; text-align:center;"><a href="http://traivis.com/" target="_blank"><img alt="My Traivis" border="0" class="text-alt" height="42" src="http://traivis.com/assets/images/logo.png" width="128" /></a></div>
</th>
<th class="column" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;" width="20">
<div class="m-br-15" style="font-size:0pt; line-height:0pt;">&nbsp;</div>
</th>
<th class="column" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody>
<tr>
<td class="text-nav m-center" style="color:#979696; font-family:Helvetica,Arial,sans-serif; font-size:8px; line-height:12px; text-align:right; letter-spacing:1px; white-space:nowrap;"><a class="link-grey" href="http://traivis.com/" style="color:#979696; text-decoration:none;" target="_blank"><span class="link-grey" style="color:#979696; text-decoration:none;">Traivis</span></a> |</td>
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
<!-- END Header --><!-- END Header --><!-- Intro -->

<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody>
<tr>
<td class="intro-content" style="padding: 45px 100px 55px;">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody>
<tr>
<td class="h1 center" style="padding-bottom: 13px; color:#333333; font-family:Helvetica,Arial,sans-serif; font-size:40px; line-height:44px; letter-spacing:-1px; text-align:center;">COMPLETE COURSE</td>
</tr>
<tr>
<td class="text center" style="padding-bottom: 25px; color:#828282; font-family:Helvetica,Arial,sans-serif; font-size:16px; line-height:24px; text-align:center;">Hi <b>[user]</b>, Thank you for Complete [course] course<br />
&nbsp;</td>
</tr>
<tr>
<td align="center">
<table border="0" cellpadding="0" cellspacing="0" style="margin: 0 auto;">
<tbody>
<tr>
<td align="center" class="text-btn">&nbsp;</td>
<td align="center" class="text-btn">&nbsp;</td>
</tr>
</tbody>
</table>
<!-- END Button --></td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<!-- EBD Intro --><!-- END Grey Section -->

<table bgcolor="#e6e6e6" border="0" cellpadding="0" cellspacing="0" width="100%"><!--FOOTER-->
<tbody>
<tr><!-- Footer -->
</tr>
<tr>
<td bgcolor="#e6e6e6" class="p20-15" style="padding: 24px 15px;">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody>
<tr>
<td class="text-footer" style="padding-bottom: 0px; color:#797979; font-family:Helvetica,Arial,sans-serif; font-size:11px; line-height:10px; text-align:center; letter-spacing:1px;">THANKS, Traivis<br />
&nbsp;</td>
</tr>
<tr>
<td class="text-footer-1" style="padding-bottom: 13px; color:#797979; font-family:Helvetica,Arial,sans-serif; font-size:11px; line-height:16px; text-align:center;"><a class="link-grey-u" href="http://traivis.com/privacy-policy" style="color:#979696; text-decoration:underline;" target="_blank"><span class="link-grey-u" style="color:#979696; text-decoration:underline;">Privacy Policy</span> </a> &nbsp;| &nbsp;<a class="link-grey-u" href="http://traivis.com/contact-us" style="color:#979696; text-decoration:underline;" target="_blank"><span class="link-grey-u" style="color:#979696; text-decoration:underline;">Contact Us</span></a> &nbsp;</td>
</tr>
</tbody>
</table>
</td>
</tr>
<!-- END Footer --><!--END FOOTER-->
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>',
                'is_show' => 1,
                'created_by' => 1,
                'created_at' => '2021-01-29 10:15:29',
                'updated_at' => '2021-02-23 11:23:33',
            ],
            [
                'title' => 'test',
                'key' => 'test',
                'from' => null,
                'to' => null,
                'subject' => 'test',
                'email_body' => '<p><a id="mkm" name="mkm"></a>testgg <s><em><strong>vvv</strong></em></s></p>

<p>&nbsp;</p>

<hr />
<p>hhhhh</p>',
                'is_show' => 1,
                'created_by' => 339,
                'created_at' => '2021-02-04 17:22:30',
                'updated_at' => '2021-04-02 04:43:47',
            ],
            [
                'title' => 'Course Under Review Template',
                'key' => 'course-under-review',
                'from' => null,
                'to' => null,
                'subject' => 'Your Course Under Review',
                'email_body' => '<table bgcolor="#f2f2f2" border="0" cellpadding="0" cellspacing="0" width="100%">
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
                <td class="td" style="width:600px; min-width:600px; font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;"><!-- Header -->
                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                <tbody>
                <tr>
                <td bgcolor="#f9f9f9" class="p20-15" style="padding: 20px 40px; border-bottom: 1px solid #dbdbdb;">
                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                <tbody>
                <tr>
                <th class="column" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;" width="157">
                <div class="img-center" style="font-size:0pt; line-height:0pt; text-align:center;"><a href="http://traivis.com/" target="_blank"><img alt="My Traivis" border="0" class="text-alt" height="42" src="http://traivis.com/assets/images/logo.png" width="128" /></a></div>
                </th>
                <th class="column" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;" width="20">
                <div class="m-br-15" style="font-size:0pt; line-height:0pt;">&nbsp;</div>
                </th>
                <th class="column" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;">
                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                <tbody>
                <tr>
                <td class="text-nav m-center" style="color:#979696; font-family:Helvetica,Arial,sans-serif; font-size:8px; line-height:12px; text-align:right; letter-spacing:1px; white-space:nowrap;"><a class="link-grey" href="http://traivis.com/" style="color:#979696; text-decoration:none;" target="_blank"><span class="link-grey" style="color:#979696; text-decoration:none;">Traivis</span></a> |</td>
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
                <!-- END Header --><!-- END Header --><!-- Intro -->

                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                <tbody>
                <tr>
                <td class="intro-content" style="padding: 45px 100px 55px;">
                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                <tbody>
                <tr>
                <td class="h1 center" style="padding-bottom: 13px; color:#333333; font-family:Helvetica,Arial,sans-serif; font-size:40px; line-height:44px; letter-spacing:-1px; text-align:center;">YOUR COURSE UNDER REVIEW</td>
                </tr>
                <tr>
                <td class="text center" style="padding-bottom: 25px; color:#828282; font-family:Helvetica,Arial,sans-serif; font-size:16px; line-height:24px; text-align:center;">Hi <strong style="padding-bottom: 25px; color:#828282;">[name]</strong>, your &quot; [course] &quot; course was under review&nbsp;</td>
                </tr>
                </tbody>
                </table>
                </td>
                </tr>
                </tbody>
                </table>
                <!-- EBD Intro --><!-- END Grey Section -->

                <table bgcolor="#e6e6e6" border="0" cellpadding="0" cellspacing="0" width="100%"><!--FOOTER-->
                <tbody>
                <tr><!-- Footer -->
                </tr>
                <tr>
                <td bgcolor="#e6e6e6" class="p20-15" style="padding: 24px 15px;">
                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                <tbody>
                <tr>
                <td class="text-footer" style="padding-bottom: 0px; color:#797979; font-family:Helvetica,Arial,sans-serif; font-size:11px; line-height:10px; text-align:center; letter-spacing:1px;">THANKS, Traivis<br />
                &nbsp;</td>
                </tr>
                <tr>
                <td class="text-footer-1" style="padding-bottom: 13px; color:#797979; font-family:Helvetica,Arial,sans-serif; font-size:11px; line-height:16px; text-align:center;"><a class="link-grey-u" href="http://traivis.com/privacy-policy" style="color:#979696; text-decoration:underline;" target="_blank"><span class="link-grey-u" style="color:#979696; text-decoration:underline;">Privacy Policy</span> </a> &nbsp;| &nbsp;<a class="link-grey-u" href="http://traivis.com/contact-us" style="color:#979696; text-decoration:underline;" target="_blank"><span class="link-grey-u" style="color:#979696; text-decoration:underline;">Contact Us</span></a> &nbsp;</td>
                </tr>
                </tbody>
                </table>
                </td>
                </tr>
                <!-- END Footer --><!--END FOOTER-->
                </tbody>
                </table>
                </td>
                </tr>
                </tbody>
                </table>
                </td>
                </tr>
                </tbody>
                </table>',
                'is_show' => 1,
                'created_by' => 1,
                'created_at' => '2023-09-23 17:22:30',
                'updated_at' => '2023-09-23 04:43:47',
            ],
            [
                'title' => 'Course Approved Template',
                'key' => 'course-approved',
                'from' => null,
                'to' => null,
                'subject' => 'Your Course Has been Approved',
                'email_body' => '<table bgcolor="#f2f2f2" border="0" cellpadding="0" cellspacing="0" width="100%">
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
                <td class="td" style="width:600px; min-width:600px; font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;"><!-- Header -->
                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                <tbody>
                <tr>
                <td bgcolor="#f9f9f9" class="p20-15" style="padding: 20px 40px; border-bottom: 1px solid #dbdbdb;">
                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                <tbody>
                <tr>
                <th class="column" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;" width="157">
                <div class="img-center" style="font-size:0pt; line-height:0pt; text-align:center;"><a href="http://traivis.com/" target="_blank"><img alt="My Traivis" border="0" class="text-alt" height="42" src="http://traivis.com/assets/images/logo.png" width="128" /></a></div>
                </th>
                <th class="column" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;" width="20">
                <div class="m-br-15" style="font-size:0pt; line-height:0pt;">&nbsp;</div>
                </th>
                <th class="column" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;">
                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                <tbody>
                <tr>
                <td class="text-nav m-center" style="color:#979696; font-family:Helvetica,Arial,sans-serif; font-size:8px; line-height:12px; text-align:right; letter-spacing:1px; white-space:nowrap;"><a class="link-grey" href="http://traivis.com/" style="color:#979696; text-decoration:none;" target="_blank"><span class="link-grey" style="color:#979696; text-decoration:none;">Traivis</span></a> |</td>
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
                <!-- END Header --><!-- END Header --><!-- Intro -->

                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                <tbody>
                <tr>
                <td class="intro-content" style="padding: 45px 100px 55px;">
                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                <tbody>
                <tr>
                <td class="h1 center" style="padding-bottom: 13px; color:#333333; font-family:Helvetica,Arial,sans-serif; font-size:40px; line-height:44px; letter-spacing:-1px; text-align:center;">YOUR COURSE HAS BEEN APPROVED</td>
                </tr>
                <tr>
                <td class="text center" style="padding-bottom: 25px; color:#828282; font-family:Helvetica,Arial,sans-serif; font-size:16px; line-height:24px; text-align:center;">Hi <strong style="padding-bottom: 25px; color:#828282;">[name]</strong>, your &quot; [course] &quot; course has been approved&nbsp;</td>
                </tr>
                </tbody>
                </table>
                </td>
                </tr>
                </tbody>
                </table>
                <!-- EBD Intro --><!-- END Grey Section -->

                <table bgcolor="#e6e6e6" border="0" cellpadding="0" cellspacing="0" width="100%"><!--FOOTER-->
                <tbody>
                <tr><!-- Footer -->
                </tr>
                <tr>
                <td bgcolor="#e6e6e6" class="p20-15" style="padding: 24px 15px;">
                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                <tbody>
                <tr>
                <td class="text-footer" style="padding-bottom: 0px; color:#797979; font-family:Helvetica,Arial,sans-serif; font-size:11px; line-height:10px; text-align:center; letter-spacing:1px;">THANKS, Traivis<br />
                &nbsp;</td>
                </tr>
                <tr>
                <td class="text-footer-1" style="padding-bottom: 13px; color:#797979; font-family:Helvetica,Arial,sans-serif; font-size:11px; line-height:16px; text-align:center;"><a class="link-grey-u" href="http://traivis.com/privacy-policy" style="color:#979696; text-decoration:underline;" target="_blank"><span class="link-grey-u" style="color:#979696; text-decoration:underline;">Privacy Policy</span> </a> &nbsp;| &nbsp;<a class="link-grey-u" href="http://traivis.com/contact-us" style="color:#979696; text-decoration:underline;" target="_blank"><span class="link-grey-u" style="color:#979696; text-decoration:underline;">Contact Us</span></a> &nbsp;</td>
                </tr>
                </tbody>
                </table>
                </td>
                </tr>
                <!-- END Footer --><!--END FOOTER-->
                </tbody>
                </table>
                </td>
                </tr>
                </tbody>
                </table>
                </td>
                </tr>
                </tbody>
                </table>',
                'is_show' => 1,
                'created_by' => 1,
                'created_at' => '2023-09-23 17:22:30',
                'updated_at' => '2023-09-23 04:43:47',
            ],
            [
                'title' => 'Course Declined Template',
                'key' => 'course-declined',
                'from' => null,
                'to' => null,
                'subject' => 'Your course has been declined',
                'email_body' => '<table bgcolor="#f2f2f2" border="0" cellpadding="0" cellspacing="0" width="100%">
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
                <td class="td" style="width:600px; min-width:600px; font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;"><!-- Header -->
                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                <tbody>
                <tr>
                <td bgcolor="#f9f9f9" class="p20-15" style="padding: 20px 40px; border-bottom: 1px solid #dbdbdb;">
                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                <tbody>
                <tr>
                <th class="column" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;" width="157">
                <div class="img-center" style="font-size:0pt; line-height:0pt; text-align:center;"><a href="http://traivis.com/" target="_blank"><img alt="My Traivis" border="0" class="text-alt" height="42" src="http://traivis.com/assets/images/logo.png" width="128" /></a></div>
                </th>
                <th class="column" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;" width="20">
                <div class="m-br-15" style="font-size:0pt; line-height:0pt;">&nbsp;</div>
                </th>
                <th class="column" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;">
                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                <tbody>
                <tr>
                <td class="text-nav m-center" style="color:#979696; font-family:Helvetica,Arial,sans-serif; font-size:8px; line-height:12px; text-align:right; letter-spacing:1px; white-space:nowrap;"><a class="link-grey" href="http://traivis.com/" style="color:#979696; text-decoration:none;" target="_blank"><span class="link-grey" style="color:#979696; text-decoration:none;">Traivis</span></a> |</td>
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
                <!-- END Header --><!-- END Header --><!-- Intro -->

                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                <tbody>
                <tr>
                <td class="intro-content" style="padding: 45px 100px 55px;">
                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                <tbody>
                <tr>
                <td class="h1 center" style="padding-bottom: 13px; color:#333333; font-family:Helvetica,Arial,sans-serif; font-size:40px; line-height:44px; letter-spacing:-1px; text-align:center;">YOUR COURSE HAS BEEN Declined</td>
                </tr>
                <tr>
                <td class="text center" style="padding-bottom: 25px; color:#828282; font-family:Helvetica,Arial,sans-serif; font-size:16px; line-height:24px; text-align:center;">Hi <strong style="padding-bottom: 25px; color:#828282;">[name]</strong>, your &quot; [course] &quot; has been declined for the following reasons&nbsp;<br>
                [declined]</td>
                </tr>
                </tbody>
                </table>
                </td>
                </tr>
                </tbody>
                </table>
                <!-- EBD Intro --><!-- END Grey Section -->

                <table bgcolor="#e6e6e6" border="0" cellpadding="0" cellspacing="0" width="100%"><!--FOOTER-->
                <tbody>
                <tr><!-- Footer -->
                </tr>
                <tr>
                <td bgcolor="#e6e6e6" class="p20-15" style="padding: 24px 15px;">
                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                <tbody>
                <tr>
                <td class="text-footer" style="padding-bottom: 0px; color:#797979; font-family:Helvetica,Arial,sans-serif; font-size:11px; line-height:10px; text-align:center; letter-spacing:1px;">THANKS, Traivis<br />
                &nbsp;</td>
                </tr>
                <tr>
                <td class="text-footer-1" style="padding-bottom: 13px; color:#797979; font-family:Helvetica,Arial,sans-serif; font-size:11px; line-height:16px; text-align:center;"><a class="link-grey-u" href="http://traivis.com/privacy-policy" style="color:#979696; text-decoration:underline;" target="_blank"><span class="link-grey-u" style="color:#979696; text-decoration:underline;">Privacy Policy</span> </a> &nbsp;| &nbsp;<a class="link-grey-u" href="http://traivis.com/contact-us" style="color:#979696; text-decoration:underline;" target="_blank"><span class="link-grey-u" style="color:#979696; text-decoration:underline;">Contact Us</span></a> &nbsp;</td>
                </tr>
                </tbody>
                </table>
                </td>
                </tr>
                <!-- END Footer --><!--END FOOTER-->
                </tbody>
                </table>
                </td>
                </tr>
                </tbody>
                </table>
                </td>
                </tr>
                </tbody>
                </table>',
                'is_show' => 1,
                'created_by' => 1,
                'created_at' => '2023-09-23 17:22:30',
                'updated_at' => '2023-09-23 04:43:47',
            ],
            [
                'title' => 'Course Published Template',
                'key' => 'course-published',
                'from' => null,
                'to' => null,
                'subject' => 'Your course has been published',
                'email_body' => '<table bgcolor="#f2f2f2" border="0" cellpadding="0" cellspacing="0" width="100%">
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
                <td class="td" style="width:600px; min-width:600px; font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;"><!-- Header -->
                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                <tbody>
                <tr>
                <td bgcolor="#f9f9f9" class="p20-15" style="padding: 20px 40px; border-bottom: 1px solid #dbdbdb;">
                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                <tbody>
                <tr>
                <th class="column" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;" width="157">
                <div class="img-center" style="font-size:0pt; line-height:0pt; text-align:center;"><a href="http://traivis.com/" target="_blank"><img alt="My Traivis" border="0" class="text-alt" height="42" src="http://traivis.com/assets/images/logo.png" width="128" /></a></div>
                </th>
                <th class="column" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;" width="20">
                <div class="m-br-15" style="font-size:0pt; line-height:0pt;">&nbsp;</div>
                </th>
                <th class="column" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;">
                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                <tbody>
                <tr>
                <td class="text-nav m-center" style="color:#979696; font-family:Helvetica,Arial,sans-serif; font-size:8px; line-height:12px; text-align:right; letter-spacing:1px; white-space:nowrap;"><a class="link-grey" href="http://traivis.com/" style="color:#979696; text-decoration:none;" target="_blank"><span class="link-grey" style="color:#979696; text-decoration:none;">Traivis</span></a> |</td>
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
                <!-- END Header --><!-- END Header --><!-- Intro -->

                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                <tbody>
                <tr>
                <td class="intro-content" style="padding: 45px 100px 55px;">
                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                <tbody>
                <tr>
                <td class="h1 center" style="padding-bottom: 13px; color:#333333; font-family:Helvetica,Arial,sans-serif; font-size:40px; line-height:44px; letter-spacing:-1px; text-align:center;">YOUR COURSE HAS BEEN PUBLISHED</td>
                </tr>
                <tr>
                <td class="text center" style="padding-bottom: 25px; color:#828282; font-family:Helvetica,Arial,sans-serif; font-size:16px; line-height:24px; text-align:center;">Hi <strong style="padding-bottom: 25px; color:#828282;">[name]</strong>, your &quot; [course] &quot; course has been published &nbsp;</td>
                </tr>
                </tbody>
                </table>
                </td>
                </tr>
                </tbody>
                </table>
                <!-- EBD Intro --><!-- END Grey Section -->

                <table bgcolor="#e6e6e6" border="0" cellpadding="0" cellspacing="0" width="100%"><!--FOOTER-->
                <tbody>
                <tr><!-- Footer -->
                </tr>
                <tr>
                <td bgcolor="#e6e6e6" class="p20-15" style="padding: 24px 15px;">
                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                <tbody>
                <tr>
                <td class="text-footer" style="padding-bottom: 0px; color:#797979; font-family:Helvetica,Arial,sans-serif; font-size:11px; line-height:10px; text-align:center; letter-spacing:1px;">THANKS, Traivis<br />
                &nbsp;</td>
                </tr>
                <tr>
                <td class="text-footer-1" style="padding-bottom: 13px; color:#797979; font-family:Helvetica,Arial,sans-serif; font-size:11px; line-height:16px; text-align:center;"><a class="link-grey-u" href="http://traivis.com/privacy-policy" style="color:#979696; text-decoration:underline;" target="_blank"><span class="link-grey-u" style="color:#979696; text-decoration:underline;">Privacy Policy</span> </a> &nbsp;| &nbsp;<a class="link-grey-u" href="http://traivis.com/contact-us" style="color:#979696; text-decoration:underline;" target="_blank"><span class="link-grey-u" style="color:#979696; text-decoration:underline;">Contact Us</span></a> &nbsp;</td>
                </tr>
                </tbody>
                </table>
                </td>
                </tr>
                <!-- END Footer --><!--END FOOTER-->
                </tbody>
                </table>
                </td>
                </tr>
                </tbody>
                </table>
                </td>
                </tr>
                </tbody>
                </table>',
                'is_show' => 1,
                'created_by' => 1,
                'created_at' => '2023-09-23 17:22:30',
                'updated_at' => '2023-09-23 04:43:47',
            ],
        ];

        foreach ($email_templates_array as $email_template) {
            \DB::table('email_templates')->updateOrInsert(
                ['key' => $email_template['key']],
                $email_template,
            );
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('email_templates');
    }
}
