@extends('site.master.app')
@section('styles')
    <!-- header-top css -->
    <link rel="stylesheet" href="assets/css/header-top.css" type="text/css" media="all">
@endsection

@section('scripts')
@endsection

@section('content')

    <!-- BLOG BREADCUMB START -->
    <div class="breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 txtc  text-center ccase">
                    <div class="breadcumb-inner">
                        <ul>
                            <li><a href="#">خانه</a></li>
                            <li><i class="fa fa-angle-left"></i></li>
                            <li>تماس</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BLOG BREADCUMB END -->

    <!-- START CONTACT AREA -->
    <div class="contact_area contacts_are">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section_title">
                        <h2>تماس با ما</h2>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه</p>
                    </div>
                </div>
            </div>
            <div class="row sdsdsd">
                <div class="col-md-7 col-sm-6 contact-block">
                    <div class="contact_about_us">
                        <h2 class="contact-title">با ما در ارتباط باشید</h2>
                        <form action="http://v3dboy.ir/previews/html/maxu/assets/php/mail.php">
                            <div class="contact_form_inner">
                                <div class="form_field">
                                    <div class="form_field_inner">
                                        <input type="text" name="name" placeholder="نام شما">
                                    </div>
                                    <div class="form_field_inner">
                                        <input type="text" name="phone" placeholder="شماره تلفن" dir="ltr">
                                    </div>
                                    <div class="form_field_inner">
                                        <input type="email" name="email" placeholder="ایمیل" dir="ltr">
                                    </div>
                                    <div class="form_field_inner">
                                        <input type="text" name="website" placeholder="وب‌سایت شما" dir="ltr">
                                    </div>
                                    <div class="form_field_comment">
                                        <textarea name="message" placeholder="پیام خود را بنویسید ..." cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                            </div>
                            <!-- batton -->
                            <div class="contact_bnt">
                                <button name="submit">ارسال پیام</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 contact-block">
                    <div class="contact_about_us">
                        <h2 class="contact-title">اطلاعات تماس</h2>
                        <!-- About contact -->
                        <div class="contact-address">
                            <div class="contact_s_inner">
                                <div class="contact-sociala-icon">
                                    <a href="#"><i class="fa fa-phone"></i></a>
                                </div>
                                <div class="contact-sociala-info">
                                    <p>
                                        <span class="ltr_text">+98 912 345 67 89</span>
                                        <br>
                                        <span class="ltr_text">+98 912 345 67 89</span>
                                    </p>
                                </div>
                            </div>
                            <div class="contact_s_inner">
                                <div class="contact-sociala-icon">
                                    <a href="#"><i class="fa fa-envelope"></i></a>
                                </div>
                                <div class="contact-sociala-info">
                                    <p>
                                        info@example.com
                                        <br>
                                        example@gmail.com
                                    </p>
                                </div>
                            </div>
                            <div class="contact_s_inner">
                                <div class="contact-sociala-icon">
                                    <a href="#"><i class="fa fa-map-marker"></i></a>
                                </div>
                                <div class="contact-sociala-info">
                                    <p>تبریز، خیابان امام، چهارراه آبرسان، فلکه دانشگاه، برج بلور، طبقه 567، واحد 34</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END CONTACT AREA -->
@endsection
