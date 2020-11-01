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
                            <li>نمونه‌کارها</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BLOG BREADCUMB END -->

    <!-- PORTFOLIO AREA START -->
    <div class="portfolio_area portfolio">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section_title lage">
                        <h2>پروژه های منتخب</h2>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه</p>
                    </div>

                    <div class="portfolio_menu">
                        <ul class="filter_menu ">
                            <li class="current_menu_item" data-filter="*">همه دسته‌ها</li>

                            <li data-filter=".a">کسب و کار</li>

                            <li data-filter=".b">مشتری</li>

                            <li data-filter=".c">دارایی</li>

                            <li data-filter=".d">سرمایه گذاری</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row nospace">
                <div class="em_load">
                    <!-- single portfolio -->
                    <div class="col-md-4 col-xs-12 col-sm-6 grid-item c">
                        <div class="single_protfolio">
                            <!-- thumb -->
                            <div class="protfolio_thumb">
                                <img src="assets/images/portfolio/p1.jpg" alt="">
                                <!-- icon -->
                                <div class="protfoliot_icon">
                                    <a class="venobox vbox-item" data-gall="myGallery" href="assets/images/portfolio/p1.jpg">
                                        <i class="fa fa-expand"></i>
                                    </a>
                                </div>
                                <!-- content -->
                                <div class="protfolio_content">
                                    <h3><a href="#">پروژه دیجیتال</a></h3>
                                    <span class="category-item-p">کسب و کار</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single portfolio 2 -->
                    <div class="col-md-4 col-xs-12 col-sm-6 grid-item b">
                        <div class="single_protfolio">
                            <!-- thumb -->
                            <div class="protfolio_thumb">
                                <img src="assets/images/portfolio/p2.jpg" alt="">
                                <!-- icon -->
                                <div class="protfoliot_icon">
                                    <a class="venobox vbox-item" data-gall="myGallery" href="assets/images/portfolio/p2.jpg">
                                        <i class="fa fa-expand"></i>
                                    </a>
                                </div>
                                <!-- content -->
                                <div class="protfolio_content">
                                    <h3><a href="#">پروژه دیجیتال</a></h3>
                                    <span class="category-item-p">کسب و کار</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single portfolio 3 -->
                    <div class="col-md-4 col-xs-12 col-sm-6 grid-item a b d">
                        <div class="single_protfolio">
                            <!-- thumb -->
                            <div class="protfolio_thumb">
                                <img src="assets/images/portfolio/p3.jpg" alt="">
                                <!-- icon -->
                                <div class="protfoliot_icon">
                                    <a class="venobox vbox-item" data-gall="myGallery" href="assets/images/portfolio/p3.jpg">
                                        <i class="fa fa-expand"></i>
                                    </a>
                                </div>
                                <!-- content -->
                                <div class="protfolio_content">
                                    <h3><a href="#">پروژه دیجیتال</a></h3>
                                    <span class="category-item-p">کسب و کار</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single portfolio 4 -->
                    <div class="col-md-4 col-xs-12 col-sm-6 grid-item a d">
                        <div class="single_protfolio">
                            <!-- thumb -->
                            <div class="protfolio_thumb">
                                <img src="assets/images/portfolio/p4.jpg" alt="">
                                <!-- icon -->
                                <div class="protfoliot_icon">
                                    <a class="venobox vbox-item" data-gall="myGallery" href="assets/images/portfolio/p4.jpg">
                                        <i class="fa fa-expand"></i>
                                    </a>
                                </div>
                                <!-- content -->
                                <div class="protfolio_content">
                                    <h3><a href="#">پروژه دیجیتال</a></h3>
                                    <span class="category-item-p">کسب و کار</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single portfolio 5 -->
                    <div class="col-md-4 col-xs-12 col-sm-6 grid-item d b c">
                        <div class="single_protfolio">
                            <!-- thumb -->
                            <div class="protfolio_thumb">
                                <img src="assets/images/portfolio/p5.jpg" alt="">
                                <!-- icon -->
                                <div class="protfoliot_icon">
                                    <a class="venobox vbox-item" data-gall="myGallery" href="assets/images/portfolio/p5.jpg">
                                        <i class="fa fa-expand"></i>
                                    </a>
                                </div>
                                <!-- content -->
                                <div class="protfolio_content">
                                    <h3><a href="#">پروژه دیجیتال</a></h3>
                                    <span class="category-item-p">کسب و کار</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single portfolio -->
                    <div class="col-md-4 col-xs-12 col-sm-6 grid-item c a">
                        <div class="single_protfolio">
                            <!-- thumb -->
                            <div class="protfolio_thumb">
                                <img src="assets/images/portfolio/p6.jpg" alt="">
                                <!-- icon -->
                                <div class="protfoliot_icon">
                                    <a class="venobox vbox-item" data-gall="myGallery" href="assets/images/portfolio/p6.jpg">
                                        <i class="fa fa-expand"></i>
                                    </a>
                                </div>
                                <!-- content -->
                                <div class="protfolio_content">
                                    <h3><a href="#">پروژه دیجیتال</a></h3>
                                    <span class="category-item-p">کسب و کار</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- PORTFOLIO AREA END -->

@endsection
