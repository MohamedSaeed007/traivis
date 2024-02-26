<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PageSectionTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('page_section')->truncate();

        \DB::table('page_section')->insert([
            0 => [
                'id' => 51,
                'page_id' => 1,
                'section_id' => 1,
                'content_en' => '<div class="col-lg-6 col-md-12">
<div class="information-content">
<span class="sub-title">USER MANAGEMENT</span>
<h2>Workforce Features</h2>
<ul class="apply-details">
<li>
<div class="icon">
<i class="flaticon-checkmark"></i>
</div>
<h3>Select Suitable Course</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
</li>

<li>
<div class="icon">
<i class="flaticon-login"></i>
</div>
<h3>Student Information</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
</li>

<li>
<div class="icon">
<i class="flaticon-credit-card"></i>
</div>
<h3>Payment Information</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
</li>

<li>
<div class="icon">
<i class="flaticon-verify"></i>
</div>
<h3>Register Now</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
</li>
</ul>
</div>
</div>',
                'content_ar' => '<div class="col-lg-6 col-md-12">
<div class="information-content">
<span class="sub-title">إدارةالمستخدم</span>
<h2>ميزات القوى العاملة</h2>
<p>
</p><div class="icon">
<i class="flaticon-checkmark"></i>
</div>
<h3>&nbsp; حدد دورة مناسبة</h3><p>&nbsp;او فلاير على سبيل المثال ... او نماذج مواقع انترنت ..وعند موافقه العميل المبدئيه على التصميم يتم ازالة هذا النص من التصميم ويتم وضع النصوص النهائية المطلوبة للتصميم ويقول البعض ان وضع النصوص&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
<ul class="apply-details">


<li>
<div class="icon">
<i class="flaticon-login"></i>
</div>
<h3>بيانات الطالب</h3>
<p> ويونيكود، حيث ستتم، على الصعيدين الدولي والمحلي على حد&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; سواء مناقشة سبل استخدام يونكود&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;في النظم القائمة&nbsp; وفيما يخص التطبيق</p>
</li>

<li>
<div class="icon">
<i class="flaticon-credit-card"></i>
</div>
<h3>معلومات الدفع</h3>
<p> ويونيكود، حيث ستتم، على الصعيدين الدولي والمحلي على حد سواء مناقشة سبل استخدام يونكود في النظم القائمة وفيما يخص التطبيقات الحاسوبية، الخطوط</p>
</li>

<li>
<div class="icon">
<i class="flaticon-verify"></i>
</div>
<h3>سجل الان</h3>
<p> ويونيكود، حيث ستتم، على الصعيدين الدولي والمحلي على حد سواء مناقشة سبل استخدام يونكود&nbsp;</p>
</li>
</ul>
</div>
</div>',
                'created_at' => '2021-01-22 06:28:42',
                'updated_at' => '2021-05-07 11:11:32'
            ],
            1 => [
                'id' => 52,
                'page_id' => 1,
                'section_id' => 2,
                'content_en' => '<div class="container">
<div class="subscribe-content">
<span class="sub-title">Go At Your Own Pace</span>
<h2>Create Profile and Start Exploring!</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
<a href="register/company" id="myBtn8" class="default-btn"><i class="bx bx-user-circle icon-arrow before"></i><span class="label">Register Now !</span><i class="bx bx-user-circle icon-arrow after"></i></a>
</div>

</div>',
                'content_ar' => '<div class="container">
<div class="subscribe-content">
<span class="sub-title">الذهاب في وتيرة الخاصة بك</span>
<h2>قم بإنشاء ملف تعريف وابدأ الاستكشاف!</h2>
<p> ويونيكود، حيث ستتم، على الصعيدين الدولي والمحلي على حد سواء مناقشة سبل استخدام يونكود في النظم القائمة وفيما يخص التطبيقات الحاسوبية، الخطوط، تصميم النصوص والحوسبة متعددة اللغات.</p>
<a href="#!" id="myBtn8" class="default-btn"><i class="bx bx-user-circle icon-arrow before"></i><span class="label">سجل الان !</span><i class="bx bx-user-circle icon-arrow after"></i></a>
</div>

</div>',
                'created_at' => '2021-01-22 06:28:42',
                'updated_at' => '2021-05-06 11:56:19'
            ],
            2 => [
                'id' => 53,
                'page_id' => 5,
                'section_id' => 1,
                'content_en' => '<div class="col-lg-6 col-md-12">
<div class="about-content">
<span class="sub-title">About Us</span>
<h2>Learn New Skills to go ahead for Your Career</h2>
<h6>We can support student forum 24/7 for national and international students.</h6>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor </p><p>incididunt ut labore et dolore magna aliqua. Ut nisi ut aliquip ex ea commodo consequat.</p>
<p>Education encompasses both the teaching and learning of knowledge, proper conduct, and technical competency.</p>

<div class="features-text">
<h5><i class="bx bx-planet"></i>A place where you can achieve</h5>
<p>Education encompasses both the teaching and learning of knowledge, proper conduct, and technical competency.</p>
</div>
</div>
</div>',
                'content_ar' => '<div class="col-lg-6 col-md-12">
<div class="about-content">
<span class="sub-title">About Us</span><h2>Learn New Skills to go ahead for Your Career</h2>
<h6>We can support student forum 24/7 for national and international students.</h6>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor </p><p>incididunt ut labore et dolore magna aliqua. Ut nisi ut aliquip ex ea commodo consequat.</p>
<p>Education encompasses both the teaching and learning of knowledge, proper conduct, and technical competency.</p>

<div class="features-text">
<h5><i class="bx bx-planet"></i>A place where you can achieve</h5>
<p>Education encompasses both the teaching and learning of knowledge, proper conduct, and technical competency.</p>
</div>
</div>
</div>',
                'created_at' => '2021-01-22 06:36:54',
                'updated_at' => '2021-03-30 11:09:17'
            ],
            3 => [
                'id' => 54,
                'page_id' => 5,
                'section_id' => 2,
                'content_en' => '<div class="about-inner-area">
<div class="row">
<div class="col-lg-4 col-md-6 col-sm-6">
<div class="about-text">
<h3>100,000 online courses</h3>
<p>Real innovations and a positive customer experience are the heart of successful communication.</p>

<ul class="features-list">
<li><i class="bx bx-check"></i> Activate Listening</li>
<li><i class="bx bx-check"></i> Brilliant minds</li>
<li><i class="bx bx-check"></i> Better. Best. Wow!</li>
<li><i class="bx bx-check"></i> Branding it better!</li>
</ul>
</div>
</div>

<div class="col-lg-4 col-md-6 col-sm-6">
<div class="about-text">
<h3>Expert instruction</h3>
<p>Real innovations and a positive customer experience are the heart of successful communication.</p>

<ul class="features-list">
<li><i class="bx bx-check"></i> Creating. Results.</li>
<li><i class="bx bx-check"></i> Expect more</li>
<li><i class="bx bx-check"></i> Good thinking</li>
<li><i class="bx bx-check"></i> In real we trust</li>
</ul>
</div>
</div>

<div class="col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3 offset-sm-3">
<div class="about-text">
<h3>Lifetime access</h3>
<p>Real innovations and a positive customer experience are the heart of successful communication.</p>

<ul class="features-list">
<li><i class="bx bx-check"></i> Stay real. Always.</li>
<li><i class="bx bx-check"></i> We have you covered</li>
<li><i class="bx bx-check"></i> We turn heads</li>
<li><i class="bx bx-check"></i> Your brand, promoted</li>
</ul>
</div>
</div>
</div>
</div>',
                'content_ar' => '<div class="about-inner-area">
<div class="row">
<div class="col-lg-4 col-md-6 col-sm-6">
<div class="about-text">
<h3>100,000 online courses</h3>
<p>Real innovations and a positive customer experience are the heart of successful communication.</p>

<ul class="features-list">
<li><i class="bx bx-check"></i> Activate Listening</li>
<li><i class="bx bx-check"></i> Brilliant minds</li>
<li><i class="bx bx-check"></i> Better. Best. Wow!</li>
<li><i class="bx bx-check"></i> Branding it better!</li>
</ul>
</div>
</div>

<div class="col-lg-4 col-md-6 col-sm-6">
<div class="about-text">
<h3>Expert instruction</h3>
<p>Real innovations and a positive customer experience are the heart of successful communication.</p>

<ul class="features-list">
<li><i class="bx bx-check"></i> Creating. Results.</li>
<li><i class="bx bx-check"></i> Expect more</li>
<li><i class="bx bx-check"></i> Good thinking</li>
<li><i class="bx bx-check"></i> In real we trust</li>
</ul>
</div>
</div>

<div class="col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3 offset-sm-3">
<div class="about-text">
<h3>Lifetime access</h3>
<p>Real innovations and a positive customer experience are the heart of successful communication.</p>

<ul class="features-list">
<li><i class="bx bx-check"></i> Stay real. Always.</li>
<li><i class="bx bx-check"></i> We have you covered</li>
<li><i class="bx bx-check"></i> We turn heads</li>
<li><i class="bx bx-check"></i> Your brand, promoted</li>
</ul>
</div>
</div>
</div>
</div>',
                'created_at' => '2021-01-22 06:36:54',
                'updated_at' => '2021-02-08 05:50:59'
            ],
            4 => [
                'id' => 75,
                'page_id' => 2,
                'section_id' => 1,
                'content_en' => '<div class="col-lg-6 col-md-12">
<div class="distance-learning-content"><span class="sub-title">TRAINING CENTER REGISTRATION</span>

<h2>Increase your expertise in planning, management, and profit shape up</h2>

<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>

<ul class="features-list">
<li><i class="flaticon-self-growth"></i> Consistency</li>
<li><i class="flaticon-clock"></i> Improvement</li>
<li><i class="flaticon-ebook"></i> Remote Learning</li>
<li><i class="flaticon-factory"></i> Branching</li>
</ul>
</div>
</div>',
                'content_ar' => '<div class="col-lg-6 col-md-12">
<div class="distance-learning-content"><span class="sub-title">التسجيل في مركز التدريب</span>

<h2>زد من خبرتك في التخطيط والإدارة وتحقيق الربح</h2>

<p> ويونيكود، حيث ستتم، على الصعيدين الدولي والمحلي على حد سواء مناقشة سبل استخدام يونكود في النظم القائمة وفيما يخص التطبيقات الحاسوبية، الخطوط، تصميم النصوص والحوسبة متعددة اللغات.</p>

<ul class="features-list">
<li>التناسق</li>
<li>تحسين</li>
<li>التعلم عن بعد</li>
<li>المتفرعة</li>
</ul>
</div>
</div>',
                'created_at' => '2021-01-22 07:24:51',
                'updated_at' => '2021-05-06 12:04:37'
            ],
            5 => [
                'id' => 76,
                'page_id' => 2,
                'section_id' => 2,
                'content_en' => '<div class="container">
<div class="section-title"><span class="sub-title">OUR FEATURES</span>

<h2>Training Center Dashboard Features</h2>

<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
</div>

<div class="row">
<div class="col-lg-4 col-md-6 col-sm-6">
<div class="services-box">
<div class="icon">
<i class="flaticon-analytics"></i>
</div>
<h3>Business Planning</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
</div>
</div>

<div class="col-lg-4 col-md-6 col-sm-6">
<div class="services-box">
<div class="icon">
<i class="flaticon-anywhere"></i>
</div>
<h3>From Anywhere</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
</div>
</div>

<div class="col-lg-4 col-md-6 col-sm-6">
<div class="services-box">
<div class="icon">
<i class="flaticon-graduated"></i>
</div>
<h3>Solicitor</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
</div>
</div>

<div class="col-lg-4 col-md-6 col-sm-6">
<div class="services-box">
<div class="icon">
<i class="flaticon-self-improvement"></i>
</div>
<h3>Self Development</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
</div>
</div>

<div class="col-lg-4 col-md-6 col-sm-6">
<div class="services-box">
<div class="icon">
<i class="flaticon-padlock"></i>
</div>
<h3>Lifetime Access</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
</div>
</div>

<div class="col-lg-4 col-md-6 col-sm-6">
<div class="services-box">
<div class="icon">
<i class="flaticon-launch"></i>
</div>
<h3>Start Ups</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
</div>
</div>


</div>
</div>',
                'content_ar' => '<div class="container">
<div class="section-title"><span class="sub-title">ميزاتنا</span>

<h2>ميزات لوحة تحكم مركز التدريب</h2>

<p> ويونيكود، حيث ستتم، على الصعيدين الدولي والمحلي على حد سواء مناقشة سبل استخدام يونكود في النظم القائمة وفيما يخص التطبيقات الحاسوبية، الخطوط، تصميم النصوص والحوسبة متعددة اللغات.</p>
</div>

<div class="row">
<div class="col-lg-4 col-md-6 col-sm-6">
<div class="services-box">
<div class="icon">&nbsp;</div>

<h3>تخطيط الأعمال</h3>

<p> ويونيكود، حيث ستتم، على الصعيدين الدولي والمحلي على حد سواء مناقشة سبل استخدام يونكود في النظم القائمة وفيما يخص التطبيقات الحاسوبية، الخطوط، تصميم النصوص والحوسبة متعددة اللغات.</p>
</div>
</div>

<div class="col-lg-4 col-md-6 col-sm-6">
<div class="services-box">
<div class="icon">&nbsp;</div>

<h3>من اي مكان</h3>

<p> ويونيكود، حيث ستتم، على الصعيدين الدولي والمحلي على حد سواء مناقشة سبل استخدام يونكود في النظم القائمة وفيما يخص التطبيقات الحاسوبية، الخطوط، تصميم النصوص والحوسبة متعددة اللغات.</p>
</div>
</div>

<div class="col-lg-4 col-md-6 col-sm-6">
<div class="services-box">
<div class="icon">&nbsp;</div>

<h3>كاتب عدل</h3>

<p> ويونيكود، حيث ستتم، على الصعيدين الدولي والمحلي على حد سواء مناقشة سبل استخدام يونكود في النظم القائمة وفيما يخص التطبيقات الحاسوبية، الخطوط، تصميم النصوص والحوسبة متعددة اللغات.</p>
</div>
</div>

<div class="col-lg-4 col-md-6 col-sm-6">
<div class="services-box">
<div class="icon">&nbsp;</div>

<h3>تطوير الذات</h3>

<p> ويونيكود، حيث ستتم، على الصعيدين الدولي والمحلي على حد سواء مناقشة سبل استخدام يونكود في النظم القائمة وفيما يخص التطبيقات الحاسوبية، الخطوط، تصميم النصوص والحوسبة متعددة اللغات.</p>
</div>
</div>

<div class="col-lg-4 col-md-6 col-sm-6">
<div class="services-box">
<div class="icon">&nbsp;</div>

<h3>الوصول مدى الحياة</h3>

<p> ويونيكود، حيث ستتم، على الصعيدين الدولي والمحلي على حد سواء مناقشة سبل استخدام يونكود في النظم القائمة وفيما يخص التطبيقات الحاسوبية، الخطوط، تصميم النصوص والحوسبة متعددة اللغات.</p>
</div>
</div>

<div class="col-lg-4 col-md-6 col-sm-6">
<div class="services-box">
<div class="icon">&nbsp;</div>

<h3>الوصول مدى الحياة</h3>

<p> ويونيكود، حيث ستتم، على الصعيدين الدولي والمحلي على حد سواء مناقشة سبل استخدام يونكود في النظم القائمة وفيما يخص التطبيقات الحاسوبية، الخطوط، تصميم النصوص والحوسبة متعددة اللغات.</p>
</div>
</div>
</div>
</div>',
                'created_at' => '2021-01-22 07:24:51',
                'updated_at' => '2021-05-06 12:04:37'
            ],
            6 => [
                'id' => 77,
                'page_id' => 2,
                'section_id' => 3,
                'content_en' => '<div class="col-lg-6 col-md-12">
<div class="information-content"><span class="sub-title">TRAINING CENTER INFORMATION</span>

<h2>Lorem ipsum dolor</h2>

<ul class="apply-details">
<li>
<div class="icon">
<i class="flaticon-checkmark"></i>
</div>
<h3>Select Suitable Course</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
</li>

<li>
<div class="icon">
<i class="flaticon-login"></i>
</div>
<h3>Student Information</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
</li>

<li>
<div class="icon">
<i class="flaticon-credit-card"></i>
</div>
<h3>Payment Information</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
</li>

<li>
<div class="icon">
<i class="flaticon-verify"></i>
</div>
<h3>Register Now</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
</li>
</ul>
</div>
</div>',
                'content_ar' => '<div class="col-lg-6 col-md-12">
<div class="information-content"><span class="sub-title">معلومات مركز التدريب</span>

<h2>الوصول مدى الحياة</h2>

<ul class="apply-details">
<li>
<div class="icon">&nbsp;</div>

<h3>الوصول مدى الحياة</h3>

<p> ويونيكود، حيث ستتم، على الصعيدين الدولي والمحلي على حد سواء مناقشة سبل استخدام يونكود في النظم القائمة وفيما يخص التطبيقات الحاسوبية، الخطوط، تصميم النصوص والحوسبة متعددة اللغات.</p>
</li>
<li>
<div class="icon">&nbsp;</div>

<h3>الوصول مدى الحياة</h3>

<p> ويونيكود، حيث ستتم، على الصعيدين الدولي والمحلي على حد سواء مناقشة سبل استخدام يونكود في النظم القائمة وفيما يخص التطبيقات الحاسوبية، الخطوط، تصميم النصوص والحوسبة متعددة اللغات.</p>
</li>
<li>
<div class="icon">&nbsp;</div>

<h3>الوصول مدى الحياة</h3>

<p> ويونيكود، حيث ستتم، على الصعيدين الدولي والمحلي على حد سواء مناقشة سبل استخدام يونكود في النظم القائمة وفيما يخص التطبيقات الحاسوبية، الخطوط، تصميم النصوص والحوسبة متعددة اللغات.</p>
</li>
<li>
<div class="icon">&nbsp;</div>

<h3>الوصول مدى الحياة</h3>

<p> ويونيكود، حيث ستتم، على الصعيدين الدولي والمحلي على حد سواء مناقشة سبل استخدام يونكود في النظم القائمة وفيما يخص التطبيقات الحاسوبية، الخطوط، تصميم النصوص والحوسبة متعددة اللغات.</p>
</li>
</ul>
</div>
</div>',
                'created_at' => '2021-01-22 07:24:51',
                'updated_at' => '2021-05-06 12:04:37'
            ],
            7 => [
                'id' => 78,
                'page_id' => 2,
                'section_id' => 4,
                'content_en' => '<div class="container">
<div class="subscribe-content">
<span class="sub-title">Go At Your Own Pace</span>
<h2>Create Profile and Start Exploring!</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
<a href="register/instructor" id="myBtn8" class="default-btn"><i class="bx bx-user-circle icon-arrow before"></i><span class="label">Register Now !</span><i class="bx bx-user-circle icon-arrow after"></i></a>
</div>

</div>',
                'content_ar' => '<div class="container">
<div class="subscribe-content">
<span class="sub-title">الوصول مدى الحياة</span>
<h2>الوصول مدى الحياة</h2>
<p>ويونيكود، حيث ستتم، على الصعيدين الدولي والمحلي على حد سواء مناقشة سبل استخدام يونكود في النظم القائمة وفيما يخص التطبيقات الحاسوبية، الخطوط، تصميم النصوص والحوسبة متعددة اللغات.</p>
<a href="#!" id="myBtn8" class="default-btn"><i class="bx bx-user-circle icon-arrow before"></i><span class="label">معلومات مركز التدريب !</span><i class="bx bx-user-circle icon-arrow after"></i></a>
</div>

</div>',
                'created_at' => '2021-01-22 07:24:51',
                'updated_at' => '2021-05-06 12:04:37'
            ],
            8 => [
                'id' => 127,
                'page_id' => 3,
                'section_id' => 1,
                'content_en' => '<div class="col-lg-6 col-md-12">
<div class="distance-learning-content">
<span class="sub-title">INDIVIDUAL REGISTRATION</span>
<h2>Increase your expertise in planning, management, and profit shape up</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
<ul class="features-list">
<li><span><i class="flaticon-self-growth"></i> Consistency</span></li>
<li><span><i class="flaticon-clock"></i> Improvement</span></li>
<li><span><i class="flaticon-ebook"></i> Remote Learning</span></li>
<li><span><i class="flaticon-factory"></i> Branching</span></li>
</ul>

</div>
</div>',
                'content_ar' => '<div class="col-lg-6 col-md-12">
<div class="distance-learning-content">
<span class="sub-title">INDIVIDUAL REGISTRATION</span>
<h2>Increase your expertise in planning, management, and profit shape up</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
<ul class="features-list">
<li><i class="flaticon-self-growth"></i> Consistency</li>
<li><i class="flaticon-clock"></i> Improvement</li>
<li><i class="flaticon-ebook"></i> Remote Learning</li>
<li><i class="flaticon-factory"></i> Branching</li>
</ul>

</div>
</div>',
                'created_at' => '2021-01-22 09:59:19',
                'updated_at' => '2021-02-08 05:50:59'
            ],
            9 => [
                'id' => 128,
                'page_id' => 3,
                'section_id' => 2,
                'content_en' => '<div class="container">
<div class="section-title">
<span class="sub-title">OUR FEATURES</span>
<h2>Individual Dashboard Features</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
</div>

<div class="row">
<div class="col-lg-4 col-md-6 col-sm-6">
<div class="services-box">
<div class="icon">
<i class="flaticon-analytics"></i>
</div>
<h3>Business Planning</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
</div>
</div>

<div class="col-lg-4 col-md-6 col-sm-6">
<div class="services-box">
<div class="icon">
<i class="flaticon-anywhere"></i>
</div>
<h3>From Anywhere</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
</div>
</div>

<div class="col-lg-4 col-md-6 col-sm-6">
<div class="services-box">
<div class="icon">
<i class="flaticon-graduated"></i>
</div>
<h3>Solicitor</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
</div>
</div>

<div class="col-lg-4 col-md-6 col-sm-6">
<div class="services-box">
<div class="icon">
<i class="flaticon-self-improvement"></i>
</div>
<h3>Self Development</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
</div>
</div>

<div class="col-lg-4 col-md-6 col-sm-6">
<div class="services-box">
<div class="icon">
<i class="flaticon-padlock"></i>
</div>
<h3>Lifetime Access</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
</div>
</div>

<div class="col-lg-4 col-md-6 col-sm-6">
<div class="services-box">
<div class="icon">
<i class="flaticon-launch"></i>
</div>
<h3>Start Ups</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
</div>
</div>


</div>
</div>',
                'content_ar' => '<div class="container">
<div class="section-title">
<span class="sub-title">OUR FEATURES</span>
<h2>Individual Dashboard Features</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
</div>

<div class="row">
<div class="col-lg-4 col-md-6 col-sm-6">
<div class="services-box">
<div class="icon">
<i class="flaticon-analytics"></i>
</div>
<h3>Business Planning</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
</div>
</div>

<div class="col-lg-4 col-md-6 col-sm-6">
<div class="services-box">
<div class="icon">
<i class="flaticon-anywhere"></i>
</div>
<h3>From Anywhere</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
</div>
</div>

<div class="col-lg-4 col-md-6 col-sm-6">
<div class="services-box">
<div class="icon">
<i class="flaticon-graduated"></i>
</div>
<h3>Solicitor</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
</div>
</div>

<div class="col-lg-4 col-md-6 col-sm-6">
<div class="services-box">
<div class="icon">
<i class="flaticon-self-improvement"></i>
</div>
<h3>Self Development</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
</div>
</div>

<div class="col-lg-4 col-md-6 col-sm-6">
<div class="services-box">
<div class="icon">
<i class="flaticon-padlock"></i>
</div>
<h3>Lifetime Access</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
</div>
</div>

<div class="col-lg-4 col-md-6 col-sm-6">
<div class="services-box">
<div class="icon">
<i class="flaticon-launch"></i>
</div>
<h3>Start Ups</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
</div>
</div>


</div>
</div>',
                'created_at' => '2021-01-22 09:59:19',
                'updated_at' => '2021-02-08 05:50:59'
            ],
            10 => [
                'id' => 129,
                'page_id' => 3,
                'section_id' => 3,
                'content_en' => '<div class="col-lg-6 col-md-12">
<div class="information-content">
<span class="sub-title">PERSONAL INFORMATION</span>
<h2>Lorem ipsum dolor</h2>
<ul class="apply-details">
<li>
<div class="icon">
<i class="flaticon-checkmark"></i>
</div>
<h3>Select Suitable Course</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
</li>

<li>
<div class="icon">
<i class="flaticon-login"></i>
</div>
<h3>Student Information</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
</li>

<li>
<div class="icon">
<i class="flaticon-credit-card"></i>
</div>
<h3>Payment Information</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
</li>

<li>
<div class="icon">
<i class="flaticon-verify"></i>
</div>
<h3>Register Now</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
</li>
</ul>
</div>
</div>',
                'content_ar' => '<div class="col-lg-6 col-md-12">
<div class="information-content">
<span class="sub-title">PERSONAL INFORMATION</span>
<h2>Lorem ipsum dolor</h2>
<ul class="apply-details">
<li>
<div class="icon">
<i class="flaticon-checkmark"></i>
</div>
<h3>Select Suitable Course</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
</li>

<li>
<div class="icon">
<i class="flaticon-login"></i>
</div>
<h3>Student Information</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
</li>

<li>
<div class="icon">
<i class="flaticon-credit-card"></i>
</div>
<h3>Payment Information</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
</li>

<li>
<div class="icon">
<i class="flaticon-verify"></i>
</div>
<h3>Register Now</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
</li>
</ul>
</div>
</div>',
                'created_at' => '2021-01-22 09:59:19',
                'updated_at' => '2021-02-08 05:50:59'
            ],
            11 => [
                'id' => 130,
                'page_id' => 3,
                'section_id' => 4,
                'content_en' => '<div class="container">
<div class="subscribe-content">
<span class="sub-title">Go At Your Own Pace</span>
<h2>Create Profile and Start Exploring!</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
<a href="register/student" id="myBtn8" class="default-btn"><i class="bx bx-user-circle icon-arrow before"></i><span class="label">Register Now !</span><i class="bx bx-user-circle icon-arrow after"></i></a>
</div>
<div id="particles-js-circle-bubble-3"><canvas class="particles-js-canvas-el" width="1349" height="440" style="width: 100%; height: 100%;"></canvas></div>
</div>',
                'content_ar' => '<div class="container">
<div class="subscribe-content">
<span class="sub-title">Go At Your Own Pace</span>
<h2>Create Profile and Start Exploring!</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
<a href="#!" id="myBtn8" class="default-btn"><i class="bx bx-user-circle icon-arrow before"></i><span class="label">Register Now !</span><i class="bx bx-user-circle icon-arrow after"></i></a>
</div>
<div id="particles-js-circle-bubble-3"><canvas class="particles-js-canvas-el" width="1349" height="440" style="width: 100%; height: 100%;"></canvas></div>
</div>',
                'created_at' => '2021-01-22 09:59:19',
                'updated_at' => '2021-03-30 05:07:41'
            ],
            12 => [
                'id' => 163,
                'page_id' => 4,
                'section_id' => 1,
                'content_en' => '<div class="col-lg-6 col-md-12">
<div class="distance-learning-content"><span class="sub-title">TRAINING&nbsp; REGISTRATION</span>

<h2>Increase your expertise in planning, management, and profit shape up</h2>

<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>

<ul class="features-list">
<li><i class="flaticon-self-growth"></i> Consistency</li>
<li><i class="flaticon-clock"></i> Improvement</li>
<li><i class="flaticon-ebook"></i> Remote Learning</li>
<li><i class="flaticon-factory"></i> Branching</li>
</ul>
</div>
</div>',
                'content_ar' => '<div class="col-lg-6 col-md-12">
<div class="distance-learning-content"><span class="sub-title">TRAINING&nbsp; REGISTRATION</span>

<h2>Increase your expertise in planning, management, and profit shape up</h2>

<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>

<ul class="features-list">
<li>Consistency</li>
<li>Improvement</li>
<li>Remote Learning</li>
<li>Branching</li>
</ul>
</div>
</div>',
                'created_at' => '2021-01-25 08:45:43',
                'updated_at' => '2021-02-24 10:36:33'
            ],
            13 => [
                'id' => 164,
                'page_id' => 4,
                'section_id' => 2,
                'content_en' => '<div class="container">
<div class="section-title">
<span class="sub-title">OUR FEATURES</span>
<h2>Trainer Dashboard Features</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
</div>

<div class="row">
<div class="col-lg-4 col-md-6 col-sm-6">
<div class="services-box">
<div class="icon">
<i class="flaticon-analytics"></i>
</div>
<h3>Business Planning</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
</div>
</div>

<div class="col-lg-4 col-md-6 col-sm-6">
<div class="services-box">
<div class="icon">
<i class="flaticon-anywhere"></i>
</div>
<h3>From Anywhere</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
</div>
</div>

<div class="col-lg-4 col-md-6 col-sm-6">
<div class="services-box">
<div class="icon">
<i class="flaticon-graduated"></i>
</div>
<h3>Solicitor</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
</div>
</div>

<div class="col-lg-4 col-md-6 col-sm-6">
<div class="services-box">
<div class="icon">
<i class="flaticon-self-improvement"></i>
</div>
<h3>Self Development</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
</div>
</div>

<div class="col-lg-4 col-md-6 col-sm-6">
<div class="services-box">
<div class="icon">
<i class="flaticon-padlock"></i>
</div>
<h3>Lifetime Access</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
</div>
</div>

<div class="col-lg-4 col-md-6 col-sm-6">
<div class="services-box">
<div class="icon">
<i class="flaticon-launch"></i>
</div>
<h3>Start Ups</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
</div>
</div>


</div>
</div>',
                'content_ar' => '<div class="container">
<div class="section-title">
<span class="sub-title">OUR FEATURES</span>
<h2>Trainer Dashboard Features</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
</div>

<div class="row">
<div class="col-lg-4 col-md-6 col-sm-6">
<div class="services-box">
<div class="icon">
<i class="flaticon-analytics"></i>
</div>
<h3>Business Planning</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
</div>
</div>

<div class="col-lg-4 col-md-6 col-sm-6">
<div class="services-box">
<div class="icon">
<i class="flaticon-anywhere"></i>
</div>
<h3>From Anywhere</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
</div>
</div>

<div class="col-lg-4 col-md-6 col-sm-6">
<div class="services-box">
<div class="icon">
<i class="flaticon-graduated"></i>
</div>
<h3>Solicitor</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
</div>
</div>

<div class="col-lg-4 col-md-6 col-sm-6">
<div class="services-box">
<div class="icon">
<i class="flaticon-self-improvement"></i>
</div>
<h3>Self Development</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
</div>
</div>

<div class="col-lg-4 col-md-6 col-sm-6">
<div class="services-box">
<div class="icon">
<i class="flaticon-padlock"></i>
</div>
<h3>Lifetime Access</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
</div>
</div>

<div class="col-lg-4 col-md-6 col-sm-6">
<div class="services-box">
<div class="icon">
<i class="flaticon-launch"></i>
</div>
<h3>Start Ups</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
</div>
</div>


</div>
</div>',
                'created_at' => '2021-01-25 08:45:43',
                'updated_at' => '2021-02-08 05:50:59'
            ],
            14 => [
                'id' => 165,
                'page_id' => 4,
                'section_id' => 3,
                'content_en' => '<div class="col-lg-6 col-md-12">
<div class="information-content">
<span class="sub-title">TRAINER INFORMATION</span>
<h2>Lorem ipsum dolor</h2>
<ul class="apply-details">
<li>
<div class="icon">
<i class="flaticon-checkmark"></i>
</div>
<h3>Select Suitable Course</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
</li>

<li>
<div class="icon">
<i class="flaticon-login"></i>
</div>
<h3>Student Information</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
</li>

<li>
<div class="icon">
<i class="flaticon-credit-card"></i>
</div>
<h3>Payment Information</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
</li>

<li>
<div class="icon">
<i class="flaticon-verify"></i>
</div>
<h3>Register Now</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
</li>
</ul>
</div>
</div>',
                'content_ar' => '<div class="col-lg-6 col-md-12">
<div class="information-content">
<span class="sub-title">TRAINER INFORMATION</span>
<h2>Lorem ipsum dolor</h2>
<ul class="apply-details">
<li>
<div class="icon">
<i class="flaticon-checkmark"></i>
</div>
<h3>Select Suitable Course</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
</li>

<li>
<div class="icon">
<i class="flaticon-login"></i>
</div>
<h3>Student Information</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
</li>

<li>
<div class="icon">
<i class="flaticon-credit-card"></i>
</div>
<h3>Payment Information</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
</li>

<li>
<div class="icon">
<i class="flaticon-verify"></i>
</div>
<h3>Register Now</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
</li>
</ul>
</div>
</div>',
                'created_at' => '2021-01-25 08:45:43',
                'updated_at' => '2021-02-08 05:50:59'
            ],
            15 => [
                'id' => 166,
                'page_id' => 4,
                'section_id' => 4,
                'content_en' => '<div class="container">
<div class="subscribe-content">
<span class="sub-title">Go At Your Own Pace</span>
<h2>Create Profile and Start Exploring!</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
<a href="register/trainer" id="myBtn8" class="default-btn"><i class="bx bx-user-circle icon-arrow before"></i><span class="label">Register Now !</span><i class="bx bx-user-circle icon-arrow after"></i></a>
</div>

</div>',
                'content_ar' => '<div class="container">
<div class="subscribe-content">
<span class="sub-title">Go At Your Own Pace</span>
<h2>Create Profile and Start Exploring!</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
<a href="#!" id="myBtn8" class="default-btn"><i class="bx bx-user-circle icon-arrow before"></i><span class="label">Register Now !</span><i class="bx bx-user-circle icon-arrow after"></i></a>
</div>

</div>',
                'created_at' => '2021-01-25 08:45:43',
                'updated_at' => '2021-03-30 05:25:15'
            ],
            16 => [
                'id' => 167,
                'page_id' => 6,
                'section_id' => 1,
                'content_en' => '<div class="container" style="margin-top:50px;margin-bottom:50px;">
<div class="tab-content">
<div class="tabs-item" style="display: block;">
<div class="faq-accordion">
<ul class="accordion">
<li class="accordion-item">
<a class="accordion-title" href="javascript:void(0)">
<i class="bx bx-chevron-down"></i>
What are the different types of graduate degrees?
</a>
<div class="accordion-content" style="display: block;">
<p>Masters: two-year degree providing additional specialization. Doctorate: five to eight-year program certifying the student as a trained research scholar and/or professor.</p>
</div>
</li>
<li class="accordion-item">
<a class="accordion-title active" href="javascript:void(0)">
<i class="bx bx-chevron-down"></i>
What’s the difference between a college and a university?
</a>
<div class="accordion-content show" style="display: none;">
<p>Colleges offer only undergraduate degrees while universities offer graduate degrees as well, but the terms are often used interchangeably.</p>
</div>
</li>
<li class="accordion-item">
<a class="accordion-title" href="javascript:void(0)">
<i class="bx bx-chevron-down"></i>
What are the different types of undergraduate degrees?
</a>
<div class="accordion-content" style="display: none;">
<p>Associate: a two-year program that either leads to a specific vocation or transitions to a bachelor program. Bachelor: a four or five-year program where students earn credits in a wide variety of courses.</p>
</div>
</li>

<li class="accordion-item">
<a class="accordion-title" href="javascript:void(0)">
<i class="bx bx-chevron-down"></i>
Can you work while studying in the United States?
</a>
<div class="accordion-content">
<p>With permission of the International Student Office, international students may work on campus up to 20 hours/week their first year and can apply to work off-campus in subsequent years.</p>
</div>
</li>
<li class="accordion-item">
<a class="accordion-title" href="javascript:void(0)">
<i class="bx bx-chevron-down"></i>
What is distance education?
</a>
<div class="accordion-content">
<p>Distance education occurs when a student and an instructor are in different places. Learning occurs by mail, telephone, internet, or by other means.</p>
</div>
</li>
</ul>
</div>
</div>
<div class="tabs-item" style="display: none;">
<div class="faq-accordion">
<ul class="accordion">
<li class="accordion-item">
<a class="accordion-title" href="javascript:void(0)">
<i class="bx bx-chevron-down"></i>
What’s the difference between a college and a university?
</a>
<div class="accordion-content show" style="display: none;">
<p>Colleges offer only undergraduate degrees while universities offer graduate degrees as well, but the terms are often used interchangeably.</p>
</div>
</li>
<li class="accordion-item">
<a class="accordion-title" href="javascript:void(0)">
<i class="bx bx-chevron-down"></i>
What are the different types of undergraduate degrees?
</a>
<div class="accordion-content">
<p>Associate: a two-year program that either leads to a specific vocation or transitions to a bachelor program. Bachelor: a four or five-year program where students earn credits in a wide variety of courses.</p>
</div>
</li>
<li class="accordion-item">
<a class="accordion-title" href="javascript:void(0)">
<i class="bx bx-chevron-down"></i>
What are the different types of graduate degrees?
</a>
<div class="accordion-content">
<p>Masters: two-year degree providing additional specialization. Doctorate: five to eight-year program certifying the student as a trained research scholar and/or professor.</p>
</div>
</li>
<li class="accordion-item">
<a class="accordion-title" href="javascript:void(0)">
<i class="bx bx-chevron-down"></i>
Can you work while studying in the United States?
</a>
<div class="accordion-content">
<p>With permission of the International Student Office, international students may work on campus up to 20 hours/week their first year and can apply to work off-campus in subsequent years.</p>
</div>
</li>
<li class="accordion-item">
<a class="accordion-title" href="javascript:void(0)">
<i class="bx bx-chevron-down"></i>
What is distance education?
</a>
<div class="accordion-content">
<p>Distance education occurs when a student and an instructor are in different places. Learning occurs by mail, telephone, internet, or by other means.</p>
</div>
</li>
</ul>
</div>
</div>
<div class="tabs-item" style="display: none;">
<div class="faq-accordion">
<ul class="accordion">
<li class="accordion-item">
<a class="accordion-title" href="javascript:void(0)">
<i class="bx bx-chevron-down"></i>
What’s the difference between a college and a university?
</a>
<div class="accordion-content show" style="display: none;">
<p>Colleges offer only undergraduate degrees while universities offer graduate degrees as well, but the terms are often used interchangeably.</p>
</div>
</li>
<li class="accordion-item">
<a class="accordion-title" href="javascript:void(0)">
<i class="bx bx-chevron-down"></i>
What are the different types of undergraduate degrees?
</a>
<div class="accordion-content">
<p>Associate: a two-year program that either leads to a specific vocation or transitions to a bachelor program. Bachelor: a four or five-year program where students earn credits in a wide variety of courses.</p>
</div>
</li>
<li class="accordion-item">
<a class="accordion-title" href="javascript:void(0)">
<i class="bx bx-chevron-down"></i>
What are the different types of graduate degrees?
</a>
<div class="accordion-content">
<p>Masters: two-year degree providing additional specialization. Doctorate: five to eight-year program certifying the student as a trained research scholar and/or professor.</p>
</div>
</li>
<li class="accordion-item">
<a class="accordion-title" href="javascript:void(0)">
<i class="bx bx-chevron-down"></i>
Can you work while studying in the United States?
</a>
<div class="accordion-content">
<p>With permission of the International Student Office, international students may work on campus up to 20 hours/week their first year and can apply to work off-campus in subsequent years.</p>
</div>
</li>
<li class="accordion-item">
<a class="accordion-title" href="javascript:void(0)">
<i class="bx bx-chevron-down"></i>
What is distance education?
</a>
<div class="accordion-content">
<p>Distance education occurs when a student and an instructor are in different places. Learning occurs by mail, telephone, internet, or by other means.</p>
</div>
</li>
</ul>
</div>
</div>
<div class="tabs-item" style="display: none;">
<div class="faq-accordion">
<ul class="accordion">
<li class="accordion-item">
<a class="accordion-title" href="javascript:void(0)">
<i class="bx bx-chevron-down"></i>
What’s the difference between a college and a university?
</a>
<div class="accordion-content show" style="display: none;">
<p>Colleges offer only undergraduate degrees while universities offer graduate degrees as well, but the terms are often used interchangeably.</p>
</div>
</li>
<li class="accordion-item">
<a class="accordion-title" href="javascript:void(0)">
<i class="bx bx-chevron-down"></i>
What are the different types of undergraduate degrees?
</a>
<div class="accordion-content">
<p>Associate: a two-year program that either leads to a specific vocation or transitions to a bachelor program. Bachelor: a four or five-year program where students earn credits in a wide variety of courses.</p>
</div>
</li>
<li class="accordion-item">
<a class="accordion-title" href="javascript:void(0)">
<i class="bx bx-chevron-down"></i>
What are the different types of graduate degrees?
</a>
<div class="accordion-content">
<p>Masters: two-year degree providing additional specialization. Doctorate: five to eight-year program certifying the student as a trained research scholar and/or professor.</p>
</div>
</li>
<li class="accordion-item">
<a class="accordion-title" href="javascript:void(0)">
<i class="bx bx-chevron-down"></i>
Can you work while studying in the United States?
</a>
<div class="accordion-content">
<p>With permission of the International Student Office, international students may work on campus up to 20 hours/week their first year and can apply to work off-campus in subsequent years.</p>
</div>
</li>
<li class="accordion-item">
<a class="accordion-title" href="javascript:void(0)">
<i class="bx bx-chevron-down"></i>
What is distance education?
</a>
<div class="accordion-content">
<p>Distance education occurs when a student and an instructor are in different places. Learning occurs by mail, telephone, internet, or by other means.</p>
</div>
</li>
</ul>
</div>
</div>
<div class="tabs-item" style="display: none;">
<div class="faq-accordion">
<ul class="accordion">
<li class="accordion-item">
<a class="accordion-title" href="javascript:void(0)">
<i class="bx bx-chevron-down"></i>
What’s the difference between a college and a university?
</a>
<div class="accordion-content show" style="display: none;">
<p>Colleges offer only undergraduate degrees while universities offer graduate degrees as well, but the terms are often used interchangeably.</p>
</div>
</li>
<li class="accordion-item">
<a class="accordion-title" href="javascript:void(0)">
<i class="bx bx-chevron-down"></i>
What are the different types of undergraduate degrees?
</a>
<div class="accordion-content">
<p>Associate: a two-year program that either leads to a specific vocation or transitions to a bachelor program. Bachelor: a four or five-year program where students earn credits in a wide variety of courses.</p>
</div>
</li>
<li class="accordion-item">
<a class="accordion-title" href="javascript:void(0)">
<i class="bx bx-chevron-down"></i>
What are the different types of graduate degrees?
</a>
<div class="accordion-content">
<p>Masters: two-year degree providing additional specialization. Doctorate: five to eight-year program certifying the student as a trained research scholar and/or professor.</p>
</div>
</li>
<li class="accordion-item">
<a class="accordion-title" href="javascript:void(0)">
<i class="bx bx-chevron-down"></i>
Can you work while studying in the United States?
</a>
<div class="accordion-content">
<p>With permission of the International Student Office, international students may work on campus up to 20 hours/week their first year and can apply to work off-campus in subsequent years.</p>
</div>
</li>
<li class="accordion-item">
<a class="accordion-title" href="javascript:void(0)">
<i class="bx bx-chevron-down"></i>
What is distance education?
</a>
<div class="accordion-content">
<p>Distance education occurs when a student and an instructor are in different places. Learning occurs by mail, telephone, internet, or by other means.</p>
</div>
</li>
</ul>
</div>
</div>
</div>
</div>',
                'content_ar' => '<div class="container" style="margin-top:50px;margin-bottom:50px;">
<div class="tab-content">
<div class="tabs-item" style="display: block;">
<div class="faq-accordion">
<ul class="accordion">
<li class="accordion-item">
<a class="accordion-title" href="javascript:void(0)">
<i class="bx bx-chevron-down"></i>
What’s the difference between a college and a university?
</a>
<div class="accordion-content show" style="display: none;">
<p>Colleges offer only undergraduate degrees while universities offer graduate degrees as well, but the terms are often used interchangeably.</p>
</div>
</li>
<li class="accordion-item">
<a class="accordion-title" href="javascript:void(0)">
<i class="bx bx-chevron-down"></i>
What are the different types of undergraduate degrees?
</a>
<div class="accordion-content" style="display: none;">
<p>Associate: a two-year program that either leads to a specific vocation or transitions to a bachelor program. Bachelor: a four or five-year program where students earn credits in a wide variety of courses.</p>
</div>
</li>
<li class="accordion-item">
<a class="accordion-title active" href="javascript:void(0)">
<i class="bx bx-chevron-down"></i>
What are the different types of graduate degrees?
</a>
<div class="accordion-content" style="display: block;">
<p>Masters: two-year degree providing additional specialization. Doctorate: five to eight-year program certifying the student as a trained research scholar and/or professor.</p>
</div>
</li>
<li class="accordion-item">
<a class="accordion-title" href="javascript:void(0)">
<i class="bx bx-chevron-down"></i>
Can you work while studying in the United States?
</a>
<div class="accordion-content">
<p>With permission of the International Student Office, international students may work on campus up to 20 hours/week their first year and can apply to work off-campus in subsequent years.</p>
</div>
</li>
<li class="accordion-item">
<a class="accordion-title" href="javascript:void(0)">
<i class="bx bx-chevron-down"></i>
What is distance education?
</a>
<div class="accordion-content">
<p>Distance education occurs when a student and an instructor are in different places. Learning occurs by mail, telephone, internet, or by other means.</p>
</div>
</li>
</ul>
</div>
</div>
<div class="tabs-item" style="display: none;">
<div class="faq-accordion">
<ul class="accordion">
<li class="accordion-item">
<a class="accordion-title" href="javascript:void(0)">
<i class="bx bx-chevron-down"></i>
What’s the difference between a college and a university?
</a>
<div class="accordion-content show" style="display: none;">
<p>Colleges offer only undergraduate degrees while universities offer graduate degrees as well, but the terms are often used interchangeably.</p>
</div>
</li>
<li class="accordion-item">
<a class="accordion-title" href="javascript:void(0)">
<i class="bx bx-chevron-down"></i>
What are the different types of undergraduate degrees?
</a>
<div class="accordion-content">
<p>Associate: a two-year program that either leads to a specific vocation or transitions to a bachelor program. Bachelor: a four or five-year program where students earn credits in a wide variety of courses.</p>
</div>
</li>
<li class="accordion-item">
<a class="accordion-title" href="javascript:void(0)">
<i class="bx bx-chevron-down"></i>
What are the different types of graduate degrees?
</a>
<div class="accordion-content">
<p>Masters: two-year degree providing additional specialization. Doctorate: five to eight-year program certifying the student as a trained research scholar and/or professor.</p>
</div>
</li>
<li class="accordion-item">
<a class="accordion-title" href="javascript:void(0)">
<i class="bx bx-chevron-down"></i>
Can you work while studying in the United States?
</a>
<div class="accordion-content">
<p>With permission of the International Student Office, international students may work on campus up to 20 hours/week their first year and can apply to work off-campus in subsequent years.</p>
</div>
</li>
<li class="accordion-item">
<a class="accordion-title" href="javascript:void(0)">
<i class="bx bx-chevron-down"></i>
What is distance education?
</a>
<div class="accordion-content">
<p>Distance education occurs when a student and an instructor are in different places. Learning occurs by mail, telephone, internet, or by other means.</p>
</div>
</li>
</ul>
</div>
</div>
<div class="tabs-item" style="display: none;">
<div class="faq-accordion">
<ul class="accordion">
<li class="accordion-item">
<a class="accordion-title" href="javascript:void(0)">
<i class="bx bx-chevron-down"></i>
What’s the difference between a college and a university?
</a>
<div class="accordion-content show" style="display: none;">
<p>Colleges offer only undergraduate degrees while universities offer graduate degrees as well, but the terms are often used interchangeably.</p>
</div>
</li>
<li class="accordion-item">
<a class="accordion-title" href="javascript:void(0)">
<i class="bx bx-chevron-down"></i>
What are the different types of undergraduate degrees?
</a>
<div class="accordion-content">
<p>Associate: a two-year program that either leads to a specific vocation or transitions to a bachelor program. Bachelor: a four or five-year program where students earn credits in a wide variety of courses.</p>
</div>
</li>
<li class="accordion-item">
<a class="accordion-title" href="javascript:void(0)">
<i class="bx bx-chevron-down"></i>
What are the different types of graduate degrees?
</a>
<div class="accordion-content">
<p>Masters: two-year degree providing additional specialization. Doctorate: five to eight-year program certifying the student as a trained research scholar and/or professor.</p>
</div>
</li>
<li class="accordion-item">
<a class="accordion-title" href="javascript:void(0)">
<i class="bx bx-chevron-down"></i>
Can you work while studying in the United States?
</a>
<div class="accordion-content">
<p>With permission of the International Student Office, international students may work on campus up to 20 hours/week their first year and can apply to work off-campus in subsequent years.</p>
</div>
</li>
<li class="accordion-item">
<a class="accordion-title" href="javascript:void(0)">
<i class="bx bx-chevron-down"></i>
What is distance education?
</a>
<div class="accordion-content">
<p>Distance education occurs when a student and an instructor are in different places. Learning occurs by mail, telephone, internet, or by other means.</p>
</div>
</li>
</ul>
</div>
</div>
<div class="tabs-item" style="display: none;">
<div class="faq-accordion">
<ul class="accordion">
<li class="accordion-item">
<a class="accordion-title" href="javascript:void(0)">
<i class="bx bx-chevron-down"></i>
What’s the difference between a college and a university?
</a>
<div class="accordion-content show" style="display: none;">
<p>Colleges offer only undergraduate degrees while universities offer graduate degrees as well, but the terms are often used interchangeably.</p>
</div>
</li>
<li class="accordion-item">
<a class="accordion-title" href="javascript:void(0)">
<i class="bx bx-chevron-down"></i>
What are the different types of undergraduate degrees?
</a>
<div class="accordion-content">
<p>Associate: a two-year program that either leads to a specific vocation or transitions to a bachelor program. Bachelor: a four or five-year program where students earn credits in a wide variety of courses.</p>
</div>
</li>
<li class="accordion-item">
<a class="accordion-title" href="javascript:void(0)">
<i class="bx bx-chevron-down"></i>
What are the different types of graduate degrees?
</a>
<div class="accordion-content">
<p>Masters: two-year degree providing additional specialization. Doctorate: five to eight-year program certifying the student as a trained research scholar and/or professor.</p>
</div>
</li>
<li class="accordion-item">
<a class="accordion-title" href="javascript:void(0)">
<i class="bx bx-chevron-down"></i>
Can you work while studying in the United States?
</a>
<div class="accordion-content">
<p>With permission of the International Student Office, international students may work on campus up to 20 hours/week their first year and can apply to work off-campus in subsequent years.</p>
</div>
</li>
<li class="accordion-item">
<a class="accordion-title" href="javascript:void(0)">
<i class="bx bx-chevron-down"></i>
What is distance education?
</a>
<div class="accordion-content">
<p>Distance education occurs when a student and an instructor are in different places. Learning occurs by mail, telephone, internet, or by other means.</p>
</div>
</li>
</ul>
</div>
</div>
<div class="tabs-item" style="display: none;">
<div class="faq-accordion">
<ul class="accordion">
<li class="accordion-item">
<a class="accordion-title" href="javascript:void(0)">
<i class="bx bx-chevron-down"></i>
What’s the difference between a college and a university?
</a>
<div class="accordion-content show" style="display: none;">
<p>Colleges offer only undergraduate degrees while universities offer graduate degrees as well, but the terms are often used interchangeably.</p>
</div>
</li>
<li class="accordion-item">
<a class="accordion-title" href="javascript:void(0)">
<i class="bx bx-chevron-down"></i>
What are the different types of undergraduate degrees?
</a>
<div class="accordion-content">
<p>Associate: a two-year program that either leads to a specific vocation or transitions to a bachelor program. Bachelor: a four or five-year program where students earn credits in a wide variety of courses.</p>
</div>
</li>
<li class="accordion-item">
<a class="accordion-title" href="javascript:void(0)">
<i class="bx bx-chevron-down"></i>
What are the different types of graduate degrees?
</a>
<div class="accordion-content">
<p>Masters: two-year degree providing additional specialization. Doctorate: five to eight-year program certifying the student as a trained research scholar and/or professor.</p>
</div>
</li>
<li class="accordion-item">
<a class="accordion-title" href="javascript:void(0)">
<i class="bx bx-chevron-down"></i>
Can you work while studying in the United States?
</a>
<div class="accordion-content">
<p>With permission of the International Student Office, international students may work on campus up to 20 hours/week their first year and can apply to work off-campus in subsequent years.</p>
</div>
</li>
<li class="accordion-item">
<a class="accordion-title" href="javascript:void(0)">
<i class="bx bx-chevron-down"></i>
What is distance education?
</a>
<div class="accordion-content">
<p>Distance education occurs when a student and an instructor are in different places. Learning occurs by mail, telephone, internet, or by other means.</p>
</div>
</li>
</ul>
</div>
</div>
</div>
</div>',
                'created_at' => '2021-01-25 09:07:40',
                'updated_at' => '2021-04-01 11:17:12'
            ]
        ]);
    }
}
