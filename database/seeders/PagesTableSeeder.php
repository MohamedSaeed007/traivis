<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('pages')->truncate();

        \DB::table('pages')->insert([
            0 => [
                'id' => 1,
                'title_en' => 'Company Landing',
                'title_ar' => 'Company Landing',
                'content_en' => '',
                'content_ar' => '',
                'meta_title' => null,
                'meta_key' => null,
                'meta_description' => null,
                'slug' => 'company-landing',
                'show_on_menu' => 0,
                'status' => 1,
                'created_at' => '2020-10-26 05:56:39',
                'updated_at' => '2021-02-05 10:26:13'
            ],
            1 => [
                'id' => 2,
                'title_en' => 'Training Centre Landing',
                'title_ar' => 'Training Centre Landing',
                'content_en' => '',
                'content_ar' => '',
                'meta_title' => null,
                'meta_key' => null,
                'meta_description' => null,
                'slug' => 'training-centre-landing',
                'show_on_menu' => 0,
                'status' => 1,
                'created_at' => '2020-10-26 06:20:01',
                'updated_at' => '2021-05-06 12:04:37'
            ],
            2 => [
                'id' => 3,
                'title_en' => 'Individual user landing',
                'title_ar' => 'Individual user landing',
                'content_en' =>
                    '["<div class=\\"col-lg-6 col-md-12\\">\\r\\n                    <div class=\\"distance-learning-content\\">\\r\\n                        <span class=\\"sub-title\\">INDIVIDUAL REGISTRATION<\\/span>\\r\\n                        <h2>Increase your expertise in planning, management, and profit shape up<\\/h2>\\r\\n                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. <\\/p>\\r\\n                        <ul class=\\"features-list\\">\\r\\n                                <li><span><i class=\\"flaticon-self-growth\\"><\\/i> Consistency<\\/span><\\/li>\\r\\n                                <li><span><i class=\\"flaticon-clock\\"><\\/i> Improvement<\\/span><\\/li>\\r\\n                                <li><span><i class=\\"flaticon-ebook\\"><\\/i> Remote Learning<\\/span><\\/li>\\r\\n                                <li><span><i class=\\"flaticon-factory\\"><\\/i> Branching<\\/span><\\/li>\\r\\n                            <\\/ul>\\r\\n                       \\r\\n                    <\\/div>\\r\\n                <\\/div>","<div class=\\"container\\">\\r\\n            <div class=\\"section-title\\">\\r\\n                <span class=\\"sub-title\\">OUR FEATURES<\\/span>\\r\\n                <h2>Individual Dashboard Features<\\/h2>\\r\\n                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<\\/p>\\r\\n            <\\/div>\\r\\n\\r\\n            <div class=\\"row\\">\\r\\n                <div class=\\"col-lg-4 col-md-6 col-sm-6\\">\\r\\n                    <div class=\\"services-box\\">\\r\\n                        <div class=\\"icon\\">\\r\\n                            <i class=\\"flaticon-analytics\\"><\\/i>\\r\\n                        <\\/div>\\r\\n                        <h3>Business Planning<\\/h3>\\r\\n                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.<\\/p>\\r\\n                    <\\/div>\\r\\n                <\\/div>\\r\\n\\r\\n                <div class=\\"col-lg-4 col-md-6 col-sm-6\\">\\r\\n                    <div class=\\"services-box\\">\\r\\n                        <div class=\\"icon\\">\\r\\n                            <i class=\\"flaticon-anywhere\\"><\\/i>\\r\\n                        <\\/div>\\r\\n                        <h3>From Anywhere<\\/h3>\\r\\n                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.<\\/p>\\r\\n                    <\\/div>\\r\\n                <\\/div>\\r\\n\\r\\n                <div class=\\"col-lg-4 col-md-6 col-sm-6\\">\\r\\n                    <div class=\\"services-box\\">\\r\\n                        <div class=\\"icon\\">\\r\\n                            <i class=\\"flaticon-graduated\\"><\\/i>\\r\\n                        <\\/div>\\r\\n                        <h3>Solicitor<\\/h3>\\r\\n                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.<\\/p>\\r\\n                    <\\/div>\\r\\n                <\\/div>\\r\\n\\r\\n                <div class=\\"col-lg-4 col-md-6 col-sm-6\\">\\r\\n                    <div class=\\"services-box\\">\\r\\n                        <div class=\\"icon\\">\\r\\n                            <i class=\\"flaticon-self-improvement\\"><\\/i>\\r\\n                        <\\/div>\\r\\n                        <h3>Self Development<\\/h3>\\r\\n                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.<\\/p>\\r\\n                    <\\/div>\\r\\n                <\\/div>\\r\\n\\r\\n                <div class=\\"col-lg-4 col-md-6 col-sm-6\\">\\r\\n                    <div class=\\"services-box\\">\\r\\n                        <div class=\\"icon\\">\\r\\n                            <i class=\\"flaticon-padlock\\"><\\/i>\\r\\n                        <\\/div>\\r\\n                        <h3>Lifetime Access<\\/h3>\\r\\n                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.<\\/p>\\r\\n                    <\\/div>\\r\\n                <\\/div>\\r\\n\\r\\n                <div class=\\"col-lg-4 col-md-6 col-sm-6\\">\\r\\n                    <div class=\\"services-box\\">\\r\\n                        <div class=\\"icon\\">\\r\\n                            <i class=\\"flaticon-launch\\"><\\/i>\\r\\n                        <\\/div>\\r\\n                        <h3>Start Ups<\\/h3>\\r\\n                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.<\\/p>\\r\\n                    <\\/div>\\r\\n                <\\/div>\\r\\n\\r\\n              \\r\\n            <\\/div>\\r\\n        <\\/div>","<div class=\\"col-lg-6 col-md-12\\">\\r\\n                    <div class=\\"information-content\\">\\r\\n                        <span class=\\"sub-title\\">PERSONAL INFORMATION<\\/span>\\r\\n                        <h2>Lorem ipsum dolor<\\/h2>\\r\\n                        <ul class=\\"apply-details\\">\\r\\n                            <li>\\r\\n                                <div class=\\"icon\\">\\r\\n                                    <i class=\\"flaticon-checkmark\\"><\\/i>\\r\\n                                <\\/div>\\r\\n                                <h3>Select Suitable Course<\\/h3>\\r\\n                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.<\\/p>\\r\\n                            <\\/li>\\r\\n\\r\\n                            <li>\\r\\n                                <div class=\\"icon\\">\\r\\n                                    <i class=\\"flaticon-login\\"><\\/i>\\r\\n                                <\\/div>\\r\\n                                <h3>Student Information<\\/h3>\\r\\n                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.<\\/p>\\r\\n                            <\\/li>\\r\\n                            \\r\\n                            <li>\\r\\n                                <div class=\\"icon\\">\\r\\n                                    <i class=\\"flaticon-credit-card\\"><\\/i>\\r\\n                                <\\/div>\\r\\n                                <h3>Payment Information<\\/h3>\\r\\n                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.<\\/p>\\r\\n                            <\\/li>\\r\\n                            \\r\\n                            <li>\\r\\n                                <div class=\\"icon\\">\\r\\n                                    <i class=\\"flaticon-verify\\"><\\/i>\\r\\n                                <\\/div>\\r\\n                                <h3>Register Now<\\/h3>\\r\\n                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.<\\/p>\\r\\n                            <\\/li>\\r\\n                        <\\/ul>\\r\\n                    <\\/div>\\r\\n                <\\/div>","<div class=\\"container\\">\\r\\n            <div class=\\"subscribe-content\\">\\r\\n                <span class=\\"sub-title\\">Go At Your Own Pace<\\/span>\\r\\n                <h2>Create Profile and Start Exploring!<\\/h2>\\r\\n                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<\\/p>\\r\\n             <a href=\\"#!\\" id=\\"myBtn8\\" class=\\"default-btn\\"><i class=\\"bx bx-user-circle icon-arrow before\\"><\\/i><span class=\\"label\\">Register Now !<\\/span><i class=\\"bx bx-user-circle icon-arrow after\\"><\\/i><\\/a>\\r\\n            <\\/div>\\r\\n            <div id=\\"particles-js-circle-bubble-3\\"><canvas class=\\"particles-js-canvas-el\\" width=\\"1349\\" height=\\"440\\" style=\\"width: 100%; height: 100%;\\"><\\/canvas><\\/div>\\r\\n        <\\/div>"]',
                'content_ar' =>
                    '["<div class=\\"col-lg-6 col-md-12\\">\\r\\n                    <div class=\\"distance-learning-content\\">\\r\\n                        <span class=\\"sub-title\\">INDIVIDUAL REGISTRATION<\\/span>\\r\\n                        <h2>Increase your expertise in planning, management, and profit shape up<\\/h2>\\r\\n                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. <\\/p>\\r\\n                        <ul class=\\"features-list\\">\\r\\n                            <li><i class=\\"flaticon-self-growth\\"><\\/i> Consistency<\\/li>\\r\\n                            <li><i class=\\"flaticon-clock\\"><\\/i> Improvement<\\/li>\\r\\n                            <li><i class=\\"flaticon-ebook\\"><\\/i> Remote Learning<\\/li>\\r\\n                            <li><i class=\\"flaticon-factory\\"><\\/i> Branching<\\/li>\\r\\n                        <\\/ul>\\r\\n                       \\r\\n                    <\\/div>\\r\\n                <\\/div>","<div class=\\"container\\">\\r\\n            <div class=\\"section-title\\">\\r\\n                <span class=\\"sub-title\\">OUR FEATURES<\\/span>\\r\\n                <h2>Individual Dashboard Features<\\/h2>\\r\\n                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<\\/p>\\r\\n            <\\/div>\\r\\n\\r\\n            <div class=\\"row\\">\\r\\n                <div class=\\"col-lg-4 col-md-6 col-sm-6\\">\\r\\n                    <div class=\\"services-box\\">\\r\\n                        <div class=\\"icon\\">\\r\\n                            <i class=\\"flaticon-analytics\\"><\\/i>\\r\\n                        <\\/div>\\r\\n                        <h3>Business Planning<\\/h3>\\r\\n                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.<\\/p>\\r\\n                    <\\/div>\\r\\n                <\\/div>\\r\\n\\r\\n                <div class=\\"col-lg-4 col-md-6 col-sm-6\\">\\r\\n                    <div class=\\"services-box\\">\\r\\n                        <div class=\\"icon\\">\\r\\n                            <i class=\\"flaticon-anywhere\\"><\\/i>\\r\\n                        <\\/div>\\r\\n                        <h3>From Anywhere<\\/h3>\\r\\n                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.<\\/p>\\r\\n                    <\\/div>\\r\\n                <\\/div>\\r\\n\\r\\n                <div class=\\"col-lg-4 col-md-6 col-sm-6\\">\\r\\n                    <div class=\\"services-box\\">\\r\\n                        <div class=\\"icon\\">\\r\\n                            <i class=\\"flaticon-graduated\\"><\\/i>\\r\\n                        <\\/div>\\r\\n                        <h3>Solicitor<\\/h3>\\r\\n                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.<\\/p>\\r\\n                    <\\/div>\\r\\n                <\\/div>\\r\\n\\r\\n                <div class=\\"col-lg-4 col-md-6 col-sm-6\\">\\r\\n                    <div class=\\"services-box\\">\\r\\n                        <div class=\\"icon\\">\\r\\n                            <i class=\\"flaticon-self-improvement\\"><\\/i>\\r\\n                        <\\/div>\\r\\n                        <h3>Self Development<\\/h3>\\r\\n                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.<\\/p>\\r\\n                    <\\/div>\\r\\n                <\\/div>\\r\\n\\r\\n                <div class=\\"col-lg-4 col-md-6 col-sm-6\\">\\r\\n                    <div class=\\"services-box\\">\\r\\n                        <div class=\\"icon\\">\\r\\n                            <i class=\\"flaticon-padlock\\"><\\/i>\\r\\n                        <\\/div>\\r\\n                        <h3>Lifetime Access<\\/h3>\\r\\n                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.<\\/p>\\r\\n                    <\\/div>\\r\\n                <\\/div>\\r\\n\\r\\n                <div class=\\"col-lg-4 col-md-6 col-sm-6\\">\\r\\n                    <div class=\\"services-box\\">\\r\\n                        <div class=\\"icon\\">\\r\\n                            <i class=\\"flaticon-launch\\"><\\/i>\\r\\n                        <\\/div>\\r\\n                        <h3>Start Ups<\\/h3>\\r\\n                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.<\\/p>\\r\\n                    <\\/div>\\r\\n                <\\/div>\\r\\n\\r\\n              \\r\\n            <\\/div>\\r\\n        <\\/div>","<div class=\\"col-lg-6 col-md-12\\">\\r\\n                    <div class=\\"information-content\\">\\r\\n                        <span class=\\"sub-title\\">PERSONAL INFORMATION<\\/span>\\r\\n                        <h2>Lorem ipsum dolor<\\/h2>\\r\\n                        <ul class=\\"apply-details\\">\\r\\n                            <li>\\r\\n                                <div class=\\"icon\\">\\r\\n                                    <i class=\\"flaticon-checkmark\\"><\\/i>\\r\\n                                <\\/div>\\r\\n                                <h3>Select Suitable Course<\\/h3>\\r\\n                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.<\\/p>\\r\\n                            <\\/li>\\r\\n\\r\\n                            <li>\\r\\n                                <div class=\\"icon\\">\\r\\n                                    <i class=\\"flaticon-login\\"><\\/i>\\r\\n                                <\\/div>\\r\\n                                <h3>Student Information<\\/h3>\\r\\n                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.<\\/p>\\r\\n                            <\\/li>\\r\\n                            \\r\\n                            <li>\\r\\n                                <div class=\\"icon\\">\\r\\n                                    <i class=\\"flaticon-credit-card\\"><\\/i>\\r\\n                                <\\/div>\\r\\n                                <h3>Payment Information<\\/h3>\\r\\n                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.<\\/p>\\r\\n                            <\\/li>\\r\\n                            \\r\\n                            <li>\\r\\n                                <div class=\\"icon\\">\\r\\n                                    <i class=\\"flaticon-verify\\"><\\/i>\\r\\n                                <\\/div>\\r\\n                                <h3>Register Now<\\/h3>\\r\\n                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.<\\/p>\\r\\n                            <\\/li>\\r\\n                        <\\/ul>\\r\\n                    <\\/div>\\r\\n                <\\/div>","<div class=\\"container\\">\\r\\n            <div class=\\"subscribe-content\\">\\r\\n                <span class=\\"sub-title\\">Go At Your Own Pace<\\/span>\\r\\n                <h2>Create Profile and Start Exploring!<\\/h2>\\r\\n                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<\\/p>\\r\\n             <a href=\\"#!\\" id=\\"myBtn8\\" class=\\"default-btn\\"><i class=\\"bx bx-user-circle icon-arrow before\\"><\\/i><span class=\\"label\\">Register Now !<\\/span><i class=\\"bx bx-user-circle icon-arrow after\\"><\\/i><\\/a>\\r\\n            <\\/div>\\r\\n            <div id=\\"particles-js-circle-bubble-3\\"><canvas class=\\"particles-js-canvas-el\\" width=\\"1349\\" height=\\"440\\" style=\\"width: 100%; height: 100%;\\"><\\/canvas><\\/div>\\r\\n        <\\/div>"]',
                'meta_title' => null,
                'meta_key' => null,
                'meta_description' => null,
                'slug' => 'individual-user-landing',
                'show_on_menu' => 0,
                'status' => 1,
                'created_at' => '2020-10-26 06:20:31',
                'updated_at' => '2021-01-27 11:29:34'
            ],
            3 => [
                'id' => 4,
                'title_en' => 'Trainer landing',
                'title_ar' => 'هبوط المدرب',
                'content_en' => '',
                'content_ar' => '',
                'meta_title' => null,
                'meta_key' => null,
                'meta_description' => null,
                'slug' => 'trainer-landing',
                'show_on_menu' => 0,
                'status' => 1,
                'created_at' => '2020-10-26 06:20:52',
                'updated_at' => '2021-02-24 10:36:33'
            ],
            4 => [
                'id' => 5,
                'title_en' => 'About Us',
                'title_ar' => 'About Us',
                'content_en' => '',
                'content_ar' => '',
                'meta_title' => null,
                'meta_key' => 'meta key test',
                'meta_description' => 'meta desc test',
                'slug' => 'about-us',
                'show_on_menu' => 0,
                'status' => 1,
                'created_at' => '2020-10-26 11:38:51',
                'updated_at' => '2021-03-30 06:47:32'
            ],
            5 => [
                'id' => 6,
                'title_en' => 'Privacy Policy',
                'title_ar' => 'سياسة خاصة',
                'content_en' => '',
                'content_ar' => '',
                'meta_title' => null,
                'meta_key' => null,
                'meta_description' => null,
                'slug' => 'privacy-policy',
                'show_on_menu' => 0,
                'status' => 1,
                'created_at' => '2020-12-09 09:20:50',
                'updated_at' => '2021-04-01 11:08:01'
            ],
            6 => [
                'id' => 7,
                'title_en' => 'Contact Us',
                'title_ar' => 'اتصل بنا',
                'content_en' => '<section class="contact-info-area pt-100 pb-70">
<div class="container">
<div class="row">
<div class="col-lg-4 col-md-6 col-sm-6">
<div class="contact-info-box mb-30">
<div class="icon">
<i class="bx bx-envelope"></i>
</div>

<h3>Email Here</h3>
<p><a href="mailto:hello@traineaze.com">hello@traineaze.com</a></p>
<p><a href="mailto:traineaze@hello.com">traineaze@hello.com</a></p>
</div>
</div>

<div class="col-lg-4 col-md-6 col-sm-6">
<div class="contact-info-box mb-30">
<div class="icon">
<i class="bx bx-map"></i>
</div>

<h3>Location Here</h3>
<p><a href="#!" target="_blank">2750 ABC Road, Downtown, New York, USA</a></p>
</div>
</div>

<div class="col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3 offset-sm-3">
<div class="contact-info-box mb-30">
<div class="icon">
<i class="bx bx-phone-call"></i>
</div>

<h3>Call Here</h3>
<p><a href="tel:1234567890">+123 456 7890</a></p>
<p><a href="tel:2414524526">+241 452 4526</a></p>
</div>
</div>
</div>
</div>

<div id="particles-js-circle-bubble-2"></div>
</section>

<!-- Start Contact Area -->
<section class="contact-area pb-100">
<div class="container">
<div class="section-title">
<span class="sub-title">Contact Us</span>
<h2>Drop us Message for any Query</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
</div>
</div>
</section>
<!-- End Contact Info Area -->',
                'content_ar' => '<section class="contact-info-area pt-100 pb-70">
<div class="container">
<div class="row">
<div class="col-lg-4 col-md-6 col-sm-6">
<div class="contact-info-box mb-30">
<div class="icon">
<i class="bx bx-envelope"></i>
</div>

<h3>Email Here</h3>
<p><a href="mailto:hello@traineaze.com">hello@traineaze.com</a></p>
<p><a href="mailto:traineaze@hello.com">traineaze@hello.com</a></p>
</div>
</div>

<div class="col-lg-4 col-md-6 col-sm-6">
<div class="contact-info-box mb-30">
<div class="icon">
<i class="bx bx-map"></i>
</div>

<h3>Location Here</h3>
<p><a href="#!" target="_blank">2750 ABC Road, Downtown, New York, USA</a></p>
</div>
</div>

<div class="col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3 offset-sm-3">
<div class="contact-info-box mb-30">
<div class="icon">
<i class="bx bx-phone-call"></i>
</div>

<h3>Call Here</h3>
<p><a href="tel:1234567890">+123 456 7890</a></p>
<p><a href="tel:2414524526">+241 452 4526</a></p>
</div>
</div>
</div>
</div>

<div id="particles-js-circle-bubble-2"></div>
</section>

<!-- Start Contact Area -->
<section class="contact-area pb-100">
<div class="container">
<div class="section-title">
<span class="sub-title">Contact Us</span>
<h2>Drop us Message for any Query</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
</div>
</div>
</section>
<!-- End Contact Info Area -->',
                'meta_title' => null,
                'meta_key' => null,
                'meta_description' => null,
                'slug' => 'contact-us',
                'show_on_menu' => 0,
                'status' => 1,
                'created_at' => '2020-12-09 10:04:09',
                'updated_at' => '2020-12-09 11:11:06'
            ]
        ]);
    }
}
